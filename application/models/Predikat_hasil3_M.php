<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Predikat_hasil3_M extends CI_Model
{

    public function getAllPredikatHasil3()
    {
        $this->db->select('*');
        $this->db->from('predikathasil3');
        return $this->db->get()->result_array();
    }

    public function addPredikatHasil3($data)
    {
        $this->db->insert('predikathasil3', $data);
    }

    public function updatePredikatHasil3($data)
    {
        $this->db->where('IdPredikatHasil3', $data['IdPredikatHasil3']);
        $this->db->update('predikathasil3', $data);
    }

    public function deletePredikatHasil3($data)
    {
        $this->db->where('IdPredikatHasil3', $data['IdPredikatHasil3']);
        $this->db->delete('predikathasil3', $data);
    }
}

/* End of file Predikat_nilai_M.php */
