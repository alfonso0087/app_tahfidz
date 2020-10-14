<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil_ujian_M extends CI_Model
{
  public function getAllHasilUjian()
  {
    $this->db->select('hu.*,s.NamaLengkap,pu.*,kls.*,p.periode');
    $this->db->from('hasilujian hu');
    $this->db->join('siswa s', 's.IdSiswa = hu.IdSiswa', 'left');
    $this->db->join('periodeujian pu', 'pu.IdPeriodeUjian = hu.IdPeriodeUjian', 'left');
    $this->db->join('periode p', 'p.IdPeriode = pu.IdPeriode', 'left');
    $this->db->join('kelas kls', 'pu.IdKelas = kls.IdKelas', 'left');
    return $this->db->get()->result_array();
  }

  public function getHasilUjianById($IdHasil)
  {
    $this->db->select('hu.*,s.NamaLengkap,pu.*,kls.*,p.periode');
    $this->db->from('hasilujian hu');
    $this->db->join('siswa s', 's.IdSiswa = hu.IdSiswa', 'left');
    $this->db->join('periodeujian pu', 'pu.IdPeriodeUjian = hu.IdPeriodeUjian', 'left');
    $this->db->join('periode p', 'p.IdPeriode = pu.IdPeriode', 'left');
    $this->db->join('kelas kls', 'pu.IdKelas = kls.IdKelas', 'left');
    $this->db->where('hu.IdHasil', $IdHasil);
    return $this->db->get()->result_array();
  }

  public function addHasilUjianIndividu($data)
  {
    $this->db->insert('hasilujian', $data);
  }

  public function addHasilUjian($data)
  {
    $this->db->insert_batch('hasilujian', $data);
  }

  public function perankingan_kelas($IdKelas, $IdPeriodeUjian)
  {
    $query = $this->db->query('SELECT `hasilujian`.`IdHasil`,`hasilujian`.`IdSiswa`,`hasilujian`.`IdPeriodeUjian`,`hasilujian`.`Total`,`hasilujian`.`Reward`,`periode`.`Periode`,`hasilujian`.`Rata-rata`,`siswa`.`NamaLengkap`,`kelas`.`NamaKelas`,	( SELECT FIND_IN_SET( `hasilujian`.`Rata-rata`,
    ( select
    group_concat(distinct `Rata-rata`
    order by `Rata-rata` DESC)
    from `hasilujian`))
    ) as Ranking
    FROM `hasilujian`
    JOIN `siswa` ON `siswa`.`IdSiswa`=`hasilujian`.`IdSiswa`
    JOIN `kelas` ON `kelas`.`IdKelas`=`siswa`.`IdKelas`
    JOIN `periodeujian` ON `periodeujian`.`IdPeriodeUjian`=`hasilujian`.`IdPeriodeUjian`
    JOIN `periode` ON `periode`.`IdPeriode`=`periodeujian`.`IdPeriode`
    WHERE `kelas`.`IdKelas`="' . $IdKelas . '"
    AND `hasilujian`.`IdPeriodeUjian`="' . $IdPeriodeUjian . '"
    ORDER BY Ranking ASC');
    return $query->result_array();
  }

  public function Update_Perankingan($data)
  {
    $this->db->update_batch('hasilujian', $data, 'IdHasil');
  }

  public function updateReward($data)
  {
    $this->db->where('IdHasil', $data['IdHasil']);
    $this->db->update('HasilUjian', $data);
  }

  public function deleteHasilUjian($data)
  {
    $this->db->where('IdHasil', $data['IdHasil']);
    $this->db->delete('HasilUjian', $data);
  }
}

/* End of file Hasil_ujian_M.php */
