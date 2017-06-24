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
    function reportevencidos_Nichos(){
           $nichosV= $this->db->query("call sp_reportevencidos()");
            if ($nichosV->num_rows() >= 0) 
            {
                return $nichosV->result();
            } else 
            {
                return null;
            }
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
                if ($this->db->affected_rows() > 0) {
                    return true;
                }
                else{
                    return false;
                }
        }

}