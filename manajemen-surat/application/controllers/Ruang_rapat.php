<?php

class Ruang_rapat extends CI_Controller{
    var $_role = '';
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ruang_rapat_model');
        if (!$this->session->userdata('logged_in')){
            redirect('login/index');
        }
        $this->_role = $this->session->userdata('role');
    } 

   
   
    function index()
    {
        $data['ruang_rapat'] = $this->Ruang_rapat_model->get_all_ruang_rapat();
        
        $data['_view'] = 'ruang_rapat/index';
        $this->load->view('layouts/main',$data);
    }

  
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
                'no' => $this->input->post('no'),
				'tempat' => $this->input->post('tempat'),
            );
            
            $ruang_rapat_id = $this->Ruang_rapat_model->add_ruang_rapat($params);
            redirect('ruang_rapat/index');
        }
        else
        {            
            $data['_view'] = 'ruang_rapat/add';
            $this->load->view('layouts/main',$data);
        }
    }  

  
    function edit($no)
    {   
        if (!($this->_role=='superadmin' || $this->_role=='admin')) show_error('Akun tidak memiliki izin untuk mengakses fitur ini',403,'Tidak diizinkan');
        $no = urldecode($no);
        $data['ruang_rapat'] = $this->Ruang_rapat_model->get_ruang_rapat($no);
        
        if(isset($data['ruang_rapat']['no']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'no' => $this->input->post('no'),
					'tempat' => $this->input->post('tempat'),
                );

                $this->Ruang_rapat_model->update_ruang_rapat($no,$params);            
                redirect('ruang_rapat/index');
            }
            else
            {
                $data['_view'] = 'ruang_rapat/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The ruang_rapat you are trying to edit does not exist.');
    } 


    function remove($no)
    {
        if ($this->_role!='superadmin') show_error('Akun tidak memiliki izin untuk mengakses fitur ini',403,'Tidak diizinkan');
        $no = urldecode($no);
        $ruang_rapat = $this->Ruang_rapat_model->get_ruang_rapat($no);

        if(isset($ruang_rapat['no']))
        {
            $this->Ruang_rapat_model->delete_ruang_rapat($no);
            redirect('ruang_rapat/index');
        }
        else
            show_error('The ruang_rapat you are trying to delete does not exist.');
    }
    
}
