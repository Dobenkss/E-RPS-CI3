<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rps_model extends CI_Model
{
    public function getAllData()
    {
        $this->db->select('*');
        $this->db->from('tb_rps');
        $this->db->join('dosen', 'dosen.id_dsn = tb_rps.id_dosen');
        $this->db->join('tb_matkul', 'tb_matkul.id_matkul = tb_rps.id_mtkl');
        $this->db->join('tb_fakultas', 'tb_fakultas.id_fk = tb_rps.id_fakultas');
        $this->db->join('tb_prodi', 'tb_prodi.id_prd = tb_rps.id_prodi');
        return $this->db->get()->result_array();
    }
    public function getAllDataRpsById($id)
    {
        $this->db->select('*');
        $this->db->from('tb_rps');
        $this->db->join('dosen', 'dosen.id_dsn = tb_rps.id_dosen');
        $this->db->join('tb_matkul', 'tb_matkul.id_matkul = tb_rps.id_mtkl');
        $this->db->join('tb_fakultas', 'tb_fakultas.id_fk = tb_rps.id_fakultas');
        $this->db->join('tb_prodi', 'tb_prodi.id_prd = tb_rps.id_prodi');
        $this->db->where('id_rps', $id);
        return $this->db->get_where()->row_array();
    }
}
