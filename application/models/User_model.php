<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class User_model extends CI_Controller {

    function __construct(){
      parent::__construct();
      $this->load->helper('url_helper');
    }

  }
