    <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends CI_Controller {
    public function __construct(){
        parent::__construct();

        $this->load->model('testimoni_model');
        $this->load->library('form_validation');
    }

    public function add(){
        $testimoni = $this->testimoni_model;
        $validation = $this->form_validation;
        $validation->set_rules($testimoni->rules());

        if($validation->run()){
            $testimoni->add();
            
            $this->session->set_flashdata('success', 'Testimoni anda sudah terposting.');
            redirect('home');
        }
    }
}
