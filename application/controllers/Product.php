<?php
defined('BASEPATH') or exit('NO direct script access allowed');

class Product extends CI_controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProductModel', 'product_model');

        if(!$this->session->has_userdata('email')){
            redirect('auth');
		}
    }

    public function index()
    {
        $data['products'] = $this->product_model->listProduct();
        $this->load->view('layout/header', $data);
        $this->load->view('product/listProduct', $data);
        $this->load->view('layout/footer', $data);
    }
  
}
