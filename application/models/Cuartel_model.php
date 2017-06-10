<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Cuartel_model extends CI_Model {


function ListarCuartel(){
		$this->db->select('*');
		$this->db->from('tcuartel');
		$consulta = $this->db->get();
		return $consulta->result();
		}

}