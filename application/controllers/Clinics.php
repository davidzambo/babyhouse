<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Clinics extends CI_Controller {
    public function __construct(){
      parent::__construct();
      $this->load->model('insurances_model');
      $this->load->helper('url_helper');
      $this->load->library('session');
    }

    public function index($page = 'welcome'){

      if ($this->session->userdata('loginuser') == TRUE) {
          $this->load->view('templates/header');
          $this->load->view('clinics/navbar');
          $this->load->view('clinics/'.$page);
          $this->load->view('templates/footer');
        } else {
          redirect('login/index');
        }
    }

    public function new_insurance(){
      $this->load->helper('form');

      if ($this->session->userdata('loginuser') == TRUE) {

          $this->load->view('templates/header');
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

    public function insurances(){
      $data['insurances'] = $this->insurances_model->get_insurances();

      $this->load->view('templates/header');
      $this->load->view('clinics/navbar');
      $this->load->view('clinics/insurances', $data);
      $this->load->view('templates/footer');
    }


  }
  ?>
