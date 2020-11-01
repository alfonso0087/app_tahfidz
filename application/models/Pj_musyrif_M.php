<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pj_musyrif_M extends CI_Model
{
  // Tampilkan data Pj Musyrif
  public function getAllPJMusyrif()
  {
    $query = 'SELECT `musyrif`.`NamaMusyrif`,`pjmusyrif`.*,`kelompokhalaqoh`.`NamaKelompok`
    FROM `pjmusyrif`
    JOIN `musyrif` ON `musyrif`.`IdMusyrif`=`pjmusyrif`.`IdMusyrif`
    JOIN `kelompokhalaqoh` ON `kelompokhalaqoh`.`IdKelompok`=`pjmusyrif`.`IdKelompok`';
    return $this->db->query($query)->result_array();
  }

  public function addPJMusyrif($data)
  {
    $this->db->insert_batch('pjmusyrif', $data);
  }

  public function deletePJMusyrif($data)
  {
    $this->db->where('IdPjMusyrif', $data['IdPjMusyrif']);
    $this->db->delete('pjmusyrif', $data);
  }
}

/* End of file Pj_musyrif_M.php */
