<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductModel extends CI_Model {

    public function listProduct(){
        $this->db->select('tb_product.id as productId, tb_product.title as productTitle, tb_product.description as productDescription, price, image, tb_category.title as categoryName');
        $this->db->from('tb_product');
        $this->db->join('tb_category', 'tb_product.category_id = tb_category.id');
        $dataProduct = $this->db->get();
        // var_dump($dataProduct->result());
        return $dataProduct->result();
    }

    public function getProduct($productId) {
        $this->db->select('tb_product.id as productId, tb_product.title as productTitle, tb_product.description as productDescription, price, image, tb_category.title as categoryName, tb_product.category_id as category_id');
        $this->db->from('tb_product');
        $this->db->join('tb_category', 'tb_product.category_id = tb_category.id');
        $this->db->where('tb_product.id', $productId);
        $dataProduct = $this->db->get();
        return $dataProduct->row();
    }

}
