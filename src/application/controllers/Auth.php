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
		if($this->session->userdata('account_role') == 'admin')
		{
			redirect('admin');
		}
		else if ($this->session->userdata('account_role') == 'user')
		{
			redirect('user');
		}

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if($this->form_validation->run() == false)
		{
			redirect('login');
		}
		else
		{
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('account', ['account_username' => $username])->row_array();
		
		if($user)
		{
			if($user['account_role'] == 'admin')
			{
				if($password == $user['account_password'])
				{
					$data = array(
						'account_username' => $user['account_username'],
						'account_role' => $user['account_role'],
						'account_event/comp' => $user['account_event/comp']
					);
					$this->session->set_userdata($data);
					redirect('admin');
				}
				else
				{
					$this->session->set_flashdata('message', '
                    <div class="alert alert-danger" role="alert">
                        Wrong password!
                    </div>');
					redirect('login');
				}
			}
			else if($user['account_role'] == 'user')
			{
				if($password == $user['account_password'])
				{
					$data = [
						'account_username' => $user['account_username'],
						'account_role' => $user['account_role'],
						'account_event/comp' => $user['account_event/comp']
					];
					$this->session->set_userdata($data);
					redirect('user');
				}
				else
				{
					$this->session->set_flashdata('message', '
                    <div class="alert alert-danger" role="alert">
                        Wrong password!
                    </div>');
					redirect('login');
				}
			}
		}
		else
		{
			$this->session->set_flashdata('message', '
            <div class="alert alert-danger" role="alert">
				You have not registered yet!
            </div>');
			redirect('login');
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