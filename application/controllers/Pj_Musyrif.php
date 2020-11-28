<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pj_Musyrif extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Do your magic here
    cek_login();
    $this->load->model('Musyrif_M');
    $this->load->model('Santri_M');
    $this->load->model('Kelompok_M');
    $this->load->model('Pj_musyrif_M');
  }


  public function index()
  {
    $data = [
      'title' => 'Data PJ Musyrif',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'pjmusyrif' => $this->Pj_musyrif_M->getAllPJMusyrif(),
      // 'santri' => $this->Santri_M->getAllSantri(),
      'kelompok_halaqoh' => $this->Kelompok_M->getAllKelompok(),
      'musyrif' => $this->Musyrif_M->getAllMusyrif(),
      'isi' => 'pj-musyrif/index',
    ];

    $this->load->view('templates/wrapper-admin', $data);
  }

  public function add()
  {
    $id_Musyrif = $this->input->post('nama_musyrif');
    $jabatan = $this->input->post('jabatan_musyrif');
    $jabatan_tambahan = $this->input->post('jabatan_tambahan');
    $id_kelompok = $this->input->post('id_kelompok');
    $data = [];

    foreach ($id_kelompok as $IdKelompok => $val) {
      $data[$IdKelompok]['IdMusyrif'] = $id_Musyrif;
      $data[$IdKelompok]['JabatanMusyrif'] = $jabatan;
      $data[$IdKelompok]['JabatanTambahan'] = $jabatan_tambahan;
      $data[$IdKelompok]['IdKelompok'] = $val;
    }
    // check($data);
    $this->Pj_musyrif_M->addPJMusyrif($data);
    $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
    redirect('Pj_Musyrif');
  }

  public function delete($id)
  {
    $data = [
      'IdPjMusyrif' => $id
    ];
    // check($data);
    $this->Pj_musyrif_M->deletePJMusyrif($data);
    $this->session->set_flashdata('pesan', 'Berhasil dihapus!');
    redirect('Pj_Musyrif');
  }

  public function cari_data()
  {
    $nama_musyrif = $this->input->post('nama_musyrif');
    $data = [
      'title' => 'Data PJ Musyrif',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'pjmusyrif' => $this->Pj_musyrif_M->getMusyrifByNama($nama_musyrif),
      'kelompok_halaqoh' => $this->Kelompok_M->getAllKelompok(),
      'musyrif' => $this->Musyrif_M->getAllMusyrif(),
      'isi' => 'pj-musyrif/index',
    ];

    $this->load->view('templates/wrapper-admin', $data);
  }
}

/* End of file Pj_Musyrif.php */
