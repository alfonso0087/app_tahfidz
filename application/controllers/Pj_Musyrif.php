<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pj_Musyrif extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Do your magic here
    cek_login();
    $this->load->model('Musyrif_M');
    $this->load->model('Santri_M');
    $this->load->model('Pj_musyrif_M');
  }


  public function index()
  {
    $data = [
      'title' => 'Data PJ Musyrif',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'pjmusyrif' => $this->Pj_musyrif_M->getAllPJMusyrif(),
      'isi' => 'pj-musyrif/index',
    ];

    $this->load->view('templates/wrapper-admin', $data);
  }
}

/* End of file Pj_Musyrif.php */
