<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matkul extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Matkul_model', 'Matkul_model');
    }
    public function index()
    {
        $data['tb_matkul'] = $this->Matkul_model->getAllData();
        $this->load->view('template/header');
        $this->load->view('view_matkul', $data);
        $this->load->view('template/footer');
    }
    public function tambahMatkul()
    {
        $data['dosen'] = $this->db->get('dosen')->result_array();
        $data['prodi'] = $this->db->get('tb_prodi')->result_array();
        $this->load->view('template/header');
        $this->load->view('view_tambahMatkul', $data);
        $this->load->view('template/footer');
    }
    public function do_tambahMatkul()
    {
        $data = [
            'id_prodi' => $this->input->post('idprd'),
            'id_dosen' => $this->input->post('iddsn'),
            'nama_matkul' => $this->input->post('namamatkul'),
            'kode_matkul' => $this->input->post('kodematkul')
        ];
        $this->db->insert('tb_matkul', $data);
        redirect('Matkul');
    }
    public function editMatkul($id)
    {
        $data['id'] = $id;
        $data['dosen'] = $this->db->get('dosen')->result_array();
        $data['prodi'] = $this->db->get('tb_prodi')->result_array();
        $data['tb_matkul'] = $this->db->get_where('tb_matkul', ['id_matkul' => $id])->row_array();
        $this->load->view('template/header');
        $this->load->view('view_editMatkul', $data);
        $this->load->view('template/footer');
    }
    public function do_editMatkul($id)
    {
        $data = [
            'id_prodi' => $this->input->post('idprd'),
            'id_dosen' => $this->input->post('iddsn'),
            'nama_matkul' => $this->input->post('namamatkul'),
            'kode_matkul' => $this->input->post('kodematkul')
        ];
        $this->db->where('id_matkul', $id);
        $this->db->update('tb_matkul', $data);
        redirect('Matkul');
    }
    public function do_deleteMatkul($id)
    {
        $this->db->where('id_matkul', $id);
        $this->db->delete('tb_matkul');
        redirect('Matkul');
    }
}
