<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Upload extends CI_Controller
{

    public function __construct()
	{
		parent::__construct();
		// $this->auth();
		// $this->load->model('m_risalah');

    }
    
    public function index()
	{

    $this->load->view('upload');
        
		
    }

    public function simpan_dok()
    {
        $fileName = $this->input->post('file', TRUE);

        $config['upload_path'] = './assets/upload/';
         $config['file_name'] = $fileName;
        $config['allowed_types'] = 'xls|xlsx|csv|pdf|docx';
        $config['max_size'] = '1024';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (! $this->upload->do_upload('path_file')) {
            $error = array('error' => $this->upload->display_errors());
             $this->session->set_flashdata('msg','Ada kesalah dalam upload');
            print_r($error);
        } else {
            $media = $this->upload->data();
            // $inputFileName = './assets/upload/'.$media['file_name'];

            $dok = $media['upload_path'].$media['file_name'];
			$data = array(
					  'dokumen'   =>$dok

    				 );
			$this->Crud_m->simpan_fmou($data);
        }

        redirect(dashboard/index); 
    }
}