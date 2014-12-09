<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Location extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('html','url','form'));
		$this->load->library(array('pagination','form_validation','session'));
		$this->load->Model(array('Mlocation','Mprovince', 'Mcategory'));
	}
	public function index() {
		$this->load->view('front/layout/head.php');
		$this->load->view('front/map.php');
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
			'locations' => $this->Mlocation->getLocationByUserId(),
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
		if($this->session->userdata('current_user_id') == null) {
			redirect(base_url('user/login'));
		}
		if ($this->session->flashdata('message') != null) {
			$data = array(
				'location' => $this->Mlocation->getLocationById($id),
				'provinces' => $this->Mprovince->getAllProvince(),
				'categories' => $this->Mcategory->getAllCategory(),
				'successMessage' => $this->session->flashdata('message')
			);
		} else {
			$data = array(
				'location' => $this->Mlocation->getLocationById($id),
				'provinces' => $this->Mprovince->getAllProvince(),
				'categories' => $this->Mcategory->getAllCategory(),
			);
		}
		$this->load->view('front/layout/head.php');
		$this->load->view('front/update.php', $data);
		$this->load->view('front/layout/foot.php');
	}
	public function update_location_exec() {
		if($this->session->userdata('current_user_id') == null) {
			redirect(base_url('user/login'));
		}
		$id = $this->input->post('id');
		$location = array (
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
		$this->Mlocation->updateLocation($id, $location);
		$this->session->set_flashdata('message','Cập nhật thành công');
		redirect(base_url('location/edit_location/'.$id));
	}
	/**
	DELETE
	 */
	public function delete_location($id) {
		if($this->session->userdata('current_user_id') == null) {
			redirect(base_url('user/login'));
		}
		$this->Mlocation->deleteLocation($id);
		$this->session->set_flashdata('message','Đã xóa địa điểm');
		redirect(base_url('location/my_locations/'.$id));
	}
	/**
	JSON
	 */
	public function ajax_get_location($option) {
		$locations = "";
		$output = "";
		switch ($option) {
			case 'all':
				$locations = $this->Mlocation->getLocationWithSelectedField('loc_id, loc_name, loc_address, loc_coordination, loc_icon, loc_brief');
				break;
			
			default:
				# code...
				break;
		}
		foreach ($locations as $key => $location) {
			$output .= "{";
			foreach ($location as $key => $value) {
				$output .= '"'.$key.'":"'.htmlspecialchars($value, ENT_COMPAT).'",';
			}
			$output = rtrim($output, ",");
			$output .= "},";
		}
		$output = rtrim($output, ",");
		echo '['.$output.']';
	}
}