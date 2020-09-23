<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_Ujian extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Load Dependencies
    cek_login();
    $this->load->model('Jenis_ujian_M');
  }

  // List all your items
  public function index($offset = 0)
  {
    $data = [
      'title' => 'Jenis Ujian',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'jenis_ujian' => $this->Jenis_ujian_M->getAllJenisUjian(),
      'isi' => 'ujian/v-jenis_ujian',
    ];
    $this->load->view('templates/wrapper-admin', $data);
  }

  // Add a new item
  public function add()
  {
    $data = [
      'NamaUjian' => $this->input->post('ujian')
    ];
    $this->Jenis_ujian_M->addJenisUjian($data);
    $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
    redirect('ujian/jenis_ujian');
  }

  //Update one item
  public function update($id)
  {
    $data = [
      'IdJenisUjian' => $id,
      'NamaUjian' => $this->input->post('ujian')
    ];
    $this->Jenis_ujian_M->updateJenisUjian($data);
    $this->session->set_flashdata('pesan', 'Berhasil diubah!');
    redirect('ujian/jenis_ujian');
  }

  //Delete one item
  public function delete($id)
  {
    $data = [
      'IdJenisUjian' => $id
    ];
    $this->Jenis_ujian_M->deleteJenisUjian($data);
    $this->session->set_flashdata('pesan', 'Berhasil dihapus!');
    redirect('ujian/jenis_ujian');
  }
}

/* End of file Jenis_Ujian.php */
