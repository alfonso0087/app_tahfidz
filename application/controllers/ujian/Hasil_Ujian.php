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
    // check($data['hasil_ujian']);
    $this->load->view('templates/wrapper-admin', $data);
  }

  public function form_add()
  {
    $IdSiswa = $this->input->get('santri');
    $periode_ujian = $this->input->get('periodeujian');

    if (!$IdSiswa && $periode_ujian) {
      $data = [
        'title' => 'Hasil Ujian',
        'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
        'santri' => $this->Santri_M->getAllSantri(),
        'data_santri' => '',
        'kelas' => $this->Kelas_M->getAllKelas(),
        'periode_ujian' => $this->Periode_ujian_M->getAllPeriodeUjian(),
        'isi' => 'ujian/v-add_hasil_ujian',
      ];
      // check($data['santri']);
      $this->load->view('templates/wrapper-admin', $data);
    } else {
      $data = [
        'title' => 'Hasil Ujian',
        'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
        'santri' => $this->Santri_M->getAllSantri(),
        'data_santri' => $this->Santri_M->getSantri_Periode_Nilai($IdSiswa, $periode_ujian),
        'kelas' => $this->Kelas_M->getAllKelas(),
        'periode_ujian' => $this->Periode_ujian_M->getAllPeriodeUjian(),
        'isi' => 'ujian/v-add_hasil_ujian',
      ];
      // check($data['data_santri']);
      $this->load->view('templates/wrapper-admin', $data);
    }
  }

  public function aksi_form_add()
  {
    $IdSiswa = $this->input->post('IdSiswa');
    $IdPeriodeUjian = $this->input->post('IdPeriodeUjian');
    $TotalNilai = $this->input->post('TotalNilai');
    $RataRata = $this->input->post('RataRata');
    $Reward = $this->input->post('Reward');

    $data = [
      'IdSiswa' => $IdSiswa,
      'IdPeriodeUjian' => $IdPeriodeUjian,
      'Total' => $TotalNilai,
      'Rata-rata' => $RataRata,
      'Reward' => $Reward
    ];
    // check($data);
    $this->Hasil_ujian_M->addHasilUjianIndividu($data);
    $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
    redirect('ujian/hasil_ujian');
  }

  public function form_add_banyak()
  {
    $idKelas = $this->input->get('kelas');
    $idPeriodeUjian = $this->input->get('periodeujian');

    if (!$idKelas && $idPeriodeUjian) {
      $data = [
        'title' => 'Hasil Ujian',
        'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
        'data_santri' => '',
        'nilai_santri' => '',
        'kelas' => $this->Kelas_M->getAllKelas(),
        'periode_ujian' => $this->Periode_ujian_M->getAllPeriodeUjian(),
        // 'rekap_ujian' => $this->Rekap_ujian_M->getAllRekapUjian(),
        // 'hasil_ujian' => $this->Hasil_ujian_M->getAllHasilUjian(),
        'isi' => 'ujian/v-add_hasil_ujian_all_santri',
      ];
      // check($data['santri']);
      $this->load->view('templates/wrapper-admin', $data);
    } else {
      $data = [
        'title' => 'Hasil Ujian',
        'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
        'data_santri' => $this->Santri_M->nilai_santri($idKelas, $idPeriodeUjian),
        // 'data_santri' => '',
        // 'nilai_santri' => '',
        'kelas' => $this->Kelas_M->getAllKelas(),
        'periode_ujian' => $this->Periode_ujian_M->getAllPeriodeUjian(),
        // 'rekap_ujian' => $this->Rekap_ujian_M->getAllRekapUjian(),
        // 'hasil_ujian' => $this->Hasil_ujian_M->getAllHasilUjian(),
        'isi' => 'ujian/v-add_hasil_ujian_all_santri',
      ];
      // check($data['data_santri']);
      $this->load->view('templates/wrapper-admin', $data);
    }
  }

  public function aksi_Hasil_Ujian_Kelas()
  {
    $IdSiswa = $this->input->post('IdSiswa');
    // $IdKelas = $this->input->post('IdKelas');
    $IdPeriodeUjian = $this->input->post('IdPeriodeUjian');
    $TotalNilai = $this->input->post('TotalNilai');
    $RataRata = $this->input->post('RataRata');
    $Reward = $this->input->post('Reward');
    $data = [];

    foreach ($Reward as $keys => $values) {
      foreach ($RataRata as $key => $val) {
        foreach ($TotalNilai as $Keys => $Values) {
          foreach ($IdSiswa as $Key => $Value) {
            $data[$Key]['IdSiswa']        = $Value;
            $data[$Key]['IdPeriodeUjian'] = $IdPeriodeUjian;
            $data[$Keys]['Total']         = $Values;
            $data[$key]['Rata-rata']      = $val;
            $data[$keys]['Reward']        = $values;
          }
        }
      }
    }
    // check($data);
    $this->Hasil_ujian_M->addHasilUjian($data);
    $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
    redirect('ujian/hasil_ujian');
  }

  public function perankingan()
  {
    $IdKelas = $this->input->get('kelas');
    $IdPeriodeUjian = $this->input->get('periodeujian');

    if (!$IdKelas & $IdPeriodeUjian) {
      $data = [
        'title' => 'Perankingan Hasil Ujian',
        'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
        // 'target_ujian' => $this->Target_ujian_M->getAllTargetUjian(),
        'ranking_santri' => '',
        'kelas' => $this->Kelas_M->getAllKelas(),
        'periode_ujian' => $this->Periode_ujian_M->getAllPeriodeUjian(),
        'hasil_ujian' => $this->Hasil_ujian_M->getAllHasilUjian(),
        'isi' => 'ujian/v-perankingan',
      ];
      // check($data['hasil_ujian']);
      $this->load->view('templates/wrapper-admin', $data);
    } else {
      $data = [
        'title' => 'Perankingan Hasil Ujian',
        'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
        // 'target_ujian' => $this->Target_ujian_M->getAllTargetUjian(),
        'ranking_santri' => $this->Hasil_ujian_M->perankingan_kelas($IdKelas, $IdPeriodeUjian),
        'kelas' => $this->Kelas_M->getAllKelas(),
        'periode_ujian' => $this->Periode_ujian_M->getAllPeriodeUjian(),
        'hasil_ujian' => $this->Hasil_ujian_M->getAllHasilUjian(),
        'isi' => 'ujian/v-perankingan',
      ];
      // check($data['ranking_santri']);
      $this->load->view('templates/wrapper-admin', $data);
    }
  }

  public function proses_perankingan()
  {
    $IdHasil = $this->input->post('IdHasil');
    $IdSiswa = $this->input->post('IdSiswa');
    $IdPeriodeUjian = $this->input->post('IdPeriodeUjian');
    $TotalNilai = $this->input->post('TotalNilai');
    $RataRata = $this->input->post('RataRata');
    $Reward = $this->input->post('Reward');
    $Ranking = $this->input->post('Ranking');
    $data = [];

    foreach ($Ranking as $Rank => $rank) {
      foreach ($Reward as $Hadiah => $reward) {
        foreach ($RataRata as $Avg => $average) {
          foreach ($TotalNilai as $Total => $totalnilai) {
            foreach ($IdPeriodeUjian as $PeriodeUjian => $periodeujian) {
              foreach ($IdSiswa as $Idsiswa => $idsiswa) {
                foreach ($IdHasil as $Idhasil => $idhasil) {
                  $data[$Idhasil]['IdHasil'] = $idhasil;
                  $data[$Idsiswa]['IdSiswa'] = $idsiswa;
                  $data[$PeriodeUjian]['IdPeriodeUjian'] = $periodeujian;
                  $data[$Total]['Total'] = $totalnilai;
                  $data[$Avg]['Rata-rata'] = $average;
                  $data[$Hadiah]['Reward'] = $reward;
                  $data[$Rank]['Rangking'] = $rank;
                }
              }
            }
          }
        }
      }
    }
    // check($data);
    $this->Hasil_ujian_M->Update_Perankingan($data);
    $this->session->set_flashdata('pesan', 'Berhasil dirangking!');
    redirect('ujian/hasil_ujian');
  }

  public function form_update($IdHasil)
  {
    $data = [
      'title' => 'Ubah Reward Hasil Ujian',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      // 'target_ujian' => $this->Target_ujian_M->getAllTargetUjian(),
      // 'ranking_santri' => $this->Hasil_ujian_M->perankingan_kelas($IdKelas, $IdPeriodeUjian),
      'kelas' => $this->Kelas_M->getAllKelas(),
      'periode_ujian' => $this->Periode_ujian_M->getAllPeriodeUjian(),
      'hasil_ujian' => $this->Hasil_ujian_M->getHasilUjianById($IdHasil),
      'isi' => 'ujian/v-form_update',
    ];
    // var_dump($data['hasil_ujian']);
    $this->load->view('templates/wrapper-admin', $data);
  }

  public function aksi_update()
  {
    $IdHasil = $this->input->post('IdHasil');
    $reward = $this->input->post('reward');
    // check($reward);
    $data = [
      'IdHasil' => $IdHasil,
      'Reward' => $reward
    ];
    $this->Hasil_ujian_M->updateReward($data);
    $this->session->set_flashdata('pesan', 'Berhasil Diubah!');
    redirect('ujian/hasil_ujian');
  }

  public function delete($id_Hasil)
  {
    $data = ['IdHasil' => $id_Hasil];
    $this->Hasil_ujian_M->deleteHasilUjian($data);
    $this->session->set_flashdata('pesan', 'Berhasil Dihapus!');
    redirect('ujian/hasil_ujian');
  }
}

/* End of file Hasil_Ujian.php */
