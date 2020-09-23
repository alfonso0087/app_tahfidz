<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Catatan_santri extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Load Dependencies
    $this->load->model('Santri_M');
    $this->load->model('Jenis_catatan_M');
    $this->load->model('Catatan_santri_M');
  }

  // List all your items
  public function index()
  {
    $data = [
      'title' => 'Catatan Santri',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'catatan_santri' => $this->Catatan_santri_M->getAllCatatanSantri(),
      'santri' => $this->Santri_M->getAllSantri(),
      'jenis_catatan' => $this->Jenis_catatan_M->getAllJenisCatatan(),
      'isi' => 'catatan/v-catatan_santri',
    ];
    $this->load->view('templates/wrapper-admin', $data);
  }

  // Add a new item
  public function add()
  {
    $data = [
      'IdSiswa' => $this->input->post('nama'),
      'IdJenisCatatan' => $this->input->post('jeniscatatan'),
      'IsiCatatan' => $this->input->post('isi')
    ];
    $this->Catatan_santri_M->addCatatanSantri($data);
    $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
    redirect('catatan/catatan_santri');
  }

  //Update one item
  public function update($id)
  {
    $data = [
      'IdCatatan' => $id,
      'IdSiswa' => $this->input->post('nama'),
      'IdJenisCatatan' => $this->input->post('jeniscatatan'),
      'IsiCatatan' => $this->input->post('isi')
    ];
    $this->Catatan_santri_M->updateCatatanSantri($data);
    $this->session->set_flashdata('pesan', 'Berhasil diubah!');
    redirect('catatan/catatan_santri');
  }

  //Delete one item
  public function delete($id)
  {
    $data = [
      'IdCatatan' => $id
    ];
    $this->Catatan_santri_M->deleteCatatanSantri($data);
    $this->session->set_flashdata('pesan', 'Berhasil dihapus!');
    redirect('catatan/catatan_santri');
  }
}

/* End of file Catatan_santri.php */
