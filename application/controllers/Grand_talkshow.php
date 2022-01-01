<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

class Grand_talkshow extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
		if(!($this->session->userdata('account_role') === 'admin' && $this->session->userdata('account_username') === 'FuturestGrandTalkshow'))
		{
			redirect('home');
		}
		date_default_timezone_set("Asia/Jakarta");
    }

	public function index()
	{
		$tableName = $this->session->userdata('account_table');
		$this->load->model("dashboard");
		$query = $this->dashboard->getData($tableName);
		$data = [
			'data' => count($query)
		];
		$this->load->view('admin/dashboard_grand_talkshow/home', $data);
	}

	public function list()
	{
		$tableName = $this->session->userdata('account_table');
		$this->load->model("dashboard");
		$data =[
			'data' => $this->dashboard->getData($tableName)
		];
		$this->load->view('admin/dashboard_grand_talkshow/list', $data);
	}

	public function confirmation()
	{
		$tableName = $this->session->userdata('account_table');
		$this->load->model("dashboard");
		$data = $this->dashboard->getData($tableName);
		$this->load->view('admin/dashboard_grand_talkshow/confirmation', $data);
	}

	public function email()
	{
		$mail = new PHPMailer(true);
		try
		{
			$mail->isSMTP();
			$mail->Host = "ssl://smtp.gmail.com";
			$mail->SMTPAuth = "true";
			$mail->SMTPSecure = "tls";
			$mail->Port = "465";
			$mail->Username = "futurestits2022@gmail.com";
			$mail->Password = "SREFuturest!";
			$mail->Subject = "Testing email function using PHPMailer";
			$mail->setFrom("futurestits2022@gmail.com", "Futurest 2022");
			$mail->Body = "This is email function";
			$mail->addAddress("wibowohafizhabid@yahoo.co.id");
			$mail->Send();
		} 
		catch (Exception $e)
		{
			echo "Message could not be sent. Mailer Error : {$mail->ErrorInfo}";
		}
		$mail->smtpClose();
	}
}
