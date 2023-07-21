<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model', 'Auth_model');
    }
    public function validasi_email($email)
    {
        return $this->db->get_where('tb_users', ['user_email' => $email])->row_array();
    }
    public function validasi_ps($email, $password)
    {
        return $this->db->query("SELECT * FROM tb_users WHERE user_email='$email' AND password=SHA2('$password', 224)")->row_array();
    }
}
