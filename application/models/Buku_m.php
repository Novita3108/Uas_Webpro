<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_m extends CI_Model {

    public function daftar_buku(){
        $this->db->select('*');
        $this->db->from('tbuku');
        $this->db->join('tkategori', 'tbuku.kategori_buku = tkategori.id_kategori');
        $databuku = $this->db->get();
        return $databuku->result();
    }

    public function lihat ($kode_buku){
        $this->db->where('kode_buku' , $kode_buku);
        return $this->db->get('tbuku')->row();
    }
}
