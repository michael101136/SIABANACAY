<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuartel extends CI_Controller {/* Mantenimiento de division funcional y grupo funcional*/

	public function __construct(){
      parent::__construct();
      $this->load->model("Cuartel_model");

	}
    public function get_cuartel()
  {
    if ($this->input->is_ajax_request()) {

      $datos = $this->Cuartel_model->get_cuartel();
      echo json_encode($datos);
      
    }
    else
    {
      show_404();
    }

  }
  public function Get_pasaje(){
    if ($this->input->is_ajax_request()) {
      $datos = $this->Cuartel_model->Get_pasaje();
      echo json_encode($datos);
      
    }
    else
    {
      show_404();
    }
  }
  public function AddCuartel()
    {
        if ($this->input->is_ajax_request()) 
            {
             $txt_cuartel =$this->input->post("txt_cuartel");
             $cbxCategoria =$this->input->post("cbxCategoria");
             $cbxPasaje =$this->input->post("cbxPasaje");
             if($this->Cuartel_model->AddCuartel($txt_cuartel,$cbxCategoria,$cbxPasaje)== false)
                   echo "SE INSERTO UN CUARTEL";
                  else
                  echo "SE INSERTO UN CUARTEL";  
            } 
        else
            {
              show_404();
            }  
    }
    /* Pagina principal de la vista entidad Y servicio publico asociado */
	public function index()
	{
		$this->_load_layout('admin/alquiler/cuartel');
    //$this->_load_layout('Front/Administracion/frmFuncion');
	}

	function _load_layout($template)
    {
      $this->load->view('layout/admin/alquiler/header');
      $this->load->view($template);
      $this->load->view('layout/admin/alquiler/footer');
    }

}
