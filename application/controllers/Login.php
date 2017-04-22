<?php
  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class Login extends CI_Controller{
    public function __construct(){
      parent::__construct();
      $this->load->library('session');
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->helper('html');
      $this->load->database();
      $this->load->library('form_validation');
      $this->load->model('login_model');
    }

    public function index(){
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $data['current_user'] = $this->login_model->get_user($username, $password);

      $this->form_validation->set_rules('username', 'Username', "trim|required");
      $this->form_validation->set_rules('password', 'Password', "trim|required");

      if ($this->form_validation->run() === FALSE){

        $this->load->view('templates/header');
        $this->load->view('login/login');
        $this->load->view('templates/footer');

      } else {

          if ($this->input->post('btn_login') == 'belépés'){

              $user_result = $this->login_model->get_user($username, $password);
              if (isset($user_result)) {
                $sessiondata = array(
                  'username' => $username,
                  'email' => $data['current_user']->email,
                  'phone_number' => $data['current_user']->phone_number,
                  'first_name' => $data['current_user']->first_name,
                  'last_name' => $data['current_user']->last_name,
                  'loginuser' => TRUE
                );

                $this->session->set_userdata($sessiondata);
                redirect("clinics/index");
              } else {
                $this->session->set_flashdata('message', '<div class="alert
                alert-danger text-center"> Invalid username and password!</div>');
                redirect('login/error');
              }
            } else {
              redirect('login/error');
            }
          }
      }

    public function error(){
      $this->load->view('templates/header');
      $this->load->view('login/login');
      $this->load->view('login/error');
      $this->load->view('templates/footer');
    }

    public function logout(){
      $data = array(
        'username' => '',
        'loginuser' => FALSE
      );
      //$this->session->unset_userdata($data);
      $this->session->sess_destroy();
      redirect('login/index');

    }

}
 ?>
