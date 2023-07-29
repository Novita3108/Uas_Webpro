<?php
defined('BASEPATH') or exit('NO direct script access allowed');

class Transaction extends CI_controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('TransactionModel', 'transaction_model');
        if(!$this->session->has_userdata('email')){
            redirect('auth');
		}
    }

    public function index()
    {
        $data['transactions'] = $this->transaction_model->listTransaction();
        $this->load->view('layout/header', $data);
        $this->load->view('transaction/listTransaction', $data);
        $this->load->view('layout/footer', $data);
    }
  
}
