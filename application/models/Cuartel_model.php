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
}