<?php

 
class Uraian extends CI_Controller{
    var $_role = '';
    function __construct()
    {
        parent::__construct();
        $this->load->model('Uraian_model');
        if (!$this->session->userdata('logged_in')){
            redirect('login/index');
        }
        $this->_role = $this->session->userdata('role');
    } 

   
    function index($notulen)
    {
        $notulen= base64_decode(urldecode($notulen));
        $data['uraian'] = $this->Uraian_model->get_all_uraian($notulen);
        $data['notulen'] = $notulen;
        $data['_view'] = 'uraian/index';
        $this->load->view('layouts/main',$data);
    }

  
    function add($notulen='')
    {   
        $notulen= base64_decode($notulen);
        $data['notulen'] = $notulen;
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'no_uraian' => $this->input->post('no_uraian'),
				'rencana' => $this->input->post('rencana'),
				'jangka_waktu' => $this->input->post('jangka_waktu'),
				'penanggung_jawab' => $this->input->post('penanggung_jawab'),
				'uraian' => $this->input->post('uraian'),
				'id_notulen' => $this->input->post('id_notulen'),
            );
            
            $uraian_id = $this->Uraian_model->add_uraian($params);
            redirect('uraian/index/'.base64_encode($this->input->post('id_notulen')));
        }
        else
        {            
            $data['_view'] = 'uraian/add';
            $this->load->view('layouts/main',$data);
        }
    }  

  
    function edit($no_uraian,$notulen='')
    {   
        if (!($this->_role=='superadmin' || $this->_role=='admin')) show_error('Akun tidak memiliki izin untuk mengakses fitur ini',403,'Tidak diizinkan');
        $no_uraian = base64_decode($no_uraian);
        $data['uraian'] = $this->Uraian_model->get_uraian($no_uraian);
        
        if(isset($data['uraian']['no_uraian']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
                    'no_uraian' => $this->input->post('no_uraian'),
					'rencana' => $this->input->post('rencana'),
					'jangka_waktu' => $this->input->post('jangka_waktu'),
					'penanggung_jawab' => $this->input->post('penanggung_jawab'),
					'uraian' => $this->input->post('uraian'),
                );

                $this->Uraian_model->update_uraian($no_uraian,$params);            
                redirect('uraian/index/'.base64_encode($data['uraian']['id_notulen']));
            }
            else
            {
                $data['_view'] = 'uraian/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The uraian you are trying to edit does not exist.');
    } 

  
    function remove($no_uraian,$notulen='')
    {
        if ($this->_role!='superadmin') show_error('Akun tidak memiliki izin untuk mengakses fitur ini',403,'Tidak diizinkan');
        $no_uraian = base64_decode($no_uraian);
        $uraian = $this->Uraian_model->get_uraian($no_uraian);

       
        if(isset($uraian['no_uraian']))
        {
            $this->Uraian_model->delete_uraian($no_uraian);
            redirect('uraian/index/'.$notulen);
        }
        else
            show_error('The uraian you are trying to delete does not exist.');
    }
    
}
