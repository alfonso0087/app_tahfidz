<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ajaran extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Load Dependencies
    cek_login();
    $this->load->model('Ajaran_M');
  }

  // List all your items
  public function index($offset = 0)
  {
    $data = [
      'title' => 'Data Ajaran',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'ajaran' => $this->Ajaran_M->getAllAjaran(),
      'isi' => 'target-tahfidz/v-ajaran',
    ];
    $this->load->view('templates/wrapper-admin', $data);
  }

  // Add a new item
  public function add()
  {
    $data = [
      'ThAjaran' => $this->input->post('ajaran')
    ];
    $this->Ajaran_M->addAjaran($data);
    $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
    redirect('tahfidz/ajaran');
  }

  //Update one item
  public function update($id)
  {
    $data = [
      'IdAjaran' => $id,
      'ThAjaran' => $this->input->post('ajaran')
    ];
    $this->Ajaran_M->updateAjaran($data);
    $this->session->set_flashdata('pesan', 'Berhasil diubah!');
    redirect('tahfidz/ajaran');
  }

  //Delete one item
  public function delete($id)
  {
    $data = [
      'IdAjaran' => $id
    ];
    $this->Ajaran_M->deleteAjaran($data);
    $this->session->set_flashdata('pesan', 'Berhasil dihapus!');
    redirect('tahfidz/ajaran');
  }
}

/* End of file Ajaran.php */
