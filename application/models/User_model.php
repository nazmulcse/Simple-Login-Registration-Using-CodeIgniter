<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
	public function get_user($email, $pwd)
	{
		$this->db->where('email', $email);
		$this->db->where('password', $pwd);
		$this->db->where('is_active', 1);
        $query = $this->db->get('users');
		return $query->result();
	}
	
	// get user
	public function get_user_by_id($id)
	{
		$this->db->where('id', $id);
        $query = $this->db->get('users');
		return $query->result();
	}
	
	// insert
	public function insert_user($data)
    {
		return $this->db->insert('users', $data);
	}
	public function get_users()
	{
		$this->db->select('*');
		$this->db->order_by("id","desc");
		$query = $this->db->get('users');
		return $query->result_array();
	}
}?>