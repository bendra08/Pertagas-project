<?php

class Po extends CI_Controller{
    var $_role = '';
    function __construct()
    {
        parent::__construct();
        $this->load->model('Po_model');
        if (!$this->session->userdata('logged_in')){
            redirect('login/index');
        }
        $this->_role = $this->session->userdata('role');
    } 

  
    function index()
    {
        $data['po'] = $this->Po_model->get_all_po();
        
        $data['_view'] = 'po/index';
        $this->load->view('layouts/main',$data);
    }


    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'no_po' => $this->input->post('no_po'),
				'gl_account' => $this->input->post('gl_account'),
				'cost_center' => $this->input->post('cost_center'),
				'nama_perusahaan' => $this->input->post('nama_perusahaan'),
				'pemilik_pekerjaan' => $this->input->post('pemilik_pekerjaan'),
				'jabatan' => $this->input->post('jabatan'),
				'no_rek' => $this->input->post('no_rek'),
				'nama_bank' => $this->input->post('nama_bank'),
				'tanggal_po' => $this->input->post('tanggal_po'),
				'judul_pembayaran' => $this->input->post('judul_pembayaran'),
            );
            
            $po_id = $this->Po_model->add_po($params);
            redirect('po/index');
        }
        else
        {            
            $data['_view'] = 'po/add';
            $this->load->view('layouts/main',$data);
        }
    }  

 
    function edit($no_po)
    {   
        if (!($this->_role=='superadmin' || $this->_role=='admin')) show_error('Akun tidak memiliki izin untuk mengakses fitur ini',403,'Tidak diizinkan');
        $no_po = urldecode($no_po);
        $data['po'] = $this->Po_model->get_po($no_po);
        
        if(isset($data['po']['no_po']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
                    'no_po' => $this->input->post('no_po'),
					'gl_account' => $this->input->post('gl_account'),
					'cost_center' => $this->input->post('cost_center'),
					'nama_perusahaan' => $this->input->post('nama_perusahaan'),
					'pemilik_pekerjaan' => $this->input->post('pemilik_pekerjaan'),
					'jabatan' => $this->input->post('jabatan'),
					'no_rek' => $this->input->post('no_rek'),
					'nama_bank' => $this->input->post('nama_bank'),
					'tanggal_po' => $this->input->post('tanggal_po'),
					'judul_pembayaran' => $this->input->post('judul_pembayaran'),
                );

                $this->Po_model->update_po($no_po,$params);            
                redirect('po/index');
            }
            else
            {
                $data['_view'] = 'po/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The po you are trying to edit does not exist.');
    } 

   
    function remove($no_po)
    {
        if ($this->_role!='superadmin') show_error('Akun tidak memiliki izin untuk mengakses fitur ini',403,'Tidak diizinkan');
        $no_po = urldecode($no_po);
        $po = $this->Po_model->get_po($no_po);

        if(isset($po['no_po']))
        {
            $this->Po_model->delete_po($no_po);
            redirect('po/index');
        }
        else
            show_error('The po you are trying to delete does not exist.');
    }
    
}
