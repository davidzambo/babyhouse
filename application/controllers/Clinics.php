<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Clinics extends CI_Controller {
    public function __construct(){
      parent::__construct();
      $this->load->model('insurances_model');
      $this->load->helper('url_helper');
      $this->load->library('email');
      $this->load->library('session');
      if ($this->session->userdata('loginuser') != TRUE){
        redirect('login/index');
      }
    }

    public function index($page = 'welcome'){
          $this->load->view('templates/header');
          $this->load->view('clinics/navbar');
          $this->load->view('clinics/'.$page);
          $this->load->view('templates/footer');
    }

    public function user(){
      $this->load->view('templates/header');
      $this->load->view('clinics/navbar');
      $this->load->view('clinics/user');
      $this->load->view('templates/footer');
    }

    private function generate_insurance_offer_code(){

//generate a random code with two letter and six numbers. (FV-823741)
      do {
          $random_chars = substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRTUVWXYZ", 5)), 0, 2);
          $random_numbers = substr(str_shuffle(str_repeat("0123456789", 5)), 0, 6);
          $data['insurance_offer_code'] = ($random_chars . "-" . $random_numbers);
      }
//check the database, if it exists, generate a new one
      while ($this->insurances_model->is_insurance_offer_code_unique($data['insurance_offer_code']) != 0);

      $this->session->set_userdata('insurance_offer_code', $data['insurance_offer_code']);

      return $data['insurance_offer_code'];
    }


    public function new_insurance(){
      $this->load->helper('form');

      if ($this->session->userdata('loginuser') == TRUE) {

          $this->generate_insurance_offer_code();
          $this->load->view('templates/new_insurance_header');
          $this->load->view('clinics/navbar');
          $this->load->view('clinics/new_insurance');
          $this->load->view('templates/footer');
      } else {
          redirect('login/index');
      }

    }

    public function new_patient(){
      $this->insurances_model->set_insurance();

      $this->load->view('templates/header');
      $this->load->view('clinics/navbar');
      $this->load->view('clinics/success');
      $this->load->view('templates/footer');
    }

    public function list_insurances(){
      $data['insurances'] = $this->insurances_model->get_insurances();

      $this->load->view('templates/header');
      $this->load->view('clinics/navbar');
      $this->load->view('clinics/insurances', $data);
      $this->load->view('templates/footer');
    }

    public function send_insurance_offer_code_by_email(){
      $this->load->library('email');

      $data['insurance_offer_code'] = $this->session->userdata('insurance_offer_code');
      $data['email_message'] = "A rendszerünk által generált ajánlatszám: ".$data['insurance_offer_code'];
      $data['user_email'] = $this->session->userdata('email');

      $this->email->from('postmaster@dcmf.hu', 'FogászatiBiztosítás.hu');
      $this->email->to($data['user_email']);
      $this->email->subject('Biztosítási ajánlatszám');
      $this->email->message($data['email_message']);

      $this->email->send();
// Code for testing
      if ($this->email->send()){
        echo "Mail Sent!";
      } else {
        echo "There is error in sending mail!";
      }

    }



  }
  ?>
