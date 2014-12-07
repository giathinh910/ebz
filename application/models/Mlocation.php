<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mlocation extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function getLocationByUserId() {
		return $this->db
			->join('province', 'province.prv_id = location.loc_province_id')
			->get('location')
			->result_array();
	}
	public function getLocationById($id) {
		return $this->db
			->where('loc_id', $id)
			->join('province', 'province.prv_id = location.loc_province_id')
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
	public function addLocation($data) {
		$this->db->insert('location', $data); 
	}
	public function updateLocation($id, $data) {
		$this->db
			->where('loc_id', $id)
			->update('location', $data);
	}
	public function deleteLocation($id) {
		$this->db
			->where('loc_id', $id)
			->delete('location');
	}
}