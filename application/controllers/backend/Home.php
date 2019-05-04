<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();

        $this->load->model('user_model');
    }

	public function index(){
		$this->load->view('backend/login');
    }
    
    public function dashboard(){
        $this->def_model->cekSession();
        $this->load->view('backend/dashboard');
    }

    public function login(){
        $this->user_model->login();
    }

    public function logout(){
        $this->user_model->logout();
    }
}
