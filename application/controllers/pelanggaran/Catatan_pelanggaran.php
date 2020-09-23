<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Catatan_pelanggaran extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Load Dependencies
    $this->load->model('Catatan_pelanggaran_M');
    $this->load->model('Santri_M');
    $this->load->model('Jenis_pelanggaran_M');
  }

  // List all your items
  public function index()
  {
    $data = [
      'title' => 'Catatan Pelanggaran',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'pelanggaran' => $this->Catatan_pelanggaran_M->getAllCatatanPelanggaran(),
      'santri' => $this->Santri_M->getAllSantri(),
      'jenisiqob' => $this->Jenis_pelanggaran_M->getAllJenisPelanggaran(),
      'isi' => 'pelanggaran/v-catatan_pelanggaran',
    ];
    $this->load->view('templates/wrapper-admin', $data);
  }

  // Add a new item
  public function add()
  {
    $data = [
      'IdSiswa' => $this->input->post('nama'),
      'IdJenisIqob' => $this->input->post('jenisiqob'),
      'Tgl'   => $this->input->post('tgl')
    ];
    $this->Catatan_pelanggaran_M->addCatatanPelanggaran($data);
    $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
    redirect('pelanggaran/catatan_pelanggaran');
  }

  //Update one item
  public function update($id)
  {
    $data = [
      'IdIqob' => $id,
      'IdSiswa' => $this->input->post('nama'),
      'IdJenisIqob' => $this->input->post('jenisiqob'),
      'Tgl'   => $this->input->post('tgl')
    ];
    $this->Catatan_pelanggaran_M->updateCatatanPelanggaran($data);
    $this->session->set_flashdata('pesan', 'Berhasil diubah!');
    redirect('pelanggaran/catatan_pelanggaran');
  }

  //Delete one item
  public function delete($id)
  {
    $data = [
      'IdIqob' => $id
    ];
    $this->Catatan_pelanggaran_M->deleteCatatanPelanggaran($data);
    $this->session->set_flashdata('pesan', 'Berhasil dihapus!');
    redirect('pelanggaran/catatan_pelanggaran');
  }
}

/* End of file Catatan_pelanggaran.php */
