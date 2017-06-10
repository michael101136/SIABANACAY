<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alquiler extends CI_Controller {/* Mantenimiento de division funcional y grupo funcional*/

	public function __construct(){
      parent::__construct();
        $this->load->model("Alquiler_model");
        $this->load->helper("date");

	}
    
    /* Pagina principal de la vista entidad Y servicio publico asociado */
	public function index()
	{
		$this->_load_layout('admin/alquiler/alquiler');
    //$this->_load_layout('Front/Administracion/frmFuncion');
	}
  //control de pagos actualiza constantemente 
  public function ControlAlquiler(){
    if ($this->input->is_ajax_request()) {

      $datos = $this->Alquiler_model->ControlAlquiler();      
    }
    else
    {
      show_404();
    }
  }
  //fin para actulizar lospagos
  public function AddAlquiler()
  {
    if ($this->input->is_ajax_request()) 
      {
        $txt_Dni=$this->input->post("txt_Dni");
        $txt_nombreresposable =$this->input->post("txt_nombreresposable");
        $txt_apellidoresponsable =$this->input->post("txt_apellidoresponsable");
        $txt_direccion =$this->input->post("txt_direccion");
        $txt_nombredifunto =$this->input->post("txt_nombredifunto");
        $txt_apellidodifunto =$this->input->post("txt_apellidodifunto");
        $txt_fechaf =$this->input->post("txt_fechaf");
        $cbNicho =$this->input->post("cbNicho");
        $txt_fechaalquiler =$this->input->post("txt_fechaalquiler");
        $txt_fechafinalquiler =$this->input->post("txt_fechafinalquiler");
        $txt_detallealquiler=$this->input->post("txt_detallealquiler");
        if($this->Alquiler_model->AddAlquiler($txt_Dni,$txt_nombreresposable,$txt_apellidoresponsable,$txt_direccion,$txt_nombredifunto,$txt_apellidodifunto,$txt_fechaf,$cbNicho,$txt_fechaalquiler,$txt_fechafinalquiler,$txt_detallealquiler) == true)
          echo "Se realizo el proceso de alquiler";
          else
          echo "No se realizo el proceso de alquiler";


    }
  else
    {
       show_404();
    }
  }
  public function get_alquiler()
  {
    if ($this->input->is_ajax_request()) {

      $datos = $this->Alquiler_model->get_alquiler();
      echo json_encode($datos);
      
    }
    else
    {
      show_404();
    }

  }
  public function get_cuartel()
  {
    if ($this->input->is_ajax_request()) {
      $id_categoria=$this->input->post('categoria');
      $datos = $this->Alquiler_model->get_cuartel($id_categoria);
      echo json_encode($datos);
    // $data=  date("Y-m-d");
     //$fecha10diasdespues = date('Y-m-d',strtotime('+11 days', strtotime($data)));    
    }
    else
    {
      show_404();
    }

  }
  public function Get_categoria(){
    if ($this->input->is_ajax_request()) {
      $datos = $this->Alquiler_model->Get_categoria();
      echo json_encode($datos);
      
    }
    else
    {
      show_404();
    }
  }
  public function get_nicho(){
      if ($this->input->is_ajax_request()) {
      $id_cuartel=$this->input->post('id_cuartel');
      $nivel=$this->input->post('nivel');
      $datos = $this->Alquiler_model->get_nicho($id_cuartel,$nivel);
      echo json_encode($datos); 
    }
    else
    {
      show_404();
    }
  }
  public function get_nivel(){
      if ($this->input->is_ajax_request()) {
      $id_cuartel=$this->input->post('id_cuartel');

      $datos = $this->Alquiler_model->get_nivel($id_cuartel);
      echo json_encode($datos);
      
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
