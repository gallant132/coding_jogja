<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_Pendaftar extends CI_Controller {
    function __construct(){
        parent::__construct();
	}
	public function index()
	{
        $this->load->model('M_admin');
        $data['pendaftars']=$this->M_admin->get_pendaftar();
        $this->load->view('list_pendaftar',$data);
	}
}