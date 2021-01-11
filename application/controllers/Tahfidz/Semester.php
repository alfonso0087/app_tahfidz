<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Semester extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Load Dependencies
    cek_login();
    $this->load->model('Semester_M');
  }

  // List all your items
  public function index()
  {
    $data = [
      'title' => 'Data Semester',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'semester' => $this->Semester_M->getAllSemester(),
      'isi' => 'target-tahfidz/v-semester',
    ];
    $this->load->view('templates/wrapper-admin', $data);
  }

  // Add a new item
  public function add()
  {
    $data = [
      'Semester' => $this->input->post('semester')
    ];
    $this->Semester_M->addSemester($data);
    $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
    redirect('tahfidz/semester');
  }

  //Update one item
  public function update($id)
  {
    $data = [
      'IdSemester' => $id,
      'Semester' => $this->input->post('semester')
    ];
    $this->Semester_M->updateSemester($data);
    $this->session->set_flashdata('pesan', 'Berhasil diubah!');
    redirect('tahfidz/semester');
  }

  //Delete one item
  public function delete($id)
  {
    $data = [
      'IdSemester' => $id
    ];
    $this->Semester_M->deleteSemester($data);
    $this->session->set_flashdata('pesan', 'Berhasil dihapus!');
    redirect('tahfidz/semester');
  }

  public function export_excel()
  {
    $data = [
      'title' => 'Data Semester',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'semester' => $this->Semester_M->getAllSemester(),
    ];

    $this->load->view('export/excel/tahfidz/semester', $data);
  }
}

/* End of file Semester.php */
