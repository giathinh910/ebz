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
			"loc_name" => $this->input->post('name'),
			"loc_address" => $this->input->post('address'),
			"loc_province" => $this->input->post('province'),
			"loc_coordination" => $this->input->post('coordination'),
			"loc_icon" => $this->input->post('icon'),
			"loc_brief" => $this->input->post('brief'),
			"loc_detail" => $this->input->post('detail')
		);
		$this->Mlocation->addLocation($location);
		redirect(base_url('location'));
	}
	public function ajax_get_location($option) {
		$locations = "";
		$output = "";
		switch ($option) {
			case 'all':
				$locations = $this->Mlocation->getAllLocations();
				break;
			
			default:
				# code...
				break;
		}
		foreach ($locations as $key => $location) {
			$output .= "{";
			foreach ($location as $key => $value) {
				$output .= '"'.$key.'":"'.$value.'",';
			}
			$output = rtrim($output, ",");
			$output .= "},";
		}
		$output = rtrim($output, ",");
		echo '['.$output.']';
	}
}