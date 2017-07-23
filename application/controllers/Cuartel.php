<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuartel extends CI_Controller {/* Mantenimiento de division funcional y grupo funcional*/

	public function __construct(){
      parent::__construct();
      $this->load->model("Cuartel_model");

	}
    /*public function get_cuartel()
	  {
		    if ($this->input->is_ajax_request()) {

		      $datos = $this->Cuartel_model->get_cuartel();
		      echo json_encode($datos);

		    }
		    else
		    {
		      show_404();
		    }

	  }*/
	public function index()
  {

		 $listarCurteles = $this->Cuartel_model->get_cuartel();
		 
		  $this->load->view('layout/admin/alquiler/header');
     	 $this->load->view('admin/Cuartel/Cuartel',['listarCuarteles' => $listarCurteles]);
     	 $this->load->view('layout/admin/alquiler/footer');

	}
	public function get_gantt(){
		if ($this->input->is_ajax_request()) {

			$datos = $this->Cuartel_model->get_gantt();
			echo json_encode($datos);

		}
		else
		{
			show_404();
		}
	}

  /*public function AddCuartel()
    {
        if ($this->input->is_ajax_request())
            {
             $txt_cuartel   = $this->input->post("txt_cuartel");
             $cbxCategoria  = $this->input->post("cbxCategoria");

             $cbxPasaje     = $this->input->post("cbxPasaje");

            $datas = array(

            "nombre_cuartel" =>$txt_cuartel,
            "id_categoria" =>$cbxCategoria,
            "id_pasaje" => $cbxPasaje,
            );

           if($this->Cuartel_model->AddCuartel($datas)== false)
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
	*/
   public  function insertar()
   {
	   	if($_POST)
	      {
		     $hdIdcategoria	= $this->input->post('hdIdcategoria');
	         $hdIdPasaje	    = $this->input->post('hdIdPasaje');
	      	 $nombre_cuartel	= $this->input->post('Cuartel');
	      	 for ($i=0; $i <count($hdIdcategoria) ; $i++) { 
	      	 	 $datas = array(
			            "nombre_cuartel" =>$nombre_cuartel[$i],
			            "id_categoria" =>$hdIdcategoria[$i],
			            "id_pasaje" => $hdIdPasaje[$i],     
	            );
	      	 	$this->Cuartel_model->AddCuartel($datas);
	      	 }
	      	 echo json_encode(['proceso' => 'Correcto', 'mensaje' => 'Dastos registrados correctamente.', 'nombre_cuartel' => $nombre_cuartel]);exit;
	      }
	    $categoria= $this->Cuartel_model->Get_Categoria();
	    $pasajes= $this->Cuartel_model->Get_pasaje();
	    //var_dump($pasajes);exit();
	    $this->load->view('admin/Cuartel/insertar',['categoria' => $categoria ,'pasajes' => $pasajes]);
   }
  public function editar()
  {
      if($_POST)
      {
      	

      }

      $this->load->view('admin/Cuartel/editar');

  }
  public function verNichosCuarteles()
  {
  	$id_cuartel=$this->input->GET('id_cuartel');

  	$CuartelesPadres			=$this->Cuartel_model->CuartelesPadres($id_cuartel);
  	$listarNichosCuarteleId=$this->Cuartel_model->NichoIdCuartel($id_cuartel);
  	
  	$this->load->view('admin/Nicho/verNichosCuarteles',['CuartelesPadres' =>$CuartelesPadres, 'listarNichosCuarteleId' => $listarNichosCuarteleId]);
  }

	function _load_layout($template)
    {
      $this->load->view('layout/admin/alquiler/header');
      $this->load->view($template);
      $this->load->view('layout/admin/alquiler/footer');
    }

}
