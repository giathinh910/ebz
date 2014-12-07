<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mprovince extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function getAllProvince() {
		return $this->db
			->get('province')
			->result_array();
	}
}