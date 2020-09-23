<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_target extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Load Dependencies
    cek_login();
    $this->load->model('Detail_target_M');
    $this->load->model('Target_M');
  }

  // List all your items
  public function index()
  {
    $data = [
      'title'   => 'Data Detail Target',
      'user'    => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'detail'  => $this->Detail_target_M->getAllDetailTarget(),
      'target'  => $this->Target_M->getAllTarget(),
      'isi'     => 'target-tahfidz/v-detail_target',
    ];
    $this->load->view('templates/wrapper-admin', $data);
  }

  // Add a new item
  public function add()
  {
    $data = [
      'IdTarget' => $this->input->post('pekan'),
      'IsiTarget' => $this->input->post('isi'),
      'Keterangan' => $this->input->post('keterangan'),
      'Tgl' => $this->input->post('tgl'),
    ];
    $this->Detail_target_M->addDetailTarget($data);
    $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
    redirect('tahfidz/detail_target');
  }

  //Update one item
  public function update($id)
  {
    $data = [
      'IdDetailTarget' => $id,
      'IdTarget' => $this->input->post('pekan'),
      'IsiTarget' => $this->input->post('isi'),
      'Keterangan' => $this->input->post('keterangan'),
      'Tgl' => $this->input->post('tgl')
    ];
    $this->Detail_target_M->updateDetailTarget($data);
    $this->session->set_flashdata('pesan', 'Berhasil diubah!');
    redirect('tahfidz/detail_target');
  }

  //Delete one item
  public function delete($id)
  {
    $data = ['IdDetailTarget' => $id];
    $this->Detail_target_M->deleteDetailTarget($data);
    $this->session->set_flashdata('pesan', 'Berhasil dihapus!');
    redirect('tahfidz/detail_target');
  }
}

/* End of file Detail_target.php */
