<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';

class Re_innovation extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
		if(!($this->session->userdata('account_role') === 'admin' && $this->session->userdata('account_username') === 'FuturestREInnovation'))
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
		$this->load->view('admin/dashboard_re_innovation/home', $data);
	}

	public function list()
	{
		$tableName = $this->session->userdata('account_table');
		$this->load->model("Dashboard");
		$data =[
			'data' => $this->Dashboard->getDataREIWhere(1)
		];
		$this->load->view('admin/dashboard_re_innovation/list', $data);
	}

    public function confirmation()
    {
        $tableName = $this->session->userdata('account_table');
		$this->load->model("Dashboard");
		$data =[
			'data' => $this->Dashboard->getDataREIWhere(0)
		];
		$this->load->view('admin/dashboard_re_innovation/confirmation', $data);
    }

	public function confirm($id)
	{
		$this->load->model("Dashboard");
		$data = [
			'id' => $id,
			'status' => 1
		];
		$result = $this->Dashboard->confirmStsREI($data);
		
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
			$mail->Subject = "[Confirmation] RE Innovation Account";
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
		redirect('dashboard-re-innovation-confirmation');
	}

	public function reject($id)
	{
		$this->load->model("Dashboard");
		$data = $this->Dashboard->getDataREIId($id);

        if(file_exists('./upload/EssayCompetition/card/' . $data['pendaftaranreinnovation_1_card'])){
            unlink('./upload/EssayCompetition/card/' . $data['pendaftaranreinnovation_1_card']);
        }
        if(file_exists('./upload/EssayCompetition/follow/' . $data['pendaftaranreinnovation_1_follow'])){
            unlink('./upload/EssayCompetition/follow/' . $data['pendaftaranreinnovation_1_follow']);
        }
        if(file_exists('./upload/EssayCompetition/photo/' . $data['pendaftaranreinnovation_1_photo'])){
            unlink('./upload/EssayCompetition/photo/' . $data['pendaftaranreinnovation_1_photo']);
        }
        if(file_exists('./upload/EssayCompetition/activestudent/' . $data['pendaftaranreinnovation_1_activestudent'])){
            unlink('./upload/EssayCompetition/activestudent/' . $data['pendaftaranreinnovation_1_activestudent']);
        }
        if(file_exists('./upload/EssayCompetition/card/' . $data['pendaftaranreinnovation_2_card'])){
            unlink('./upload/EssayCompetition/card/' . $data['pendaftaranreinnovation_2_card']);
        }
        if(file_exists('./upload/EssayCompetition/follow/' . $data['pendaftaranreinnovation_2_follow'])){
            unlink('./upload/EssayCompetition/follow/' . $data['pendaftaranreinnovation_2_follow']);
        }
        if(file_exists('./upload/EssayCompetition/photo/' . $data['pendaftaranreinnovation_2_photo'])){
            unlink('./upload/EssayCompetition/photo/' . $data['pendaftaranreinnovation_2_photo']);
        }
        if(file_exists('./upload/EssayCompetition/activestudent/' . $data['pendaftaranreinnovation_2_activestudent'])){
            unlink('./upload/EssayCompetition/activestudent/' . $data['pendaftaranreinnovation_2_activestudent']);
        }
        if(file_exists('./upload/EssayCompetition/card/' . $data['pendaftaranreinnovation_3_card'])){
            unlink('./upload/EssayCompetition/card/' . $data['pendaftaranreinnovation_3_card']);
        }
        if(file_exists('./upload/EssayCompetition/follow/' . $data['pendaftaranreinnovation_3_follow'])){
            unlink('./upload/EssayCompetition/follow/' . $data['pendaftaranreinnovation_3_follow']);
        }
        if(file_exists('./upload/EssayCompetition/photo/' . $data['pendaftaranreinnovation_3_photo'])){
            unlink('./upload/EssayCompetition/photo/' . $data['pendaftaranreinnovation_3_photo']);
        }
        if(file_exists('./upload/EssayCompetition/activestudent/' . $data['pendaftaranreinnovation_3_activestudent'])){
            unlink('./upload/EssayCompetition/activestudent/' . $data['pendaftaranreinnovation_3_activestudent']);
        }
        /*if(file_exists('./upload/EssayCompetition/payment/' . $data['pendaftaranreinnovation_payment'])){
            unlink('./upload/EssayCompetition/payment/' . $data['pendaftaranreinnovation_payment']);
        }*/
		$this->Dashboard->deleteDataREIId($id);
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
			$mail->addAddress($data['pendaftaranreinnovation_1_email']); //EMAIL BELUM DISESUAIKAN
			$mail->Send();
		} 
		catch (Exception $e)
		{
			echo "Message could not be sent. Mailer Error : {$mail->ErrorInfo}";
		}
		$mail->smtpClose();		
		$this->session->set_flashdata('response', '<div class="alert alert-success" role="alert">Berhasil mereject peserta!</div>');
		redirect('dashboard-re-innovation-confirmation');
	}
}
?>