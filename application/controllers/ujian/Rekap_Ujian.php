<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekap_Ujian extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Load Dependencies
    cek_login();
    // $this->load->model('Jenis_ujian_M');
    $this->load->model('Target_ujian_M');
    $this->load->model('Santri_M');
    $this->load->model('Periode_ujian_M');
    $this->load->model('Rekap_ujian_M');
  }

  // List all your items
  public function index($offset = 0)
  {
    $data = [
      'title' => 'Rekap Ujian',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'target_ujian' => $this->Target_ujian_M->getAllTargetUjian(),
      'santri' => $this->Santri_M->getAllSantri(),
      'periode_ujian' => $this->Periode_ujian_M->getAllPeriodeUjian(),
      'rekap_ujian' => $this->Rekap_ujian_M->getAllRekapUjian(),
      'isi' => 'ujian/v-rekap_ujian',
    ];

    $this->load->view('templates/wrapper-admin', $data);
  }

  public function form_add()
  {
    $data = [
      'title' => 'Tambah Data Rekap Ujian',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'target_ujian' => $this->Target_ujian_M->getAllTargetUjian(),
      'santri' => $this->Santri_M->getAllSantri(),
      'periode_ujian' => $this->Periode_ujian_M->getAllPeriodeUjian(),
      // 'rekap_ujian' => $this->Rekap_ujian_M->getAllRekapUjian(),
      'isi' => 'ujian/v-add_rekap_ujian',
    ];

    $this->load->view('templates/wrapper-admin', $data);
  }


  public function predikat_ket()
  {
    $nilai = $this->input->post('Nilai');
    // return $nilai;
    $hasilquery = $this->Rekap_ujian_M->betwenNilai($nilai);
    // $json = json_encode($data);
    $hasil = [
      'PredikatNilai' => $hasilquery['PredikatNilai'],
      'KetNilai' => $hasilquery['KetNilai'],
    ];
    echo json_encode($hasil);
    // return $pk;
  }

  // Add a new item
  public function add()
  {
    $data = [
      'IdTargetUjian' => $this->input->post('target_ujian'),
      'IdSiswa' => $this->input->post('nama_santri'),
      'IdPeriodeUjian' => $this->input->post('periode_ujian'),
      'Nilai' => $this->input->post('nilai'),
      'Predikat' => $this->input->post('predikat'),
      'Keterangan' => $this->input->post('keterangan'),
    ];
    // check($data);
    $this->Rekap_ujian_M->addRekapUjian($data);
    $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
    redirect('ujian/rekap_ujian');
  }

  public function form_update($id)
  {
    $data = [
      'title' => 'Ubah Data Rekap Ujian',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'rekap_ujian' => $this->Rekap_ujian_M->getRekapUjian($id),
      'target_ujian' => $this->Target_ujian_M->getAllTargetUjian(),
      'santri' => $this->Santri_M->getAllSantri(),
      'periode_ujian' => $this->Periode_ujian_M->getAllPeriodeUjian(),
      'isi' => 'ujian/v-update_rekap_ujian',
    ];
    // check($data['rekap_ujian']);
    // var_dump($data['rekap_ujian']);

    $this->load->view('templates/wrapper-admin', $data);
  }

  //Update one item
  public function update()
  {
    $id = $this->input->post('IdUjian');
    $data = [
      'IdUjian' => $id,
      'IdTargetUjian' => $this->input->post('target_ujian'),
      'IdSiswa' => $this->input->post('nama_santri'),
      'IdPeriodeUjian' => $this->input->post('periode_ujian'),
      'Nilai' => $this->input->post('nilai'),
      'Predikat' => $this->input->post('predikat'),
      'Keterangan' => $this->input->post('keterangan'),
    ];
    // check($data);
    $this->Rekap_ujian_M->updateRekapUjian($data);
    $this->session->set_flashdata('pesan', 'Berhasil diubah!');
    redirect('ujian/rekap_ujian');
  }

  //Delete one item
  public function delete($id)
  {
    $data = ['IdUjian' => $id];
    $this->Rekap_ujian_M->deleteRekapUjian($data);
    $this->session->set_flashdata('pesan', 'Berhasil dihapus!');
    redirect('ujian/rekap_ujian');
  }

  public function cari_data()
  {
    $nama_santri = $this->input->post('nama_santri');
    $data = [
      'title' => 'Rekap Ujian',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'target_ujian' => $this->Target_ujian_M->getAllTargetUjian(),
      'santri' => $this->Santri_M->getAllSantri(),
      'periode_ujian' => $this->Periode_ujian_M->getAllPeriodeUjian(),
      'rekap_ujian' => $this->Rekap_ujian_M->getRekapUjianByNamaSantri($nama_santri),
      'isi' => 'ujian/v-rekap_ujian',
    ];
    // check($data['hasil_ujian']);
    $this->load->view('templates/wrapper-admin', $data);
  }
}

/* End of file Rekap_Ujian.php */
