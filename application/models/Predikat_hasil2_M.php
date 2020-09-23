<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Predikat_hasil2_M extends CI_Model
{

    public function getAllPredikatHasil2()
    {
        $this->db->select('*');
        $this->db->from('predikathasil2');
        return $this->db->get()->result_array();
    }

    public function addPredikatHasil2($data)
    {
        $this->db->insert('predikathasil2', $data);
    }

    public function updatePredikatHasil2($data)
    {
        $this->db->where('IdPredikatHasil2', $data['IdPredikatHasil2']);
        $this->db->update('predikathasil2', $data);
    }

    public function deletePredikatHasil2($data)
    {
        $this->db->where('IdPredikatHasil2', $data['IdPredikatHasil2']);
        $this->db->delete('predikathasil2', $data);
    }
}

/* End of file Predikat_nilai_M.php */
