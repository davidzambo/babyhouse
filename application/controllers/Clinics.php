<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Clinics extends CI_Controller {
    public function __construct(){
      parent::__construct();
      $this->load->model('insurances_model');
      $this->load->helper('url_helper');
    }

    public function index($page = 'welcome'){
      $this->load->view('templates/header');
      $this->load->view('clinics/navbar');
      $this->load->view('clinics/'.$page);
      $this->load->view('templates/footer');

    }

    public function new_insurance(){
      $this->load->helper('form');

      $this->load->view('templates/header');
      $this->load->view('clinics/navbar');
      $this->load->view('clinics/new_insurance');
      $this->load->view('templates/footer');

    }

    public function new_patient(){
      $this->insurances_model->set_insurance();
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
