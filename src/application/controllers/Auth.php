<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');
		date_default_timezone_set("Asia/Jakarta");
    }

	public function logging_in()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required', [
			'required' => "Username harus diisi!"
		]);
		$this->form_validation->set_rules('password', 'Password', 'trim|required', [
			'required' => "Password harus diisi!"
		]);

		if($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('usernameError', form_error('username', '<small class="text-danger">', '</small>'));
			$this->session->set_flashdata('passwordError', form_error('password', '<small class="text-danger">', '</small>'));
			redirect('login');
		}
		else
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->load->model('Login');
			$user = $this->Login->getUser($username);
			if($user)
			{
				if(password_verify($password, $user['account_password']))
				{
					$data = array(
						'account_id' => $user['account_id'],
						'account_oldid' => $user['account_oldid'],
						'account_username' => $user['account_username'],
						'account_role' => $user['account_role'],
						'account_table' => $user['account_table']
					);
					$this->session->set_userdata($data);
					if($user['account_role'] == 'admin')
					{
						redirect('admin');
					}
					else if($user['account_role'] == 'user')
					{
						redirect('user');
					}
				}
				else
				{
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password salah! </div>');
					redirect('login');
				}
			}
			else
			{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Akun tidak terdaftar! </div>');
				redirect('login');
			}	
		}
	}

	public function logout()
	{
		if(!($this->session->userdata('account_role')))
		{
			redirect('home');
		}
		$this->session->sess_destroy();
		redirect('home');
	}
}
?>