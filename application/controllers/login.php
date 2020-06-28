<?php 

class Login extends CI_Controller{
	public function __construct(){
		parent ::__construct();
		$this->load->model('m_login');
	}

	function index(){
		$this->load->view('v_login');
	}

	public function aksi(){
		$this->form_validation->set_rules('username', 'username', 'required',array('required' => 'Username harus di isi.'));
		$this->form_validation->set_rules('password', 'password', 'required',array('required' => 'Password harus di isi.'));

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data_login = $this->m_login->cek_akun($username, $password);

		if($this->form_validation->run() != false){

			if($data_login){
				$this->session->set_userdata('id', $data_login['id']);
				$this->session->set_userdata('nama', $data_login['nama']);
				$this->session->set_userdata('login', true);
				redirect('crud');
			}else{
				$this->session->set_flashdata('pesan_flash', 'Username & Password yang anda inputkan tidak sesuai');
				$this->load->view('v_login');
			}
		}else{
			$this->load->view('v_login');
		}
	}


	public function logout(){
		$this->session->sess_destroy();
        redirect('login');
	}
}

?>
