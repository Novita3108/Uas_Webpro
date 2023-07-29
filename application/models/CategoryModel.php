<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryModel extends CI_Model {

    public function listCategory(){
       return $this->db->get('tb_category')->result();
    }

}
