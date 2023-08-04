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

    public function detail($transactionId)
    {
        $data['transaction'] = $this->transaction_model->getTransaction($transactionId);
        $this->load->view('layout/header', $data);
        $this->load->view('transaction/detailTransaction', $data);
        $this->load->view('layout/footer', $data);
    }

    public function edit($transactionId)
    {
        $data['transaction'] = $this->transaction_model->getTransaction($transactionId);
        $this->load->view('layout/header', $data);
        $this->load->view('transaction/editTransaction', $data);
        $this->load->view('layout/footer', $data);
    }

    public function add()
    {
        $this->load->view('layout/header');
        $this->load->view('transaction/addTransaction');
        $this->load->view('layout/footer');
    }

    public function save($transactionId = null){
        $product_id = $this->input->post('product_id');
        $quantity = $this->input->post('quantity');
        $price_per_quantity = $this->input->post('price_per_quantity');

        $data = array(
            'product_id'   => $product_id,
            'quantity'      => $quantity,
            'price_per_quantity' => $price_per_quantity,
            'net_sales'         => $price_per_quantity * $quantity,
        );

        if($transactionId) {
            $this->db->where('id', $transactionId);
            $updateOrInsert = $this->db->update('tb_transaction', $data);
        } else {
            $updateOrInsert = $this->db->insert('tb_transaction', $data);
        }

        if($updateOrInsert){
            //echo "Berhasil di simpan";
            $this->session->set_flashdata('edit', 'sukses');
            redirect('transaction');
        } else {
            $this->session->set_flashdata('edit', 'gagal');
            redirect('transaction');
        };
    }

     public function delete($transactionId){
        $delete = $this->db->delete ('tb_transaction', array('id' => $transactionId));

        if ($delete){
            //echo "Berhasil di simpan ";
            $this->session->set_flashdata('delete', 'delete');
            redirect('transaction');
        }else{
            $this->session->set_flashdata('delete', 'failed');
            redirect('transaction');
        };
    }
  
}
