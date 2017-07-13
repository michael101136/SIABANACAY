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
  
  public function AddNichos()
    {
        if ($this->input->is_ajax_request())
            {
             $txt_num_nicho   = $this->input->post("txt_num_nicho");
             $cbxCuartelN  = $this->input->post("cbxCuartelN");
             $txt_nivel_nicho     = $this->input->post("txt_nivel_nicho");
             $txt_precio_nicho     = $this->input->post("txt_precio_nicho");
            // $estado_nicho='0';
             $datas = array(

            "numero_nicho" =>$txt_num_nicho,
            "id_cuartel" =>$cbxCuartelN,
            "nivel" => $txt_nivel_nicho,
            "precio" => $txt_precio_nicho,
            //"id_pasaje" => $estado_nicho,
            );

           if($this->Nicho_model->AddNichos($datas)== false)
             if($this->Nicho_model->AddNichos($txt_num_nicho,$txt_nivel_nicho,$txt_precio_nicho,$txt_precio_nicho)== false)
                   echo "SE INSERTO UN NICHO";
                  else
                  echo "SE INSERTO UN NICHO";
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
