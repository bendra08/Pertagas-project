<?php

class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in'))
		{
			$role = $this->session->userdata('role');
			if ($role == 1 || $role == 2){
				redirect('hira');
			}else{
				fs_create_alert(['type'=>'danger','message'=>'Maaf, Role tidak ditemukan, silahkan login kembali.']);
				redirect('logout');
			}
		}
		$this->load->model('user_model');
	}
	public function index(){
		$param = array(
			'title' => 'Login', 
		);
		$this->load->view('login/index',$param);
	}
	public function dologin(){
		$data['id']			= $this->input->post('username','true');
		$data['password']	= $this->input->post('password','true');

		$result = $this->user_model->login($data)->row();
		if (!empty($result)){
			$arr_login = array(
				'logged_in' => true,
				'role' 		=> $result->role,
				'username' 	=> $result->id);
			$this->session->set_userdata($arr_login);
		}else{
			fs_create_alert(['type'=>'danger','message'=>'Maaf, Username atau Password salah.']);
		}
		redirect('login');
	}
}