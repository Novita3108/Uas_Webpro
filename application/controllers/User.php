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
  
}
