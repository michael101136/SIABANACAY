<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {/* Mantenimiento de division funcional y grupo funcional*/

	public function __construct(){
      parent::__construct();
      $this->load->model("Login_model");

	}
    public function get_usuarios()
  {
    if ($this->input->is_ajax_request()) {

      $datos = $this->Login_model ->get_usuarios();
      echo json_encode($datos);
      
    }
    else
    {
      show_404();
    }

  }
    /* Pagina principal de la vista entidad Y servicio publico asociado */
	public function index()
	{
		$this->_load_layout('admin/Usuarios/usuarios');
    //$this->_load_layout('Front/Administracion/frmFuncion');
	}

	function _load_layout($template)
    {
      $this->load->view('layout/admin/alquiler/header');
      $this->load->view($template);
      $this->load->view('layout/admin/alquiler/footer');
    }

}
