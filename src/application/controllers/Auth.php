<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
    }

	public function logging_in()
	{
		if($this->session->userdata('role') == 'admin')
        {
            redirect('admin');
        }
        else if ($this->session->userdata('role') == 'user')
        {
            redirect('user');
        }

		$this->load->helper('form');

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($username == 'AdminFuturest' && $password == 'SREFuturest!')
		{
			$session_data = array(
				'username' => 'admin',
				'role' => 'admin',
			);
			$this->session->set_userdata($session_data);
			redirect('admin');
		}
		else
		{
			redirect('login');
		}
	}

	public function logout()
	{
		if(!($this->session->userdata('role')))
		{
			redirect('home');
		}
		$this->session->sess_destroy();
		redirect('home');
	}
}
?>