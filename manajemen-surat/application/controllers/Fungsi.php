<?php
class Fungsi extends CI_Controller{
    var $_role = '';
    function __construct()
    {
        parent::__construct();
        $this->load->model('Fungsi_model');
        if (!$this->session->userdata('logged_in')){
            redirect('login/index');
        }
        $this->_role = $this->session->userdata('role');
    } 

    function index()
    {
        $data['fungsi'] = $this->Fungsi_model->get_all_fungsi();
        
        $data['_view'] = 'fungsi/index';
        $this->load->view('layouts/main',$data);
    }

    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'id_fungsi' => $this->input->post('id_fungsi'),
				'fungsi' => $this->input->post('fungsi'),
				'nama_pejabat' => $this->input->post('nama_pejabat'),
				'no_kbo' => $this->input->post('no_kbo'),
				'nama_kbo' => $this->input->post('nama_kbo'),
            );
            
            $fungsi_id = $this->Fungsi_model->add_fungsi($params);
            redirect('fungsi/index');
        }
        else
        {            
            $data['_view'] = 'fungsi/add';
            $this->load->view('layouts/main',$data);
        }
    }  

   
    function edit($id_fungsi)
    {   
        if (!($this->_role=='superadmin' || $this->_role=='admin')) show_error('Akun tidak memiliki izin untuk mengakses fitur ini',403,'Tidak diizinkan');
        $id_fungsi = urldecode($id_fungsi);
        $data['fungsi'] = $this->Fungsi_model->get_fungsi($id_fungsi);
        
        if(isset($data['fungsi']['id_fungsi']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
                    'id_fungsi' => $this->input->post('id_fungsi'),
					'fungsi' => $this->input->post('fungsi'),
					'nama_pejabat' => $this->input->post('nama_pejabat'),
					'no_kbo' => $this->input->post('no_kbo'),
					'nama_kbo' => $this->input->post('nama_kbo'),
                );

                $this->Fungsi_model->update_fungsi($id_fungsi,$params);            
                redirect('fungsi/index');
            }
            else
            {
                $data['_view'] = 'fungsi/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The fungsi you are trying to edit does not exist.');
    } 

    function remove($id_fungsi)
    {
        if ($this->_role!='superadmin') show_error('Akun tidak memiliki izin untuk mengakses fitur ini',403,'Tidak diizinkan');
        $id_fungsi = urldecode($id_fungsi);
        $fungsi = $this->Fungsi_model->get_fungsi($id_fungsi);

       
        if(isset($fungsi['id_fungsi']))
        {
            $this->Fungsi_model->delete_fungsi($id_fungsi);
            redirect('fungsi/index');
        }
        else
            show_error('The fungsi you are trying to delete does not exist.');
    }
    
}
