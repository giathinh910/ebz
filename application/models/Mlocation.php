<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mlocation extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function addLocation($data) {
		$this->db->insert('location', $data); 
	}
	public function getAllLocations() {
		return $this->db->get('location')->result_array();
	}
}