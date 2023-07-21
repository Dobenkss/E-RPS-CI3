<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rps extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rps_model', 'Rps_model');
    }
    public function index()
    {
        $data['tb_rps'] = $this->Rps_model->getAllData();
        $this->load->view('template/header');
        $this->load->view('view_rps', $data);
        $this->load->view('template/footer');
    }
    public function tambahRps()
    {
        $data['dosen'] = $this->db->get('dosen')->result_array();
        $data['matkul'] = $this->db->get('tb_matkul')->result_array();
        $data['fakultas'] = $this->db->get('tb_fakultas')->result_array();
        $data['prodi'] = $this->db->get('tb_prodi')->result_array();
        $this->load->view('template/header');
        $this->load->view('view_tambahRps', $data);
        $this->load->view('template/footer');
    }
    public function do_tambahRps()
    {
        $data = [
            'id_dosen' => $this->input->post('iddsn'),
            'id_mtkl' => $this->input->post('idmk'),
            'id_fakultas' => $this->input->post('idfk'),
            'id_prodi' => $this->input->post('idprd'),
            'nomor_rps' => $this->input->post('norps'),
            'tgl_berlaku' => $this->input->post('berlaku'),
            'tgl_disusun' => $this->input->post('disusun'),
            'revisi' => $this->input->post('rev'),
            'identitas' => $this->input->post('ident'),
            'gambaran_umum' => $this->input->post('gambaran'),
            'capaian_pem' => $this->input->post('capaian'),
            'prasyarat_pengetahuan' => $this->input->post('prasyarat'),
            'unit_pem' => $this->input->post('unit'),
            'tugas_penilaian' => $this->input->post('penilaian'),
            'referensi' => $this->input->post('ref'),
            'rencana_pem' => $this->input->post('rencana')
        ];
        $this->db->insert('tb_rps', $data);
        redirect('Rps');
    }
    public function editRps($id)
    {
        $data['id'] = $id;
        $data['dosen'] = $this->db->get('dosen')->result_array();
        $data['matkul'] = $this->db->get('tb_matkul')->result_array();
        $data['fakultas'] = $this->db->get('tb_fakultas')->result_array();
        $data['prodi'] = $this->db->get('tb_prodi')->result_array();
        $data['tb_rps'] = $this->db->get_where('tb_rps', ['id_rps' => $id])->row_array();
        $this->load->view('template/header');
        $this->load->view('view_editRps', $data);
        $this->load->view('template/footer');
    }
    public function do_editRps($id)
    {
        $data = [
            'id_dosen' => $this->input->post('iddsn'),
            'id_mtkl' => $this->input->post('idmk'),
            'id_fakultas' => $this->input->post('idfk'),
            'id_prodi' => $this->input->post('idprd'),
            'nomor_rps' => $this->input->post('norps'),
            'tgl_berlaku' => $this->input->post('berlaku'),
            'tgl_disusun' => $this->input->post('disusun'),
            'revisi' => $this->input->post('rev'),
            'identitas' => $this->input->post('ident'),
            'gambaran_umum' => $this->input->post('gambaran'),
            'capaian_pem' => $this->input->post('capaian'),
            'prasyarat_pengetahuan' => $this->input->post('prasyarat'),
            'unit_pem' => $this->input->post('unit'),
            'tugas_penilaian' => $this->input->post('penilaian'),
            'referensi' => $this->input->post('ref'),
            'rencana_pem' => $this->input->post('rencana')
        ];
        $this->db->where('id_rps', $id);
        $this->db->update('tb_rps', $data);
        redirect('Rps');
    }
    public function do_deleteRps($id)
    {
        $this->db->where('id_rps', $id);
        $this->db->delete('tb_rps');
        redirect('Rps');
    }
    public function cetakRps($id)
    {

        $data['dataRps'] = $this->Rps_model->getAllDataRpsById($id);
        $this->load->view('cetak', $data);
    }
}
