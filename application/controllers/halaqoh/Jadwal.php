<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Load Dependencies
    cek_login();
    $this->load->model('Jadwal_M');
  }

  // List all your items
  public function index()
  {
    $data = [
      'title'   => 'Waktu Halaqoh',
      'user'    => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'jadwal'  => $this->Jadwal_M->getAllJadwal(),
      'isi'     => 'halaqoh/v-jadwal',
    ];

    $this->load->view('templates/wrapper-admin', $data);
  }

  // Add a new item
  public function add()
  {
    $data = [
      'Waktu' => $this->input->post('waktu'),
      'Ket' => $this->input->post('keterangan')
    ];
    $this->Jadwal_M->addJadwal($data);
    $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
    redirect('halaqoh/jadwal');
  }

  //Update one item
  public function update($id)
  {
    $data = [
      'IdJadwal' => $id,
      'Waktu' => $this->input->post('waktu'),
      'Ket' => $this->input->post('keterangan')
    ];
    $this->Jadwal_M->updateJadwal($data);
    $this->session->set_flashdata('pesan', 'Berhasil diubah!');
    redirect('halaqoh/jadwal');
  }

  //Delete one item
  public function delete($id)
  {
    $data = [
      'IdJadwal' => $id
    ];
    $this->Jadwal_M->deleteJadwal($data);
    $this->session->set_flashdata('pesan', 'Berhasil dihapus!');
    redirect('halaqoh/jadwal');
  }

  public function export_excel()
  {
    $data = [
      'title'   => 'Waktu Halaqoh',
      'user'    => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'jadwal'  => $this->Jadwal_M->getAllJadwal(),
    ];

    $this->load->view('export/excel/halaqoh/jadwal', $data);
  }
}

/* End of file Jadwal.php */
