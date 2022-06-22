<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('account_role') == 'admin') {
            redirect('admin');
        } else if ($this->session->userdata('account_role') == 'user') {
            redirect('user');
        }
        date_default_timezone_set("Asia/Jakarta");
    }

    public function index()
    {
        $this->load->view('home');
    }

    public function details()
    {
        $this->load->view('details');
    }

    public function events()
    {
        $this->load->view('events');
    }

    public function contact()
    {
        $this->load->view('contact');
    }

    public function login()
    {
        $this->load->view('login');
    }

    public function register()
    {
        $this->load->view('register');
    }

    public function dasbordadmincoba()
    {
        $this->load->view('dasbordadmincoba');
    }

    public function registerEssayCompIndividu()
    {
        //$this->load->view('registerEssayCompIndividu');
        $this->load->view('coming_soon');
    }
    public function registerReInnovationComp()
    {
        $this->load->view('registerReInnovationComp');
        //$this->load->view('registerReInnovationComp');
    }

    public function registerGrandTalkshowEvent()
    {
        $this->load->view('close_regis_grandtalk');
        //$this->load->view('registerGrandTalkshowEvent');
    }

    public function registerRE101Event()
    {
        //$this->load->view('registerRE101Event');
        $this->load->view('coming_soon');
    }

    public function registerFinalTalkshowEvent()
    {
        //$this->load->view('registerFinalTalkshowEvent');
        $this->load->view('coming_soon');
    }
    public function registerClimateChangeEvent()
    {
        date_default_timezone_set("Asia/Jakarta");
        $date_now = date("Y-m-d H:i:s");

        if ($date_now < '2022-01-31 07:00:10') {
            $this->load->view('registerClimateChangeEvent');
        } else {
            $this->load->view('finish_regist');
        }
    }

    public function registerEssayCompTeam()
    {
        $this->load->view('registerEssayCompTeam');
        // $this->load->view('coming_soon');
    }

    public function chooseteamindividual()
    {
        //$this->load->view('chooseteamindividual');
        $this->load->view('coming_soon');
    }

    public function finishregist()
    {
        $this->load->view('finish_regist');
    }
    public function chooseEvent()
    {
        //$this->load->view('choose-event');
        $this->load->view('coming_soon');
    }

    public function regisClosed()
    {
        $this->load->view('close_regis_grandtalk');
    }
    // Comp

    public function essay()
    {
        $this->load->view('details_essay_competition');
    }

    public function re_innovation()
    {
        $this->load->view('details_re_innovation');
    }

    // Events

    public function climate_change_community()
    {
        $this->load->view('details_climate_change');
    }

    public function grand_talkshow()
    {
        //$this->load->view('details_grand_talkshow');
        $this->load->view('close_grandtalk');
    }

    public function close_climate()
    {

        $this->load->view('close_climate');
    }

    public function awarding_night()
    {
        //$this->load->view('details_awarding_night');
        $this->load->view('coming_soon');
    }

    public function final_talkshow()
    {
        //$this->load->view('details_final_talkshow');
        $this->load->view('coming_soon');
    }

    public function re_101()
    {
        //$this->load->view("details_re_101");
        $this->load->view("coming_soon_re101");
    }

    public function add_suggestion()
    {
        $this->load->model('Contact');

        if (!$this->form_validation->run()) {
            echo json_encode($this->form_validation->error_array());
        } else {
            $this->Contact->addSuggestion();
            echo "1";
        }
    }
    public function coming_soon()
    {
        $this->load->view("coming_soon");
    }
}
