<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wali extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Do your magic here
    cek_login();
    $this->load->model('Wali_M');
    $this->load->model('Periode_M');
    $this->load->model('Periode_ujian_M');
    $this->load->model('Raport_M');
  }


  public function index()
  {
    $IdSiswa = $this->input->get('IdSiswa');
    $Pekan = $this->input->get('pekan');
    $IdPeriode = $this->input->get('periode');
    $cek = [
      'IdSiswa' => $IdSiswa,
      'Pekan' => $Pekan,
      'IdPeriode' => $IdPeriode
    ];
    // check($cek);

    if (!$IdSiswa && $Pekan && $IdPeriode) {
      $username =  $this->session->userdata('username');
      $data = [
        'title' => 'Dashboard Wali',
        'user' => $this->Wali_M->getDataWali($username),
        'pekan' => $this->Wali_M->getPekanSetoran(),
        'periode' => $this->Periode_M->getAllPeriode(),
        'setoran_santri' => '',
        'jumlah_setoran' => '',
        'setoran_selesai' => '',
        'setoran_tidak_selesai' => '',
        'isi' => 'wali/dashboard',
      ];
      // check($data['user']);
      $this->load->view('templates/wrapper-wali', $data);
    } else {
      $username =  $this->session->userdata('username');
      $data = [
        'title' => 'Dashboard Wali',
        'user' => $this->Wali_M->getDataWali($username),
        'pekan' => $this->Wali_M->getPekanSetoran(),
        'periode' => $this->Periode_M->getAllPeriode(),
        'setoran_santri' => $this->Wali_M->getDataRekapSetoranSantri($IdSiswa, $IdPeriode, $Pekan),
        'jumlah_setoran' => $this->Wali_M->getJumlahSetoranSantri($IdSiswa, $IdPeriode, $Pekan),
        'setoran_selesai' => $this->Wali_M->getJumlahSetoranSelesai($IdSiswa, $IdPeriode, $Pekan),
        'setoran_tidak_selesai' => $this->Wali_M->getJumlahSetoranTidakSelesai($IdSiswa, $IdPeriode, $Pekan),
        'isi' => 'wali/dashboard',
      ];
      // check($data['user']);
      $this->load->view('templates/wrapper-wali', $data);
    }
  }

  public function Setoran()
  {
    $IdSiswa = $this->input->get('IdSiswa');
    $Pekan = $this->input->get('pekan');
    $IdPeriode = $this->input->get('periode');

    if (!$IdSiswa && $Pekan && $IdPeriode) {
      $username =  $this->session->userdata('username');
      $data = [
        'title' => 'Setoran Santri',
        'user' => $this->Wali_M->getDataWali($username),
        'pekan' => $this->Wali_M->getPekanSetoran(),
        'periode' => $this->Periode_M->getAllPeriode(),
        'setoran_santri' => '',
        'isi' => 'wali/setoran',
      ];
      // check($data['user']);
      $this->load->view('templates/wrapper-wali', $data);
    } else {
      $username =  $this->session->userdata('username');
      $data = [
        'title' => 'Setoran Santri',
        'user' => $this->Wali_M->getDataWali($username),
        'pekan' => $this->Wali_M->getPekanSetoran(),
        'periode' => $this->Periode_M->getAllPeriode(),
        'setoran_santri' => $this->Wali_M->getSetoranSantri($IdSiswa, $IdPeriode, $Pekan),
        'isi' => 'wali/setoran',
      ];
      // check($data['user']);
      $this->load->view('templates/wrapper-wali', $data);
    }
  }

  public function Raport()
  {
    $username =  $this->session->userdata('username');
    $data = [
      'title' => 'Hasil Ujian Santri (Rapor)',
      'user' => $this->Wali_M->getDataWali($username),
      'pekan' => $this->Wali_M->getPekanSetoran(),
      'periode_ujian' => $this->Periode_ujian_M->getAllPeriodeUjian(),
      'isi' => 'wali/rapor',
    ];
    // check($data['user']);
    $this->load->view('templates/wrapper-wali', $data);
  }

  public function preview()
  {
    // Data dari Session
    $id_siswa = $this->input->post('IdSiswa');
    $id_kelas = $this->input->post('IdKelas');
    // Data inputan form
    $id_periode_ujian = $this->input->post('periode_ujian');

    // Ambil idKelas berdasarkan periodeujian yang dipilih
    $idKelasdiPeriode = $this->Periode_ujian_M->getPeriodeUjianById($id_periode_ujian);
    // check($idKelasdiPeriode['IdKelas']);

    // Cek apakah Periode Ujian Sudah dipilih atau belum
    if ($id_periode_ujian) {
      // Cek apakah kelas yang dipilih sesuai dengan kelas santri
      if ($id_kelas == $idKelasdiPeriode['IdKelas']) {
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
      } else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Maaf, kelas yang dipilih tidak sesuai dengan kelas santri</div>');
        redirect('Wali/Raport');
      }
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Silahkan pilih periode ujian terlebih dahulu</div>');
      redirect('Wali/Raport');
    }
  }
}

/* End of file Wali.php */
