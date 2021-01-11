<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_pelanggaran extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Load Dependencies
    $this->load->model('Jenis_pelanggaran_M');
  }

  // List all your items
  public function index()
  {
    $data = [
      'title' => 'Data Jenis Pelanggaran',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'jenispelanggaran' => $this->Jenis_pelanggaran_M->getAllJenisPelanggaran(),
      'isi' => 'pelanggaran/v-jenispelanggaran',
    ];

    $this->load->view('templates/wrapper-admin', $data);
  }

  // Add a new item
  public function add()
  {
    $data = [
      'JenisIqob' => $this->input->post('jenis_iqob'),
      'Poin' => $this->input->post('poin'),
      'Kategori' => $this->input->post('kategori')
    ];
    $this->Jenis_pelanggaran_M->addJenisPelanggaran($data);
    $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
    redirect('pelanggaran/jenis_pelanggaran');
  }

  //Update one item
  public function update($id)
  {
    $data = [
      'IdJenisIqob' => $id,
      'JenisIqob' => $this->input->post('jenis_iqob'),
      'Poin' => $this->input->post('poin'),
      'Kategori' => $this->input->post('kategori')
    ];
    $this->Jenis_pelanggaran_M->updateJenisPelanggaran($data);
    $this->session->set_flashdata('pesan', 'Berhasil diubah!');
    redirect('pelanggaran/jenis_pelanggaran');
  }

  //Delete one item
  public function delete($id)
  {
    $data = ['IdJenisIqob' => $id];
    $this->Jenis_pelanggaran_M->deleteJenisPelanggaran($data);
    $this->session->set_flashdata('pesan', 'Berhasil dihapus!');
    redirect('pelanggaran/jenis_pelanggaran');
  }

  public function export_excel()
  {
    $data = [
      'title' => 'Data Jenis Pelanggaran',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'jenispelanggaran' => $this->Jenis_pelanggaran_M->getAllJenisPelanggaran(),
    ];

    $this->load->view('export/excel/pelanggaran/jenis_pelanggaran', $data);
  }
}

/* End of file Jenis_pelanggaran.php */
