<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mlocation extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function getLocationByUserId($id) {
		return $this->db
			->join('province', 'province.prv_id = location.loc_province_id')
			->join('user', 'user.usr_id = location.loc_user_id')
			->where('usr_id', $id)
			->get('location')
			->result_array();
	}
	public function getLocationById($id) {
		return $this->db
			->where('loc_id', $id)
			->join('province', 'province.prv_id = location.loc_province_id')
			->join('category', 'category.ctg_id = location.loc_category_id')
			->get('location')
			->result_array();
	}
	public function getLocationByIdAndUser($id, $userId) {
		return $this->db
			->join('province', 'province.prv_id = location.loc_province_id')
			->join('category', 'category.ctg_id = location.loc_category_id')
			->join('user', 'user.usr_id = location.loc_user_id')
			->where('loc_id', $id)
			->where('usr_id', $userId)
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
	public function updateLocation($id, $userId, $data) {
		$this->db
			->where('loc_id', $id)
			->where('loc_user_id', $userId)
			->update('location', $data);
	}
	public function deleteLocation($id, $userId) {
		$this->db
			->where('loc_id', $id)
			->where('loc_user_id', $userId)
			->delete('location');
	}
}