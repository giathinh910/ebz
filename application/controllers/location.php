<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Location extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('html','url','form'));
		$this->load->library(array('pagination','form_validation','session'));
		$this->load->Model(array('Mlocation','Mprovince', 'Mcategory', 'Muser'));
		date_default_timezone_set("Asia/Bangkok");
	}
	public function index() {
		if($this->session->userdata('current_user_id') != null) {
			$current_user_id = $this->session->userdata('current_user_id');
			$data = array(
				'categories' => $this->Mcategory->getAllCategory(),
				'locations' => $this->Mlocation->getLocationWithSelectedField('*'),
				'users' => $this->Muser->getUserWhere(array('usr_id' => $current_user_id))
			);
		} else {
			$data = array(
				'categories' => $this->Mcategory->getAllCategory(),
				'locations' => $this->Mlocation->getLocationWithSelectedField('*')
			);
		}
		$this->load->view('front/layout/head.php');
		$this->load->view('front/map.php', $data);
		$this->load->view('front/layout/foot.php');
	}
	/**
	ADD
	 */
	public function add_location() {
		if($this->session->userdata('current_user_id') == null) {
			redirect(base_url('user/login'));
		}
		$data = array(
			'provinces' => $this->Mprovince->getAllProvince(),
			'categories' => $this->Mcategory->getAllCategory(),
		);
		$this->load->view('front/layout/head.php');
		$this->load->view('front/add.php', $data);
		$this->load->view('front/layout/foot.php');
	}
	public function add_location_exec() {
		if($this->session->userdata('current_user_id') == null) {
			redirect(base_url('user/login'));
		}
		$location = array (
			"loc_user_id" => $this->session->userdata('current_user_id'),
			"loc_name" => $this->input->post('name'),
			"loc_address" => $this->input->post('address'),
			"loc_phone" => $this->input->post('phone'),
			"loc_email" => $this->input->post('email'),
			"loc_province_id" => $this->input->post('province'),
			"loc_category_id" => $this->input->post('category'),
			"loc_coordination" => $this->input->post('coordination'),
			"loc_icon" => $this->input->post('icon'),
			"loc_brief" => $this->input->post('brief'),
			"loc_detail" => $this->input->post('detail')
		);
		$this->Mlocation->addLocation($location);
		redirect(base_url('location'));
	}
	/**
	VIEW
	 */
	public function my_locations() {
		if($this->session->userdata('current_user_id') == null) {
			redirect(base_url('user/login'));
		}
		$data = array(
			'locations' => $this->Mlocation->getLocationByUserId($this->session->userdata('current_user_id')),
			'successMessage' => $this->session->flashdata('message')
		);
		$this->load->view('front/layout/head.php');
		$this->load->view('front/list.php', $data);
		$this->load->view('front/layout/foot.php');
	}
	public function view_location($id) {
		$data = array(
			'location' => $this->Mlocation->getLocationById($id),
		);
		$this->load->view('front/layout/head.php');
		$this->load->view('front/view.php', $data);
		$this->load->view('front/layout/foot.php');
	}
	/**
	EDIT / UPDATE
	 */
	public function edit_location($id) {
		$current_user_id = $this->session->userdata('current_user_id');
		if($this->session->userdata('current_user_id') == null) {
			redirect(base_url('user/login'));
		}
		if ($this->session->flashdata('message') != null) {
			$data = array(
				'location' => $this->Mlocation->getLocationByIdAndUser($id, $current_user_id),
				'provinces' => $this->Mprovince->getAllProvince(),
				'categories' => $this->Mcategory->getAllCategory(),
				'successMessage' => $this->session->flashdata('message')
			);
		} else {
			$data = array(
				'location' => $this->Mlocation->getLocationByIdAndUser($id, $current_user_id),
				'provinces' => $this->Mprovince->getAllProvince(),
				'categories' => $this->Mcategory->getAllCategory(),
			);
		}
		$this->load->view('front/layout/head.php');
		$this->load->view('front/update.php', $data);
		$this->load->view('front/layout/foot.php');
	}
	public function update_location_exec() {
		$current_user_id = $this->session->userdata('current_user_id');
		if($this->session->userdata('current_user_id') == null) {
			redirect(base_url('user/login'));
		}
		$id = $this->input->post('id');
		$data = array (
			"loc_name" => $this->input->post('name'),
			"loc_address" => $this->input->post('address'),
			"loc_phone" => $this->input->post('phone'),
			"loc_email" => $this->input->post('email'),
			"loc_province_id" => $this->input->post('province'),
			"loc_category_id" => $this->input->post('category'),
			"loc_coordination" => $this->input->post('coordination'),
			"loc_icon" => $this->input->post('icon'),
			"loc_brief" => $this->input->post('brief'),
			"loc_detail" => $this->input->post('detail')
		);
		$this->Mlocation->updateLocation($id, $current_user_id, $data);
		$this->session->set_flashdata('message','Cập nhật thành công');
		redirect(base_url('location/edit_location/'.$id));
	}
	/**
	DELETE
	 */
	public function delete_location($id) {
		$current_user_id = $this->session->userdata('current_user_id');
		if($this->session->userdata('current_user_id') == null) {
			redirect(base_url('user/login'));
		}
		$this->Mlocation->deleteLocation($id, $current_user_id);
		$this->session->set_flashdata('message','Đã xóa địa điểm');
		redirect(base_url('location/my_locations/'.$id));
	}
	/**
	SEARCH
	 */
	public function search() {
		$queryString = $this->input->post('search');
		$data = array(
			'results' => $this->Mlocation->searchLocation($queryString),
		);
		$this->load->view('front/layout/head.php');
		$this->load->view('front/search.php', $data);
		$this->load->view('front/layout/foot.php');
	}
	/**
	JSON
	 */
	public function ajax_get_location($option) {
		$locations = "";
		switch ($option) {
			case 'all':
				$locations = $this->Mlocation->getLocationWithSelectedField('*');
				break;
			default:
				# code...
				break;
		}
		echo json_encode($locations);
	}
	/**
	ADMIN all location
	 */
	public function all() {
		if($this->session->userdata('current_user_id') == null || $this->session->userdata('current_user_permission') != 1) {
			redirect(base_url());
		}
		$data = array(
			'pageTitle' => 'Danh sách',
			'pageGroupTitle' => 'Địa điểm',
			'locations' => $this->Mlocation->getLocationWithSelectedField('*')
		);
		$this->load->view('back/layout/head');
		$this->load->view('back/layout/header');
		$this->load->view('back/layout/sidebar');
		$this->load->view('back/location/view', $data);
		$this->load->view('back/layout/foot');
	}
}