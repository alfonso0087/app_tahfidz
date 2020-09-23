<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Periode_Ujian extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Load Dependencies
    cek_login();
    $this->load->model('Ajaran_M');
    $this->load->model('Kelas_M');
    $this->load->model('Periode_M');
    $this->load->model('Semester_M');
    $this->load->model('Periode_ujian_M');
  }

  // List all your items
  public function index()
  {
    $data = [
      'title'         => 'Periode Ujian',
      'user'          => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'periode_ujian' => $this->Periode_ujian_M->getAllPeriodeUjian(),
      'tahun_ajaran'  => $this->Ajaran_M->getAllAjaran(),
      'kelas'         => $this->Kelas_M->getAllKelas(),
      'periode'       => $this->Periode_M->getAllPeriode(),
      'semester'      => $this->Semester_M->getAllSemester(),
      'isi'           => 'ujian/v-periode_ujian',
    ];

    $this->load->view('templates/wrapper-admin', $data);
  }

  // Add a new item
  public function add()
  {
    $data = [
      'IdPeriode'   => $this->input->post('periode'),
      'IdAjaran'    => $this->input->post('ajaran'),
      'IdSemester'  => $this->input->post('semester'),
      'IdKelas'     => $this->input->post('kelas'),
      'KetPeriode'  => $this->input->post('KetPeriode')
    ];
    $this->Periode_ujian_M->addPeriodeUjian($data);
    $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
    redirect('ujian/periode_ujian');
  }

  //Update one item
  public function update($id)
  {
    $data = [
      'IdPeriodeUjian' => $id,
      'IdPeriode'      => $this->input->post('periode'),
      'IdAjaran'       => $this->input->post('ajaran'),
      'IdSemester'     => $this->input->post('semester'),
      'IdKelas'        => $this->input->post('kelas'),
      'KetPeriode'     => $this->input->post('KetPeriode')
    ];
    // var_dump($data);
    // die;
    $this->Periode_ujian_M->updatePeriodeUjian($data);
    $this->session->set_flashdata('pesan', 'Berhasil diubah!');
    redirect('ujian/periode_ujian');
  }

  //Delete one item
  public function delete($id)
  {
    $data = [
      'IdPeriodeUjian' => $id,
    ];
    $this->Periode_ujian_M->deletePeriodeUjian($data);
    $this->session->set_flashdata('pesan', 'Berhasil dihapus!');
    redirect('ujian/periode_ujian');
  }
}

/* End of file periode.php */
