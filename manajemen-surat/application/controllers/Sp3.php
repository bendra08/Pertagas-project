<?php

class Sp3 extends CI_Controller{
    var $_role = '';
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in')){
            redirect('login/index');
        }
        $this->_role = $this->session->userdata('role');

        $this->load->model('Sp3_model');
        $this->load->model('Fungsi_model');
        $this->load->model('Po_model');
    } 

   
    function index()
    {
        $data['sp3'] = $this->Sp3_model->get_all_sp3();
        
        $data['_view'] = 'sp3/index';
        $this->load->view('layouts/main',$data);
    }

    function get_fungsi(){
        $id_fungsi = $this->input->post('id_fungsi','true');
        if (empty($id_fungsi)){
            $array  = array(
                'status'=>FALSE,
                'message'=>'Id Fungsi tidak boleh kosong'
            );
        }else{
            $data = $this->Fungsi_model->get_fungsi($id_fungsi);
            if (empty($data)){
                $array  = array(
                    'status'=>FALSE,
                    'message'=>'Data Fungsi tidak ditemukan',
                );
            }else{
                $array  = array(
                    'status'=>TRUE,
                    'message'=>'Data Fungsi ditemukan',
                    'data' => $data
                );
            }
        }
        echo json_encode($array);
    }
    function get_po(){
        $no_po = $this->input->post('no_po','true');
        if (empty($no_po)){
            $array  = array(
                'status'=>FALSE,
                'message'=>'No PO tidak boleh kosong'
            );
        }else{
            $data = $this->Po_model->get_po_full($no_po);
            if (empty($data)){
                $array  = array(
                    'status'=>FALSE,
                    'message'=>'Data PO tidak ditemukan',
                );
            }else{
                $array  = array(
                    'status'=>TRUE,
                    'message'=>'Data PO ditemukan',
                    'data' => $data
                );
            }
        }
        echo json_encode($array);
    }
    function cetak($no_sp3){
        if (!($this->_role=='superadmin' || $this->_role=='admin')) show_error('Akun tidak memiliki izin untuk mengakses fitur ini',403,'Tidak diizinkan');
        $no_sp3 = urldecode($no_sp3);
        $data['sp3'] = $this->Sp3_model->get_sp3($no_sp3);
        
        $this->load->view('sp3/print',$data);
    }
    function add()
    {   
        $fungsi = $this->Fungsi_model->get_all_fungsi();
        $data['fungsi'][''] = 'Pilih Fungsi';
        foreach ($fungsi as $row) {
            $data['fungsi'][$row['id_fungsi']] = $row['fungsi'];
        }
        $data['assets_footer'] = array(
            'sp3/script_footer_form',
        );
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $no_sp3 = $this->Sp3_model->generate_id(['id_fungsi'=>$this->input->post('dari'),'no_kbo'=>$this->input->post('no_kbo')]);
            $fungsi = $this->input->post('dari');
            $fungsi = $this->Fungsi_model->get_fungsi($fungsi);
            $params = array(
                'no_kontrak' => $no_sp3['origin'],
                'no_kontrak_temp' => $no_sp3['temp'],
				'dari' => $fungsi['fungsi'],
				'tanggal' => $this->input->post('tanggal'),
				'tahap' => $this->input->post('tahap'),
				'no_po' => $this->input->post('no_po'),
				'judul_pembayaran' => $this->input->post('judul_pembayaran'),
				'tanggal_po' => $this->input->post('tanggal_po'),
				'gl_account' => $this->input->post('gl_account'),
				'cost_center' => $this->input->post('cost_center'),
				'nama_perusahaan' => $this->input->post('nama_perusahaan'),
				'no_rek' => $this->input->post('no_rek'),
				'nama_bank' => $this->input->post('nama_bank'),
				'pemilik_pekerjaan' => $this->input->post('pemilik_pekerjaan'),
				'jabatan' => $this->input->post('jabatan'),
				'no_invoice' => $this->input->post('no_invoice'),
				'tanggal_invoice' => $this->input->post('tanggal_invoice'),
				'nama_user' => $this->input->post('nama_user'),
				'jabatan_user' => $this->input->post('jabatan_user'),
				'no_sa_gr' => $this->input->post('no_sa_gr'),
				'lokasi' => $this->input->post('lokasi'),
				'nilai_invoice' => $this->input->post('nilai_invoice'),
				'id_fungsi' => $this->input->post('dari'),
                'no_kbo' => $this->input->post('no_kbo'),
				'lampiran_doc' => preg_replace("/\r\n|\r/", "<br />", $this->input->post('lampiran_doc')),
            );
            
            $sp3_id = $this->Sp3_model->add_sp3($params);
            redirect('sp3/index');
        }
        else
        {            
            $data['_view'] = 'sp3/add';
            $this->load->view('layouts/main',$data);
        }
    }  

   
    function edit($no_sp3)
    {   
        if (!($this->_role=='superadmin' || $this->_role=='admin')) show_error('Akun tidak memiliki izin untuk mengakses fitur ini',403,'Tidak diizinkan');
        $data['sp3'] = $this->Sp3_model->get_sp3($no_sp3);
        $fungsi = $this->Fungsi_model->get_all_fungsi();
        $data['fungsi'][''] = 'Pilih Fungsi';
        foreach ($fungsi as $row) {
            $data['fungsi'][$row['id_fungsi']] = $row['fungsi'];
        }
        $data['assets_footer'] = array(
            'sp3/script_footer_form',
        );
        $data['selected']['fungsi'] = $data['sp3']['id_fungsi'];
        $data['sp3']['lampiran_doc'] = str_ireplace("<br />", "\r\n", $data['sp3']['lampiran_doc']); 
        if(isset($data['sp3']['no_sp3']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $fungsi = $this->input->post('dari');
                $fungsi = $this->Fungsi_model->get_fungsi($fungsi);
                $params = array(
					'dari' => $fungsi['fungsi'],
                    'tanggal' => $this->input->post('tanggal'),
                    'no_po' => $this->input->post('no_po'),
                    'tahap' => $this->input->post('tahap'),
                    'judul_pembayaran' => $this->input->post('judul_pembayaran'),
                    'tanggal_po' => $this->input->post('tanggal_po'),
                    'gl_account' => $this->input->post('gl_account'),
                    'cost_center' => $this->input->post('cost_center'),
                    'nama_perusahaan' => $this->input->post('nama_perusahaan'),
                    'no_rek' => $this->input->post('no_rek'),
                    'nama_bank' => $this->input->post('nama_bank'),
                    'pemilik_pekerjaan' => $this->input->post('pemilik_pekerjaan'),
                    'jabatan' => $this->input->post('jabatan'),
                    'no_invoice' => $this->input->post('no_invoice'),
                    'tanggal_invoice' => $this->input->post('tanggal_invoice'),
                    'nama_user' => $this->input->post('nama_user'),
                    'jabatan_user' => $this->input->post('jabatan_user'),
                    'no_sa_gr' => $this->input->post('no_sa_gr'),
                    'lokasi' => $this->input->post('lokasi'),
                    'nilai_invoice' => $this->input->post('nilai_invoice'),
                    'id_fungsi' => $this->input->post('dari'),
                    'no_kbo' => $this->input->post('no_kbo'),
                    'lampiran_doc' => preg_replace("/\r\n|\r/", "<br />", $this->input->post('lampiran_doc')),
                );

                $this->Sp3_model->update_sp3($no_sp3,$params);            
                redirect('sp3/index');
            }
            else
            {
                $data['_view'] = 'sp3/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The sp3 you are trying to edit does not exist.');
    } 

 
    function remove($no_sp3)
    {
        if ($this->_role!='superadmin') show_error('Akun tidak memiliki izin untuk mengakses fitur ini',403,'Tidak diizinkan');
        $sp3 = $this->Sp3_model->get_sp3($no_sp3);

     
        if(isset($sp3['no_sp3']))
        {
            $this->Sp3_model->delete_sp3($no_sp3);
            redirect('sp3/index');
        }
        else
            show_error('The sp3 you are trying to delete does not exist.');
    }
    
}
