<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_model extends CI_Model {
    private $_table = 'tb_setting';
    public $no_telp;
    public $email;
    public $alamat;

    public function rules(){
        return [
            [
				'field' => 'no_telp',
				'label' => 'no_telp',
				'rules' => 'required'
			],
			[
				'field' => 'email',
				'label' => 'email',
				'rules' => 'required'
            ],
            [
				'field' => 'alamat',
				'label' => 'alamat',
				'rules' => 'required'
			],
        ];
    }

    public function showData(){
        return $this->db->get($this->_table)->row();
    }

    public function showById($id){
        return $this->db->where('id_setting', $id)->get($this->_table)->row();
    }

    public function add(){
        $post = $this->input->post();

        $this->no_telp = $post['no_telp'];
        $this->email = $post['email'];
        $this->alamat = $post['alamat'];

        return $this->db->insert($this->_table, $this);
    }

    public function update(){
        $post = $this->input->post();

        $id = $post['id_setting'];
        $this->no_telp = $post['no_telp'];
        $this->email = $post['email'];
        $this->alamat = $post['alamat'];

        return $this->db->where('id_setting', $id)->update($this->_table, $this);
    }
}
