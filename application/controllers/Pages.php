<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Pages extends CI_Controller{

    public function index(){
      $this->load->view('templates/header');
      $this->load->view('pages/index');
      $this->load->view('templates/footer');

    }

    public function insurance(){
      $this->load->helper('form');
      $this->load->view('templates/header');
      $this->load->view('pages/new_insurance');
      $this->load->view('templates/footer');

    }

  }
 ?>