<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Prodi_model', 'Prodi_model');
    }
    public function index()
    {
        $data['tb_prodi'] = $this->Prodi_model->getAllData();
        $this->load->view('template/header');
        $this->load->view('view_prodi', $data);
        $this->load->view('template/footer');
    }
    public function tambahProdi()
    {
        $data['fakultas'] = $this->db->get('tb_fakultas')->result_array();
        $this->load->view('template/header');
        $this->load->view('view_tambahProdi', $data);
        $this->load->view('template/footer');
    }
    public function do_tambahProdi()
    {
        $data = [
            'id_fakultas' => $this->input->post('idFk'),
            'nama_prodi' => $this->input->post('namaprodi'),
            'nama_kaprodi' => $this->input->post('namakaprodi'),
            'nama_sekprodi' => $this->input->post('namasekprodi')
        ];
        $this->db->insert('tb_prodi', $data);
        redirect('Prodi');
    }
    public function editProdi($id)
    {
        $data['id'] = $id;
        $data['fakultas'] = $this->db->get('tb_fakultas')->result_array();
        $data['tb_prodi'] = $this->db->get_where('tb_prodi', ['id_prd' => $id])->row_array();
        $this->load->view('template/header');
        $this->load->view('view_editProdi', $data);
        $this->load->view('template/footer');
    }
    public function do_editProdi($id)
    {
        $data = [
            'id_fakultas' => $this->input->post('idFk'),
            'nama_prodi' => $this->input->post('namaprodi'),
            'nama_kaprodi' => $this->input->post('namakaprodi'),
            'nama_sekprodi' => $this->input->post('namasekprodi')
        ];
        $this->db->where('id_prd', $id);
        $this->db->update('tb_prodi', $data);
        redirect('Prodi');
    }
    public function do_deleteProdi($id)
    {
        $this->db->where('id_prd', $id);
        $this->db->delete('tb_prodi');
        redirect('Prodi');
    }
}
