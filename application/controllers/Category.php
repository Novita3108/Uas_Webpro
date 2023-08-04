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

     public function detail($categoryId)
    {
        $data['category'] = $this->category_model->getCategory($categoryId);
        $this->load->view('layout/header', $data);
        $this->load->view('category/detailCategory', $data);
        $this->load->view('layout/footer', $data);
    }

    public function edit($categoryId)
    {
        $data['category'] = $this->category_model->getCategory($categoryId);
        $this->load->view('layout/header', $data);
        $this->load->view('category/editCategory', $data);
        $this->load->view('layout/footer', $data);
    }

    public function add()
    {
        $this->load->view('layout/header');
        $this->load->view('category/addCategory');
        $this->load->view('layout/footer');
    }

    public function save($categoryId = null){
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $data = array(
            'title'         => $title,
            'description'   => $description,
        );

        if($categoryId) {
            $this->db->where('id', $categoryId);
            $updateOrInsert = $this->db->update('tb_category', $data);
        } else {
            $updateOrInsert = $this->db->insert('tb_category', $data);
        }

        if($updateOrInsert){
            //echo "Berhasil di simpan";
            $this->session->set_flashdata('edit', 'sukses');
            redirect('category');
        } else {
            $this->session->set_flashdata('edit', 'gagal');
            redirect('category');
        };
    }

     public function delete($categoryId){
        $hapus = $this->db->delete ('tb_category', array('id' =>$categoryId));

        if ($hapus){
            //echo "Berhasil di simpan ";
            $this->session->set_flashdata('delete', 'delete');
            redirect('category');
        }else{
            $this->session->set_flashdata('delete', 'failed');
            redirect('category');
        };
    }
  
}
