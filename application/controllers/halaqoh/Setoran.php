<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setoran extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Load Dependencies
    cek_login();
    $this->load->model('Setoran_M');
    $this->load->model('Detail_kelompok_M');
    $this->load->model('Jadwal_M');
    $this->load->model('Kelompok_M');
    $this->load->model('Detail_target_M');
  }

  // List all your items
  public function index($offset = 0)
  {
    $data = [
      'title'   => 'Setoran',
      'user'    => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'setoran' => $this->Setoran_M->getAllSetoran(),
      'detail_target' => $this->Detail_target_M->getAllDetailTarget(),
      'detail_kelompok' => $this->Detail_kelompok_M->getAllDetailKelompok(),
      'jadwal' => $this->Jadwal_M->getAllJadwal(),
      'kelompok' => $this->Kelompok_M->getAllKelompok(),
      'isi'     => 'halaqoh/v-setoran',
    ];
    // var_dump($data['detail_kelompok']);
    // die;

    $this->load->view('templates/wrapper-admin', $data);
  }

  // Add a new item
  public function add()
  {
    $data = [
      'IdDetailTarget' => $this->input->post('isi'),
      'IdJadwal' => $this->input->post('jadwalHalaqoh'),
      'IdDetailKelompok' => $this->input->post('kelompok'),
      'Presensi' => $this->input->post('presensi'),
      'Keterangan' => $this->input->post('keterangan')
    ];
    $this->Setoran_M->addSetoran($data);
    $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
    redirect('halaqoh/setoran');
  }

  //Update one item
  public function update($id)
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
    redirect('halaqoh/setoran');
  }

  //Delete one item
  public function delete($id)
  {
    $data = [
      'IdSetoran' => $id
    ];
    $this->Setoran_M->deleteSetoran($data);
    $this->session->set_flashdata('pesan', 'Berhasil dihapus!');
    redirect('halaqoh/setoran');
  }
}

/* End of file Setoran.php */
