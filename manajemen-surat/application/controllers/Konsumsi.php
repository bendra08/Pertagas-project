<?php

class Konsumsi extends CI_Controller{
    var $_role = '';
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in')){
            redirect('login/index');
        }
        $this->load->model('Konsumsi_model');
        $this->load->model('Notulen_model');
        $this->load->model('Fungsi_model');
        $this->_role = $this->session->userdata('role');
    } 

    
    function index()
    {
        $data['konsumsi'] = $this->Konsumsi_model->get_all_konsumsi();
        
        $data['_view'] = 'konsumsi/index';
        $this->load->view('layouts/main',$data);
    }
    function get_acara(){
        $no_notulen = $this->input->post('no_notulen','true');
        if (empty($no_notulen)){
            $array  = array(
                'status'=>FALSE,
                'message'=>'No Notulen tidak boleh kosong'
            );
        }else{
            $data = $this->Notulen_model->get_notulen($no_notulen);
            if (empty($data)){
                $array  = array(
                    'status'=>FALSE,
                    'message'=>'Data Notulen tidak ditemukan',
                );
            }else{
                $array  = array(
                    'status'=>TRUE,
                    'message'=>'Data Notulen ditemukan',
                    'data' => $data
                );
            }
        }
        echo json_encode($array);
    }
    function cetak($no_konsumsi){
        if (!($this->_role=='superadmin' || $this->_role=='admin')) show_error('Akun tidak memiliki izin untuk mengakses fitur ini',403,'Tidak diizinkan');
        $no_konsumsi = urldecode($no_konsumsi);
        $data['konsumsi'] = $this->Konsumsi_model->get_konsumsi($no_konsumsi);
        $kategori = json_decode($data['konsumsi']['kategori_konsumsi']);
        $jenis = json_decode($data['konsumsi']['jenis_konsumsi']);
        $data['snack_pagi'] = '';
        $data['makan_siang'] = '';
        $data['buah'] = '';
        for($i=0;$i<count($jenis);$i++){
            if (strtolower($jenis[$i])=='snack pagi'){
                $data['snack_pagi'] = 'snack_pagi';
            }
            if (strtolower($jenis[$i])=='makan siang'){
                $data['makan_siang'] = 'makan_siang';
            }
            if (strtolower($jenis[$i])=='snack / buah sore'){
                $data['buah'] = 'buah';
            }
        }
        $data['vvip'] = '';
        $data['vip'] = '';
        $data['biasa'] = '';
        for($i=0;$i<count($kategori);$i++){
            if ($kategori[$i]=='VVIP'){
                $data['vvip'] = 'vvip';
            }
            if ($kategori[$i]=='VIP'){
                $data['vip'] = 'vip';
            }
            if ($kategori[$i]=='Biasa'){
                $data['biasa'] = 'biasa';
            }
        }

        $acara = $this->Notulen_model->get_notulen($data['konsumsi']['acara']);
        $data['konsumsi']['acara'] = $acara['perihal'];
        $this->load->view('konsumsi/print',$data);
    }
    function add()
    {   
        $acara = $this->Notulen_model->get_all_notulen();
        $data['acara'][''] = 'Pilih Acara';
        foreach ($acara as $row) {
            $data['acara'][$row['no_notulen']] = $row['perihal'];
        }
        $data['mulai'][''] = 'Pilih Jam Mulai';
        $data['selesai'][''] = 'Pilih Jam Mulai';
        for ($i=1; $i < 26; $i++) { 
            if($i<25){
                $caption = str_pad($i,2,"0",STR_PAD_LEFT).".00";
                $data['mulai'][$caption] = $caption;
                $data['selesai'][$caption] = $caption;
            }else{
                $data['mulai']['selesai'] = 'Selesai';
                $data['selesai']['selesai'] = 'Selesai';
            }        
        }
        $data['assets_footer'] = array(
            'konsumsi/script_footer_form',
        );
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $fungsi = $this->input->post('id_fungsi');
            $no_konsumsi = $this->Konsumsi_model->generate_id(['id_fungsi'=>$fungsi]);
            $fungsi = $this->Fungsi_model->get_fungsi($fungsi);
            $params = array(
                'no_konsumsi_origin' => $no_konsumsi['origin'],
                'no_konsumsi_tmp' => $no_konsumsi['temp'],
				'dari' => $fungsi['fungsi'],
				'no_kbo' => $fungsi['no_kbo'],
				'tanggal' => $this->input->post('tanggal'),
				'acara' => $this->input->post('acara'),
				'hari_tanggal' => $this->input->post('hari_tanggal'),
				'mulai' => $this->input->post('mulai'),
				'selesai' => $this->input->post('selesai'),
				// 'no' => $this->input->post('no'),
				'tempat' => $this->input->post('tempat'),
				'peserta' => $this->input->post('peserta'),
				'pg_direksi' => $this->input->post('pg_direksi'),
				'pg_vicepresident' => $this->input->post('pg_vicepresident'),
				'pg_manajer' => $this->input->post('pg_manajer'),
				'pg_staff' => $this->input->post('pg_staff'),
				'pg_jumlah' => $this->input->post('pg_jumlah'),
				'peserta_undangan' => $this->input->post('peserta_undangan'),
				'diminta' => $this->input->post('diminta'),
				'diverifikasi' => $this->input->post('diverifikasi'),
				'diproses' => $this->input->post('diproses'),
				'keterangan' => $this->input->post('keterangan'),
				'id_fungsi' => $this->input->post('id_fungsi'),
				'kategori_konsumsi' => json_encode($this->input->post('kategori_konsumsi[]')),
				'jenis_konsumsi' => json_encode($this->input->post('jenis_konsumsi')),
				'jabatan_diminta' => $this->input->post('jabatan_diminta'),
				'jabatan_verifikasi' => $this->input->post('jabatan_verifikasi'),
				'jabatan_proses' => $this->input->post('jabatan_proses'),
            );
            
            $konsumsi_id = $this->Konsumsi_model->add_konsumsi($params);
            redirect('konsumsi/index');
        }
        else
        {            
            $data['_view'] = 'konsumsi/add';
            $this->load->view('layouts/main',$data);
        }
    }  

  
    function edit($no_konsumsi)
    {   
        if (!($this->_role=='superadmin' || $this->_role=='admin')) show_error('Akun tidak memiliki izin untuk mengakses fitur ini',403,'Tidak diizinkan');
        $acara = $this->Notulen_model->get_all_notulen();
        $data['acara'][''] = 'Pilih Acara';
        foreach ($acara as $row) {
            $data['acara'][$row['no_notulen']] = $row['perihal'];
        }
        $data['mulai'][''] = 'Pilih Jam Mulai';
        $data['selesai'][''] = 'Pilih Jam Mulai';
        for ($i=1; $i < 26; $i++) { 
            if($i<25){
                $caption = str_pad($i,2,"0",STR_PAD_LEFT).".00";
                $data['mulai'][$caption] = $caption;
                $data['selesai'][$caption] = $caption;
            }else{
                $data['mulai']['selesai'] = 'Selesai';
                $data['selesai']['selesai'] = 'Selesai';
            }        
        }
        $data['assets_footer'] = array(
            'konsumsi/script_footer_form',
        );

        $data['konsumsi'] = $this->Konsumsi_model->get_konsumsi($no_konsumsi);
        $data['kategori'] = json_decode($data['konsumsi']['kategori_konsumsi']);
        $data['jenis_konsumsi'] = json_decode($data['konsumsi']['jenis_konsumsi']);

        for($i=0;$i<count(@$data['jenis_konsumsi']);$i++){
            if (strtolower(@$data['jenis_konsumsi'][$i])=='snack pagi'){
                $data['snack1'] = 'snack pagi';
            }
            if (strtolower(@$data['jenis_konsumsi'][$i])=='snack / buah sore'){
                $data['snack3'] = 'snack / buah sore';
            }
            if (strtolower(@$data['jenis_konsumsi'][$i])=='makan siang'){
                $data['snack2'] = 'makan siang';
            }
        }
        $data['selected']['mulai'] = $data['konsumsi']['mulai'];
        $data['selected']['selesai'] = $data['konsumsi']['selesai'];
        $data['selected']['acara'] = $data['konsumsi']['acara'];

        if(isset($data['konsumsi']['no_konsumsi']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $fungsi = $this->input->post('id_fungsi');
                $fungsi = $this->Fungsi_model->get_fungsi($fungsi);
                $params = array(
                    'dari' => $fungsi['fungsi'],
                    'no_kbo' => $fungsi['no_kbo'],
                    'tanggal' => $this->input->post('tanggal'),
                    'acara' => $this->input->post('acara'),
                    'hari_tanggal' => $this->input->post('hari_tanggal'),
                    'mulai' => $this->input->post('mulai'),
                    'selesai' => $this->input->post('selesai'),
                    // 'no' => $this->input->post('no'),
                    'tempat' => $this->input->post('tempat'),
                    'peserta' => $this->input->post('peserta'),
                    'pg_direksi' => $this->input->post('pg_direksi'),
                    'pg_vicepresident' => $this->input->post('pg_vicepresident'),
                    'pg_manajer' => $this->input->post('pg_manajer'),
                    'pg_staff' => $this->input->post('pg_staff'),
                    'pg_jumlah' => $this->input->post('pg_jumlah'),
                    'peserta_undangan' => $this->input->post('peserta_undangan'),
                    'diminta' => $this->input->post('diminta'),
                    'diverifikasi' => $this->input->post('diverifikasi'),
                    'diproses' => $this->input->post('diproses'),
                    'keterangan' => $this->input->post('keterangan'),
                    'id_fungsi' => $this->input->post('id_fungsi'),
                    'kategori_konsumsi' => json_encode($this->input->post('kategori_konsumsi[]')),
                    'jenis_konsumsi' => json_encode($this->input->post('jenis_konsumsi')),
                    'jabatan_diminta' => $this->input->post('jabatan_diminta'),
                    'jabatan_verifikasi' => $this->input->post('jabatan_verifikasi'),
                    'jabatan_proses' => $this->input->post('jabatan_proses'),
                );

                $this->Konsumsi_model->update_konsumsi($no_konsumsi,$params);            
                redirect('konsumsi/index');
            }
            else
            {
                $data['_view'] = 'konsumsi/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The konsumsi you are trying to edit does not exist.');
    } 

    function remove($no_konsumsi)
    {
        if ($this->_role!='superadmin') show_error('Akun tidak memiliki izin untuk mengakses fitur ini',403,'Tidak diizinkan');
        $konsumsi = $this->Konsumsi_model->get_konsumsi($no_konsumsi);

        if(isset($konsumsi['no_konsumsi']))
        {
            $this->Konsumsi_model->delete_konsumsi($no_konsumsi);
            redirect('konsumsi/index');
        }
        else
            show_error('The konsumsi you are trying to delete does not exist.');
    }
    
}
