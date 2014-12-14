<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('html','url','form'));
		$this->load->library(array('pagination','form_validation','session'));
		$this->load->Model(array('Muser', 'Mprovince'));
	}
	public function index() {
		$this->login();
	}
	/**
	Login
	 */
	public function login() {
		if($this->session->userdata('current_user_id') != null) {
			redirect(base_url());
		}
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
		if($this->session->userdata('current_user_id') != null) {
			redirect(base_url());
		}
		$users = $this->Muser->getUserWhere(
			array(
				"usr_username" => $this->input->post('username'),
				"usr_password" => md5($this->input->post('password')),
			)
		);
		if(sizeof($users) != 0) {
			foreach ($users as $key => $user) {
				$userSession = array(
					'current_user_id' => $user['usr_id'],
					'current_user_permission' => $user['usr_permission'],
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
	/**
	 Sign up
	 */
	public function signup() {
		if($this->session->userdata('current_user_id') != null) {
			redirect(base_url());
		}
		if ($this->session->flashdata('message') != null) {
			$data = array(
				'flashMessage' => $this->session->flashdata('message'),
				'provinces' => $this->Mprovince->getAllProvince(),
			);
		} else {
			$data = array(
				'provinces' => $this->Mprovince->getAllProvince(),
			);
		}
		$this->load->view('front/layout/head.php');
		$this->load->view('front/signup.php', $data);
		$this->load->view('front/layout/foot.php');
	}
	public function signup_exec() {
		if($this->session->userdata('current_user_id') != null) {
			redirect(base_url());
		}
		$post = array(
			'usr_display_name' => $this->input->post('display_name'),
			'usr_username' => $this->input->post('username'),
			'usr_password' => $this->input->post('password'),
		);
		if (!empty($this->Muser->getUserWhere(array('usr_username' => $post['usr_username'])))) {
			$this->session->set_flashdata('message','Tên đăng nhập đã tồn tại');
			redirect(base_url('user/signup'));
		} elseif (strcmp($post['usr_password'][0], $post['usr_password'][1]) !== 0) {
			$this->session->set_flashdata('message','Hai mật khẩu không khớp');
			redirect(base_url('user/signup'));
		} else {
			$data = array(
				'usr_display_name' => $this->input->post('display_name'),
				'usr_username' => $this->input->post('username'),
				'usr_password' => md5($this->input->post('password')[0]),
				'usr_email' => $this->input->post('email'),
				'usr_province_id' => $this->input->post('province'),
			);
			$this->Muser->createUser($data);
			$this->session->set_flashdata('message','Tạo tài khoản <strong>THÀNH CÔNG</strong>, bạn có thể đăng nhập ngay');
			redirect(base_url('user/login'));
		}
	}
	/**
	 Log out
	 */
	public function logout() {
		if($this->session->userdata('current_user_id') != null) {
			$this->session->sess_destroy();
			redirect(base_url('user/login'));
		} else {
			redirect(base_url());
		}
	}
	/**
	View all user
	*/
	public function all() {
		if($this->session->userdata('current_user_id') == null || $this->session->userdata('current_user_permission') != 1) {
			redirect(base_url());
		}
		$data = array(
			'pageTitle' => 'Danh sách',
			'pageGroupTitle' => 'Người dùng',
			'users' => $this->Muser->getAllUser(),
		);
		$this->load->view('back/layout/head');
		$this->load->view('back/layout/header');
		$this->load->view('back/layout/sidebar');
		$this->load->view('back/user/all', $data);
		$this->load->view('back/layout/foot');
	}
	public function view($id) {
		if($this->session->userdata('current_user_id') == null || $this->session->userdata('current_user_permission') != 1) {
			redirect(base_url());
		}
		$data = array(
			'pageTitle' => 'Cập nhật',
			'pageGroupTitle' => 'Người dùng',
			'users' => $this->Muser->getUserWhere(array('usr_id' => $id)),
		);
		$this->load->view('back/layout/head');
		$this->load->view('back/layout/header');
		$this->load->view('back/layout/sidebar');
		$this->load->view('back/user/view', $data);
		$this->load->view('back/layout/foot');
	}
	public function update() {
		if($this->session->userdata('current_user_id') == null || $this->session->userdata('current_user_permission') != 1) {
			redirect(base_url());
		}
		$data = array(
			'usr_id' => $this->input->post('id'),
			'usr_display_name' => $this->input->post('display_name'),
			'usr_username' => $this->input->post('username'),
		);
		$this->Muser->updateUser($data);
	}
	public function delete($id) {
		if($this->session->userdata('current_user_id') == null || $this->session->userdata('current_user_permission') != 1) {
			redirect(base_url());
		}
		$this->Muser->deleteUser($this->input->post('id'));
		$this->Muser->deleteLocationByUser($this->input->post('id'));
	}
}