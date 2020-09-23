<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrasi extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    cek_login();
  }


  public function index()
  {
    $data = [
      'title' => 'Dashboard Administrasi',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'isi' => 'administrasi/dashboard',
    ];

    $this->load->view('templates/wrapper-admin', $data);
  }
}

/* End of file Admin.php */
