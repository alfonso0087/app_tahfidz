<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Predikat_Hasil2 extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		cek_login();
		$this->load->model('Predikat_hasil2_M');
	}

	// List all your items
	public function index()
	{
		$data = [
			'title' => 'Predikat Hasil Ujian Kelas 3 dan 4',
			'user' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
			'predikathasil2' => $this->Predikat_hasil2_M->getAllPredikatHasil2(),
			'isi' => 'nilai/v-predikat_hasil2',
		];

		$this->load->view('templates/wrapper-admin', $data);
	}

	// Add a new item
	public function add()
	{
		$data = [
			'BatasNilaiBawah2' => $this->input->post('batas_bawah2'),
			'BatasNilaiAtas2' => $this->input->post('batas_atas2'),
			'PredikatHasil2' => $this->input->post('predikat_hasil2'),
			'KetHasil2' => $this->input->post('ket_hasil2'),
		];
		$this->Predikat_hasil2_M->addPredikatHasil2($data);
		$this->session->set_flashdata('pesan', 'Berhasil ditambahkan!');
		redirect('nilai/predikat_hasil2');
	}

	//Update one item
	public function update($id)
	{
		$data = [
			'IdPredikatHasil2' => $id,
			'BatasNilaiBawah2' => $this->input->post('batas_bawah2'),
			'BatasNilaiAtas2' => $this->input->post('batas_atas2'),
			'PredikatHasil2' => $this->input->post('predikat_hasil2'),
			'KetHasil2' => $this->input->post('ket_hasil2'),
		];
		$this->Predikat_hasil2_M->updatePredikatHasil2($data);
		$this->session->set_flashdata('pesan', 'Berhasil diubah!');
		redirect('nilai/predikat_hasil2');
	}

	//Delete one item
	public function delete($id)
	{
		$data = ['IdPredikatHasil2' => $id];
		$this->Predikat_hasil2_M->deletePredikatHasil2($data);
		$this->session->set_flashdata('pesan', 'Berhasil dihapus!');
		redirect('nilai/predikat_hasil2');
	}
}

/* End of file Musyrif.php */
