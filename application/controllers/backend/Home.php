<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __constraint(){
        parent::__constraint();
    }

	public function index(){
		$this->load->view('backend/login');
    }
    
    public function dashboard(){
        $this->load->view('backend/dashboard');
    }
}
