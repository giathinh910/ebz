<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mlocation extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function addLocation($data) {
		$this->db->insert('location', $data); 
	}
	public function ajaxGetAllLocations() {
		return $this->db
			->select('loc_id, loc_name, loc_address, loc_coordination, loc_icon, loc_brief')
			->from('location')
			->get()
			->result_array();
	}
	public function getLocationById($id) {
		return $this->db
			->where('loc_id', $id)
			->get('location')
			->result_array();
	}
}