<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Target_Ujian extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Load Dependencies
    cek_login();
    $this->load->model('Target_ujian_M');
    $this->load->model('Jenis_ujian_M');
  }

  // List all your items
  public function index()
  {
    $data = [
      'title'   => 'Data Target Ujian',
      'user'    => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'jenis_ujian' => $this->Jenis_ujian_M->getAllJenisUjian(),
      'target_ujian' => $this->Target_ujian_M->getAllTargetUjian(),
      'isi' => 'ujian/v-target_ujian'
    ];
    $this->load->view('templates/wrapper-admin', $data);
  }

  // Add a new item
  public function add()
  {
    $data = [
      'IdJenisUjian' => $this->input->post('jenis_ujian'),
      'Keterangan' => $this->input->post('keterangan')
    ];
    $this->Target_ujian_M->addTargetUjian($data);
    $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
    redirect('ujian/target_ujian');
  }

  //Update one item
  public function update($id)
  {
    $data = [
      'IdTargetUjian' => $id,
      'IdJenisUjian' => $this->input->post('jenis_ujian'),
      'Keterangan' => $this->input->post('keterangan')
    ];
    $this->Target_ujian_M->updateTargetUjian($data);
    $this->session->set_flashdata('pesan', 'Berhasil diubah!');
    redirect('ujian/target_ujian');
  }

  //Delete one item
  public function delete($id)
  {
    $data = ['IdTargetUjian' => $id];
    $this->Target_ujian_M->deleteTargetUjian($data);
    $this->session->set_flashdata('pesan', 'Berhasil dihapus!');
    redirect('ujian/target_ujian');
  }

  public function export_excel()
  {
    $data = [
      'title'   => 'Data Target Ujian',
      'user'    => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'jenis_ujian' => $this->Jenis_ujian_M->getAllJenisUjian(),
      'target_ujian' => $this->Target_ujian_M->getAllTargetUjian(),
    ];

    $this->load->view('export/excel/ujian/target_ujian', $data);
  }
}

/* End of file Target_Ujian.php */
