<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuartel extends CI_Controller {
	public function __construct(){
      parent::__construct();
      $this->load->model("Alquiler_model");
	}
	public function index()
	{
		$this->_load_layout('admin/alquiler/cuartel');
	}
 public function get_alquiler()
  {
    if ($this->input->is_ajax_request()) {

      $datos = $this->Cuartel_model->ListarCuartel();
      echo json_encode($datos);
      
    }
    else
    {
      show_404();
    }

  }
  public function ListarCuartel()
  {
    if ($this->input->is_ajax_request()) {
      $id_categoria=$this->input->post('cuartel');
      $datos = $this->Cuartel_model->ListarCuartel($id_cuartel);
      echo json_encode($datos);
    // $data=  date("Y-m-d");
     //$fecha10diasdespues = date('Y-m-d',strtotime('+11 days', strtotime($data)));    
    }
    else
    {
      show_404();
    }

  }
	function _load_layout($template)
    {
      $this->load->view('layout/admin/alquiler/header');
      $this->load->view($template);
      $this->load->view('layout/admin/alquiler/footer');
    }
}
