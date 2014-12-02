<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Location extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('html','url','form'));
		$this->load->library(array('pagination','form_validation'));
		$this->load->Model(array('Mlocation'));
	}
	public function index() {
		$data = array (
			"places" => $this->Mlocation->getAllLocations()
		);
		$this->load->view('front/layout/head.php');
		$this->load->view('front/map.php', $data);
		$this->load->view('front/layout/foot.php');
	}
	public function add_location() {
		$this->load->view('front/layout/head.php');
		$this->load->view('front/add.php');
		$this->load->view('front/layout/foot.php');
	}
	public function add_location_exec() {
		$location = array (
			"loc_name" => $this->input->post('placeName'),
			"loc_coordination" => $this->input->post('coordination'),
			"loc_icon" => $this->input->post('icon')
		);
		$this->Mlocation->addLocation($location);
		redirect(base_url('location'));
	}
}