<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_kelompok extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Load Dependencies
    cek_login();
    $this->load->model('Detail_kelompok_M');
    $this->load->model('Santri_M');
    $this->load->model('Kelompok_M');
    $this->load->model('Musyrif_M');
    $this->load->model('Kelas_M');
  }

  // List all your items
  public function index($offset = 0)
  {
    $this->form_validation->set_rules('siswa', 'Data Siswa', 'trim|required|is_unique[detailkelompok.IdSiswa]', [
      'required' => '%s wajib diisi !',
      'is_unique' => '%s sudah ada dalam sistem'
    ]);
    $this->form_validation->set_rules('musyrif', 'Data Musyrif', 'trim|required', [
      'required' => '%s wajib diisi !'
    ]);

    if ($this->form_validation->run() == FALSE) {
      // Jika validasi gagal
      $idKelas = $this->input->get('kelas');
      $idKelompok = $this->input->get('kelompok');
      // check($idKelas);
      if ($idKelas || $idKelompok) {
        $data = [
          'title'           => 'Detail Kelompok',
          'user'            => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
          'detail_kelompok' => $this->Detail_kelompok_M->getAllDetailKelompok($idKelas, $idKelompok),
          'list_detail_kelompok' => '',
          'siswa'           => $this->Santri_M->getAllSantri(),
          'kelas'           => $this->Kelas_M->getAllKelas(),
          'kelompok'        => $this->Kelompok_M->getAllKelompok(),
          'musyrif'         => $this->Musyrif_M->getAllMusyrif(),
          'isi'             => 'halaqoh/v-detail_kelompok',
        ];
        // check($data['detail_kelompok']);
        $this->load->view('templates/wrapper-admin', $data);
      } else {
        $data = [
          'title'           => 'Detail Kelompok',
          'user'            => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
          'detail_kelompok' => '',
          'list_detail_kelompok' => $this->Detail_kelompok_M->tampilAllDetailKelompok(),
          'siswa'           => $this->Santri_M->getAllSantri(),
          'kelas'           => $this->Kelas_M->getAllKelas(),
          'kelompok'        => $this->Kelompok_M->getAllKelompok(),
          'musyrif'         => $this->Musyrif_M->getAllMusyrif(),
          'isi'             => 'halaqoh/v-detail_kelompok',
        ];

        $this->load->view('templates/wrapper-admin', $data);
      }
    } else {
      $this->add();
    }
  }

  // Add a new item
  public function add()
  {
    $data = [
      'IdKelompok' => $this->input->post('kelompok'),
      'IdSiswa' => $this->input->post('siswa'),
      'IdMusyrif' => $this->input->post('musyrif')
    ];
    $this->Detail_kelompok_M->addDetailKelompok($data);
    $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
    redirect('halaqoh/detail_kelompok');
  }

  //Update one item
  public function update($id)
  {
    $data = [
      'IdDetailKelompok' => $id,
      'IdKelompok' => $this->input->post('kelompok'),
      'IdSiswa' => $this->input->post('siswa'),
      'IdMusyrif' => $this->input->post('musyrif')
    ];
    $this->Detail_kelompok_M->updateDetailKelompok($data);
    $this->session->set_flashdata('pesan', 'Berhasil diubah!');
    redirect('halaqoh/detail_kelompok');
  }

  //Delete one item
  public function delete($id)
  {
    $data = ['IdDetailKelompok' => $id];
    $this->Detail_kelompok_M->deleteDetailKelompok($data);
    $this->session->set_flashdata('pesan', 'Berhasil dihapus!');
    redirect('halaqoh/detail_kelompok');
  }

  public function reset_data()
  {
    $this->Detail_kelompok_M->kosongkanDetailKelompok();
    $this->session->set_flashdata('pesan', 'Berhasil direset!');
    redirect('halaqoh/detail_kelompok');
  }

  public function export_excel()
  {
    $data = [
      'title'           => 'Detail Kelompok',
      'user'            => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'detail_kelompok' => '',
      'list_detail_kelompok' => $this->Detail_kelompok_M->tampilAllDetailKelompok(),
      'siswa'           => $this->Santri_M->getAllSantri(),
      'kelas'           => $this->Kelas_M->getAllKelas(),
      'kelompok'        => $this->Kelompok_M->getAllKelompok(),
      'musyrif'         => $this->Musyrif_M->getAllMusyrif(),
    ];

    $this->load->view('export/excel/all_detail_kelompok', $data);
  }
  public function export_all_data_excel()
  {
    $data = [
      'title'           => 'Detail Kelompok',
      'user'            => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'detail_kelompok' => '',
      'list_detail_kelompok' => $this->Detail_kelompok_M->tampilAllDetailKelompok(),
      'siswa'           => $this->Santri_M->getAllSantri(),
      'kelas'           => $this->Kelas_M->getAllKelas(),
      'kelompok'        => $this->Kelompok_M->getAllKelompok(),
      'musyrif'         => $this->Musyrif_M->getAllMusyrif(),
    ];

    $this->load->view('export/excel/halaqoh/all_detail_kelompok', $data);
  }
}

/* End of file Detail_kelompok.php */
