<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
        if($this->session->has_userdata('email') == true){
            redirect('product');
		} 

		$data['title'] = "Login";
		
		$this->form_validation->set_rules('email', '', 'required', [
			'required' => "email tidak boleh kosong." 
		]);
		$this->form_validation->set_rules('password', '', 'required', [
			'required' => "kata Sandi  tidak boleh kosong.",
		]);

		if($this->form_validation->run() == false){
			$this->load->view('auth/index', $data);
		}else{
			$this->_login();
		}
	}

	private function _login(){
		// input user
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		// user tabel
		$user = $this->db->get_where('tb_user', ['email' => $email])->row_array();
		
		if($user) {
			if($password === $user['password']) {
				
				$data = [
					'email' => $user['email'],
					'name' => $user['name'],
				];
				$this->session->set_userdata($data);
				redirect("product");
			}else{
				$this->session->set_flashdata("flash", '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Password Salah</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
			redirect('auth');
			}

		}else {
			$this->session->set_flashdata("flash", '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Email Tidak Terdaftar</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
			redirect('auth');
		}
	}
  
	public function logout(){
        $this->session->unset_userdata("email");
        $this->session->sess_destroy();
		$this->session->set_flashdata("flash", '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Anda Berhasil Logout</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('auth');
	}
	

}