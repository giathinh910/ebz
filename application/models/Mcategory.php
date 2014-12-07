<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mcategory extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function getAllCategory() {
		return $this->db
			->order_by('ctg_name')
			->get('category')
			->result_array();
	}
}