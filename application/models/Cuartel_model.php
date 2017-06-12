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

}