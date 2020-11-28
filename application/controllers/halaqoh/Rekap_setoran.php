<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekap_setoran extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Load Dependencies
    cek_login();
    $this->load->model('Rekap_setoran_M');
    $this->load->model('Santri_M');
    $this->load->model('Kelas_M');
  }

  // List all your items
  public function index()
  {
    $data = [
      'title'   => 'Rekap Setoran',
      'user'    => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'rekap_setoran' => $this->Rekap_setoran_M->getAllRekapSetoran(),
      'santri' => $this->Santri_M->getAllSantri(),
      'isi'     => 'halaqoh/v-rekap_setoran',
    ];
    // var_dump($data['rekap_setoran']);
    // die;

    $this->load->view('templates/wrapper-admin', $data);
  }

  public function form_add()
  {
    $kelas = $this->input->get('kelas');
    // check($kelas);
    if (!$kelas) {
      $data = [
        'title'   => 'Tambah Data Rekap Setoran',
        'user'    => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
        'santri' => '',
        'kelas' => $this->Kelas_M->getAllKelas(),
        'isi'     => 'halaqoh/v-add_rekap_setoran',
      ];
      // var_dump($data['detail_kelompok']);
      // die;

      $this->load->view('templates/wrapper-admin', $data);
    } else {
      $data = [
        'title'   => 'Tambah Data Rekap Setoran',
        'user'    => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
        'santri' => $this->Santri_M->getSantriKelas($kelas),
        'kelas' => $this->Kelas_M->getAllKelas(),
        'isi'     => 'halaqoh/v-add_rekap_setoran',
      ];
      // var_dump($data['detail_kelompok']);
      // die;

      $this->load->view('templates/wrapper-admin', $data);
    }
  }

  public function add_hasil()
  {
    $kelas = $this->input->post('kelas');

    $idSiswa = $this->input->post('IdSiswa');
    // check($idSiswa);
    $pekan = $this->input->post('pekan');


    $jml_setoran = $this->Rekap_setoran_M->countKeterangan($idSiswa, $pekan);
    // check($this->db->last_query());
    $data = [
      'title'   => 'Tambah Data Rekap Setoran',
      'user'    => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'santri' => $this->Santri_M->getSantriKelas($kelas),
      'kelas' => $this->Kelas_M->getAllKelas(),
      'isi'     => 'halaqoh/v-add_rekap_setoran',
      'IdSiswa' => $idSiswa,
      'JmlTugas' => $this->input->post('jml_tugas'),
      'id_kelas' => $kelas,
      'data_setoran' => $jml_setoran,
      'PekanRekap' => $pekan,
    ];
    // check($data);
    $this->load->view('templates/wrapper-admin', $data);
  }

  // Add a new item
  public function add()
  {
    $idSiswa = $this->input->post('IdSiswa');
    $IdKelas = $this->input->post('IdKelas');
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
              $data[$siswa]['IdKelas'] = $IdKelas;
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
    redirect('halaqoh/rekap_setoran');
  }

  //Update one item
  public function update($id = NULL)
  {
  }

  //Delete one item
  public function delete($IdKelas)
  {
    $data = [
      'IdKelas' => $IdKelas
    ];
    $this->Rekap_setoran_M->deleteByKelas($data);
    $this->session->set_flashdata('pesan', 'Berhasil dihapus!');
    redirect('halaqoh/Rekap_setoran');
  }

  public function cari_data()
  {
    $nama_santri = $this->input->post('nama_santri');
    $data = [
      'title'   => 'Rekap Setoran',
      'user'    => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'rekap_setoran' => $this->Rekap_setoran_M->getRekapSetoranByNamaSantri($nama_santri),
      'santri' => $this->Santri_M->getAllSantri(),
      'isi'     => 'halaqoh/v-rekap_setoran',
    ];
    // var_dump($data['detail_kelompok']);
    // die;

    $this->load->view('templates/wrapper-admin', $data);
  }
}

/* End of file Rekap_setoran.php */
