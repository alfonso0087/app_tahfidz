<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_catatan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Load Dependencies
    $this->load->model('Jenis_catatan_M');
    $this->load->model('Detail_Jenis_catatan_M');
  }

  // List all your items
  public function index($offset = 0)
  {
    $data = [
      'title' => 'Detail Jenis Catatan',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'jenis_catatan' => $this->Jenis_catatan_M->getAllJenisCatatan(),
      'detail_jenis_catatan' => $this->Detail_Jenis_catatan_M->getAllDetailJenisCatatan(),
      'isi' => 'catatan/v-detail_catatan',
    ];
    // check($data['detail_jenis_catatan']);

    $this->load->view('templates/wrapper-admin', $data);
  }

  // Add a new item
  public function add()
  {
    $data = [
      'IdJenisCatatan' => $this->input->post('jeniscatatan'),
      'DetailCatatan' => $this->input->post('isidetailcatatan')
    ];
    $this->Detail_Jenis_catatan_M->addDetailJenisCatatan($data);
    $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
    redirect('catatan/detail_catatan');
  }

  //Update one item
  public function update($id)
  {
    $data = [
      'IdDetailJenisCatatan' => $id,
      'IdJenisCatatan' => $this->input->post('jeniscatatan'),
      'DetailCatatan' => $this->input->post('isidetailcatatan')
    ];
    $this->Detail_Jenis_catatan_M->updateDetailJenisCatatan($data);
    $this->session->set_flashdata('pesan', 'Berhasil diubah!');
    redirect('catatan/detail_catatan');
  }

  //Delete one item
  public function delete($id)
  {
    $data = [
      'IdDetailJenisCatatan' => $id
    ];
    $this->Detail_Jenis_catatan_M->deleteDetailJenisCatatan($data);
    $this->session->set_flashdata('pesan', 'Berhasil dihapus!');
    redirect('catatan/detail_catatan');
  }
}

/* End of file Detail_catatab.php */
