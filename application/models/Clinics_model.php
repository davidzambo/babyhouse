<?php
class Clinics_model extends CI_model {

  public function __construct(){
    $this->load->database();
    $this->load->library('form_validation');
  }

}
