<?php
  if ( !defined('BASEPATH')) exit('No redirect script access allowed');

  class Users_model extends CI_Model {
      function __construct(){
        parent::__construct();
      }

      function get_user($user, $password){
        $sql = "SELECT * FROM users WHERE username = '" . $usr . "'AND
          password = '" . hash('sha256', $password) . "' and status = 'active' '";

        $query = $this->db->query($sql);
        return $query->num_rows();
      }

  }
 ?>
