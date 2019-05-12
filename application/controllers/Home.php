<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();

        $this->load->model('jasa_model');
        $this->load->model('setting_model');
        $this->load->model('testimoni_model');
    }

	public function index(){
        $data['title'] = 'Home';
        $data['jasa'] = $this->jasa_model->showDataTop();
        $data['setting'] = $this->setting_model->showData();
        $data['testimoni'] = $this->testimoni_model->showDataLimit();
        
        // print_r($data['testimoni']);
        // die();
		$this->load->view('frontend/index', $data);
    }

    public function jasa($slug){
        $data['title'] = 'Jasa';
        $data['jasa'] = $this->jasa_model->showBySlug($slug);
        $data['setting'] = $this->setting_model->showData();
		$this->load->view('frontend/jasa-detail', $data);
    }

    public function daftar_jasa(){
        $data['title'] = 'Daftar Jasa';
        $data['jasa'] = $this->jasa_model->showData();
        $data['setting'] = $this->setting_model->showData();
		$this->load->view('frontend/jasa', $data);
    }
}
