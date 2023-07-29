<?php
defined('BASEPATH') or exit('NO direct script access allowed');

class Category extends CI_controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('CategoryModel', 'category_model');
        if(!$this->session->has_userdata('email')){
            redirect('auth');
		}
    }

    public function index()
    {
        $data['categories'] = $this->category_model->listCategory();
        $this->load->view('layout/header', $data);
        $this->load->view('category/listCategory', $data);
        $this->load->view('layout/footer', $data);
    }
  
}
