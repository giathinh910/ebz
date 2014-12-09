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
		$users = $this->Muser->login(
			array(
				"usr_username" => $this->input->post('username'),
				"usr_password" => md5($this->input->post('password')),
			)
		);
		if(sizeof($users) != 0) {
			foreach ($users as $key => $user) {
				$userSession = array(
					'current_user_id' => $user['usr_id'],
					'current_user_username' => $user['usr_username'],
					'current_user_display_name' => $user['usr_display_name']
				);
				$this->session->set_userdata($userSession);
			}
			redirect(base_url());
		} else {
			$this->session->set_flashdata('message','Tên đăng nhập hoặc mật khẩu sai');
			redirect(base_url('user/login'));
		}
	}
	public function logout() {
		if($this->session->userdata('current_user_id') == null) {
			redirect(base_url());
		} else {
			$this->session->sess_destroy();
			redirect(base_url('user/login'));
		}
	}
}