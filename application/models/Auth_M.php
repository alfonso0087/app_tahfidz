<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth_M extends CI_Model
{
  public function changespassword($password, $username)
  {
    $this->db->set('password', $password);
    $this->db->where('username', $username);
    $this->db->update('login');
  }
}

/* End of file Auth_M.php */
