<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TransactionModel extends CI_Model {

   public function listTransaction(){
        $this->db->select('*, tb_transaction.id as transactionId');
        $this->db->from('tb_transaction');
        $this->db->join('tb_product', 'tb_product.id = tb_transaction.product_id');
        $dataTransaction = $this->db->get();
        return $dataTransaction->result();
    }

    public function getTransaction($trasactionId) {
        $this->db->select('*, tb_transaction.id as transactionId');
        $this->db->from('tb_transaction');
        $this->db->join('tb_product', 'tb_product.id = tb_transaction.product_id');
        $this->db->where('tb_transaction.id', $trasactionId);
        $dataTransaction = $this->db->get();
        return $dataTransaction->row();
    }

}
