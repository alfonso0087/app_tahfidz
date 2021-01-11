<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Load Dependencies
    cek_login();
    $this->load->model('Kelas_M');
  }

  // List all your items
  public function index($offset = 0)
  {
    $data = [
      'title' => 'Data Kelas',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'kelas' => $this->Kelas_M->getAllKelas(),
      'isi' => 'kelas/index',
    ];

    $this->load->view('templates/wrapper-admin', $data);
  }

  // Add a new item
  public function add()
  {
    $data = [
      'NamaKelas' => $this->input->post('nama_kelas'),
      'Tingkat' => $this->input->post('tingkat'),
      'Kampus' => $this->input->post('kampus'),
      'SebutanKelas' => $this->input->post('sebutan_kelas')
    ];
    $this->Kelas_M->addKelas($data);
    $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
    redirect('kelas');
  }

  //Update one item
  public function update($id)
  {
    $data = [
      'IdKelas'   => $id,
      'NamaKelas' => $this->input->post('nama_kelas'),
      'Tingkat' => $this->input->post('tingkat'),
      'Kampus' => $this->input->post('kampus'),
      'SebutanKelas' => $this->input->post('sebutan_kelas')
    ];
    $this->Kelas_M->updateKelas($data);
    $this->session->set_flashdata('pesan', 'Berhasil diubah!');
    redirect('kelas');
  }

  //Delete one item
  public function delete($id)
  {
    $data = ['IdKelas' => $id];
    $this->Kelas_M->deleteKelas($data);
    $this->session->set_flashdata('pesan', 'Berhasil dihapus!');
    redirect('kelas');
  }

  public function export_excel()
  {
    $data = [
      'title' => 'Data Kelas',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'kelas' => $this->Kelas_M->getAllKelas(),
    ];

    $this->load->view('export/excel/kelas', $data);
  }
}

/* End of file Kelas.php */
