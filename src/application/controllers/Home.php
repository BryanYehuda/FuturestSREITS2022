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

  public function registerEssayCompIndividu()
  {
    $this->load->view('registerEssayCompIndividu');
  }
  public function registerReInnovationComp()
  {
    $this->load->view('registerReInnovationComp');
  }

  public function registerGrandTalkshowEvent()
  {
    $this->load->view('registerGrandTalkshowEvent');
  }

  public function registerRE101Event()
  {
    $this->load->view('registerRE101Event');
  }

  public function registerFinalTalkshowEvent()
  {
    $this->load->view('registerFinalTalkshowEvent');
  }
  public function registerClimateChangeEvent()
  {
    $this->load->view('registerClimateChangeEvent');
  }

  public function registerEssayCompTeam()
  {
    $this->load->view('registerEssayCompTeam');
  }

  public function finishregist()
  {
    $this->load->view('finish_regist');
  }

  public function chooseEvent()
  {
    $this->load->view('choose-event');
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
    $this->load->view('details_grand_talkshow');
  }

  public function awarding_night()
  {
    $this->load->view('details_awarding_night');
  }

  public function final_talkshow()
  {
    $this->load->view('details_final_talkshow');
  }

  public function re_101()
  {
    $this->load->view("details_re_101");
  }

  public function close_regist_gts()
  {
    $this->load->view("close_regis_grandtalk");
  }
}
