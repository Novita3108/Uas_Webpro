<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TransactionModel extends CI_Model {

    public function listTransaction(){
       return $this->db->get('tb_transaction')->result();
    }

}
