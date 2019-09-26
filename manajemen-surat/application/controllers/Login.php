<?php

 
class Login extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        if ($this->session->userdata('logged_in')){
            redirect('dashboard');
        }
    } 

    function index()
    {   
        $this->load->view('login/index');
    }

    function doLogin()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
            );
            
            if (empty($params['password'])){
                fs_create_alert(['type'=>'danger','message'=>'Password tidak boleh kosong']);
            }else if (empty($params['username'])){
                fs_create_alert(['type'=>'danger','message'=>'Username tidak boleh kosong']);
            }else{
                $params['password'] = sha1($this->input->post('password'));
                $login = $this->User_model->login($params);
                if (!empty($login)) {
                    $login['logged_in'] = true;
                    $this->session->set_userdata($login);
                }else{
                    fs_create_alert(['type'=>'danger','message'=>'Username / Password salah']);
                }
            }
            redirect('login/index');
        }
        else
        {            
            redirect('login');
        }
    }  


}