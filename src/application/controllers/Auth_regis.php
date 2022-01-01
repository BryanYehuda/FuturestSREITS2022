<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';

class Auth_regis extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
    }
	
    public function regisRE101(){
        $this->load->model("REGISTRASI");
        $config = array(
			'allowed_types'	=> 'gif|jpg|png',
			'max_size'	 	=> 10000,
			'max_width' 	=> 10000,
			'max_height' 	=> 10000
		);

        $config['upload_path']	= './upload/RE101/followfuturestig';
        $this->load->library('upload', $config, 'followfuturestig');
		$this->followfuturestig->initialize($config);
        $foto = $this->followfuturestig->do_upload('followfuturestig');

        $config['upload_path']	= './upload/RE101/followsreig';
        $this->load->library('upload', $config, 'followsreig');
		$this->followsreig->initialize($config);
        $foto = $this->followsreig->do_upload('followsreig');

        $config['upload_path']	= './upload/RE101/sharestory';
        $this->load->library('upload', $config, 'sharestory');
		$this->sharestory->initialize($config);
        $foto = $this->sharestory->do_upload('sharestory');

        $data = array(
			'followfuturestig' 	=> $this->followfuturestig->data('file_name'),
			'followsreig' 	    => $this->followsreig->data('file_name'),
			'sharestory' 	    => $this->sharestory->data('file_name')
		);

		$error = array(
			'followfuturestig' 	=> $this->followfuturestig->display_errors(),
			'followsreig'       => $this->followsreig->display_errors(),
			'sharestory'        => $this->sharestory->display_errors()
		);
        if(!$this->form_validation->run() || !$this->REGISTRASI->is_it_empty($error)){
			$error = array_merge($error, $this->form_validation->error_array());
			if(empty($error['followfuturestig'])){
				$path = './upload/RE101/followfuturestig/';
				unlink($path.$data['followfuturestig']);
			}
			if(empty($error['followsreig'])){
				$path = './upload/RE101/followsreig/';
				unlink($path.$data['followsreig']);
			}
			if(empty($error['sharestory'])){
				$path = './upload/RE101/sharestory/';
				unlink($path.$data['sharestory']);
			}
			echo json_encode($error);
		}else{
			$this->REGISTRASI->regisRE101($data);
			echo "1";
		}
    }

	public function regisGrandTalkshow(){
	    //var_dump($this->input->post());
        $this->load->model("Registrasi");
        $config = array(
			'allowed_types'	=> 'gif|jpg|png',
			'max_size'	 	=> 10000,
			'max_width' 	=> 10000,
			'max_height' 	=> 10000
		);

        $config['upload_path']	= './upload/GrandTalkshow/followfuturestig';
        $this->load->library('upload', $config, 'followfuturestig');
		$this->followfuturestig->initialize($config);
        $foto = $this->followfuturestig->do_upload('followfuturestig');

        $config['upload_path']	= './upload/GrandTalkshow/followsreig';
        $this->load->library('upload', $config, 'followsreig');
		$this->followsreig->initialize($config);
        $foto = $this->followsreig->do_upload('followsreig');

        $config['upload_path']	= './upload/GrandTalkshow/sharestory';
        $this->load->library('upload', $config, 'sharestory');
		$this->sharestory->initialize($config);
        $foto = $this->sharestory->do_upload('sharestory');

        $data = array(
			'followfuturestig' 	=> $this->followfuturestig->data('file_name'),
			'followsreig' 	    => $this->followsreig->data('file_name'),
			'sharestory' 	    => $this->sharestory->data('file_name')
		);

		$error = array(
			'followfuturestig' 	=> $this->followfuturestig->display_errors(),
			'followsreig'       => $this->followsreig->display_errors(),
			'sharestory'        => $this->sharestory->display_errors()
		);
        //var_dump($this->input->post());
        if(!$this->form_validation->run() || !$this->Registrasi->is_it_empty($error)){
			$error = array_merge($error, $this->form_validation->error_array());
			if(empty($error['followfuturestig'])){
				$path = './upload/GrandTalkshow/followfuturestig/';
				unlink($path.$data['followfuturestig']);
			}
			if(empty($error['followsreig'])){
				$path = './upload/GrandTalkshow/followsreig/';
				unlink($path.$data['followsreig']);
			}
			if(empty($error['sharestory'])){
				$path = './upload/GrandTalkshow/sharestory/';
				unlink($path.$data['sharestory']);
			}
			
			echo json_encode($error);
		}else{
			$this->Registrasi->regisGrandTalkshow($data);
			$name = $this->input->post('name');
			$university = $this->input->post('university');
			$email = $this->input->post('email');
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
				$mail->Subject = "[Confirmation] Grand Talkshow: The Urgency of Climate Change Mitigation";
				$mail->setFrom("futurest.sreits@gmail.com", "Futurest 2022");
				$mail->Body = "Dear $name from $university,<br>
				<br>
				Thank you for registering for our event, \"Grand Talkshow: The Urgency of Climate Change Mitigation.\"<br>
				<br>
				Hereby, we've received your submission. We'll check the completeness of the requirements that have been submitted.<br>
				<br>
				This is the confirmation email, and you will receive an invitation email one day before the event is held.<br>
				<br>
				Thank you.<br>
				<br>
				--<br>
				Best regards,<br>
				<br>
				Future Energy Summit 2022";
				$mail->IsHTML(TRUE);
				$mail->addAddress($email);
				$mail->Send();
			} 
			catch (Exception $e)
			{
				echo "Message could not be sent. Mailer Error : {$mail->ErrorInfo}";
			}
			$mail->smtpClose();
			echo "1";
		}
    }

	public function regisFinalTalkshow(){
        $this->load->model("REGISTRASI");
        $config = array(
			'allowed_types'	=> 'gif|jpg|png',
			'max_size'	 	=> 10000,
			'max_width' 	=> 10000,
			'max_height' 	=> 10000
		);

        $config['upload_path']	= './upload/FinalTalkshow/followfuturestig';
        $this->load->library('upload', $config, 'followfuturestig');
		$this->followfuturestig->initialize($config);
        $foto = $this->followfuturestig->do_upload('followfuturestig');

        $config['upload_path']	= './upload/FinalTalkshow/followsreig';
        $this->load->library('upload', $config, 'followsreig');
		$this->followsreig->initialize($config);
        $foto = $this->followsreig->do_upload('followsreig');

        $config['upload_path']	= './upload/FinalTalkshow/sharestory';
        $this->load->library('upload', $config, 'sharestory');
		$this->sharestory->initialize($config);
        $foto = $this->sharestory->do_upload('sharestory');

        $data = array(
			'followfuturestig' 	=> $this->followfuturestig->data('file_name'),
			'followsreig' 	    => $this->followsreig->data('file_name'),
			'sharestory' 	    => $this->sharestory->data('file_name')
		);

		$error = array(
			'followfuturestig' 	=> $this->followfuturestig->display_errors(),
			'followsreig'       => $this->followsreig->display_errors(),
			'sharestory'        => $this->sharestory->display_errors()
		);
        //var_dump($this->input->post());
        if(!$this->form_validation->run() || !$this->REGISTRASI->is_it_empty($error)){
			$error = array_merge($error, $this->form_validation->error_array());
			if(empty($error['followfuturestig'])){
				$path = './upload/FinalTalkshow/followfuturestig/';
				unlink($path.$data['followfuturestig']);
			}
			if(empty($error['followsreig'])){
				$path = './upload/FinalTalkshow/followsreig/';
				unlink($path.$data['followsreig']);
			}
			if(empty($error['sharestory'])){
				$path = './upload/FinalTalkshow/sharestory/';
				unlink($path.$data['sharestory']);
			}
			echo json_encode($error);
		}else{
			$this->REGISTRASI->regisFinalTalkshow($data);
			echo "1";
		}
    }

	public function regisClimateChange(){
		//echo var_dump(empty($this->input->post('prioritze')) && empty($this->input->post('willingness')) && empty($this->input->post('committed')));
		$this->load->model("REGISTRASI");
        $config = array(
			'allowed_types'	=> 'pdf|gif|jpg|png',
			'max_size'	 	=> 10000,
			'max_width' 	=> 10000,
			'max_height' 	=> 10000
		);

        $config['upload_path']	= './upload/3C/followfuturestig';
        $this->load->library('upload', $config, 'followfuturestig');
		$this->followfuturestig->initialize($config);
        $foto = $this->followfuturestig->do_upload('followfuturestig');

        $config['upload_path']	= './upload/3C/followsreig';
        $this->load->library('upload', $config, 'followsreig');
		$this->followsreig->initialize($config);
        $foto = $this->followsreig->do_upload('followsreig');

        $config['upload_path']	= './upload/3C/twibbon';
        $this->load->library('upload', $config, 'twibbon');
		$this->twibbon->initialize($config);
        $foto = $this->twibbon->do_upload('twibbon');

		$config['upload_path']	= './upload/3C/sharestory';
        $this->load->library('upload', $config, 'sharestory');
		$this->sharestory->initialize($config);
        $foto = $this->sharestory->do_upload('sharestory');

		$config['upload_path']	= './upload/3C/CV';
        $this->load->library('upload', $config, 'CV');
		$this->CV->initialize($config);
        $foto = $this->CV->do_upload('CV');

        $data = array(
			'followfuturestig' 	=> $this->followfuturestig->data('file_name'),
			'followsreig' 	    => $this->followsreig->data('file_name'),
			'sharestory' 	    => $this->sharestory->data('file_name'),
			'twibbon'			=> $this->twibbon->data('file_name'),
			'CV'				=> $this->CV->data('file_name')
		);

		$error = array(
			'followfuturestig' 	=> $this->followfuturestig->display_errors(),
			'followsreig'       => $this->followsreig->display_errors(),
			'sharestory'        => $this->sharestory->display_errors(),
			'twibbon' 	        => $this->sharestory->display_errors(),
			'CV'				=> $this->CV->display_errors()
		);
        //var_dump($this->input->post());
        if((!$this->form_validation->run() || !$this->REGISTRASI->is_it_empty($error) || (empty($this->input->post('prioritze')) || empty($this->input->post('willingness')) || empty($this->input->post('committed'))))){
			$error = array_merge($error, $this->form_validation->error_array());
			if(empty($error['followfuturestig'])){
				$path = './upload/3C/followfuturestig/';
				unlink($path.$data['followfuturestig']);
			}
			if(empty($error['followsreig'])){
				$path = './upload/3C/followsreig/';
				unlink($path.$data['followsreig']);
			}
			if(empty($error['sharestory'])){
				$path = './upload/3C/sharestory/';
				unlink($path.$data['sharestory']);
			}
			if(empty($error['twibbon'])){
				$path = './upload/3C/twibbon/';
				unlink($path.$data['twibbon']);
			}
			if(empty($error['CV'])){
				$path = './upload/3C/CV/';
				unlink($path.$data['CV']);
			}
			echo json_encode($error);
		}else{
			$this->REGISTRASI->regis3C($data);
			echo "1";
		}
	}

	public function regisReInnovation(){
		$this->load->model("REGISTRASI");
		//jpg|png|jpeg
		$config = array(
			'allowed_types'	=> 'pdf',
			'max_size'	 	=> 10000,
			'max_width' 	=> 10000,
			'max_height' 	=> 10000
		);

		$config['upload_path']	= './upload/REinnovation/card';
        $this->load->library('upload', $config, 'card');
		$this->card->initialize($config);
        $this->card->do_upload('card_1');
		$data['card_1'] = $this->card->data('file_name');
		$error['card_1'] = $this->card->display_errors();
		$this->load->library('upload', $config, 'card2');
		$this->card2->do_upload('card_2');
		$data['card_2'] = $this->card2->data('file_name');
		$error['card_2'] = $this->card2->display_errors();
		if(!empty($_FILES['card_3']['name'])){
			$this->load->library('upload', $config, 'card3');
			$this->card3->do_upload('card_3');
			$data['card_3'] = $this->card3->data('file_name');
			$error['card_3'] = $this->card3->display_errors();
		}
			

		$config['upload_path']	= './upload/REinnovation/activestudent';
        $this->load->library('upload', $config, 'activestudent');
		$this->activestudent->initialize($config);
        $this->activestudent->do_upload('activestudent_1');
		$data['activestudent_1'] = $this->activestudent->data('file_name');
		$error['activestudent_1'] = $this->activestudent->display_errors();
		$this->load->library('upload', $config, 'activestudent2');
		$this->activestudent2->do_upload('activestudent_2');
		$data['activestudent_2'] = $this->activestudent2->data('file_name');
		$error['activestudent_2'] = $this->activestudent2->display_errors();
		if(!empty($_FILES['activestudent_3']['name'])){
			$this->load->library('upload', $config, 'activestudent3');
			$this->activestudent3->do_upload('activestudent_3');
			$data['activestudent_3'] = $this->activestudent3->data('file_name');
			$error['activestudent_3'] = $this->activestudent3->display_errors();
		}
			

		$config['allowed_types'] = 'jpg|png|jpeg';

		$config['upload_path']	= './upload/REinnovation/follow';
        $this->load->library('upload', $config, 'follow');
		$this->follow->initialize($config);
        $this->follow->do_upload('follow_1');
		$data['follow_1'] = $this->follow->data('file_name');
		$error['follow_1'] = $this->follow->display_errors();
		$this->load->library('upload', $config, 'follow2');
		$this->follow2->do_upload('follow_2');
		$data['follow_2'] = $this->follow2->data('file_name');
		$error['follow_2'] = $this->follow2->display_errors();
		if(!empty($_FILES['follow_3']['name'])){
			$this->load->library('upload', $config, 'follow3');
			$this->follow3->do_upload('follow_3');
			$data['follow_3'] = $this->follow3->data('file_name');
			$error['follow_3'] = $this->follow3->display_errors();
		}
			
		
		$config = array(
			'allowed_types'	=> 'jpg|png|jpeg',
			'max_size'	 	=> 3000,
			'max_width' 	=> 410,
			'max_height' 	=> 610
		);
		
		$config['upload_path']	= './upload/REinnovation/photo';
        $this->load->library('upload', $config, 'photo');
		$this->photo->initialize($config);
        $this->photo->do_upload('photo_1');
		$data['photo_1'] = $this->photo->data('file_name');
		$error['photo_1'] = $this->photo->display_errors();
		$this->load->library('upload', $config, 'photo2');
		$this->photo2->do_upload('photo_2');
		$data['photo_2'] = $this->photo2->data('file_name');
		$error['photo_2'] = $this->photo2->display_errors();
		if(!empty($_FILES['photo_3']['name'])){
			$this->load->library('upload', $config, 'photo3');
			$this->photo3->do_upload('photo_3');
			$data['photo_3'] = $this->photo3->data('file_name');
			$error['photo_3'] = $this->photo3->display_errors();
		}
			
		$config = array(
			'allowed_types' => 'jpg|png|jpeg',
			'upload_path'	=> './upload/REinnovation/payment'
		);

		$this->load->library('upload', $config, 'payment');
		$this->payment->initialize($config);
        $this->payment->do_upload('payment');
		$data['payment'] = $this->payment->data('file_name');
		$error['payment'] = $this->payment->display_errors();
		
		if(!$this->form_validation->run() || !$this->REGISTRASI->is_it_empty($error)){
			$error = array_merge($error, $this->form_validation->error_array());
			if(empty($error['photo_1'])){
				$path = './upload/REinnovation/photo/';
				unlink($path.$data['photo_1']);
			}
			if(empty($error['photo_2'])){
				$path = './upload/REinnovation/photo/';
				unlink($path.$data['photo_2']);
			}
			if(empty($error['photo_3']) && !empty($_FILES['photo_3']['name'])){
				$path = './upload/REinnovation/photo/';
				unlink($path.$data['photo_3']);
			}
			if(empty($error['follow_1'])){
				$path = './upload/REinnovation/follow/';
				unlink($path.$data['follow_1']);
			}
			if(empty($error['follow_2'])){
				$path = './upload/REinnovation/follow/';
				unlink($path.$data['follow_2']);
			}
			if(empty($error['follow_3']) && !empty($_FILES['follow_3']['name'])){
				$path = './upload/REinnovation/follow/';
				unlink($path.$data['follow_3']);
			}
			if(empty($error['activestudent_1'])){
				$path = './upload/REinnovation/activestudent/';
				unlink($path.$data['activestudent_1']);
			}
			if(empty($error['activestudent_2'])){
				$path = './upload/REinnovation/activestudent/';
				unlink($path.$data['activestudent_2']);
			}
			if(empty($error['activestudent_3']) && !empty($_FILES['activestudent_3']['name'])){
				$path = './upload/REinnovation/activestudent/';
				unlink($path.$data['activestudent_3']);
			}
			if(empty($error['card_1'])){
				$path = './upload/REinnovation/card/';
				unlink($path.$data['card_1']);
			}
			if(empty($error['card_2'])){
				$path = './upload/REinnovation/card/';
				unlink($path.$data['card_2']);
			}
			if(empty($error['card_3']) && !empty($_FILES['card_3']['name'])){
				$path = './upload/REinnovation/card/';
				unlink($path.$data['card_3']);
			}
			if(empty($error['payment'])){
				$path = './upload/REinnovation/payment/';
				unlink($path.$data['payment']);
			}
			
			echo json_encode($error);
		}else{
			$this->REGISTRASI->regisReInnovation($data);
			echo "1";
		}
	}

	public function regisEssayCompIndividu(){
		$this->load->model("REGISTRASI");
		$config = array(
			'allowed_types'	=> 'pdf',
			'max_size'	 	=> 10000,
			'max_width' 	=> 10000,
			'max_height' 	=> 10000,
			'upload_path'	=> './upload/EssayCompetition/card'
		);

        $this->load->library('upload', $config, 'card');
		$this->card->initialize($config);
        $this->card->do_upload('card_1');

		$config = array(
			'allowed_types' => 'jpg|png|jpeg',
			'upload_path'	=> './upload/EssayCompetition/follow'
		);

		$this->load->library('upload', $config, 'follow');
		$this->follow->initialize($config);
        $this->follow->do_upload('follow_1');

		$config = array(
			'allowed_types' => 'jpg|png|jpeg',
			'upload_path'	=> './upload/EssayCompetition/payment'
		);

		$this->load->library('upload', $config, 'payment');
		$this->payment->initialize($config);
        $this->payment->do_upload('payment');

		$config = array(
			'allowed_types' => 'jpg|png|jpeg',
			'max_size'	 	=> 3000,
			'max_width' 	=> 410,
			'max_height' 	=> 610,
			'upload_path'	=> './upload/EssayCompetition/photo'
		);
		
		$this->load->library('upload', $config, 'photo');
		$this->photo->initialize($config);
        $this->photo->do_upload('photo_1');

		$data = array(
			'card_1' 		=> $this->card->data('file_name'),
			'follow_1' 	    => $this->follow->data('file_name'),
			'photo_1' 	    => $this->photo->data('file_name'),
			'payment'		=> $this->payment->data('file_name')
		);

		$error = array(
			'card_1' 		=> $this->card->display_errors(),
			'follow_1'      => $this->follow->display_errors(),
			'photo_1'       => $this->photo->display_errors(),
			'payment'		=> $this->payment->display_errors()
		);

		if(!$this->form_validation->run() || !$this->REGISTRASI->is_it_empty($error)){
			$error = array_merge($error, $this->form_validation->error_array());
			if(empty($error['card_1'])){
				$path = './upload/EssayCompetition/card/';
				unlink($path.$data['card_1']);
			}
			if(empty($error['follow_1'])){
				$path = './upload/EssayCompetition/follow/';
				unlink($path.$data['follow_1']);
			}
			if(empty($error['photo_1'])){
				$path = './upload/EssayCompetition/photo/';
				unlink($path.$data['photo_1']);
			}
			if(empty($error['payment'])){
				$path = './upload/EssayCompetition/payment/';
				unlink($path.$data['payment']);
			}
			echo json_encode($error);
		}else{
			$this->REGISTRASI->regisEssayCompetition($data);
			echo "1";
		}
	}
	public function regisEssayCompTeam(){
		$this->load->model("REGISTRASI");
		$config = array(
			'allowed_types'	=> 'pdf',
			'max_size'	 	=> 10000,
			'max_width' 	=> 10000,
			'max_height' 	=> 10000,
			'upload_path'	=> './upload/EssayCompetition/card'
		);

        $this->load->library('upload', $config, 'card');
		$this->card->initialize($config);
        $this->card->do_upload('card_1');

		$this->load->library('upload', $config, 'card2');
		$this->card2->initialize($config);
        $this->card2->do_upload('card_2');

		$config = array(
			'allowed_types' => 'jpg|png|jpeg',
			'upload_path'	=> './upload/EssayCompetition/follow'
		);

		$this->load->library('upload', $config, 'follow');
		$this->follow->initialize($config);
        $this->follow->do_upload('follow_1');

		$this->load->library('upload', $config, 'follow2');
		$this->follow2->initialize($config);
        $this->follow2->do_upload('follow_2');

		$config = array(
			'allowed_types' => 'jpg|png|jpeg',
			'upload_path'	=> './upload/EssayCompetition/payment'
		);

		$this->load->library('upload', $config, 'payment');
		$this->payment->initialize($config);
        $this->payment->do_upload('payment');

		$config = array(
			'allowed_types' => 'jpg|png|jpeg',
			'max_size'	 	=> 3000,
			'max_width' 	=> 410,
			'max_height' 	=> 610,
			'upload_path'	=> './upload/EssayCompetition/photo'
		);
		
		$this->load->library('upload', $config, 'photo');
		$this->photo->initialize($config);
        $this->photo->do_upload('photo_1');

		$this->load->library('upload', $config, 'photo2');
		$this->photo2->initialize($config);
        $this->photo2->do_upload('photo_1');

		$data = array(
			'card_1' 		=> $this->card->data('file_name'),
			'follow_1' 	    => $this->follow->data('file_name'),
			'photo_1' 	    => $this->photo->data('file_name'),
			'card_2' 		=> $this->card2->data('file_name'),
			'follow_2' 	    => $this->follow2->data('file_name'),
			'photo_2' 	    => $this->photo2->data('file_name'),
			'payment'		=> $this->payment->data('file_name')
		);

		$error = array(
			'card_1' 		=> $this->card->display_errors(),
			'follow_1'      => $this->follow->display_errors(),
			'photo_1'       => $this->photo->display_errors(),
			'card_2' 		=> $this->card2->display_errors(),
			'follow_2'      => $this->follow2->display_errors(),
			'photo_2'       => $this->photo2->display_errors(),
			'payment'		=> $this->payment->display_errors()
		);

		if(!$this->form_validation->run() || !$this->REGISTRASI->is_it_empty($error)){
			$error = array_merge($error, $this->form_validation->error_array());
			if(empty($error['card_1'])){
				$path = './upload/EssayCompetition/card/';
				unlink($path.$data['card_1']);
			}
			if(empty($error['follow_1'])){
				$path = './upload/EssayCompetition/follow/';
				unlink($path.$data['follow_1']);
			}
			if(empty($error['photo_1'])){
				$path = './upload/EssayCompetition/photo/';
				unlink($path.$data['photo_1']);
			}
			if(empty($error['card_2'])){
				$path = './upload/EssayCompetition/card/';
				unlink($path.$data['card_2']);
			}
			if(empty($error['follow_2'])){
				$path = './upload/EssayCompetition/follow/';
				unlink($path.$data['follow_2']);
			}
			if(empty($error['photo_2'])){
				$path = './upload/EssayCompetition/photo/';
				unlink($path.$data['photo_2']);
			}
			if(empty($error['payment'])){
				$path = './upload/EssayCompetition/payment/';
				unlink($path.$data['payment']);
			}
			echo json_encode($error);
		}else{
			$this->REGISTRASI->regisEssayCompetitionteam($data);
			echo "1";
		}
	}
}

