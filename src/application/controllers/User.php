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
		if($table === 'pendaftaran_essaycompetition'){
			$this->load->view('user/dashboard_national_essay/home', array('data' => $data));
		}elseif($table === 'pendaftaran_reinnovation'){
			$this->load->view('user/dashboard_re_innovation/home', array('data' => $data));
		}
		
	}
	/*
	public function payment()
	{
		$table = $this->session->userdata('account_table');
		$oldid = $this->session->userdata('account_oldid');
		$this->load->model("Dashboard_user");
		$data = $this->Dashboard_user->getData($table, $oldid);
		//var_dump($data);
		if($table === 'pendaftaran_essaycompetition'){
			$this->load->view('user/dashboard_national_essay/payment', array('data' => $data));
		}elseif($table === 'pendaftaran_reinnovation'){
			$this->load->view('user/dashboard_re_innovation/payment', array('data' => $data));
		}
	}
	*/
	public function team()
	{
		$table = $this->session->userdata('account_table');
		$oldid = $this->session->userdata('account_oldid');
		$this->load->model("Dashboard_user");
		$data = $this->Dashboard_user->getData($table, $oldid);
		//var_dump($data);
		if($table === 'pendaftaran_essaycompetition'){
			$this->load->view('user/dashboard_national_essay/team', array('data' => $data));
		}elseif($table === 'pendaftaran_reinnovation'){
			$this->load->view('user/dashboard_re_innovation/team', array('data' => $data));
		}
	}

	public function abstract()
	{
		if($this->session->userdata('account_table') != 'pendaftaran_reinnovation'){
			redirect('./');
		}
		$this->load->view('user/dashboard_re_innovation/abstract');
	}

	public function fullpaper()
	{
		if($this->session->userdata('account_table') != 'pendaftaran_reinnovation'){
			redirect('user');
		}
		$this->load->view('user/dashboard_re_innovation/fullpaper');
	}

	public function powerpoint()
	{
		if($this->session->userdata('account_table') != 'pendaftaran_reinnovation'){
			redirect('user');
		}
		$this->load->view('user/dashboard_re_innovation/ppt');
	}

	public function essay()
	{
		if($this->session->userdata('account_table') != 'pendaftaran_essaycompetition'){
			redirect('user');
		}
		$this->load->view('user/dashboard_national_essay/esai');
	}

	public function submitabstract()
	{
		if($this->session->userdata('account_table') != 'pendaftaran_reinnovation'){
			redirect('user');
		}
		$this->load->model("Dashboard_user");

		$data['id'] = $this->session->userdata('account_oldid');

		$config = array(
			'allowed_types'	=> 'pdf',
			'max_size'	 	=> 2050,
			'max_width' 	=> 10000,
			'max_height' 	=> 10000,
			'upload_path'	=> './upload/REinnovation/abstract'
		);
		$this->load->library('upload', $config);

		if($this->upload->do_upload('abstract')){
			$data['abstract'] = $this->upload->data('file_name');
			$this->Dashboard_user->submitabstract($data);
			$this->session->set_flashdata('response', '<div class="alert alert-success" role="alert">Berhasil mengunggah abstract!</div>');
			echo '1';
		}else{
			$error['abstract'] = $this->upload->display_errors();
			echo json_encode($error);
		}
	}

	public function submitfullpaper()
	{
		if($this->session->userdata('account_table') != 'pendaftaran_reinnovation'){
			redirect('user');
		}
		$this->load->model("Dashboard_user");

		$data['id'] = $this->session->userdata('account_oldid');

		$config = array(
			'allowed_types'	=> 'pdf',
			'max_size'	 	=> 2050,
			'max_width' 	=> 10000,
			'max_height' 	=> 10000,
			'upload_path'	=> './upload/REinnovation/fullpaper'
		);
		$this->load->library('upload', $config);

		if($this->upload->do_upload('fullpaper')){
			$data['fullpaper'] = $this->upload->data('file_name');
			$this->Dashboard_user->submitfullpaper($data);
			$this->session->set_flashdata('response', '<div class="alert alert-success" role="alert">Berhasil mengunggah full paper!</div>');
			echo '1';
		}else{
			$error['fullpaper'] = $this->upload->display_errors();
			echo json_encode($error);
		}
	}

	public function submitppt()
	{
		if($this->session->userdata('account_table') != 'pendaftaran_reinnovation'){
			redirect('user');
		}
		$this->load->model("Dashboard_user");

		$data['id'] = $this->session->userdata('account_oldid');

		$config = array(
			'allowed_types'	=> 'pptx|ppt|pdf',
			'max_size'	 	=> 5000,
			'max_width' 	=> 10000,
			'max_height' 	=> 10000,
			'upload_path'	=> './upload/REinnovation/ppt'
		);
		$this->load->library('upload', $config);

		if($this->upload->do_upload('ppt')){
			$data['ppt'] = $this->upload->data('file_name');
			$this->Dashboard_user->submitppt($data);
			$this->session->set_flashdata('response', '<div class="alert alert-success" role="alert">Berhasil mengunggah power point!</div>');
			echo '1';
		}else{
			$error['ppt'] = $this->upload->display_errors();
			echo json_encode($error);
		}
	}

	public function submitesai()
	{
		if($this->session->userdata('account_table') != 'pendaftaran_essaycompetition'){
			redirect('user');
		}
		$this->load->model("Dashboard_user");

		$data['id'] = $this->session->userdata('account_oldid');

		$config = array(
			'allowed_types'	=> 'pdf',
			'max_size'	 	=> 5000,
			'max_width' 	=> 10000,
			'max_height' 	=> 10000,
			'upload_path'	=> './upload/EssayCompetition/esai'
		);
		$this->load->library('upload', $config);

		if($this->upload->do_upload('Essay')){
			$data['Essay'] = $this->upload->data('file_name');
			$this->Dashboard_user->submitesai($data);
			$this->session->set_flashdata('response', '<div class="alert alert-success" role="alert">Berhasil mengunggah Essay!</div>');
			echo '1';
		}else{
			$error['Essay'] = $this->upload->display_errors();
			echo json_encode($error);
		}
	}
}
?>