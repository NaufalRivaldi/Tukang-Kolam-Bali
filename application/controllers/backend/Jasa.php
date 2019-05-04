<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jasa extends CI_Controller {
    public function __construct(){
        parent::__construct();

        $this->load->model('jasa_model');
        $this->load->library('form_validation');

        // Cek session
        $this->def_model->cekSession();
    }

	public function index(){
        $data['jasa'] = $this->jasa_model->showData();
		$this->load->view('backend/jasa/index', $data);
    }

    public function add(){
        $jasa = $this->jasa_model;
        $validation = $this->form_validation;
        $validation->set_rules($jasa->rules());

        if($validation->run()){
            $jasa->add();
            redirect('backend/jasa');
        }

        $this->load->view('backend/jasa/form');
    }

    public function edit($id){
        $data['jasa'] = $this->jasa_model->showById($id);
        $this->load->view('backend/jasa/edit', $data);
    }

    public function update(){
        $this->jasa_model->update();
        redirect('backend/jasa');
    }

    public function delete($id){
        $this->jasa_model->delete($id);
        redirect('backend/jasa');
    }
}
