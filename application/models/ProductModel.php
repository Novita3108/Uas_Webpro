<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductModel extends CI_Model {

    public function listProduct(){
        $this->db->select('tb_product.id as productId, tb_product.title as productTitle, tb_product.description as productDescription, price, image, tb_category.title as categoryName');
        $this->db->from('tb_product');
        $this->db->join('tb_category', 'tb_product.category_id = tb_category.id');
        $databuku = $this->db->get();
        return $databuku->result();
    }

}
