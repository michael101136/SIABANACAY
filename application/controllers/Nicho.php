<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nicho extends CI_Controller {/* Mantenimiento de division funcional y grupo funcional*/

	public function __construct(){
      parent::__construct();
      $this->load->model("Nicho_model");

	}
    public function get_nicho()
  {
    if ($this->input->is_ajax_request()) {

      $datos = $this->Nicho_model->get_nicho();
      echo json_encode($datos);
      
    }
    else
    {
      show_404();
    }

  }
  
	public function index()
	{
		$this->_load_layout('admin/alquiler/nicho');
    //$this->_load_layout('Front/Administracion/frmFuncion');
	}

	function _load_layout($template)
    {
      $this->load->view('layout/admin/alquiler/header');
      $this->load->view($template);
      $this->load->view('layout/admin/alquiler/footer');
    }

}
