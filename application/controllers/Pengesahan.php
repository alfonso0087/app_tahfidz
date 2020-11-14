<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengesahan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Do your magic here
    cek_login();
    $this->load->model('Pengesahan_M');
  }


  public function index()
  {
    $data = [
      'title' => 'Data Pengesahan',
      'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
      'pengesahan' => $this->Pengesahan_M->getAllPengesahan(),
      'isi' => 'pengesahan/index',
    ];

    $this->load->view('templates/wrapper-admin', $data);
  }

  public function add()
  {
    $nama = $this->input->post('nama');
    $jabatan = $this->input->post('jabatan');
    $nip = $this->input->post('nip');
    $tanda_tangan = $_FILES['ttd']['name'];
    $status = $this->input->post('status');


    if ($tanda_tangan) {
      $namafile = "TTD_" . $nama;
      $config['file_name'] = $namafile;
      $config['upload_path'] = './assets/upload/ttd/';
      $config['allowed_types'] = '*';
      $config['max_size']      = '2048';
      $config['overwrite'] = true;

      $this->load->library('upload', $config);
      if ($this->upload->do_upload('ttd')) {
        $file_ttd = $this->upload->data('file_name');
        $data_pengesahan = [
          'Nama' => $nama,
          'Jabatan' => $jabatan,
          'Nip' => $nip,
          'Ttd' => $file_ttd,
          'Status' => $status
        ];
        $this->Pengesahan_M->add_pengesahan($data_pengesahan);
        $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
        redirect('pengesahan');
      } else {
        echo $this->upload->display_errors();
        echo '<a href="' . base_url('pengesahan') . '">Kembali</a>';
      }
    }
  }

  public function update($id)
  {
    $id_pengesahan = $id;
    $nama = $this->input->post('nama');
    $jabatan = $this->input->post('jabatan');
    $nip = $this->input->post('nip');
    $tanda_tangan = $_FILES['ttd']['name'];
    $status = $this->input->post('status');
    // check($tanda_tangan);

    if ($tanda_tangan) {
      // $namafile                = "TTD_" . $nama;
      // $config['file_name']     = $namafile;
      $config['upload_path']   = './assets/upload/ttd/';
      $config['allowed_types'] = '*';
      $config['max_size']      = '2048';
      $config['overwrite']     = true;

      $this->load->library('upload', $config);
      if ($this->upload->do_upload('ttd')) {
        $file_ttd = $this->upload->data('file_name');
        $data_pengesahan = [
          'IdPengesahan' => $id_pengesahan,
          'Nama' => $nama,
          'Jabatan' => $jabatan,
          'Nip' => $nip,
          'Ttd' => $file_ttd,
          'Status' => $status
        ];
        $this->Pengesahan_M->update_pengesahan($data_pengesahan);
        $this->session->set_flashdata('pesan', 'Berhasil diubah!');
        redirect('pengesahan');
      } else {
        echo $this->upload->display_errors();
        echo '<a href="' . base_url('pengesahan') . '">Kembali</a>';
      }
    } else {
      $data_pengesahan = [
        'IdPengesahan' => $id_pengesahan,
        'Nama' => $nama,
        'Jabatan' => $jabatan,
        'Nip' => $nip,
        'Status' => $status
      ];
      // check($data_pengesahan);
      $this->Pengesahan_M->update_pengesahan($data_pengesahan);
      $this->session->set_flashdata('pesan', 'Berhasil diubah!');
      redirect('pengesahan');
    }
  }

  public function delete($id)
  {
    $data = ['IdPengesahan' => $id];
    $this->Pengesahan_M->delete_pengesahan($data);
    $this->session->set_flashdata('pesan', 'Berhasil dihapus!');
    redirect('pengesahan');
  }
}

/* End of file Pengesahan.php */
