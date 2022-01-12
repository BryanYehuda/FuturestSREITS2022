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
			redirect('dashboard-national-essay');
		}
		else if ($this->session->userdata('account_username') == "FuturestREInnovation")
		{
			redirect('dashboard-re-innovation');
		}
		else if ($this->session->userdata('account_username') == "FuturestGrandTalkshow")
		{
			redirect('dashboard-grand-talkshow');
		}
		else if ($this->session->userdata('account_username') == "FuturestRE101")
		{
			redirect('dashboard-re-101');
		}
		else if ($this->session->userdata('account_username') == "FuturestClimateChangeCommunity")
		{
			redirect('dashboard-climate-change-community');
		}
		else if ($this->session->userdata('account_username') == "FuturestFinalTalkshow")
		{
			redirect('dashboard-final-talkshow');
		}
		else if ($this->session->userdata('account_username') == "FuturestAwardingNight")
		{
			redirect('dashboard-awarding-night');
		}
    }

	public function index()
	{
		
	}	
}
?>