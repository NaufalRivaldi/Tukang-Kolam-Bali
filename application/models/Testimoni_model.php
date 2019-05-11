<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni_model extends CI_Model {
    private $_table = 'tb_testimoni';
    public $nama;
    public $email;
    public $testimoni;

    public function rules(){
        return [
            [
				'field' => 'nama',
				'label' => 'nama',
				'rules' => 'required'
			],
			[
				'field' => 'email',
				'label' => 'email',
				'rules' => 'required'
            ],
            [
				'field' => 'testimoni',
				'label' => 'testimoni',
				'rules' => 'required'
			],
        ];
    }

    public function showData(){
        return $this->db->get($this->_table)->result();
    }

    public function showById($id){
        return $this->db->where('id_testimoni', $id)->get($this->_table)->row();
    }

    public function add(){
        $post = $this->input->post();

        $this->nama = $post['nama'];
        $this->email = $post['email'];
        $this->testimoni = $post['testimoni'];

        return $this->db->insert($this->_table, $this);
    }

    public function update(){
        $post = $this->input->post();

        $id = $post['id_testimoni'];
        $this->nama = $post['nama'];
        $this->email = $post['email'];
        $this->testimoni = $post['testimoni'];

        return $this->db->where('id_testimoni', $id)->update($this->_table, $this);
    }

    public function delete($id){
        return $this->db->where('id_testimoni', $id)->delete($this->_table);
    }
}
