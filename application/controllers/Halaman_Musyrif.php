<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Halaman_Musyrif extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    cek_login();
    $this->load->model('Musyrif_M');
    $this->load->model('Periode_M');
    $this->load->model('Kelompok_M');
    $this->load->model('Rekap_setoran_M');
    $this->load->model('Setoran_M');
    $this->load->model('Detail_kelompok_M');
    $this->load->model('Jadwal_M');
    $this->load->model('Detail_target_M');
    $this->load->model('Rekap_setoran_M');
    $this->load->model('Santri_M');
    $this->load->model('Kelas_M');
  }


  public function index()
  {
    $IdPeriode = $this->input->get('periode');
    $IdKelompok = $this->input->get('kelompok');

    if (!$IdPeriode && $IdKelompok) {
      $username =  $this->session->userdata('username');
      $data = [
        'title' => 'Dashboard',
        'user' => $this->Musyrif_M->getDataMusyrif($username),
        'periode' => $this->Periode_M->getAllPeriode(),
        'kelompok_halaqoh' => $this->Kelompok_M->getAllKelompok(),
        'rekap_setoran_kelompok' => '',
        'isi' => 'halaman_musyrif/dashboard',
      ];

      $this->load->view('templates/wrapper-musyrif', $data);
    } else {
      $username =  $this->session->userdata('username');
      $data = [
        'title' => 'Dashboard',
        'user' => $this->Musyrif_M->getDataMusyrif($username),
        'periode' => $this->Periode_M->getAllPeriode(),
        'kelompok_halaqoh' => $this->Kelompok_M->getAllKelompok(),
        'rekap_setoran_kelompok' => $this->Rekap_setoran_M->getRekapSetoranBy_Kelompok_Periode($IdPeriode, $IdKelompok),
        'isi' => 'halaman_musyrif/dashboard',
      ];

      $this->load->view('templates/wrapper-musyrif', $data);
    }
  }

  // Setoran
  public function setoran_oleh_Musyrif()
  {
    $username =  $this->session->userdata('username');
    $data = [
      'title'   => 'Setoran',
      'user' => $this->Musyrif_M->getDataMusyrif($username),
      'setoran' => $this->Setoran_M->getAllSetoran(),
      'detail_target' => $this->Detail_target_M->getAllDetailTarget(),
      'detail_kelompok' => $this->Detail_kelompok_M->getAllDetailKelompok(),
      'jadwal' => $this->Jadwal_M->getAllJadwal(),
      'kelompok' => $this->Kelompok_M->getAllKelompok(),
      'isi'     => 'halaman_musyrif/v-setoran',
    ];
    // var_dump($data['detail_kelompok']);
    // die;

    $this->load->view('templates/wrapper-musyrif', $data);
  }

  public function add_setoran()
  {
    $data = [
      'IdDetailTarget' => $this->input->post('isi'),
      'IdJadwal' => $this->input->post('jadwalHalaqoh'),
      'IdDetailKelompok' => $this->input->post('kelompok'),
      'Presensi' => $this->input->post('presensi'),
      'Keterangan' => $this->input->post('keterangan')
    ];
    // check($data);
    $this->Setoran_M->addSetoran($data);
    $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
    redirect('Halaman_Musyrif/setoran_oleh_Musyrif');
  }

  public function update_setoran($id)
  {
    $data = [
      'IdSetoran' => $id,
      'IdDetailTarget' => $this->input->post('isi'),
      'IdJadwal' => $this->input->post('jadwalHalaqoh'),
      'IdDetailKelompok' => $this->input->post('kelompok'),
      'Presensi' => $this->input->post('presensi'),
      'Keterangan' => $this->input->post('keterangan')
    ];
    $this->Setoran_M->updateSetoran($data);
    $this->session->set_flashdata('pesan', 'Berhasil diubah!');
    redirect('Halaman_Musyrif/setoran_oleh_Musyrif');
  }

  public function delete_setoran($id)
  {
    $data = [
      'IdSetoran' => $id
    ];
    $this->Setoran_M->deleteSetoran($data);
    $this->session->set_flashdata('pesan', 'Berhasil dihapus!');
    redirect('Halaman_Musyrif/setoran_oleh_Musyrif');
  }
  // /. Setoran

  // Rekap Setoran
  public function rekap_setoran_oleh_Musyrif()
  {
    $username =  $this->session->userdata('username');
    $data = [
      'title'   => 'Rekap Setoran',
      'user' => $this->Musyrif_M->getDataMusyrif($username),
      'rekap_setoran' => $this->Rekap_setoran_M->getAllRekapSetoran(),
      'santri' => $this->Santri_M->getAllSantri(),
      'isi'     => 'halaman_musyrif/v-rekap_setoran',
    ];
    // var_dump($data['detail_kelompok']);
    // die;

    $this->load->view('templates/wrapper-musyrif', $data);
  }

  public function form_add_rekap_setoran()
  {
    $kelas = $this->input->get('kelas');
    // check($kelas);
    if (!$kelas) {
      $username =  $this->session->userdata('username');
      $data = [
        'title'   => 'Tambah Data Rekap Setoran',
        'user' => $this->Musyrif_M->getDataMusyrif($username),
        'santri' => '',
        'kelas' => $this->Kelas_M->getAllKelas(),
        'isi'     => 'halaman_musyrif/v-add_rekap_setoran',
      ];
      // var_dump($data['detail_kelompok']);
      // die;

      $this->load->view('templates/wrapper-musyrif', $data);
    } else {
      $username =  $this->session->userdata('username');
      $data = [
        'title'   => 'Tambah Data Rekap Setoran',
        'user' => $this->Musyrif_M->getDataMusyrif($username),
        'santri' => $this->Santri_M->getSantriKelas($kelas),
        'kelas' => $this->Kelas_M->getAllKelas(),
        'isi'     => 'halaman_musyrif/v-add_rekap_setoran',
      ];
      // var_dump($data['detail_kelompok']);
      // die;

      $this->load->view('templates/wrapper-musyrif', $data);
    }
  }

  public function add_hasil_rekap_setoran()
  {
    $kelas = $this->input->post('kelas');

    $idSiswa = $this->input->post('IdSiswa');
    // check($idSiswa);
    $pekan = $this->input->post('pekan');


    $jml_setoran = $this->Rekap_setoran_M->countKeterangan($idSiswa, $pekan);
    $username =  $this->session->userdata('username');
    // check($this->db->last_query());
    $data = [
      'title'   => 'Tambah Data Rekap Setoran',
      'user' => $this->Musyrif_M->getDataMusyrif($username),
      'santri' => $this->Santri_M->getSantriKelas($kelas),
      'kelas' => $this->Kelas_M->getAllKelas(),
      'isi'     => 'halaman_musyrif/v-add_rekap_setoran',
      'IdSiswa' => $idSiswa,
      'JmlTugas' => $this->input->post('jml_tugas'),
      'data_setoran' => $jml_setoran,
      'PekanRekap' => $pekan,
    ];
    // check($data);
    $this->load->view('templates/wrapper-musyrif', $data);
  }

  public function add_Rekap_Setoran()
  {
    $idSiswa = $this->input->post('IdSiswa');
    $JmlTugas = $this->input->post('JmlTugas');
    $JmlSetoran = $this->input->post('JmlSetoran');
    $PekanRekap = $this->input->post('PekanRekap');
    $Hasil = $this->input->post('Hasil');
    $Prosentase = $this->input->post('Prosentase');
    $Reward = $this->input->post('Reward');
    $data = [];
    // $cek = [
    //   'IdSiswa' => $idSiswa,
    //   'JmlTugas' => $JmlTugas,
    //   'JmlSetoran' => $JmlSetoran,
    //   'PekanRekap' => $PekanRekap,
    //   'Hasil' => $Hasil,
    //   'Prosentase' => $Prosentase,
    //   'Reward' => $Reward
    // ];


    foreach ($Reward as $reward => $r) {
      foreach ($Prosentase as $pros => $p) {
        foreach ($Hasil as $hasil => $h) {
          foreach ($JmlSetoran as $setoran => $js) {
            foreach ($idSiswa as $siswa => $s) {
              $data[$siswa]['IdSiswa'] = $s;
              $data[$siswa]['JmlTugas'] = $JmlTugas;
              $data[$setoran]['JmlSetoran'] = $js;
              $data[$siswa]['PekanRekap'] = $PekanRekap;
              $data[$hasil]['Hasil'] = $h;
              $data[$pros]['Prosentase'] = $p;
              $data[$reward]['Reward'] = $r;
            }
          }
        }
      }
    }
    // check($data);
    $this->Rekap_setoran_M->addRekapSetoran($data);
    $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
    redirect('Halaman_Musyrif/rekap_setoran_oleh_Musyrif');
  }
}

/* End of file Halaman_Musyrif.php */
