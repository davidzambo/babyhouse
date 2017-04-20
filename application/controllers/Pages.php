<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Pages extends CI_Controller {

    public function __construct(){
      parent::__construct();
      $this->load->model('insurances_model');
      $this->load->helper('url_helper');
    }

    public function index(){
      $this->load->view('templates/header');
      $this->load->view('pages/index');
      $this->load->view('templates/footer');

    }

    public function new_insurance(){
      $this->load->helper('form');

      $this->load->view('templates/header');
      $this->load->view('clinic/navbar');
      $this->load->view('clinic/new_insurance');
      $this->load->view('templates/footer');

    }

    public function new_patient(){
      $this->insurances_model->set_insurance();
    }


}
