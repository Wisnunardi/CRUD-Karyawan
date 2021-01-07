<?php
defined ('BASEPATH') or exit ('no direct script allowed');
class Karyawan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Model_karyawan');
    }
    public function index() {
        $data['karyawan'] = $this->Model_karyawan->getAllKaryawan();
        $this->load->view('karyawan/index', $data);
    }
    public function tambah() {
        $this->load->view('karyawan/tambah');
    }
    public function simpan() {
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $data = array(
            'no' => $this->db->insert_id(),
            'nama' => $nama,
            'alamat' => $alamat
            );
            $this->Model_karyawan->simpanKaryawan($data, 'karyawan');
            redirect('karyawan/index');
        }
public function edit($id) {
    $data['karyawan'] = $this->Model_karyawan->getKaryawanById($id);
    $this->load->view('karyawan/edit', $data);
}
public function update() {
    $no = $this->input->post('no');
    $nama = $this->input->post('nama');
    $alamat = $this->input->post('alamat');
    $data = array(
        'no' => $no,
        'nama' => $nama,
        'alamat' => $alamat
    );
    $where = array(
        'no' => $no
    );
    $this->Model_karyawan->updateKaryawan($where, $data, 'karyawan');
    redirect('karyawan/index');
}
public function hapus($id = null) {
    $this->Model_karyawan->hapusKaryawanById($id);
    redirect('karyawan/index');
}
}