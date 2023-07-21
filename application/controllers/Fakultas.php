<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fakultas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Fakultas_model', 'Fakultas_model');
    }
    public function index()
    {
        $data['tb_fakultas'] = $this->Fakultas_model->getAllData();

        $this->load->view('template/header');
        $this->load->view('view_fakultas', $data);
        $this->load->view('template/footer');
    }
    public function tambahFakultas()
    {
        $this->load->view('template/header');
        $this->load->view('view_tambahFakultas');
        $this->load->view('template/footer');
    }
    public function do_tambahFakultas()
    {
        $data = [
            'nama_fakultas' => $this->input->post('namafakultas'),
            'nama_dekan' => $this->input->post('namadekan')
        ];
        $this->db->insert('tb_fakultas', $data);
        redirect('Fakultas');
    }
    public function editFakultas($id)
    {
        $data['id'] = $id;
        $data['tb_fakultas'] = $this->db->get_where('tb_fakultas', ['id_fk' => $id])->row_array();
        $this->load->view('template/header');
        $this->load->view('view_editFakultas', $data);
        $this->load->view('template/footer');
    }
    public function do_editFakultas($id)
    {
        $data = [
            'nama_fakultas' => $this->input->post('namafakultas'),
            'nama_dekan' => $this->input->post('namadekan')
        ];
        $this->db->where('id_fk', $id);
        $this->db->update('tb_fakultas', $data);
        redirect('Fakultas');
    }
    public function do_deleteFakultas($id)
    {
        $this->db->where('id_fk', $id);
        $this->db->delete('tb_fakultas');
        redirect('Fakultas');
    }
}
