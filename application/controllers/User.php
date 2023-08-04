<?php
defined('BASEPATH') or exit('NO direct script access allowed');

class User extends CI_controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel', 'user_model');
        if(!$this->session->has_userdata('email')){
            redirect('auth');
		}
    }

    public function index()
    {
        $data['users'] = $this->user_model->listUser();
        $this->load->view('layout/header', $data);
        $this->load->view('user/listUser', $data);
        $this->load->view('layout/footer', $data);
    }

     public function detail($userId)
    {
        $data['user'] = $this->user_model->getUser($userId);
        $this->load->view('layout/header', $data);
        $this->load->view('user/detailUser', $data);
        $this->load->view('layout/footer', $data);
    }

    public function edit($userId)
    {
        $data['user'] = $this->user_model->getUser($userId);
        $this->load->view('layout/header', $data);
        $this->load->view('user/editUser', $data);
        $this->load->view('layout/footer', $data);
    }

    public function add()
    {
        $this->load->view('layout/header');
        $this->load->view('user/addUser');
        $this->load->view('layout/footer');
    }

    public function save($userId = null){
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $data = array(
            'username'         => $username,
            'email'   => $email,
            'password'   => $password,
        );

        if($userId) {
            $this->db->where('id', $userId);
            $updateOrInsert = $this->db->update('tb_user', $data);
        } else {
            $updateOrInsert = $this->db->insert('tb_user', $data);
        }

        if($updateOrInsert){
            //echo "Berhasil di simpan";
            $this->session->set_flashdata('edit', 'sukses');
            redirect('user');
        } else {
            $this->session->set_flashdata('edit', 'gagal');
            redirect('user');
        };
    }

     public function delete($userId){
        $hapus = $this->db->delete ('tb_user', array('id' =>$userId));

        if ($hapus){
            //echo "Berhasil di simpan ";
            $this->session->set_flashdata('delete', 'delete');
            redirect('user');
        }else{
            $this->session->set_flashdata('delete', 'failed');
            redirect('user');
        };
    }
  
}
