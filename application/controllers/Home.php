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
        $data['description'] = 'TUKANG KOLAM BALI adalah perusahaan mikro yang dikelola oleh perseorangan, yang dimana memiliki tim khusus, sahli dan berpengalaman untuk melakukan perawatan kolam renang untuk selalu bersih, jernih, mengatasi berbagai masalah kolam renang, serta menyediakan bahan atau alat - alat dalam perawatan kolam berenang.';

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
        $data['description'] = 'Berikut beberapa jasa yang kami tawarkan untuk anda.';

		$this->load->view('frontend/jasa', $data);
    }
}
