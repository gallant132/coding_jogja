<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Kelas extends CI_Controller {

    
    function __construct(){
		parent::__construct();
		$this->load->model('M_kelas');

	}

    public function index()
    {
        $data['kelas'] = $this->M_kelas->get_kelas();
        $this->load->view('list_kelas', $data);
    }
	public function tambah()
	{
		$this->load->view('tambah_kelas');
    }
    public function tambah_kelas()
	{
		$kelas = $this->input->post('kelas');
        $data = array(
            'nama_kelas' => $kelas,
        );
        $this->M_kelas->input_data($data, 'paket_kelas');
        redirect('admin_kelas/tambah');
    }
    public function list_pendaftar($id_kelas)
    {
        $data['pendaftar'] = $this->M_kelas->get_kelas_with_pendaftar($id_kelas);
        $data['nama_kelas'] = count($data['pendaftar']) ? $data['pendaftar'][0]->nama_kelas : null;
        $this->load->view('list_pendaftar_by_kelas', $data);
    }
}