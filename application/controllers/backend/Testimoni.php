    <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends CI_Controller {
    public function __construct(){
        parent::__construct();

        $this->load->model('testimoni_model');
        $this->load->library('form_validation');

        // Cek session
        $this->def_model->cekSession();
    }

	public function index(){
        $data['testimoni'] = $this->testimoni_model->showData();
		$this->load->view('backend/testimoni/index', $data);
    }

    public function add(){
        $testimoni = $this->testimoni_model;
        $validation = $this->form_validation;
        $validation->set_rules($testimoni->rules());

        if($validation->run()){
            $testimoni->add();
            echo "<script>alert('Testimoni anda sudah terposting.')</script>";
            redirect('backend/testimoni');
        }

        $this->load->view('backend/testimoni/form');
    }

    public function edit($id){
        $data['testimoni'] = $this->testimoni_model->showById($id);
        $this->load->view('backend/testimoni/edit', $data);
    }

    public function update(){
        $this->testimoni_model->update();
        redirect('backend/testimoni');
    }

    public function delete($id){
        $this->testimoni_model->delete($id);
        redirect('backend/testimoni');
    }

    public function acc($id){
        $this->testimoni_model->acc($id);
        redirect('backend/testimoni');
    }
}
