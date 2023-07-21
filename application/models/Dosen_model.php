<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen_model extends CI_Model
{
    public function getAllData()
    {
        return $this->db->get('dosen')->result_array();
    }
}
