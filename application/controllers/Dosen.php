<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dosen_model', 'Dosen_model');
    }
    public function index()
    {
        $data['dosen'] = $this->Dosen_model->getAllData();

        $this->load->view('template/header');
        $this->load->view('view_dosen', $data);
        $this->load->view('template/footer');
    }
    public function tambahDosen()
    {
        $this->load->view('template/header');
        $this->load->view('view_tambahDosen');
        $this->load->view('template/footer');
    }
    public function do_tambahDosen()
    {
        $data = [
            'nip_doosen' => $this->input->post('nipDosen'),
            'nama' => $this->input->post('namaDosen'),
            'kelamin' => $this->input->post('kelaminDosen')
        ];
        $this->db->insert('dosen', $data);
        redirect('Dosen');
    }
    public function editDosen($id)
    {
        $data['id'] = $id;
        $data['dosen'] = $this->db->get_where('dosen', ['id_dsn' => $id])->row_array();
        $this->load->view('template/header');
        $this->load->view('view_editDosen', $data);
        $this->load->view('template/footer');
    }
    public function do_editDosen($id)
    {
        $data = [
            'nip_doosen' => $this->input->post('nipDosen'),
            'nama' => $this->input->post('namaDosen'),
            'kelamin' => $this->input->post('kelaminDosen')
        ];
        $this->db->where('id_dsn', $id);
        $this->db->update('dosen', $data);
        redirect('Dosen');
    }
    public function do_deleteDosen($id)
    {
        $this->db->where('id_dsn', $id);
        $this->db->delete('dosen');
        redirect('Dosen');
    }
}
