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

    public function detail($productId)
    {
        $data['product'] = $this->product_model->getProduct($productId);
        $this->load->view('layout/header', $data);
        $this->load->view('product/detailProduct', $data);
        $this->load->view('layout/footer', $data);
    }

    public function edit($productId)
    {
        $data['product'] = $this->product_model->getProduct($productId);
        $this->load->view('layout/header', $data);
        $this->load->view('product/editProduct', $data);
        $this->load->view('layout/footer', $data);
    }

     public function add()
    {
        $this->load->view('layout/header');
        $this->load->view('product/addProduct');
        $this->load->view('layout/footer');
    }

    public function save($productId = null){
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $image = $this->input->post('image');
        $price = $this->input->post('price');
        $category_id = $this->input->post('category_id');
        $data = array(
            'title'         => $title,
            'description'   => $description,
            'image'         => $image,
            'price'         => $price,
            'category_id'   => $category_id
        );

        if($productId) {
            $this->db->where('id', $productId);
            $updateOrInsert = $this->db->update('tb_product', $data);
        } else {
            $updateOrInsert = $this->db->insert('tb_product', $data);
        }

        if($updateOrInsert){
            //echo "Berhasil di simpan";
            $this->session->set_flashdata('edit', 'sukses');
            redirect('product');
        } else {
            $this->session->set_flashdata('edit', 'gagal');
            redirect('product');
        };
    }

     public function delete($productId){
        $hapus = $this->db->delete ('tb_product', array('id' =>$productId));

        if ($hapus){
            //echo "Berhasil di simpan ";
            $this->session->set_flashdata('delete', 'delete');
            redirect('product');
        }else{
            $this->session->set_flashdata('delete', 'failed');
            redirect('product');
        };
    }
  
}
