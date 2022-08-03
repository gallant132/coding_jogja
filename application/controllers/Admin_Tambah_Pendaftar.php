<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Tambah_Pendaftar extends CI_Controller {

        function __construct(){
		parent::__construct();
		$this->load->model('M_daftar');
	}
	public function index()
	{
        $this->load->model('M_kelas');
        $data['kelas'] = $this->M_kelas->get_kelas();
		$this->load->view('tambah_pendaftar', $data);
    }
    Public function admin_tambah_pendaftar(){
        $id_pendaftar = $this->input->post('id_pendaftar');
        $nama_pendaftar = $this->input->post('nama_pendaftar');
        $email_pendaftar = $this->input->post('email_pendaftar');
        $no_wa = $this->input->post('no_wa');
        $alamat_pendaftar = $this->input->post('alamat_pendaftar');
        $asal_sekolah = $this->input->post('asal_sekolah');
        $paket_bimbel = $this->input->post('paket_bimbel');
        $pembayaran = $this->input->post('pembayaran');
        $data = array(
            'id_pendaftar' => $id_pendaftar,
            'nama_pendaftar' => $nama_pendaftar,
            'email_pendaftar' => $email_pendaftar,
            'no_wa' => $no_wa,
            'alamat_pendaftar' => $alamat_pendaftar,
            'asal_sekolah' => $asal_sekolah,
            'paket_bimbel_id' => $paket_bimbel,
            'pembayaran' => $pembayaran,
        );
        $this->M_daftar->input_data($data,'pendaftar');
        redirect('List_Pendaftar');
    }
}