<?php
class User extends CI_Controller{
    var $_role = '';
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in')){
            redirect('login/index');
        }
        $this->load->model('User_model');
        $this->load->model('Fungsi_model');
        $this->_role = $this->session->userdata('role');
    } 

    function index()
    {
        $data['user'] = $this->User_model->get_all_user();
        
        $data['_view'] = 'user/index';
        $this->load->view('layouts/main',$data);
    }

    function add()
    {   
        if (!($this->_role=='superadmin' || $this->_role=='admin')) show_error('Akun tidak memiliki izin untuk mengakses fitur ini',403,'Tidak diizinkan');
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'no_pek' => $this->input->post('no_pek'),
				'username' => $this->input->post('username'),
				'password' => sha1($this->input->post('password')),
				'role' => $this->input->post('role'),
				'id_fungsi' => $this->input->post('id_fungsi'),
            );
            
            $no_pek = $this->User_model->add_user($params);
            redirect('user/index');
        }
        else
        {   

            $data['role'] = array(
                ''          => 'Pilih Role',
                'user'      => 'User',
                'admin'     => 'Admin',
                'superadmin'=> 'Superadmin'
            );
            // $data['fungsi'] = '';
            // $fungsi = $this->Fungsi_model->get_all_fungsi();
            // $data['fungsi'][''] = 'Pilih Fungsi';
            // foreach ($fungsi as $row) {
            //     $data['fungsi'][$row['id_fungsi']] = $row['fungsi'];
            // }
            $data['_view'] = 'user/add';
            $this->load->view('layouts/main',$data);
        }
    }  

   
    function edit($no_pek)
    {   
        if (!($this->_role=='superadmin' || $this->_role=='admin')) show_error('Akun tidak memiliki izin untuk mengakses fitur ini',403,'Tidak diizinkan');
        $no_pek = urldecode($no_pek);
        $data['user'] = $this->User_model->get_user($no_pek);
        $data['role'] = array(
            ''          => 'Pilih Role',
            'user'      => 'User',
            'admin'     => 'Admin',
            'superadmin'=> 'Superadmin'
        );
        // $data['fungsi'] = '';
        // $fungsi = $this->Fungsi_model->get_all_fungsi();
        // $data['fungsi'][''] = 'Pilih Fungsi';
        // foreach ($fungsi as $row) {
        //     $data['fungsi'][$row['id_fungsi']] = $row['fungsi'];
        // }
        $data['selected']['role'] = $data['user']['role'];
        //$data['selected']['fungsi'] = $data['user']['id_fungsi'];

        if(isset($data['user']['no_pek']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   

                $params = array(
                    'no_pek' => $this->input->post('no_pek'),
                    'username' => $this->input->post('username'),
                    'role' => $this->input->post('role'),
                    'id_fungsi' => $this->input->post('id_fungsi'),
                );
                if (!empty($this->input->post('password'))){
                    $params['password'] = sha1($this->input->post('password'));
                }
                $this->User_model->update_user($no_pek,$params);            
                redirect('user/index');
            }
            else
            {
                $data['_view'] = 'user/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The User you are trying to edit does not exist.');
    } 

    function remove($no_pek)
    {
        if ($this->_role!='superadmin') show_error('Akun tidak memiliki izin untuk mengakses fitur ini',403,'Tidak diizinkan');
        $no_pek = urldecode($no_pek);
        $user = $this->User_model->get_user($no_pek);

       
        if(isset($user['no_pek']))
        {
            $this->User_model->delete_user($no_pek);
            redirect('user/index');
        }
        else
            show_error('The User you are trying to delete does not exist.');
    }
    
}
