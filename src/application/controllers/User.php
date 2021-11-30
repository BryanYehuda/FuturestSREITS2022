<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		if(!($this->session->userdata('role')))
		{
			redirect('home');
		}
        else if($this->session->userdata('role') == 'admin')
        {
            redirect('admin');
        }
		date_default_timezone_set("Asia/Jakarta");
    }

	public function index()
	{
		$this->load->view('dashboard_user');
	}

	public function payment()
	{
		$this->load->view('dashboard_user_payment');
	}

	public function team()
	{
		$this->load->view('dashboard_user_team');
	}
}
?>