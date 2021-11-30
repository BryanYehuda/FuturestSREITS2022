<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		if(!($this->session->userdata('role')))
		{
			redirect('home');
		}
        else if($this->session->userdata('role') == 'user')
        {
            redirect('user');
        }
		date_default_timezone_set("Asia/Jakarta");
    }

	public function index()
	{
		$this->load->view('dashboard_admin_home');
	}

	public function list()
	{
		$this->load->view('dashboard_admin_team_list');
	}

	public function confirmation()
	{
		$this->load->view('dashboard_admin_team_confirmation');
	}
}
?>