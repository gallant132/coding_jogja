<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Daftar extends CI_Model {
    // model digunakan untuk mengatur segala yang berhubungan dengan database
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_pendaftar(){
        $query = $this->db->get_where('pendaftar',array('pembayaran' => 'SUDAH'));
        return $query->result();
    }
    public function input_data($data,$pendaftar){
        $this->db->insert($pendaftar,$data);
    }
    public function hapus_pendaftar($where,$pendaftar){
        $this->db->where($where);
        $this->db->delete($pendaftar);
    }
    public function edit_data($where,$pendaftar){
        return $this->db->get_where($pendaftar,$where);
    }
    public function update_data($where,$data,$pendaftar){
        $this->db->where($where);
        $this->db->update($pendaftar,$data);
    }
}
?>