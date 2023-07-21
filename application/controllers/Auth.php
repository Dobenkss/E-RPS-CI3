<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model', 'Auth_model');
    }
    public function index()
    {
        $this->load->view('login');
    }
    public function login()
    {
        $email = $this->input->post('username');
        $password = $this->input->post('password');

        $validasi_email = $this->Auth_model->validasi_email($email);
        if ($validasi_email->num_rows() > 0) {
            $validasi_ps = $this->Auth_model->validasi_ps($email, $password);
            if ($validasi_ps->num_rows() > 0) {
                redirect('Home');
            } else {
                redirect('Auth/index');
            }
        }
    }
}
