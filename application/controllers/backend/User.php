<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct(){
        parent::__construct();

        $this->load->model('user_model');
        $this->load->library('form_validation');
    }

	public function index(){
        $data['user'] = $this->user_model->showData();
		$this->load->view('backend/user/index', $data);
    }

    public function add(){
        $user = $this->user_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if($validation->run()){
            $user->add();
            redirect('backend/user');
        }

        $this->load->view('backend/user/form');
    }

    public function edit($id){
        $data['user'] = $this->user_model->showById($id);
        $this->load->view('backend/user/edit', $data);
    }

    public function update(){
        $this->user_model->update();
        redirect('backend/user');
    }

    public function reset($id){
        $this->user_model->reset($id);
        redirect('backend/user');
    }

    public function delete($id){
        $this->user_model->delete($id);
        redirect('backend/user');
    }
}
