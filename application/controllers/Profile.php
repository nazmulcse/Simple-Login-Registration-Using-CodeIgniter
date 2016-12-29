<?php
class Profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','html','form'));
		$this->load->library('session');
		$this->load->database();
		$this->load->model('user_model');
	}
	
	public function index()
	{
		$details = $this->user_model->get_user_by_id($this->session->userdata('uid'));
		//print_r($details);exit;
		$data['full_name'] = $details[0]->full_name;
		$data['email'] = $details[0]->email;
		$data['user_photo'] = $details[0]->user_photo;
		$data['role'] = $details[0]->role;
		if($data['role'] == 'admin'){
			$data['users'] = $this->user_model->get_users();
		}
		$this->load->view('profile_view', $data);
	}
}