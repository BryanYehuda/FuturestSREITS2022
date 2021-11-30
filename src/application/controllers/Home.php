<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('role') == 'admin')
        {
            redirect('admin');
        }
        else if ($this->session->userdata('role') == 'user')
        {
            redirect('user');
        }
        date_default_timezone_set("Asia/Jakarta");
    }

	public function index()
	{
		$this->load->view('home');
	}
	
	public function details()
	{
		$this->load->view('details');
	}

	public function events()
	{
		$this->load->view('events');
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function login()
    {
        $this->load->view('login');
    }

    public function register()
    {
        $this->load->view('register');
    }
}
?>