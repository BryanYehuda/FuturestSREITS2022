<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
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
}
?>