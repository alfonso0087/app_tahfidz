<?php
defined('BASEPATH') or exit('No direct script access allowed');
// panggil autoload Spout
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

// Pakai reader Spout
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;
// use Box\Spout\Common\Type;

class Santri extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Load Dependencies
    cek_login();
    $this->load->model('Santri_M');
    $this->load->model('Kelas_M');
  }

  // List all your items
  public function index()
  {
    $data = [
      'title' => 'Data Santri',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'santri' => $this->Santri_M->getAllSantri(),
      'kelas' => $this->Kelas_M->getAllKelas(),
      'isi' => 'santri/index',
    ];

    $this->load->view('templates/wrapper-admin', $data);
  }

  // Add a new item
  public function add()
  {
    // Data untuk wali santri
    $dataWali = [
      'username' => $this->input->post('email'),
      'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
      'level' => 'Wali',
    ];
    // check($dataWali);

    $Id_User = $this->Santri_M->addWaliSantri($dataWali);
    $data = [
      'IdUser' => $Id_User,
      'NIS' => $this->input->post('nis'),
      'NamaLengkap' => $this->input->post('nama'),
      'Status' => $this->input->post('status'),
      'IdKelas' => $this->input->post('kelas'),
    ];
    $this->Santri_M->addSantri($data);
    $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
    redirect('santri');
  }

  //Update one item
  public function update($id)
  {
    $data = [
      'IdSiswa' => $id,
      'NIS' => $this->input->post('nis'),
      'NamaLengkap' => $this->input->post('nama'),
      'Status' => $this->input->post('status'),
      'IdKelas' => $this->input->post('kelas')
    ];
    $this->Santri_M->updateSantri($data);
    $this->session->set_flashdata('pesan', 'Berhasil diubah!');
    redirect('santri');
  }

  //Delete one item
  public function delete($id)
  {
    $data = [
      'IdSiswa' => $id
    ];
    $this->Santri_M->deleteSantri($data);
    $this->session->set_flashdata('pesan', 'Berhasil dihapus!');
    redirect('santri');
  }

  public function import()
  {
    $config['upload_path']    = './assets/upload/santri/';
    $config['allowed_types']  = 'xls|xlsx';
    $config['file_name']       = 'data santri ' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('importSiswa')) {
      $file = $this->upload->data();
      $reader = ReaderEntityFactory::createXLSXReader();

      // Baca file excel yang diupload
      $reader->open('./assets/upload/santri/' . $file['file_name']);
      $save = array();
      foreach ($reader->getSheetIterator() as $sheets) {
        $numRow = 1;
        // Looping row dalam sheet
        foreach ($sheets->getRowIterator() as $row) {
          if ($numRow > 1) {
            $dataSiswa = array(
              'NIS'         => $row->getCellAtIndex(1),
              'NamaLengkap' => $row->getCellAtIndex(2),
              'Status'      => $row->getCellAtIndex(3),
              'IdKelas'     => $row->getCellAtIndex(4)
            );
            array_push($save, $dataSiswa);
          }
          $numRow++;
        }
        $reader->close();
        $this->Santri_M->importSantri($save);
        $this->session->set_flashdata('pesan', 'Berhasil diimport!');
        redirect('santri');
      }
    } else {
      echo "Errors : " . $this->upload->display_errors();
    }
  }

  // Cari data santri
  public function cari_data()
  {
    $nama_santri = $this->input->post('nama_santri');
    $data = [
      'title' => 'Data Santri',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'santri' => $this->Santri_M->getSantriByNama($nama_santri),
      'kelas' => $this->Kelas_M->getAllKelas(),
      'isi' => 'santri/index',
    ];

    $this->load->view('templates/wrapper-admin', $data);
  }
}

/* End of file Santri.php */
