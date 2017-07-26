<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Nicho_model extends CI_Model {


    function get_nicho(){
    	   $nicho= $this->db->query("call sp_nichos_r()");
            if ($nicho->num_rows() >= 0) 
            {
                return $nicho->result();
            } else 
            {
                return null;
            }
    	}
        function AddNichos($datas)
        {

              $this->db->insert("tnicho",$datas);
                return true;

        }
        function updatePrecios($txt_IdCuartel,$combo_Nivel,$txt_nivel_Precios)
        {

             $this->db->query("call sp_actualizarprecios('".$txt_IdCuartel."','".$combo_Nivel."','".$txt_nivel_Precios."')");
             return true;

        }
    

}