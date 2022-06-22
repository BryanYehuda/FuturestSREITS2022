<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';

class National_essay extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
		if(!($this->session->userdata('account_role') === 'admin' && $this->session->userdata('account_username') === 'FuturestNationalEssay'))
		{
			redirect('home');
		}
		date_default_timezone_set("Asia/Jakarta");
    }

	public function index()
	{
		$tableName = $this->session->userdata('account_table');
		$this->load->model("Dashboard");
		$query = $this->Dashboard->getData($tableName);
		$data = [
			'data' => count($query)
		];
		$this->load->view('admin/dashboard_national_essay/home', $data);
	}

	public function list()
	{
		$tableName = $this->session->userdata('account_table');
		$this->load->model("Dashboard");
		$data =[
			'data' => array_merge($this->Dashboard->getDataEssayWhere(2), $this->Dashboard->getDataEssayWhere(1))
		];
		$this->load->view('admin/dashboard_national_essay/list', $data);
	}

    public function confirmation()
    {
        $tableName = $this->session->userdata('account_table');
		$this->load->model("Dashboard");
		$data =[
			'data' => $this->Dashboard->getDataEssayWhere(0)
		];
		$this->load->view('admin/dashboard_national_essay/confirmation', $data);
    }

	public function esai()
    {
        $tableName = $this->session->userdata('account_table');
		$this->load->model("Dashboard");
		$data =[
			'data' => $this->Dashboard->getDataEssayWhere(2)
		];
		$this->load->view('admin/dashboard_national_essay/essaylist', $data);
    }

	public function confirm($id)
	{
		$this->load->model("Dashboard");
		$data = [
			'id' => $id,
			'status' => 1
		];
		$result = $this->Dashboard->confirmStsEssay($data);
		
		$username = $result['username'];
		$password = $result['password'];
		$email = $result['email'];
		$mail = new PHPMailer(true);
		try
		{
			$mail->isSMTP();
			$mail->Host = "ssl://smtp.gmail.com";
			$mail->SMTPAuth = "true";
			$mail->SMTPSecure = "tls";
			$mail->Port = "465";
			$mail->Username = "futurest.sreits@gmail.com";
			$mail->Password = "SREFuturest!";
			$mail->Subject = "[Confirmation] National Essay Account";
			$mail->setFrom("futurest.sreits@gmail.com", "Futurest 2022");
			$mail->Body = "Username	: $username
			<br>
			Password : $password
			<br>";
			$mail->IsHTML(TRUE);
			$mail->addAddress($email); //EMAIL BELUM DISESUAIKAN
			$mail->Send();
		} 
		catch (Exception $e)
		{
			echo "Message could not be sent. Mailer Error : {$mail->ErrorInfo}";
		}
		$mail->smtpClose();		
		$this->session->set_flashdata('response', '<div class="alert alert-success" role="alert">Berhasil mengkonfirmasi peserta!</div>');
		redirect('dashboard-national-essay-confirmation');
	}

	public function reject($id)
	{
		$this->load->model("Dashboard");
		$data = $this->Dashboard->getDataEssayId($id);	

		if($data['pendaftaranessaycompetition_teamname'] == "--INDIVIDU--")
		{
			unlink('./upload/EssayCompetition/card/' . $data['pendaftaranessaycompetition_1_card']);
			unlink('./upload/EssayCompetition/follow/' . $data['pendaftaranessaycompetition_1_follow']);
			unlink('./upload/EssayCompetition/photo/' . $data['pendaftaranessaycompetition_1_photo']);
			unlink('./upload/EssayCompetition/activestudent/' . $data['pendaftaranessaycompetition_1_activestudent']);
		}
		else
		{
			unlink('./upload/EssayCompetition/card/' . $data['pendaftaranessaycompetition_1_card']);
			unlink('./upload/EssayCompetition/follow/' . $data['pendaftaranessaycompetition_1_follow']);
			unlink('./upload/EssayCompetition/photo/' . $data['pendaftaranessaycompetition_1_photo']);
			unlink('./upload/EssayCompetition/activestudent/' . $data['pendaftaranessaycompetition_1_activestudent']);
			unlink('./upload/EssayCompetition/card/' . $data['pendaftaranessaycompetition_2_card']);
			unlink('./upload/EssayCompetition/follow/' . $data['pendaftaranessaycompetition_2_follow']);
			unlink('./upload/EssayCompetition/photo/' . $data['pendaftaranessaycompetition_2_photo']);
			unlink('./upload/EssayCompetition/activestudent/' . $data['pendaftaranessaycompetition_2_activestudent']);
		}
		//unlink('./upload/EssayCompetition/payment/' . $data['pendaftaranessaycompetition_payment']);
		$this->Dashboard->deleteDataEssayId($id);
		$mail = new PHPMailer(true);
		try
		{
			$mail->isSMTP();
			$mail->Host = "ssl://smtp.gmail.com";
			$mail->SMTPAuth = "true";
			$mail->SMTPSecure = "tls";
			$mail->Port = "465";
			$mail->Username = "futurest.sreits@gmail.com";
			$mail->Password = "SREFuturest!";
			$mail->Subject = "[Confirmation] National Essay Account";
			$mail->setFrom("futurest.sreits@gmail.com", "Futurest 2022");
			$mail->Body = "Data Rejected";
			$mail->IsHTML(TRUE);
			$mail->addAddress($data['pendaftaranessaycompetition_1_email']); //EMAIL BELUM DISESUAIKAN
			$mail->Send();
		} 
		catch (Exception $e)
		{
			echo "Message could not be sent. Mailer Error : {$mail->ErrorInfo}";
		}
		$mail->smtpClose();		
		$this->session->set_flashdata('response', '<div class="alert alert-success" role="alert">Berhasil mereject peserta!</div>');
		redirect('dashboard-national-essay-confirmation');
	}

	public function payment()
    {
        $tableName = $this->session->userdata('account_table');
		$this->load->model("Dashboard");
		$data =[
			'data' => array_merge($this->Dashboard->getDataEssayWhere(1), $this->Dashboard->getDataEssayWhere(2))
		];
		$this->load->view('admin/dashboard_national_essay/payment', $data);
    }
	
	public function confirmpay($id)
	{
		$this->load->model("Dashboard");
		$this->Dashboard->confirmEssaypay($id);
		$this->session->set_flashdata('response', '<div class="alert alert-success" role="alert">Berhasil mengubah status pembayaran peserta!</div>');
		redirect('dashboard-national-essay-payment');
	}

	public function cancelpay($id)
	{
		$this->load->model("Dashboard");
		$this->Dashboard->cancelEssaypay($id);
		$this->session->set_flashdata('response', '<div class="alert alert-danger" role="alert">Berhasil membatalkan status pembayaran peserta!</div>');
		redirect('dashboard-national-essay-payment');
	}
}
?>