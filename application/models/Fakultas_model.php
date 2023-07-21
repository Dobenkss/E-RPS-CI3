<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fakultas_model extends CI_Model
{
    public function getAllData()
    {
        return $this->db->get('tb_fakultas')->result_array();
    }
}
