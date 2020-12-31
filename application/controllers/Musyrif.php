<?php
defined('BASEPATH') or exit('No direct script access allowed');
// panggil autoload Spout
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

// Pakai reader Spout
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Musyrif extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Load Dependencies
    cek_login();
    $this->load->model('Musyrif_M');
  }

  // List all your items
  public function index()
  {
    $this->form_validation->set_rules('nama_musyrif', 'Nama Musyrif', 'trim|required', [
      'required' => 'Form %s wajib diisi !'
    ]);
    $this->form_validation->set_rules('email', 'Email Musyrif', 'trim|required|valid_email|is_unique[musyrif.Email]', [
      'required' => 'Form %s wajib diisi !',
      'valid_email' => 'Mohon gunakan email yang valid',
      'is_unique' => '%s telah terdaftar dalam sistem'
    ]);
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]', [
      'required' => 'Form %s wajib diisi !',
      'min_length' => 'Panjang %s minimal 4 karakter'
    ]);
    $this->form_validation->set_rules('no_hp', 'No Handphone', 'trim|required|is_unique[musyrif.NoHp]', [
      'required' => 'Form %s wajib diisi !',
      'is_unique' => '%s telah terdaftar dalam sistem'
    ]);


    if ($this->form_validation->run() == FALSE) {
      // Jika validasi gagal
      $data = [
        'title' => 'Data Musyrif',
        'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
        'musyrif' => $this->Musyrif_M->getAllMusyrif(),
        'isi' => 'musyrif/index',
      ];

      $this->load->view('templates/wrapper-admin', $data);
    } else {
      // Jika validasi sukses
      $this->add();
    }
  }

  // Add a new item
  public function add()
  {
    $nama = $this->input->post('nama_musyrif');
    $email = $this->input->post('email');
    $no_hp = $this->input->post('no_hp');
    $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
    $tanda_tangan = $_FILES['ttd']['name'];

    if ($tanda_tangan) {
      $namafile                = "TTD_" . $nama;
      $config['file_name']     = $namafile;
      $config['upload_path']   = './assets/upload/ttd_musyrif/';
      $config['allowed_types'] = '*';
      $config['max_size']      = '2048';
      $config['overwrite']     = true;

      $this->load->library('upload', $config);
      if ($this->upload->do_upload('ttd')) {
        $file_ttd = $this->upload->data('file_name');
        $data_login = [
          'username' => $email,
          'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
          'level' => 'Musyrif',
        ];
        $Id_User = $this->Musyrif_M->addLoginMusyrif($data_login);
        $data = [
          'IdUser' => $Id_User,
          'NamaMusyrif' => $nama,
          'Email' => $email,
          'NoHp' => $no_hp,
          'Ttd' => $file_ttd
        ];
        $this->Musyrif_M->addMusyrif($data);
        $this->session->set_flashdata('pesan', 'Berhasil ditambah!');
        redirect('musyrif');
      } else {
        echo $this->upload->display_errors();
        echo '<a href="' . base_url('musyrif') . '">Kembali</a>';
      }
    }
  }

  //Update one item
  public function update($id)
  {
    $id_Musyrif = $id;
    $nama = $this->input->post('nama_musyrif');
    $email = $this->input->post('email');
    $no_hp = $this->input->post('no_hp');
    $tanda_tangan = $_FILES['ttd']['name'];

    if ($tanda_tangan) {
      $namafile                = "TTD_" . $nama;
      $config['file_name']     = $namafile;
      $config['upload_path']   = './assets/upload/ttd_musyrif/';
      $config['allowed_types'] = '*';
      $config['max_size']      = '2048';
      $config['overwrite']     = true;

      $this->load->library('upload', $config);
      if ($this->upload->do_upload('ttd')) {
        $file_ttd = $this->upload->data('file_name');
        $data = [
          'IdMusyrif' => $id_Musyrif,
          'NamaMusyrif' => $nama,
          'Email' => $email,
          'NoHp' => $no_hp,
          'Ttd' => $file_ttd
        ];
        $this->Musyrif_M->updateMusyrif($data);
        $this->session->set_flashdata('pesan', 'Berhasil diubah!');
        redirect('musyrif');
      } else {
        echo $this->upload->display_errors();
        echo '<a href="' . base_url('musyrif') . '">Kembali</a>';
      }
    } else {
      $data = [
        'IdMusyrif' => $id_Musyrif,
        'NamaMusyrif' => $nama,
        'Email' => $email,
        'NoHp' => $no_hp
      ];
      $this->Musyrif_M->updateMusyrif($data);
      $this->session->set_flashdata('pesan', 'Berhasil diubah!');
      redirect('musyrif');
    }
  }

  //Delete one item
  public function delete($id)
  {
    $data = ['IdMusyrif' => $id];
    $this->Musyrif_M->deleteMusyrif($data);
    $this->session->set_flashdata('pesan', 'Berhasil dihapus!');
    redirect('musyrif');
  }

  public function import()
  {
    $config['upload_path']    = './assets/upload/musyrif/';
    $config['allowed_types']  = 'xls|xlsx';
    $config['file_name']       = 'data musyrif ' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('importMusyrif')) {
      $file = $this->upload->data();
      $reader = ReaderEntityFactory::createXLSXReader();

      // Baca file excel yang diupload
      $reader->open('./assets/upload/musyrif/' . $file['file_name']);
      $save = array();
      foreach ($reader->getSheetIterator() as $sheets) {
        $numRow = 1;
        // Looping row dalam sheet
        foreach ($sheets->getRowIterator() as $row) {
          if ($numRow > 1) {
            $dataSiswa = array(
              'NamaMusyrif' => $row->getCellAtIndex(1),
              'Email'       => $row->getCellAtIndex(2),
              'NoHp'        => $row->getCellAtIndex(3),
            );
            array_push($save, $dataSiswa);
          }
          $numRow++;
        }
        $reader->close();
        $this->Musyrif_M->importMusyrif($save);
        $this->session->set_flashdata('pesan', 'Berhasil diimport!');
        redirect('musyrif');
      }
    } else {
      echo "Errors : " . $this->upload->display_errors();
    }
  }

  // public function export()
  // {
  //   $tipeFile = $this->input->post('tipeFile');
  //   if ($tipeFile == "pdf") {
  //     $this->export_pdf();
  //   } elseif ($tipeFile == 'xls') {
  //     $this->export_xls();
  //   } else {
  //     $this->export_xlsx();
  //   }
  // }

  public function export_pdf()
  {
    $mpdf = new \Mpdf\Mpdf();
    $namafile = 'Data Musyrif.pdf';
    $dataMusyrif = $this->Musyrif_M->getAllMusyrif();
    $tampilan = $this->load->view('export/pdf/musyrif', ['musyrif' => $dataMusyrif], TRUE);
    $mpdf->WriteHTML($tampilan);
    $mpdf->Output($namafile, "D");
  }

  public function cari_data()
  {
    $nama_musyrif = $this->input->post('nama_musyrif');
    $data = [
      'title' => 'Data Musyrif',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'musyrif' => $this->Musyrif_M->getMusyrifByNama($nama_musyrif),
      'isi' => 'musyrif/index',
    ];

    $this->load->view('templates/wrapper-admin', $data);
  }
}

/* End of file Musyrif.php */
