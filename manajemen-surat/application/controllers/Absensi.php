<?php

class Absensi extends CI_Controller{
    var $_role = '';
    function __construct()
    {
        parent::__construct();
        
        $this->load->model('Absensi_model');
        $this->load->model('Ruang_rapat_model');
        if (!$this->session->userdata('logged_in')){
            redirect('login/index');
        }
        $this->_role = $this->session->userdata('role');
    } 

    function index()
    {
        $data['absensi'] = $this->Absensi_model->get_all_absensi();
        $data['_view'] = 'absensi/index';
        $this->load->view('layouts/main',$data);
    }
    function cetak($no_absensi)
    {
        if (!($this->_role=='superadmin' || $this->_role=='admin')) show_error('Akun tidak memiliki izin untuk mengakses fitur ini',403,'Tidak diizinkan');
        $no_absensi = urldecode($no_absensi);
        $data['absensi'] = $this->Absensi_model->get_absensi($no_absensi);
        
        
        $this->load->view('absensi/print',$data);
    }

    function add()
    {   
        $tempat = $this->Ruang_rapat_model->get_all_ruang_rapat();
        $data['tempat'][''] = 'Pilih Tempat';
        $data['tipe'] = [''=>'Pilih Tipe', 'internal'=>'Internal','eksternal'=>'Eksternal'];
        foreach ($tempat as $row) {
            $data['tempat'][$row['no']] = $row['tempat'];
        }
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'no_absensi' => $this->input->post('no_absensi'),
				'agenda' => $this->input->post('agenda'),
				'hari_tanggal' => $this->input->post('hari_tanggal'),
				'pukul' => $this->input->post('pukul'),
				'no' => $this->input->post('tempat'),
                'tipe' => $this->input->post('tipe'),
            );
            
            $absensi_id = $this->Absensi_model->add_absensi($params);
            redirect('absensi/index');
        }
        else
        {            
            $data['_view'] = 'absensi/add';
            $this->load->view('layouts/main',$data);
        }
    }  

  
    function edit($no_absensi)
    {   
        if (!($this->_role=='superadmin' || $this->_role=='admin')) show_error('Akun tidak memiliki izin untuk mengakses fitur ini',403,'Tidak diizinkan');
        $no_absensi = urldecode($no_absensi);
        $tempat = $this->Ruang_rapat_model->get_all_ruang_rapat();
        $data['tempat'][''] = 'Pilih Tempat';
        $data['tipe'] = [''=>'Pilih Tipe', 'internal'=>'Internal','eksternal'=>'Eksternal'];
        
        foreach ($tempat as $row) {
            $data['tempat'][$row['no']] = $row['tempat'];
        }
        $data['absensi'] = $this->Absensi_model->get_absensi($no_absensi);
        $data['selected']['tempat'] = $data['absensi']['no'];
        $selected['tipe'] = $data['absensi']['tipe'];
        if(isset($data['absensi']['no_absensi']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
                    'no_absensi' => $this->input->post('no_absensi'),
					'agenda' => $this->input->post('agenda'),
					'hari_tanggal' => $this->input->post('hari_tanggal'),
					'pukul' => $this->input->post('pukul'),
					'no' => $this->input->post('tempat'),
					'tipe' => $this->input->post('tipe'),
                );

                $this->Absensi_model->update_absensi($no_absensi,$params);            
                redirect('absensi/index');
            }
            else
            {
                $data['_view'] = 'absensi/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The absensi you are trying to edit does not exist.');
    } 

   
    function remove($no_absensi)
    {
        if ($this->_role!='superadmin') show_error('Akun tidak memiliki izin untuk mengakses fitur ini',403,'Tidak diizinkan');
        $no_absensi = urldecode($no_absensi);
        $absensi = $this->Absensi_model->get_absensi($no_absensi);

        if(isset($absensi['no_absensi']))
        {
            $this->Absensi_model->delete_absensi($no_absensi);
            redirect('absensi/index');
        }
        else
            show_error('The absensi you are trying to delete does not exist.');
    }
    
}
