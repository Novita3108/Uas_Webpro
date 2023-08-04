<?php
defined('BASEPATH') or exit('NO direct script access allowed');

class Buku extends CI_controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('buku_m', 'mbuku');
    }

    public function index()
    {
        $data['daftar_buku'] = $this->mbuku->daftar_buku();
        $data['test'] = "test";
        $this->load->view('layout/header', $data);
        $this->load->view('buku/daftarbuku', $data);
        $this->load->view('layout/footer', $data);
    }

    public function lihat($kode_buku)
    {
        $data['buku'] = $this->mbuku->lihat($kode_buku);
        $this->load->view('layout/header', $data);
        $this->load->view('buku/lihat', $data);
        $this->load->view('layout/footer', $data);
    }

    public function tambah()
    {
        $data['konten'] = "buku/tambah";
        $data['judul'] = "tambah buku";

        $this->load->view('layout/header', $data);
        $this->load->view('buku/tambah', $data);
        $this->load->view('layout/footer', $data);
    }
    
    public function simpan()
    {
        $kode_buku      = $this->input->post('kode_buku');
        $judul          = $this->input->post('judul_buku');
        $kategori       = $this->input->post('kategori');
        $sampul        = $this->input->post('sampul');

        //array untuk menampung data yang akan di simpan
        $data = array(
            'kode_buku'     => $kode_buku,
            'judul_buku'    => $judul,
            'kategori_buku' => $kategori,
            'cover_buku'    => $sampul
        );
        $simpan = $this->db->insert('tbuku', $data);
        if ($simpan){
            //echo "berhasil di simpan";
            $this->session->set_flashdata('simpan', 'sukses');
            redirect('buku');
        }
    }

    public function edit($kode){
        $data['konten'] = "buku/edit"; // ini akan ada di view
        $data['judul'] = "Edit Buku";

        //ambil data buku dari DB
        $this->db->select('*');
        $this->db->from('tbuku');
        $this->db->where('kode_buku',$kode );
        $buku = $this->db->get()->row();
        $data['buku'] = $buku;

        $this->load->view('layout/master', $data);
    }

    public function simpan_edit(){
        $kode_buku = $this->input->post('kode_buku');
        $judul = $this->input->post('judul_buku');
        $kategori = $this->input->post('kategori');
        $sampul = $this->input->post('sampul');
        //array untuk menampung data yang akan di simpan
        $data = array(
            'kode_buku' => $kode_buku,
            'judul_buku'    => $judul,
            'kategori_buku' => $kategori,
            'cover_buku'    => $sampul
        );
        $this->db->where('kode_buku', $kode_buku);
        $update = $this->db->update('tbuku', $data);

        if($update){
            //echo "Berhasil di simpan";
            $this->session->set_flashdata('edit', 'sukses');
            redirect('buku');
         } else {
            $this->session->set_flashdata('edit', 'gagal');
            redirect('buku');
         };
     }


    public function hapus($kode){
        $hapus = $this->db->delete ('tbuku', array('kode_buku' =>$kode));

        if ($hapus){
            //echo "Berhasil di simpan ";
            $this->session->set_flashdata('hapus', 'sukses');
            redirect('buku');
        }else{
            $this->session->set_flashdata('hapus', 'gagal');
            redirect('buku');
        };
    }
}
