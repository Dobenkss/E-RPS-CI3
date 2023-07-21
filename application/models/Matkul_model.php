<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matkul_model extends CI_Model
{
    public function getAllData()
    {
        $this->db->select('*');
        $this->db->from('tb_matkul');
        $this->db->join('dosen', 'dosen.id_dsn = tb_matkul.id_dosen');
        $this->db->join('tb_prodi', 'tb_prodi.id_prd = tb_matkul.id_prodi');
        return $this->db->get()->result_array();
    }
}
