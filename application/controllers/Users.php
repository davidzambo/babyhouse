<?php
  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class Users extends CI_Controller{
    public function __construct(){
      parent::__construct();
      $this->load->library('session');
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->helper('html');
      $this->load->database();
      $this->load->library('form_validation');
      $this->load->model('Users_model');
    }

    public function index(){
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $this->form_validation->set_rules('username', 'Username', "trim|required");
      $this->form_validation->set_rules('password', 'Password', "trim|required");

      if ($this->form_validation->run() === FALSE){

        $this->load->view('templates/header');
        $this->load->view('login');
        $this->load->view('templates/footer');

      } else {

          if ($this->input->post('btn_login') == 'Login'){

              $user_result = $this->users_model->get_user($username, $password);
              if ($user_result > 0) {
                $sessiondata = array(
                  'username' => $username,
                  'loginuser' => TRUE
                );

                $this->session->set_userdata($sessiondata);
                redirect("insurance");
              } else {
                $this->session->set_flashdata('message', '<div class="alert
                alert-danger text-center"> Invalid username and password!</div>');
                redirect('pages/index');
              }
            } else {
              redirect('pages/index');
            }
          }
  }
}
 ?>
