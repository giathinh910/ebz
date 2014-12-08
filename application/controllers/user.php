<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('html','url','form'));
		$this->load->library(array('pagination','form_validation','session'));
		$this->load->Model(array('Muser'));
	}
	public function index() {
		$this->login();
	}
	public function login() {
		if ($this->session->flashdata('message') != null) {
			$data = array(
				'flashMessage' => $this->session->flashdata('message')
			);
		} else {
			$data = "";
		}
		$this->load->view('front/layout/head.php');
		$this->load->view('front/login.php', $data);
		$this->load->view('front/layout/foot.php');
	}
	public function login_exec() {
		$data = array(
			"usr_username" => $this->input->post('username'),
			"usr_password" => md5($this->input->post('password')),
		);
		if(sizeof($this->Muser->login($data)) != 0) {
			echo 'asdasdasd';
		} else {
			$this->session->set_flashdata('message','Tên đăng nhập hoặc mật khẩu sai');
			redirect(base_url('user/login'));
		}
	}
}