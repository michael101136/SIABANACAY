<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Cuartel_model extends CI_Model {


    
    function get_cuartel(){
    	   $cuartel= $this->db->query("call sp_cuartel_r()");
            if ($cuartel->num_rows() >= 0)
            {
                return $cuartel->result();
            } else
            {
                return null;
            }
    	}
      function get_gantt(){
      	   $cuartel= $this->db->query("call sp_gant_r()");
              if ($cuartel->num_rows() >= 0)
              {
                  return $cuartel->result();
              } else
              {
                  return null;
              }
      	}
    function reportevencidos_Nichos(){
           $nichosV= $this->db->query("call sp_reportevencidos()");

                return $nichosV->result();
        }
        //NICHOS DISPONIBLES
    function reportedisponible_Nichos(){
           $nichosD= $this->db->query("call sp_reportenichosdisponibles()");
            if ($nichosD->num_rows() >= 0)
            {
                return $nichosD->result();
            } else
            {
                return null;
            }
        }
    function Get_pasaje(){
        $this->db->select('*');
        $this->db->from('pasaje');
        $consulta = $this->db->get();
        return $consulta->result();
        }

         function AddCuartel($datas)
         //function AddCuartel($txt_cuartel,$cbxCategoria,$cbxPasaje)
        {
           /* $this->db->query("insert into tcuartel(nombre_cuartel,id_categoria,id_pasaje) values ('$txt_cuartel','$cbxCategoria','$cbxPasaje')");
            if ($this->db->affected_rows()> 0)
              {
                return true;
              }
              else
              {
                return false;
              }*/
              $this->db->insert("tcuartel",$datas);
              return false;
                
        }

        function Get_Categoria()
        {

        	$this->db->select('*');
        	$this->db->from('tcategoria');
        	$consulta = $this->db->get();
        	return $consulta->result();

        }
        function GetIdCuartelParaNombrecuartel($id_cuartel)
        {
        	$nichosD= $this->db->query("select * from tcuartel where id_cuartel='".$id_cuartel."'");
        	return $nichosD->result();
        }


}
