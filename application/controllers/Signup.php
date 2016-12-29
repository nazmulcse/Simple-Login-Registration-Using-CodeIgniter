<?php
class Signup extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('user_model');
	}
	
	public function index()
	{
		// set form validation rules
		$this->form_validation->set_rules('full_name', 'Full Name', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');
		$this->form_validation->set_rules('client_email_password', 'Client Email Password', 'trim|required');
		$this->form_validation->set_rules('date_of_birth', 'Date of Birth', 'trim|required');
		$this->form_validation->set_rules('mobile_no', 'Mobile No', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('nid', 'NID', 'trim|required');
		$this->form_validation->set_rules('address', 'Address', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('btc_address', 'BTC Adress', 'trim|min_length[3]');
		$this->form_validation->set_rules('bank_name', 'Bank Name', 'trim|required');
		$this->form_validation->set_rules('account_type', 'Account Type', 'trim|required');
		$this->form_validation->set_rules('account_no', 'Account No.', 'trim|required');
		$this->form_validation->set_rules('payza_id', 'Payza Id', 'trim|required');
		$this->form_validation->set_rules('payza_password', 'Payza Password', 'trim|required');
		$this->form_validation->set_rules('group', 'Group Name', 'trim');
		$this->form_validation->set_rules('registration_date', 'Registration Date', 'trim');
		$this->form_validation->set_rules('user_photo', 'User Photo', 'trim');
		$this->form_validation->set_rules('nid_photo', 'NID Photo', 'trim');
		
		
		
		// submit
		if ($this->form_validation->run() == FALSE)
        {// fails
			$this->load->view('signup_view');
        }
		else
		{
			//print_r($this->input->post('nid_photo',true));exit;
			//insert user details into db
			$data = array(
				'full_name' => $this->input->post('full_name'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
				'client_email_password' => $this->input->post('client_email_password'),
				'date_of_birth' => $this->input->post('date_of_birth'),
				'mobile_no' => $this->input->post('mobile_no'),
				'nid' => $this->input->post('nid'),
				'address' => $this->input->post('address'),
				'btc_address' => $this->input->post('btc_address'),
				'bank_name' => $this->input->post('bank_name'),
				'account_type' => $this->input->post('account_type'),
				'account_no' => $this->input->post('account_no'),
				'payza_id' => $this->input->post('payza_id'),
				'payza_password' => $this->input->post('payza_password'),
				'group' => $this->input->post('group'),
				'registration_date' => $this->input->post('registration_date'),
				
			);
			$config['upload_path'] = 'upload/images';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '0';
			$config['max_width']  = '0';
			$config['max_height']  = '0';
			$error='';
			$fdata='';
			$this->load->library('upload', $config);
			// nid photo upload
			if ( ! $this->upload->do_upload('nid_photo')) {
				$error=$this->upload->display_errors();
				
			} else {
				$nid_data=$this->upload->data();
				
			}
			// user photo upload
			if ( ! $this->upload->do_upload('user_photo')) {
				$error=$this->upload->display_errors();
			} else {
				$user_data=$this->upload->data();
			}
			$data['nid_photo']=  base_url(). $config['upload_path'].'/'.$nid_data['file_name'];
			$data['user_photo']=  base_url(). $config['upload_path'].'/'.$user_data['file_name'];

			if ($this->user_model->insert_user($data))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! Your account will be active after 72 hours</div>');
				redirect('signup');
			}
			else
			{// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
				redirect('signup');
			}
		}
	}

	public function edit($id)
	{
		$data['user'] = $this->user_model->get_user_by_id($id);//print_r($data['user']);exit;
		$this->load->view('edit_signup', $data);
	}
	public function update()
	{
		$data = array(
			'full_name' => $this->input->post('full_name'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'client_email_password' => $this->input->post('client_email_password'),
			'date_of_birth' => $this->input->post('date_of_birth'),
			'mobile_no' => $this->input->post('mobile_no'),
			'nid' => $this->input->post('nid'),
			'address' => $this->input->post('address'),
			'btc_address' => $this->input->post('btc_address'),
			'bank_name' => $this->input->post('bank_name'),
			'account_type' => $this->input->post('account_type'),
			'account_no' => $this->input->post('account_no'),
			'payza_id' => $this->input->post('payza_id'),
			'payza_password' => $this->input->post('payza_password'),
			'group' => $this->input->post('group'),
			'registration_date' => $this->input->post('registration_date'),
			'is_active' => $this->input->post('is_active'),
		);
		$id = $this->input->post('id');
		// Updating
		$this->db->where('id', $id);
		$this->db->update('users', $data);
		$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Information has been update successfully !</div>');
		redirect('profile');
	}
}