<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
		if(!($this->session->userdata('account_role')) === 'admin')
		{
			redirect('home');
		}
		date_default_timezone_set("Asia/Jakarta");
		if($this->session->userdata('account_username') == "FuturestNationalEssay")
		{
			
		}
		else if ($this->session->userdata('account_username') == "FuturestREInnovation")
		{
			
		}
		else if ($this->session->userdata('account_username') == "FuturestGrandTalkshow")
		{
			redirect('dashboard-grand-talkshow');
		}
		else if ($this->session->userdata('account_username') == "FuturestRE101")
		{

		}
		else if ($this->session->userdata('account_username') == "FuturestClimateChangeCommunity")
		{

		}
		else if ($this->session->userdata('account_username') == "FuturestFinalTalkshow")
		{

		}
		else if ($this->session->userdata('account_username') == "FuturestAwardingNight")
		{

		}
    }

	public function index()
	{
		
	}	
}
?>