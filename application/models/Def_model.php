<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Def_model extends CI_Model {
    public function cekSession(){
        if($this->session->userdata('logged_in') == FALSE){
            redirect('backend/home');
        }
    }
}
