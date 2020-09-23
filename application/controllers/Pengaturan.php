<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Load Dependencies
    cek_login();
    $this->load->model('Pengaturan_M');
  }

  // List all your items
  public function index($offset = 0)
  {
    $data = [
      'title' => 'Pengaturan Akun',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'pengguna' => $this->Pengaturan_M->getAllPengguna(),
      'isi' => 'pengaturan/index',
    ];

    $this->load->view('templates/wrapper-admin', $data);
  }

  // Add a new item
  public function add()
  {
    $data = [
      'username' => $this->input->post('username'),
      'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
      'level' => $this->input->post('level'),
    ];
    $this->Pengaturan_M->addUser($data);
    $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
    redirect('pengaturan');
  }

  //Update one item
  public function update($id)
  {
    $data = [
      'IdUser' => $id,
      'username' => $this->input->post('username'),
      'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
      'level' => $this->input->post('level'),
    ];
    $this->Pengaturan_M->updatePengguna($data);
    $this->session->set_flashdata('pesan', 'Berhasil diubah!');
    redirect('pengaturan');
  }

  //Delete one item
  public function delete($id)
  {
    $data = ['IdUser' => $id];
    $this->Pengaturan_M->deletePengguna($data);
    $this->session->set_flashdata('pesan', 'Berhasil dihapus!');
    redirect('pengaturan');
  }
}

/* End of file Pengaturan.php */
