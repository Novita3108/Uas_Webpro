<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

    public function listUser(){
       return $this->db->get('tb_user')->result();
    }

     public function getUser($userId){
       return $this->db->get_where('tb_user', ['id' => $userId])->row();
    }

}
