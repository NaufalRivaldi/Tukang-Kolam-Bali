<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();

        $this->load->model('jasa_model');
    }

	public function index(){
        $data['title'] = 'Home';
        $data['jasa'] = $this->jasa_model->showData();
		$this->load->view('frontend/index', $data);
    }
}
