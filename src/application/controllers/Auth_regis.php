<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_regis extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
    }
	
    public function regisRE101(){
        $this->load->model("registrasi");
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
        if(!$this->form_validation->run() || !$this->registrasi->is_it_empty($error)){
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
			$this->load->view('registerRE101Event',
				array(
					'error' => $error
				)
			);
			return;
		}else{
			$this->registrasi->regisRE101($data);
			redirect('Home');
		}
    }

	public function regisGrandTalkshow(){
        $this->load->model("registrasi");
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
        if(!$this->form_validation->run() || !$this->registrasi->is_it_empty($error)){
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
			$this->load->view('registerGrandTalkshowEvent',
				array(
					'error' => $error
				)
			);
			return;
		}else{
			$this->registrasi->regisGrandTalkshow($data);
			redirect('Home');
		}
    }

	public function regisFinalTalkshow(){
        $this->load->model("registrasi");
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
        if(!$this->form_validation->run() || !$this->registrasi->is_it_empty($error)){
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
			$this->load->view('registerFinalTalkshowEvent',
				array(
					'error' => $error
				)
			);
			return;
		}else{
			$this->registrasi->regisFinalTalkshow($data);
			redirect('Home');
		}
    }

	public function regisClimateChange(){
		$this->load->model("registrasi");
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
        if(!$this->form_validation->run() || !$this->registrasi->is_it_empty($error)){
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
			$this->load->view('registerClimateChangeEvent',
				array(
					'error' => $error
				)
			);
			return;
		}else{
			$this->registrasi->regis3C($data);
			redirect('Home');
		}
	}

	public function regisReInnovation(){
		$this->load->model("registrasi");
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
			
		if(!$this->form_validation->run() || !$this->registrasi->is_it_empty($error)){
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

			
			$this->load->view('registerReInnovationComp',
				array(
					'error' => $error
				)
			);
			return;
		}else{
			$this->registrasi->regisReInnovation($data);
			redirect('Home');
		}
	}

	public function regisEssayCompIndividu(){
		$this->load->model("registrasi");
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
			'photo_1' 	    => $this->photo->data('file_name')
		);

		$error = array(
			'card_1' 		=> $this->card->display_errors(),
			'follow_1'      => $this->follow->display_errors(),
			'photo_1'       => $this->photo->display_errors()
		);

		if(!$this->form_validation->run() || !$this->registrasi->is_it_empty($error)){
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
			$this->load->view('registerEssayCompIndividu',
				array(
					'error' => $error
				)
			);
			return;
		}else{
			$this->registrasi->regisEssayCompetition($data);
			redirect('Home');
		}
	}
	public function regisEssayCompTeam(){
		$this->load->model("registrasi");
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
			'photo_2' 	    => $this->photo2->data('file_name')
		);

		$error = array(
			'card_1' 		=> $this->card->display_errors(),
			'follow_1'      => $this->follow->display_errors(),
			'photo_1'       => $this->photo->display_errors(),
			'card_2' 		=> $this->card2->display_errors(),
			'follow_2'      => $this->follow2->display_errors(),
			'photo_2'       => $this->photo2->display_errors()
		);

		if(!$this->form_validation->run() || !$this->registrasi->is_it_empty($error)){
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
			$this->load->view('registerEssayCompTeam',
				array(
					'error' => $error
				)
			);
			return;
		}else{
			$this->registrasi->regisEssayCompetitionteam($data);
			redirect('Home');
		}
	}
}

