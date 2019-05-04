<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    private $_table = 'tb_user';
    public $username;
    public $pass;

    public function rules(){
        return [
            [
				'field' => 'username',
				'label' => 'username',
				'rules' => 'required'
			],
			[
				'field' => 'pass',
				'label' => 'pass',
				'rules' => 'required'
			]
        ];
    }

    public function showData(){
        return $this->db->order_by('username', 'asc')->get($this->_table)->result();
    }

    public function showById($id){
        return $this->db->where('id_user', $id)->get($this->_table)->row();
    }

    public function add(){
        $post = $this->input->post();

        $this->username = $post['username'];
        $this->pass = md5($post['pass']);

        return $this->db->insert($this->_table, $this);
    }

    public function update(){
        $post = $this->input->post();

        $id = $post['id_user'];
        $this->username = $post['username'];

        return $this->db->set('username', $this->username)->where('id_user', $id)->update($this->_table);
    }

    public function reset($id){
        $this->pass = md5('12345');

        return $this->db->set('pass', $this->pass)->where('id_user', $id)->update($this->_table);
    }

    public function delete($id){
        return $this->db->where('id_user', $id)->delete($this->_table);
    }

    public function login(){
        $post = $this->input->post();

        $username = $post['username'];
        $pass = md5($post['pass']);

        $row = $this->db->where('username', $username)->where('pass', $pass)->get($this->_table)->result();

        if(count($row)){
            $data = $this->db->where('username', $username)->where('pass', $pass)->get($this->_table)->row();

            $newdata = array(
                'username'  => $data->username,
                'logged_in' => TRUE
            );
        
            $this->session->set_userdata($newdata);

            redirect('backend/home/dashboard');
        }else{
            $this->session->set_flashdata('login', 'Login Gagal Username dan Password tidak terdaftar.');
            redirect('backend/home/');
        }
    }

    public function logout(){
        $data = array(
            'username',
            'logged_in'
        );

        $this->session->unset_userdata($data);

        redirect('backend/');
    }
}
