<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_catatan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Load Dependencies
    $this->load->model('Jenis_catatan_M');
  }

  // List all your items
  public function index()
  {
    $data = [
      'title' => 'Jenis Catatan',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'jenis_catatan' => $this->Jenis_catatan_M->getAllJenisCatatan(),
      'isi' => 'catatan/v-jenis_catatan',
    ];

    $this->load->view('templates/wrapper-admin', $data);
  }

  // Add a new item
  public function add()
  {
    $data = [
      'JenisCatatan' => $this->input->post('jenis_catatan')
    ];
    $this->Jenis_catatan_M->addJenisCatatan($data);
    $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
    redirect('catatan/jenis_catatan');
  }

  //Update one item
  public function update($id)
  {
    $data = [
      'IdJenisCatatan' => $id,
      'JenisCatatan' => $this->input->post('jenis_catatan')
    ];
    $this->Jenis_catatan_M->updateJenisCatatan($data);
    $this->session->set_flashdata('pesan', 'Berhasil diubah!');
    redirect('catatan/jenis_catatan');
  }

  //Delete one item
  public function delete($id)
  {
    $data = [
      'IdJenisCatatan' => $id,
    ];
    $this->Jenis_catatan_M->deleteJenisCatatan($data);
    $this->session->set_flashdata('pesan', 'Berhasil dihapus!');
    redirect('catatan/jenis_catatan');
  }
}

/* End of file Jenis_catatan.php */
