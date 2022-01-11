<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		if(!($this->session->userdata('account_role')))
		{
			redirect('home');
		}
        else if($this->session->userdata('account_role') == 'admin')
        {
            redirect('admin');
        }
		date_default_timezone_set("Asia/Jakarta");
    }

	public function index()
	{
		$table = $this->session->userdata('account_table');
		$oldid = $this->session->userdata('account_oldid');
		$this->load->model("Dashboard_user");
		$data = $this->Dashboard_user->getData($table, $oldid);
		//var_dump($data);
		$this->load->view('user/dashboard_national_essay/home', array('data' => $data));
	}

	public function payment()
	{
		$table = $this->session->userdata('account_table');
		$oldid = $this->session->userdata('account_oldid');
		$this->load->model("Dashboard_user");
		$data = $this->Dashboard_user->getData($table, $oldid);
		//var_dump($data);
		$this->load->view('user/dashboard_national_essay/payment', array('data' => $data));
	}

	public function team()
	{
		$table = $this->session->userdata('account_table');
		$oldid = $this->session->userdata('account_oldid');
		$this->load->model("Dashboard_user");
		$data = $this->Dashboard_user->getData($table, $oldid);
		//var_dump($data);
		$this->load->view('user/dashboard_national_essay/team', array('data' => $data));
	}
}
?>