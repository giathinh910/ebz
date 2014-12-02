<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Location extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('html','url','form'));
		$this->load->library(array('pagination','form_validation'));
		// $this->load->Model(array('Mstaff'));
	}
	public function index() {
		$this->load->view('front/layout/head.php');
		$this->load->view('front/map.php');
		$this->load->view('front/layout/foot.php');
	}
}