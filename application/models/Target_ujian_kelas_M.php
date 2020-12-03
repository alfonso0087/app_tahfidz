<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Target_ujian_kelas_M extends CI_Model
{
  public function getAllTargetUjianKelas()
  {
    $query = 'SELECT `tuk`.*,`kls`.`NamaKelas`,`tu`.`Keterangan`,(SELECT COUNT(`IdKelas`) FROM `targetujiankelas` WHERE `IdKelas`=`tuk`.`IdKelas`) AS JumlahKelas
    FROM `targetujiankelas` tuk
    JOIN `kelas` kls ON `kls`.`IdKelas` = `tuk`.`IdKelas`
    JOIN `targetujian` tu ON `tu`.`IdTargetUjian` = `tuk`.`IdTargetUjian`
    ORDER BY tuk.`IdKelas` ASC';
    return $this->db->query($query)->result_array();
  }

  public function getTargetUjianByKelas($IdKelas)
  {
    $query = 'SELECT `targetujiankelas`.`IdTargetKelas`,`targetujiankelas`.`IdTargetUjian`,`kelas`.`NamaKelas`,`targetujian`.`Keterangan`
    FROM `targetujiankelas`
    JOIN `kelas` ON `kelas`.`IdKelas`=`targetujiankelas`.`IdKelas`
    JOIN `targetujian` ON `targetujiankelas`.`IdTargetUjian`=`targetujian`.`IdTargetUjian`
    WHERE `kelas`.`IdKelas`="' . $IdKelas . '"';
    return $this->db->query($query)->result_array();
  }


  public function addTargetKelas($data)
  {
    $this->db->insert_batch('targetujiankelas', $data);
  }

  public function addTarget($data)
  {
    $this->db->insert('targetujiankelas', $data);
  }

  public function hapusTargetKelas($data)
  {
    $this->db->where('IdTargetKelas', $data['IdTargetKelas']);
    $this->db->delete('targetujiankelas', $data);
  }
}

/* End of file Target_ujian_kelas_M.php */
