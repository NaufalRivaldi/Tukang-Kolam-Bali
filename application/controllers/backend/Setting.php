    <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
    public function __construct(){
        parent::__construct();

        $this->load->model('setting_model');
        $this->load->library('form_validation');

        // Cek session
        $this->def_model->cekSession();
    }

	public function index(){
        $data['setting'] = $this->setting_model->showData();
		$this->load->view('backend/setting/index', $data);
    }

    public function add(){
        $setting = $this->setting_model;
        $validation = $this->form_validation;
        $validation->set_rules($setting->rules());

        if($validation->run()){
            $setting->add();
            redirect('backend/setting');
        }

        $this->load->view('backend/setting/form');
    }

    public function edit($id){
        $data['setting'] = $this->setting_model->showById($id);
        $this->load->view('backend/setting/edit', $data);
    }

    public function update(){
        $this->setting_model->update();
        redirect('backend/setting');
    }
}
