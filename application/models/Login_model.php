<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function login($email, $password){
		$this->db->where("email", $email);
		$this->db->where("password", $password);
		$resultados = $this->db->get("usuarios");
		if ($resultados->num_rows()>0) {
			return $resultados->row();
		}
		else{
			return false;
		}
	}
	function get_usuarios(){
		$usuario=$this->db->query("call sp_usuarios()");
		if ($usuario->num_rows()>= 0) 
            {
                return $usuario->result();
            } else 
            {
                return null;
            }
	}
}