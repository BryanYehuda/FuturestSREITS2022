<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

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
?>