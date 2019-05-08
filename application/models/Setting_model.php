<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_model extends CI_Model {
    private $_table = 'tb_jasa';
    public $nama_jasa;
    public $keyword;
    public $gambar = "default.jpg";
    public $harga;
    public $keterangan;
    public $slug;
    public $stat;

    public function rules(){
        return [
            [
				'field' => 'nama_jasa',
				'label' => 'nama_jasa',
				'rules' => 'required'
			],
			[
				'field' => 'harga',
				'label' => 'harga',
				'rules' => 'required'
            ],
            [
				'field' => 'keterangan',
				'label' => 'keterangan',
				'rules' => 'required'
			],
        ];
    }

    public function showData(){
        return $this->db->order_by('nama_jasa', 'asc')->get($this->_table)->result();
    }

    public function showDataTop(){
        return $this->db->order_by('nama_jasa', 'asc')->where('stat', '1')->get($this->_table)->result();
    }

    public function showById($id){
        return $this->db->where('id_jasa', $id)->get($this->_table)->row();
    }

    public function showBySlug($slug){
        return $this->db->where('slug', $slug)->get($this->_table)->row();
    }

    public function add(){
        $post = $this->input->post();

        $this->nama_jasa = $post['nama_jasa'];
        $this->keyword = $post['keyword'];
        $this->harga = $post['harga'];
        $this->keterangan = $post['keterangan'];
        $this->slug = slug($post['nama_jasa']);
        $this->stat = $post['stat'];

        if(!empty($_FILES['gambar']['name'])){
            $this->gambar = $this->uploadGambar();
        }
        
        return $this->db->insert($this->_table, $this);
    }

    public function update(){
        $post = $this->input->post();

        $id = $post['id_jasa'];
        $this->nama_jasa = $post['nama_jasa'];
        $this->keyword = $post['keyword'];
        $this->harga = $post['harga'];
        $this->keterangan = $post['keterangan'];
        $this->slug = slug($post['nama_jasa']);
        $this->stat = $post['stat'];

        if(!empty($_FILES['gambar']['name'])){
            $this->deleteImage($id);
            $this->gambar = $this->uploadGambar();
        }else{
            $this->gambar = $post['gambar_lama'];
        }

        return $this->db->where('id_jasa', $id)->update($this->_table, $this);
    }

    public function delete($id){
        $this->deleteImage($id);
        return $this->db->where('id_jasa', $id)->delete($this->_table);
    }

    public function uploadGambar(){
        $this->load->library('upload');

        $config['upload_path'] = './assets/img/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['overwrite'] = true;
        $config['file_name'] = uniqid();

        $this->upload->initialize($config);
        if($this->upload->do_upload('gambar')){
            return $this->upload->data('file_name');
        }

        return "default.jpg";
    }

    public function deleteImage($id){
        $jasa = $this->db->where('id_jasa', $id)->get($this->_table)->row();
        unlink('assets/img/upload/'.$jasa->gambar);
    }
}
