<?php
defined('BASEPATH') or exit('no direct script allowed');
class Model_karyawan extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function getAllKaryawan() {
        return $this->db->get('karyawan')->result_array();
    }
    public function simpanKaryawan($data, $table) {
        $this->db->insert($table, $data);
    }
    public function getKaryawanById($id) {
        return $this->db->get_where('karyawan', array('no' => $id))->result_array();
    }
    public function updateKaryawan($where, $data, $table) {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function hapusKaryawanById($id) {
        return $this->db->delete('karyawan', array('no' => $id));
    }
}