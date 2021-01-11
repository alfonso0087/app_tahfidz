<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setoran_M extends CI_Model
{
  public function getAllSetoran()
  {
    $this->db->select('setor.*,dt.IsiTarget,jadwal.Waktu,jadwal.Ket,dk.IdKelompok,kh.NamaKelompok,s.NamaLengkap');
    $this->db->from('setorantarget setor');
    $this->db->join('detailtarget dt', 'dt.IdDetailTarget = setor.IdDetailTarget', 'left');
    $this->db->join('jadwalhalaqoh jadwal', 'jadwal.IdJadwal = setor.IdJadwal', 'left');
    $this->db->join('detailkelompok dk', 'dk.IdDetailKelompok = setor.IdDetailKelompok', 'left');
    $this->db->join('kelompokhalaqoh kh', 'kh.IdKelompok = dk.IdKelompok', 'left');
    $this->db->join('siswa s', 's.IdSiswa = dk.IdSiswa', 'left');

    return $this->db->get()->result_array();
  }

  public function getSetoranByKelompok($nama_kelompok)
  {
    $this->db->select('setor.*,dt.IsiTarget,jadwal.Waktu,jadwal.Ket,dk.IdKelompok,kh.NamaKelompok,s.NamaLengkap');
    $this->db->from('setorantarget setor');
    $this->db->join('detailtarget dt', 'dt.IdDetailTarget = setor.IdDetailTarget', 'left');
    $this->db->join('jadwalhalaqoh jadwal', 'jadwal.IdJadwal = setor.IdJadwal', 'left');
    $this->db->join('detailkelompok dk', 'dk.IdDetailKelompok = setor.IdDetailKelompok', 'left');
    $this->db->join('kelompokhalaqoh kh', 'kh.IdKelompok = dk.IdKelompok', 'left');
    $this->db->join('siswa s', 's.IdSiswa = dk.IdSiswa', 'left');
    $this->db->like('kh.NamaKelompok', $nama_kelompok);
    return $this->db->get()->result_array();
  }

  //* Reset Data
  public function kosongkanSetoran()
  {
    return $this->db->truncate('setorantarget');
  }

  public function addSetoran($data)
  {
    $this->db->insert('setorantarget', $data);
  }

  public function updateSetoran($data)
  {
    $this->db->where('IdSetoran', $data['IdSetoran']);
    $this->db->update('setorantarget', $data);
  }

  public function deleteSetoran($data)
  {
    $this->db->where('IdSetoran', $data['IdSetoran']);
    $this->db->delete('setorantarget');
  }
}

/* End of file Setoran_M.php */
