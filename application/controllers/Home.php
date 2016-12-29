<?php
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html'));
		$this->load->library('session');
	}
	
	function index()
	{
		$this->load->view('login_view');
	}
	
	function logout()
	{
		// destroy session
        $data = array('login' => '', 'full_name' => '', 'uid' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
		redirect('home');
	}
}


