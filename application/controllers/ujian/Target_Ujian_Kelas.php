<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Target_Ujian_Kelas extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Load Dependencies
    $this->load->model('Target_ujian_kelas_M');
    $this->load->model('Kelas_M');
    $this->load->model('Target_ujian_M');
  }

  // List all your items
  public function index()
  {
    $data = [
      'title'   => 'Data Target Ujian Perkelas',
      'user'    => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'target_ujian' => $this->Target_ujian_M->getAllTargetUjian(),
      'kelas' => $this->Kelas_M->getAllKelas(),
      'target_ujian_kelas' => $this->Target_ujian_kelas_M->getAllTargetUjianKelas(),
      'isi' => 'ujian/v-target_ujian_kelas'
    ];
    $this->load->view('templates/wrapper-admin', $data);
  }

  // Add a new item
  public function add()
  {
    $idKelas = $this->input->post('kelas');
    $targetujian = $this->input->post('targetujian');
    $data = [];
    foreach ($targetujian as $val => $tu) {
      $data[$val]['IdKelas'] = $idKelas;
      $data[$val]['IdTargetUjian'] = $tu;
    }
    // check($data);
    $this->Target_ujian_kelas_M->addTargetKelas($data);
    $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
    redirect('ujian/Target_Ujian_Kelas');
  }

  public function add_tunggal()
  {
    $idKelas = $this->input->post('kelas');
    $targetujian = $this->input->post('targetujian');

    $data = [
      'IdKelas' => $idKelas,
      'IdTargetUjian' => $targetujian
    ];
    // check($data);
    $this->Target_ujian_kelas_M->addTarget($data);
    $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
    redirect('ujian/Target_Ujian_Kelas');
  }

  //Update one item
  public function update($id = NULL)
  {
  }

  //Delete one item
  public function delete($id)
  {
    $idTargetKelas = $id;
    $data = [
      'IdTargetKelas' => $idTargetKelas
    ];
    $this->Target_ujian_kelas_M->hapusTargetKelas($data);
    $this->session->set_flashdata('pesan', 'Berhasil dihapus!');
    redirect('ujian/Target_Ujian_Kelas');
  }
}

/* End of file Target_Ujian_Kelas.php */
