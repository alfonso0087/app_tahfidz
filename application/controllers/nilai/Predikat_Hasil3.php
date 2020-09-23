<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Predikat_Hasil3 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        cek_login();
        $this->load->model('Predikat_hasil3_M');
    }

    // List all your items
    public function index()
    {
        $data = [
            'title' => 'Predikat Hasil Ujian Kelas 5 dan 6',
            'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
            'predikathasil3' => $this->Predikat_hasil3_M->getAllPredikatHasil3(),
            'isi' => 'nilai/v-predikat_hasil3',
        ];

        $this->load->view('templates/wrapper-admin', $data);
    }

    // Add a new item
    public function add()
    {
        $data = [
            'BatasBawahHasil3' => $this->input->post('batas_bawah3'),
            'BatasAtasHasil3' => $this->input->post('batas_atas3'),
            'PredikatHasil3' => $this->input->post('predikat_hasil3'),
            'KetHasil3' => $this->input->post('ket_hasil3'),
        ];
        $this->Predikat_hasil3_M->addPredikatHasil3($data);
        $this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
        redirect('nilai/predikat_hasil3');
    }

    //Update one item
    public function update($id)
    {
        $data = [
            'IdPredikatHasil3' => $id,
            'BatasBawahHasil3' => $this->input->post('batas_bawah3'),
            'BatasAtasHasil3' => $this->input->post('batas_atas3'),
            'PredikatHasil3' => $this->input->post('predikat_hasil3'),
            'KetHasil3' => $this->input->post('ket_hasil3'),
        ];
        $this->Predikat_hasil3_M->updatePredikatHasil3($data);
        $this->session->set_flashdata('pesan', 'Berhasil diubah!');
        redirect('nilai/predikat_hasil3');
    }

    //Delete one item
    public function delete($id)
    {
        $data = ['IdPredikatHasil3' => $id];
        $this->Predikat_hasil3_M->deletePredikatHasil3($data);
        $this->session->set_flashdata('pesan', 'Berhasil dihapus!');
        redirect('nilai/predikat_hasil3');
    }
}

/* End of file Musyrif.php */
