<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil_ujian_M extends CI_Model
{
  public function getAllHasilUjian()
  {
    $this->db->select('hu.*,s.NamaLengkap,pu.*,kls.*');
    $this->db->from('hasilujian hu');
    $this->db->join('siswa s', 's.IdSiswa = hu.IdSiswa', 'left');
    $this->db->join('periodeujian pu', 'pu.IdPeriodeUjian = hu.IdPeriodeUjian', 'left');
    $this->db->join('kelas kls', 'pu.IdKelas = kls.IdKelas', 'left');
    return $this->db->get()->result_array();
  }

  public function hitungTotalNilai($IdSiswa, $IdPeriodeUjian)
  {
    // ! Belum bisa menampilkan jumlah/total nilai berdasarkan santri dan periode ujian
    // $this->db->select_sum('Nilai', 'TotalNilai');
    // $this->db->from('rekapujian');
    // $this->db->where('IdSiswa', $IdSiswa);
    // $this->db->where('IdPriodeUjian', $IdPeriodeUjian);
    // return $this->db->get()->result_array();

    // $this->db->select_sum('Nilai', 'TotalNilai');
    // $this->db->from('rekapujian');
    // $this->db->where('IdSiswa', $$IdSiswa);
    $query = $this->db->query("SELECT SUM(`Nilai`) AS TotalNilai, AVG(`Nilai`) AS Rata-rata FROM `rekapujian` WHERE `IdSiswa`= ' . $IdSiswa . ' AND `IdPeriodeUjian`= ' . $IdPeriodeUjian .");

    return $query->result();
    // check($query);
  }
}

/* End of file Hasil_ujian_M.php */
