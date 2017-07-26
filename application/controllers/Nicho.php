<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nicho extends CI_Controller {/* Mantenimiento de division funcional y grupo funcional*/

	public function __construct(){
     	parent::__construct();
     	$this->load->model("Nicho_model");
		$this->load->model("Cuartel_model");
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
  public function updatePrecios()
  {
    if($_POST)
    {
      $txt_IdCuartel=$this->input->post('txt_IdCuartel');
      $combo_Nivel=$this->input->post('combo_Nivel');
      $txt_nivel_Precios=$this->input->post('txt_nivel_Precios');
      $this->Nicho_model->updatePrecios($txt_IdCuartel,$combo_Nivel,$txt_nivel_Precios);
      echo json_encode(['proceso' => 'Correcto', 'mensaje' => 'Dastos registrados correctamente.', 'nombre_cuartel' => $combo_Nivel]);

    }
  }


	public function insertar()
	{
		if($_POST)
	    {
	    	$hdIdcuartel=$this->input->post('hdIdcuartel');
	    	$hdtxt_num_nicho=$this->input->post('hdtxt_num_nicho');
	    	$hdtxt_nivel_nicho=$this->input->post('hdtxt_nivel_nicho');
	    	$hdtxt_precio_nicho=$this->input->post('hdtxt_precio_nicho');
	    	$estado=0;
	    	for ($i=0; $i<count($hdtxt_num_nicho) ; $i++) { 
	  			 $datas = array(
			            "numero_nicho" =>$hdtxt_num_nicho[$i],
			            "id_cuartel" =>$hdIdcuartel,
			            "nivel" => $hdtxt_nivel_nicho[$i], 
			            "precio" => $hdtxt_precio_nicho[$i], 
			            "estado"=>$estado     
	            );
	  			 $this->Nicho_model->AddNichos($datas);
	    	}
	    	echo json_encode(['proceso' => 'Correcto', 'mensaje' => 'Dastos registrados correctamente.', 'nombre_cuartel' => $hdtxt_num_nicho]);exit;

	    }
	    $id_cuartel=$this->input->GET('id_cuartel');	

		$listarCbxcuartel= $this->Cuartel_model->GetIdCuartelParaNombrecuartel($id_cuartel)[0];

		$this->load->view('admin/Nicho/insertar',['listarCbxcuartel'=>$listarCbxcuartel]);
	}

	function _load_layout($template)
    {
      $this->load->view('layout/admin/alquiler/header');
      $this->load->view($template);
      $this->load->view('layout/admin/alquiler/footer');
    }

}
