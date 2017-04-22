<?php
  if ( !defined('BASEPATH')) exit('No redirect script access allowed');

  class Login_model extends CI_Model {
      function __construct(){
        parent::__construct();
      }

      function get_user($username, $password){
        $sql = "SELECT * FROM users WHERE username = '" . $username . "'AND
          password = '" . hash('sha256', $password) . "'";

        $query = $this->db->query($sql);
        return $query->row();
      }

  }
 ?>
