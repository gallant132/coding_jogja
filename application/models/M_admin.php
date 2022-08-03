<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model {
    // model digunakan untuk mengatur segala yang berhubungan dengan database
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_pendaftar(){
        $this->db->select("*");
        $this->db->from('pendaftar');
        $this->db->join('paket_kelas', 'paket_kelas.id_kelas = pendaftar.paket_bimbel_id');
        $this->db->where('pendaftar.pembayaran', 'BELUM');
        $query = $this->db->get();
        return $query->result();
    }
}
?>