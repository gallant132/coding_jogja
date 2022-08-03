<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('getlogin') != 'OK'){
            redirect(base_url("getlogin"));
        }
		
	}
	public function index()
	{
		$this->load->view('admin');
	}
	Public function list(){
		$this->load->model('M_admin');
		$data['pendaftars']=$this->M_admin->get_pendaftar();
		$this->load->view('list_pendaftar',$data);
	}
}