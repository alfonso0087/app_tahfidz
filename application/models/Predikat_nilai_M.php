<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Predikat_nilai_M extends CI_Model
{

    public function getAllPredikatNilai()
    {
        $this->db->select('*');
        $this->db->from('predikatnilai');
        return $this->db->get()->result_array();
    }

    public function addPredikatNilai($data)
    {
        $this->db->insert('predikatnilai', $data);
    }

    public function updatePredikatNilai($data)
    {
        $this->db->where('IdPredikatNilai', $data['IdPredikatNilai']);
        $this->db->update('predikatnilai', $data);
    }

    public function deletePredikatNilai($data)
    {
        $this->db->where('IdPredikatNilai', $data['IdPredikatNilai']);
        $this->db->delete('predikatnilai', $data);
    }
}

/* End of file Predikat_nilai_M.php */
