<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Periode extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Load Dependencies
    cek_login();
    $this->load->model('Periode_M');
  }

  // List all your items
  public function index()
  {
    $data = [
      'title' => 'Data Periode',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'periode' => $this->Periode_M->getAllPeriode(),
      'isi' => 'target-tahfidz/v-periode',
    ];
    $this->load->view('templates/wrapper-admin', $data);
  }

  // Add a new item
  public function add()
  {
    $data = [
      'Periode' => $this->input->post('periode')
    ];
    $this->Periode_M->addPeriode($data);
    $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
    redirect('tahfidz/periode');
  }

  //Update one item
  public function update($id)
  {
    $data = [
      'IdPeriode' => $id,
      'Periode' => $this->input->post('periode')
    ];
    $this->Periode_M->updatePeriode($data);
    $this->session->set_flashdata('pesan', 'Berhasil diubah!');
    redirect('tahfidz/periode');
  }

  //Delete one item
  public function delete($id)
  {
    $data = [
      'IdPeriode' => $id,
    ];
    $this->Periode_M->deletePeriode($data);
    $this->session->set_flashdata('pesan', 'Berhasil dihapus!');
    redirect('tahfidz/periode');
  }

  public function export_excel()
  {
    $data = [
      'title' => 'Data Periode',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'periode' => $this->Periode_M->getAllPeriode(),
    ];

    $this->load->view('export/excel/tahfidz/periode', $data);
  }
}

/* End of file Periode.php */
