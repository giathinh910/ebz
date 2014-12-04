<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mlocation extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function addLocation($data) {
		$this->db->insert('location', $data); 
	}
	public function updateLocation($id, $data) {
		$this->db
			->where('loc_id', $id)
			->update('location', $data);
	}
	public function getLocationById($id) {
		return $this->db
			->where('loc_id', $id)
			->get('location')
			->result_array();
	}
	public function getLocationWithSelectedField($fields) {
		return $this->db
			->select($fields)
			->from('location')
			->get()
			->result_array();
	}
}