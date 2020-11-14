<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Raport extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Load Dependencies
    cek_login();
    $this->load->model('Santri_M');
    $this->load->model('Kelas_M');
    $this->load->model('Periode_ujian_M');
    $this->load->model('Raport_M');
  }

  // List all your items
  public function index()
  {
    $data = [
      'title' => 'Raport',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'santri' => $this->Santri_M->getAllSantri(),
      'kelas' => $this->Kelas_M->getAllKelas(),
      'periode_ujian' => $this->Periode_ujian_M->getAllPeriodeUjian(),
      'isi' => 'raport/index',
    ];

    $this->load->view('templates/wrapper-admin', $data);
  }

  // Add a new item
  public function aksi_tampil()
  {
    $id_siswa = $this->input->post('siswa');
    $id_kelas = $this->input->post('kelas');
    $id_periode_ujian = $this->input->post('periode_ujian');

    // Data-data Raport 
    $identitas_santri               = $this->Raport_M->getRaportIdentitasSantri($id_siswa, $id_periode_ujian);
    $pj_halaqoh                     = $this->Raport_M->getRaportIdentitasSantriPjHalaqoh($id_siswa);
    $prosentase_target              = $this->Raport_M->getRaport_Prosentase($id_siswa, $id_periode_ujian);
    $hasilujian_santri              = $this->Raport_M->getRaportHasilUjian($id_siswa, $id_periode_ujian);
    $nilai_ujian                    = $this->Raport_M->getRaport_NilaiUjian($id_siswa, $id_periode_ujian);
    $sum_avg_rank                   = $this->Raport_M->getRaport_Total_Avg_Rank($id_siswa, $id_periode_ujian);
    $jml_siswa_perKelas             = $this->Raport_M->getRaport_JmlSiswaPerKelas($id_kelas);
    $total_point_pelanggaran_ibadah = $this->Raport_M->getRaport_TotalPointPelanggaranIbadah($id_siswa);
    $keterangan_pelanggaran_ibadah  = $this->Raport_M->getRaport_KeteranganPelanggaranIbadah($id_siswa);
    $total_point_pelanggaran_bahasa = $this->Raport_M->getRaport_TotalPointPelanggaranBahasa($id_siswa);
    $keterangan_pelanggaran_bahasa  = $this->Raport_M->getRaport_KeteranganPelanggaranBahasa($id_siswa);
    $catatan_perkembangan_target    = $this->Raport_M->getRaport_Catatan_PerkembanganTarget($id_siswa, $id_periode_ujian);
    $catatan_sikap_santri           = $this->Raport_M->getRaport_Catatan_SikapSantri($id_siswa, $id_periode_ujian);
    $catatan_akhlaq_perilaku        = $this->Raport_M->getRaport_Catatan_AkhlaqPerilaku($id_siswa, $id_periode_ujian);
    $catatan_kerapian_kebersihan    = $this->Raport_M->getRaport_Catatan_KerapianKebersihan($id_siswa, $id_periode_ujian);
    $catatan_catatan_musyrif        = $this->Raport_M->getRaport_Catatan_CatatanMusyrif($id_siswa, $id_periode_ujian);
    $reward_ujian                   = $this->Raport_M->getRaport_Reward_Ujian($id_siswa, $id_periode_ujian);
    $pengasuh_pondok                = $this->Raport_M->getRaport_Pengesahan_Pengasuh();
    $direktur_tahfidz               = $this->Raport_M->getRaport_Pengesahan_Direktur();
    // check($identitas_santri);

    $data = [
      'identitas_santri'      => $identitas_santri,
      'pj_halaqoh'            => $pj_halaqoh,
      'prosentase_target'     => $prosentase_target,
      'hasil_ujian_santri'    => $hasilujian_santri,
      'nilai_ujian'           => $nilai_ujian,
      'hasil_akhir'           => $sum_avg_rank,
      'jml_siswa'             => $jml_siswa_perKelas,
      'points_ibadah'         => $total_point_pelanggaran_ibadah,
      'keterangan_ibadah'     => $keterangan_pelanggaran_ibadah,
      'points_bahasa'         => $total_point_pelanggaran_bahasa,
      'keterangan_bahasa'     => $keterangan_pelanggaran_bahasa,
      'c_perkembangan_target' => $catatan_perkembangan_target,
      'c_sikap_santri'        => $catatan_sikap_santri,
      'c_akhlaq_perilaku'     => $catatan_akhlaq_perilaku,
      'c_kerapian_kebersihan' => $catatan_kerapian_kebersihan,
      'c_catatan_musyrif'     => $catatan_catatan_musyrif,
      'reward_ujian'          => $reward_ujian,
      'pengasuh'              => $pengasuh_pondok,
      'direktur'              => $direktur_tahfidz
    ];
    // check($data['pengasuh']);
    $this->load->view('raport/preview', $data);
  }
}

/* End of file Raport.php */
