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
    $this->load->model('Detail_Jenis_catatan_M');
    $this->load->model('Periode_M');
  }

  // List all your items
  public function index()
  {
    $data = [
      'title' => 'Catatan Santri',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'catatan_santri' => $this->Catatan_santri_M->getAllCatatanSantri(),
      'santri' => $this->Santri_M->getAllSantri(),
      'periode' => $this->Periode_M->getAllPeriode(),
      'jenis_catatan' => $this->Jenis_catatan_M->getAllJenisCatatan(),
      'isi' => 'catatan/v-catatan_santri',
    ];
    $this->load->view('templates/wrapper-admin', $data);
  }

  public function getDetailCatatanByJenis()
  {
    $IdJenisCatatan = $this->input->post('id_jenis_catatan');
    $DataDetailJenisCatatan = $this->Detail_Jenis_catatan_M->getDetailByJenisCatatan($IdJenisCatatan);

    foreach ($DataDetailJenisCatatan as $detailJenis) {
      echo "<option value='" . $detailJenis['DetailCatatan'] . "'id_detail_jenis_catatan='" . $detailJenis['IdDetailJenisCatatan'] . "' >" . $detailJenis['DetailCatatan'] . "</option>";
    }
  }

  // Add a new item
  public function add()
  {
    $IdSiswa = $this->input->post('nama');
    $IdPeriode = $this->input->post('periode');
    $IdJenisCatatan = $this->input->post('jeniscatatan');
    $IdDetailJenisCatatan = $this->input->post('detailjeniscatatan');
    $catatan_musyrif = $this->input->post('catatan_musyrif');


    // Ubah isi array detail jenis catatab menjadi string
    $pecahdetail = implode(",", $IdDetailJenisCatatan);
    // $jmlDetCat = count($IdDetailJenisCatatan);
    // $isi = $this->input->post('isi');
    $data = [
      'IdSiswa' => $IdSiswa,
      'IdPeriode' => $IdPeriode,
      'IdJenisCatatan' => $IdJenisCatatan,
      'IsiCatatan' => $pecahdetail,
      'CatatanMusyrif' => $catatan_musyrif
    ];
    // check($data);

    $this->Catatan_santri_M->addCatatanSantri($data);
    $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
    redirect('catatan/catatan_santri');

    // for ($i = 0; $i < $jmlDetCat; $i++) {
    //   # code...
    //   $data[$i]['IdSiswa'] = $IdSiswa;
    //   $data[$i]['IsiCatatan'] = $isi;
    //   $data[$i]['IdJenisCatatan'] = $IdJenisCatatan;
    //   foreach ($IdDetailJenisCatatan as $key => $val) {
    //     $data[$key]['IdDetailJenisCatatan'] = $val;
    //   }
    // }

    // check($data);
    // $data = [
    //   'IdSiswa' => $this->input->post('nama'),
    //   'IdJenisCatatan' => $this->input->post('jeniscatatan'),
    //   'IdDetailJenisCatatan' => $this->input->post('detailjeniscatatan'),
    //   'IsiCatatan' => $this->input->post('isi')
    // ];

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
