<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Admin extends CI_Controller {
    public function __construct(){
      parent::__construct();
      $this->load->model('insurances_model');
      $this->load->helper('url_helper');
      $this->load->library('email');
      $this->load->library('form_validation');
      $this->load->library('session');
  //    if ($this->session->userdata('loginuser') != TRUE){
    //    redirect('login/index');
      }

    public function index($page = 'welcome'){
          $this->load->view('templates/header');
          $this->load->view('admin/navbar');
          $this->load->view('admin/'.$page);
          $this->load->view('templates/footer');
    }

    public function new_clinic(){
      $this->load->view('templates/header');
      $this->load->view('admin/navbar');
      $this->load->view('admin/new_clinic');
      $this->load->view('templates/footer');

    }



}
