<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Predikat_hasil1_M extends CI_Model
{

    public function getAllPredikatHasil1()
    {
        $this->db->select('*');
        $this->db->from('predikathasil1');
        return $this->db->get()->result_array();
    }

    public function addPredikatHasil1($data)
    {
        $this->db->insert('predikathasil1', $data);
    }

    public function updatePredikatHasil1($data)
    {
        $this->db->where('IdPredikatHasil1', $data['IdPredikatHasil1']);
        $this->db->update('predikathasil1', $data);
    }

    public function deletePredikatHasil1($data)
    {
        $this->db->where('IdPredikatHasil1', $data['IdPredikatHasil1']);
        $this->db->delete('predikathasil1', $data);
    }
}

/* End of file Predikat_nilai_M.php */
