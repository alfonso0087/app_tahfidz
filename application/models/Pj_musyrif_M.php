<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pj_musyrif_M extends CI_Model
{
  // Tampilkan data Pj Musyrif
  public function getAllPJMusyrif()
  {
    $query = 'SELECT `musyrif`.`NamaMusyrif`,`pjmusyrif`.`JabatanTambahan`,`siswa`.`NamaLengkap`
    FROM `pjmusyrif`
    JOIN `musyrif` ON `musyrif`.`IdMusyrif`=`pjmusyrif`.`IdMusyrif`
    JOIN `siswa` ON `siswa`.`IdSiswa`=`pjmusyrif`.`IdSiswa`';
    return $this->db->query($query)->result_array();
  }
}

/* End of file Pj_musyrif_M.php */
