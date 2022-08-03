<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kelas extends CI_Model {
    // model digunakan untuk mengatur segala yang berhubungan dengan database
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_kelas(){
        $query = $this->db->get('paket_kelas');
        return $query->result();
    }
    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function get_kelas_with_pendaftar($id_kelas)
    {
        $this->db->select("*");
        $this->db->from('paket_kelas');
        $this->db->join('pendaftar', 'pendaftar.paket_bimbel_id = paket_kelas.id_kelas');
        $this->db->where('paket_kelas.id_kelas', $id_kelas);
        $this->db->where('pendaftar.pembayaran', 'SUDAH');
        $query = $this->db->get();
        return $query->result();
    }
}
?>