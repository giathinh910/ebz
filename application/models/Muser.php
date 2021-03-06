<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Muser extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function getAllUser() {
		return $this->db
			->get('user')
			->result_array();
	}
	public function getUserWhere($data) {
		return $this->db
			->where($data)
			->join('province', 'province.prv_id = user.usr_province_id')
			->get('user')
			->result_array();
	}
	public function createUser($data) {
		return $this->db->insert('user', $data);
	}
	public function updateUser($data) {
		$this->db
			->where('usr_id', $data['usr_id'])
			->update('user', $data);
	}
	public function deleteUser($id) {
		$this->db
			->where('usr_id', $id)
			->delete('user');
	}
	public function deleteLocationByUser($id) {
		$this->db
			->where('loc_user_id', $id)
			->delete('location');
	}
}