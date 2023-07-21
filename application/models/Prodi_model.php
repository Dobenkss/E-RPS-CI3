<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi_model extends CI_Model
{
    public function getAllData()
    {
        $this->db->select('*');
        $this->db->from('tb_prodi');
        $this->db->join('tb_fakultas', 'tb_fakultas.id_fk = tb_prodi.id_fakultas');
        return $this->db->get()->result_array();
    }
}
