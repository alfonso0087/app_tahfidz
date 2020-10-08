<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil_Ujian extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    cek_login();
    $this->load->model('Target_ujian_M');
    $this->load->model('Santri_M');
    $this->load->model('Kelas_M');
    $this->load->model('Periode_ujian_M');
    $this->load->model('Rekap_ujian_M');
    $this->load->model('Hasil_ujian_M');
  }


  public function index()
  {
    $data = [
      'title' => 'Hasil Ujian',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      // 'target_ujian' => $this->Target_ujian_M->getAllTargetUjian(),
      'santri' => $this->Santri_M->getAllSantri(),
      'periode_ujian' => $this->Periode_ujian_M->getAllPeriodeUjian(),
      'rekap_ujian' => $this->Rekap_ujian_M->getAllRekapUjian(),
      'hasil_ujian' => $this->Hasil_ujian_M->getAllHasilUjian(),
      'isi' => 'ujian/v-hasil_ujian',
    ];
    $this->load->view('templates/wrapper-admin', $data);
  }

  public function form_add()
  {
    $kelas = $this->input->get('kelas');
    $periode_ujian = $this->input->get('periode_ujian');
    // $cek = ['kelas' => $kelas, 'periode' => $periode_ujian];
    // check($cek);

    if (!$kelas && $periode_ujian) {
      $data = [
        'title' => 'Hasil Ujian',
        'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
        // 'target_ujian' => $this->Target_ujian_M->getAllTargetUjian(),
        'santri' => '',
        'kelas' => $this->Kelas_M->getAllKelas(),
        'periode_ujian' => $this->Periode_ujian_M->getAllPeriodeUjian(),
        // 'rekap_ujian' => $this->Rekap_ujian_M->getAllRekapUjian(),
        // 'hasil_ujian' => $this->Hasil_ujian_M->getAllHasilUjian(),
        'isi' => 'ujian/v-add_hasil_ujian',
      ];
      $this->load->view('templates/wrapper-admin', $data);
    } else {
      $data = [
        'title' => 'Hasil Ujian',
        'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
        // 'target_ujian' => $this->Target_ujian_M->getAllTargetUjian(),
        'santri' => $this->Santri_M->getSantriKelas_Periode($kelas, $periode_ujian),
        'kelas' => $this->Kelas_M->getAllKelas(),
        'periode_ujian' => $this->Periode_ujian_M->getAllPeriodeUjian(),
        // 'rekap_ujian' => $this->Rekap_ujian_M->getAllRekapUjian(),
        // 'hasil_ujian' => $this->Hasil_ujian_M->getAllHasilUjian(),
        'isi' => 'ujian/v-add_hasil_ujian',
      ];
      // check($data['santri']);
      $this->load->view('templates/wrapper-admin', $data);
    }
  }

  public function proses_nilai()
  {
    // Belum bisa mendapatkan IdSiswa/Santri per individu
    // $kelas = $this->input->post('kelas');
    $periodeujian = $this->input->post('idperiodeujian');
    $idSiswa = $this->input->post('IdSiswa');
    $totalNilai = $this->Hasil_ujian_M->hitungTotalNilai($idSiswa, $periodeujian);
    check($totalNilai);
  }
}

/* End of file Hasil_Ujian.php */
