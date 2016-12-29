<?php
class Admin extends CI_Controller
{
   public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','html'));
		$this->load->library('session');
		$this->load->database();
		$this->load->model('user_model');
	}
	
    public function index()
    {
        $data['users'] = $this->user_model->get_users();
       // print_r($users);exit;
        $this->load->view('admin_view', $data);
    }
}

