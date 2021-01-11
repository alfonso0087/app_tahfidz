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
    $this->load->model('Kelas_M');
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
      // 'detail_kelompok' => $this->Detail_kelompok_M->getAllDetailKelompok(),
      'detail_kelompok' => $this->Detail_kelompok_M->tampilAllDetailKelompok(),
      'kelas' => $this->Kelas_M->getAllKelas(),
      'jadwal' => $this->Jadwal_M->getAllJadwal(),
      'kelompok' => $this->Kelompok_M->getAllKelompok(),
      'isi'     => 'halaqoh/v-setoran',
    ];
    // var_dump($data['detail_kelompok']);
    // die;

    $this->load->view('templates/wrapper-admin', $data);
  }

  public function getDetailTargetByKelas()
  {
    $id_kelas = $this->input->post('id_kelas');
    $detailTarget = $this->Detail_target_M->getDetailTargetByKelas($id_kelas);
    // check($detailTarget);
    echo "<option value=" . "" . ">" . "-- Pilih Isi Target --" . "</option>";
    foreach ($detailTarget as $dt) {
      echo "<option value='" . $dt['IdDetailTarget'] . "'id_detailtarget='" . $dt['IdDetailTarget'] . "' >" . $dt['IsiTarget'] . "</option>";
    }
  }

  public function getSantriByKelompok()
  {
    $idKelompok = $this->input->post('id_kelompok');

    $detailKelompok = $this->Detail_kelompok_M->getdetailByKelompok($idKelompok);

    echo "<option value=" . "" . ">" . "-- Pilih Santri --" . "</option>";
    foreach ($detailKelompok as $dk) {
      echo "<option value='" . $dk['IdDetailKelompok'] . "'id_detailkelompok='" . $dk['IdDetailKelompok'] . "' >" . $dk['NamaLengkap'] . "</option>";
    }
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
    check($data);
    $this->Setoran_M->addSetoran($data);
    $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
    redirect('halaqoh/setoran');
  }

  //Update one item
  public function update($id)
  {
    $data = [
      'IdSetoran' => $id,
      // 'IdDetailTarget' => $this->input->post('isi'),
      // 'IdJadwal' => $this->input->post('jadwalHalaqoh'),
      // 'IdDetailKelompok' => $this->input->post('kelompok'),
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

  public function cari_data()
  {
    $nama_kelompok = $this->input->post('nama_kelompok');
    $data = [
      'title'   => 'Setoran',
      'user'    => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'setoran' => $this->Setoran_M->getSetoranByKelompok($nama_kelompok),
      'detail_target' => $this->Detail_target_M->getAllDetailTarget(),
      'detail_kelompok' => $this->Detail_kelompok_M->getAllDetailKelompok(),
      'jadwal' => $this->Jadwal_M->getAllJadwal(),
      'kelompok' => $this->Kelompok_M->getAllKelompok(),
      'isi'     => 'halaqoh/v-setoran',
    ];

    $this->load->view('templates/wrapper-admin', $data);
  }

  public function reset_data()
  {
    $this->Setoran_M->kosongkanSetoran();
    $this->session->set_flashdata('pesan', 'Berhasil direset!');
    redirect('halaqoh/setoran');
  }

  public function export_excel()
  {
    $data = [
      'title'   => 'Setoran',
      'user'    => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'setoran' => $this->Setoran_M->getAllSetoran(),
      'detail_target' => $this->Detail_target_M->getAllDetailTarget(),
      // 'detail_kelompok' => $this->Detail_kelompok_M->getAllDetailKelompok(),
      'detail_kelompok' => $this->Detail_kelompok_M->tampilAllDetailKelompok(),
      'kelas' => $this->Kelas_M->getAllKelas(),
      'jadwal' => $this->Jadwal_M->getAllJadwal(),
      'kelompok' => $this->Kelompok_M->getAllKelompok(),
    ];

    $this->load->view('export/excel/halaqoh/setoran', $data);
  }
}

/* End of file Setoran.php */
