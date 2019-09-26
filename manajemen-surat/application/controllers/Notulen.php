<?php

 
class Notulen extends CI_Controller{
    var $_role = '';
    function __construct()
    {
        parent::__construct();
        $this->load->model('Notulen_model');
        $this->load->model('Uraian_model');
        $this->load->model('Ruang_rapat_model');
        if (!$this->session->userdata('logged_in')){
            redirect('login/index');
        }
        $this->_role = $this->session->userdata('role');
    } 

   
    function index()
    {
        $data['notulen'] = $this->Notulen_model->get_all_notulen();
        
        $data['_view'] = 'notulen/index';
        $this->load->view('layouts/main',$data);
    }

    function cetak($no_notulen){
        if (!($this->_role=='superadmin' || $this->_role=='admin')) show_error('Akun tidak memiliki izin untuk mengakses fitur ini',403,'Tidak diizinkan');
        
        $no_notulen = base64_decode($no_notulen);
        $acara = $this->Notulen_model->get_notulen($no_notulen);
        $data['notulen'] = $acara;
        $data['uraian'] = $this->Uraian_model->get_uraian_notulen($data['notulen']['no_notulen']);
        $this->load->view('notulen/print',$data);
    }
    function add()
    {   
        
        $tempat = $this->Ruang_rapat_model->get_all_ruang_rapat();
        $data['tempat'][''] = 'Pilih Tempat';
        foreach ($tempat as $row) {
            $data['tempat'][$row['no']] = $row['tempat'];
        }
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $no_notulen = $this->Notulen_model->generate_id(['id_fungsi'=>$this->input->post('id_fungsi')]);
            $params = array(
                'no_notulen' => $no_notulen['origin'],
                'no_notulen_tmp' => $no_notulen['temp'],
				'perihal' => $this->input->post('perihal'),
				'no' => $this->input->post('tempat'),
				'waktu' => $this->input->post('waktu'),
				'ttd_1' => $this->input->post('ttd_1'),
				'jabatan1' => $this->input->post('jabatan1'),
				'ttd_2' => $this->input->post('ttd_2'),
				'jabatan2' => $this->input->post('jabatan2'),
				'ttd_3' => $this->input->post('ttd_3'),
				'jabatan3' => $this->input->post('jabatan3'),
				'id_fungsi' => $this->input->post('id_fungsi'),
				'daftar_hadir' => $this->input->post('daftar_hadir'),
            );
            
            $notulen_id = $this->Notulen_model->add_notulen($params);
            redirect('notulen/index');
        }
        else
        {            
            $data['_view'] = 'notulen/add';
            $this->load->view('layouts/main',$data);
        }
    }  


    function edit($no_notulen)
    {   
        if (!($this->_role=='superadmin' || $this->_role=='admin')) show_error('Akun tidak memiliki izin untuk mengakses fitur ini',403,'Tidak diizinkan');
        $no_notulen = base64_decode($no_notulen);
        $tempat = $this->Ruang_rapat_model->get_all_ruang_rapat();
        $data['tempat'][''] = 'Pilih Tempat';
        foreach ($tempat as $row) {
            $data['tempat'][$row['no']] = $row['tempat'];
        }
        
        $data['notulen'] = $this->Notulen_model->get_notulen($no_notulen);
        $data['selected']['tempat'] = $data['notulen']['no'];
        if(isset($data['notulen']['no_notulen']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'no_notulen' => $this->input->post('no_notulen'),
					'perihal' => $this->input->post('perihal'),
					'no' => $this->input->post('tempat'),
					'waktu' => $this->input->post('waktu'),
					'ttd_1' => $this->input->post('ttd_1'),
					'jabatan1' => $this->input->post('jabatan1'),
					'ttd_2' => $this->input->post('ttd_2'),
					'jabatan2' => $this->input->post('jabatan2'),
					'ttd_3' => $this->input->post('ttd_3'),
					'jabatan3' => $this->input->post('jabatan3'),
					'id_fungsi' => $this->input->post('id_fungsi'),
                    'daftar_hadir' => $this->input->post('daftar_hadir'),
                );

                $this->Notulen_model->update_notulen($no_notulen,$params);            
                redirect('notulen/index');
            }
            else
            {
                $data['_view'] = 'notulen/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The notulen you are trying to edit does not exist.');
    } 

    function remove($no_notulen)
    {
        if ($this->_role!='superadmin') show_error('Akun tidak memiliki izin untuk mengakses fitur ini',403,'Tidak diizinkan');
        $no_notulen =base64_decode($no_notulen);
        $notulen = $this->Notulen_model->get_notulen($no_notulen);

        if(isset($notulen['no_notulen']))
        {
            $this->Notulen_model->delete_notulen($no_notulen);
            redirect('notulen/index');
        }
        else
            show_error('The notulen you are trying to delete does not exist.');
    }
    
}
