<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	public function __contruct(){
        parent::__construct();
        if( ! $this->session->userdata('login'))

		    redirect('admin');
	}
}

