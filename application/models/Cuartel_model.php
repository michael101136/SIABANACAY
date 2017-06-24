<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Cuartel_model extends CI_Model {


    function get_cuartel(){
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

}