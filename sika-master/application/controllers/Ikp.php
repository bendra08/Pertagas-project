<?php

class Ikp extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in'))
		{
			redirect('logout');
        }
        $this->load->model('Ikp_model');
        $this->load->model('Hira_model');
    } 

    /*
     * Listing of ikp
     */
    function index()
    {
        $data['ikp'] = $this->Ikp_model->get_all_ikp();
        
        $data['_view'] = 'ikp/index';
        $this->load->view('layouts/main',$data);
    }

    public function cetak($id){
        $data['hira'] = $this->Ikp_model->get_ikp_full($id)->row();
        $data['isolasi'] = json_decode(@$data['hira']->isolasi_peralatan);
        if (empty($data['isolasi'])){
            $data['isolasi'] = [];
        }
        $data['lampiran'] = json_decode(@$data['hira']->lampiran);
        if (empty($data['lampiran'])){
            $data['lampiran'] = [];
        }
        $data['bahaya'] = json_decode(@$data['hira']->identiikasi_bahaya);
        if (empty($data['bahaya'])){
            $data['bahaya'] = [];
        }
        $data['diperlukan'] = json_decode(@$data['hira']->izin_diperlukan);
        if (empty($data['diperlukan'])){
            $data['diperlukan'] = [];
        }
        $data['sifat'] = json_decode(@$data['hira']->sifat_pekerjaan);
        if (empty($data['sifat'])){
            $data['sifat'] = [];
        }
        $data['pengendalian'] = json_decode(@$data['hira']->pengendalian_bahaya);
        if (empty($data['pengendalian'])){
            $data['pengendalian'] = [];
        }
        $this->load->view('ikp/print',$data);
    }
    /*
     * Adding a new ikp
     */
    function add($id)
    {   
		$data['jam_kerja'][''] = 'Pilih Jam ';
        $data['jam_akhir_kerja'][''] = 'Pilih Jam ';
        for ($i=1; $i < 26; $i++) { 
            if($i<25){
                $caption = str_pad($i,2,"0",STR_PAD_LEFT).".00";
                $data['jam_kerja'][$caption] = $caption;
                $data['jam_akhir_kerja'][$caption] = $caption;
            }else{
                $data['jam_kerja']['jam_akhir_kerja'] = 'jam_akhir_kerja';
                $data['jam_akhir_kerja']['jam_akhir_kerja'] = 'jam_akhir_kerja';
            }        
        }
        $data['id'] = $id;
        $data['hira'] = $this->Ikp_model->get_ikp_full_by_hira($id)->row();

        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'pengendalian_bahaya' => json_encode($this->input->post('pengendalian_bahaya')),
				'permintaan_tambahan' => $this->input->post('permintaan_tambahan'),
				'nama1' => $this->input->post('nama1'),
				'date1' => $this->input->post('date1'),
				'nama2' => $this->input->post('nama2'),
				'date2' => $this->input->post('date2'),
				'nama3' => $this->input->post('nama3'),
				'date3' => $this->input->post('date3'),
				'nama4' => $this->input->post('nama4'),
				'date4' => $this->input->post('date4'),
				'nama' => $this->input->post('nama'),
				'date' => $this->input->post('date'),
				'date_penghentian' => $this->input->post('date_penghentian'),
				'waktu_penghentian' => $this->input->post('waktu_penghentian'),
				'nama_penghentian' => $this->input->post('nama_penghentian'),
				'date_pengesahan' => $this->input->post('date_pengesahan'),
				'waktu_pengesahan' => $this->input->post('waktu_pengesahan'),
				'nama_pengesahan' => $this->input->post('nama_pengesahan'),
				'penutupan_izin' => $this->input->post('penutupan_izin'),
				'nama_penerima' => $this->input->post('nama_penerima'),
				'date_penerima' => $this->input->post('date_penerima'),
				'nama_pengawas' => $this->input->post('nama_pengawas'),
				'date_pengawas' => $this->input->post('date_pengawas'),
				'nama_pemberi' => $this->input->post('nama_pemberi'),
				'date_pemberi' => $this->input->post('date_pemberi'),
				'lanjutan_no' => $this->input->post('lanjutan_no'),
				'tanggal_terbit' => $this->input->post('tanggal_terbit'),
				'jam_kerja' => $this->input->post('jam_kerja'),
				'jam_akhir_kerja' => $this->input->post('jam_akhir_kerja'),
				'nama_pelaksana' => $this->input->post('nama_pelaksana'),
				'perusahaan' => $this->input->post('perusahaan'),
				'jumlah_pekerja' => $this->input->post('jumlah_pekerja'),
				'lokasi' => $this->input->post('lokasi'),
				'peralatan' => $this->input->post('peralatan'),
				'izin_diperlukan' => json_encode ($this->input->post('izin_diperlukan')),
				'sifat_pekerjaan' => json_encode ($this->input->post('sifat_pekerjaan')),
				'isolasi_peralatan' => json_encode ($this->input->post('isolasi_peralatan')),
				'lampiran' => json_encode ($this->input->post('lampiran')),
				'identiikasi_bahaya' => json_encode ($this->input->post('identiikasi_bahaya')),
				'identifikasi_tambahan' => $this->input->post('identifikasi_tambahan'),
				'alasan' => $this->input->post('alasan'),
				'catatan' => $this->input->post('catatan'),
				'uraian_pekerjaan' => $this->input->post('uraian_pekerjaan'),
                'id_hira' => $id,
            );
            
            $ikp_id = $this->Ikp_model->add_ikp($params);
            redirect('ikp/index');
        }
        else
        {
            if ($data['hira']->lanjutan_no!==NULL){
                redirect('ikp/edit/'.$data['hira']->no);
            }            
            $data['_view'] = 'ikp/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a ikp
     */
    function edit($no)
    {   
        // check if the ikp exists before trying to edit it
		$data['ikp'] = $this->Ikp_model->get_ikp($no);
		
		$data['jam_kerja'][''] = 'Pilih Jam ';
        $data['jam_akhir_kerja'][''] = 'Pilih Jam ';
        for ($i=1; $i < 26; $i++) { 
            if($i<25){
                $caption = str_pad($i,2,"0",STR_PAD_LEFT).".00";
                $data['jam_kerja'][$caption] = $caption;
                $data['jam_akhir_kerja'][$caption] = $caption;
            }else{
                $data['jam_kerja']['jam_akhir_kerja'] = 'jam_akhir_kerja';
                $data['jam_akhir_kerja']['jam_akhir_kerja'] = 'jam_akhir_kerja';
            }        
        }
        
        if(isset($data['ikp']['no']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
                    'pengendalian_bahaya' => json_encode($this->input->post('pengendalian_bahaya')),
                    'permintaan_tambahan' => $this->input->post('permintaan_tambahan'),
                    'nama1' => $this->input->post('nama1'),
                    'date1' => $this->input->post('date1'),
                    'nama2' => $this->input->post('nama2'),
                    'date2' => $this->input->post('date2'),
                    'nama3' => $this->input->post('nama3'),
                    'date3' => $this->input->post('date3'),
                    'nama4' => $this->input->post('nama4'),
                    'date4' => $this->input->post('date4'),
                    'nama' => $this->input->post('nama'),
                    'date' => $this->input->post('date'),
                    'date_penghentian' => $this->input->post('date_penghentian'),
                    'waktu_penghentian' => $this->input->post('waktu_penghentian'),
                    'nama_penghentian' => $this->input->post('nama_penghentian'),
                    'date_pengesahan' => $this->input->post('date_pengesahan'),
                    'waktu_pengesahan' => $this->input->post('waktu_pengesahan'),
                    'nama_pengesahan' => $this->input->post('nama_pengesahan'),
                    'penutupan_izin' => $this->input->post('penutupan_izin'),
                    'nama_penerima' => $this->input->post('nama_penerima'),
                    'date_penerima' => $this->input->post('date_penerima'),
                    'nama_pengawas' => $this->input->post('nama_pengawas'),
                    'date_pengawas' => $this->input->post('date_pengawas'),
                    'nama_pemberi' => $this->input->post('nama_pemberi'),
                    'date_pemberi' => $this->input->post('date_pemberi'),
                    'lanjutan_no' => $this->input->post('lanjutan_no'),
                    'tanggal_terbit' => $this->input->post('tanggal_terbit'),
                    'jam_kerja' => $this->input->post('jam_kerja'),
                    'jam_akhir_kerja' => $this->input->post('jam_akhir_kerja'),
                    'nama_pelaksana' => $this->input->post('nama_pelaksana'),
                    'perusahaan' => $this->input->post('perusahaan'),
                    'jumlah_pekerja' => $this->input->post('jumlah_pekerja'),
                    'lokasi' => $this->input->post('lokasi'),
                    'peralatan' => $this->input->post('peralatan'),
                    'izin_diperlukan' => json_encode ($this->input->post('izin_diperlukan')),
                    'sifat_pekerjaan' => json_encode ($this->input->post('sifat_pekerjaan')),
                    'isolasi_peralatan' => json_encode ($this->input->post('isolasi_peralatan')),
                    'lampiran' => json_encode ($this->input->post('lampiran')),
                    'identiikasi_bahaya' => json_encode ($this->input->post('identiikasi_bahaya')),
                    'identifikasi_tambahan' => $this->input->post('identifikasi_tambahan'),
                    'alasan' => $this->input->post('alasan'),
                    'catatan' => $this->input->post('catatan'),
                    'uraian_pekerjaan' => $this->input->post('uraian_pekerjaan'),

                );

                $this->Ikp_model->update_ikp($no,$params);            
                redirect('ikp/index');
            }
            else
            {
                $data['_view'] = 'ikp/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The ikp you are trying to edit does not exist.');
    } 
    function lihat($no)
    {   
        // check if the ikp exists before trying to edit it
		$data['ikp'] = $this->Ikp_model->get_ikp($no);
		$data['hira'] = $this->Hira_model->get_hira($data['ikp']['id_hira']);
		$data['jam_kerja'][''] = 'Pilih Jam ';
        $data['jam_akhir_kerja'][''] = 'Pilih Jam ';
        $data['assets_footer'] = ['ikp/script_footer_lihat'];
        $data['equip_status'] = [''=>'Pilih Equipment Status', 'in service'=>'IN SERVICE','standby'=>'STANDBY', 'under maintenance'=>'UNDER MAINTENANCE'];
        $data['work_status'] = [''=>'Pilih Work Status', 'normal'=>'NORMAL','turnarround'=>'TURNARROUND','emergency'=>'EMERGENCY'];
        $data['lokasi_owner'] = [''=>'Pilih Lokasi/Owner', 'operation'=>'OPERATION','maintenance'=>'MAINTENANCE','project'=>'PROJECT','hse'=>'HSE','it'=>'IT'];
        $data['jenis_sika'] = [''=>'Pilih Jenis Sika', 'izin kerja panas'=>'IZIN KERJA PANAS','izin kerja dingin'=>'IZIN KERJA DINGIN'];
        
        for ($i=1; $i < 26; $i++) { 
            if($i<25){
                $caption = str_pad($i,2,"0",STR_PAD_LEFT).".00";
                $data['jam_kerja'][$caption] = $caption;
                $data['jam_akhir_kerja'][$caption] = $caption;
            }else{
                $data['jam_kerja']['jam_akhir_kerja'] = 'jam_akhir_kerja';
                $data['jam_akhir_kerja']['jam_akhir_kerja'] = 'jam_akhir_kerja';
            }        
        }
        
        if(isset($data['ikp']['no']))
        {
            $data['_view'] = 'ikp/lihat';
            $this->load->view('layouts/main',$data);
        }
        else
            show_error('The ikp you are trying to edit does not exist.');
    } 
    public function ajax_list()
	{
        $param = '';
        if ($this->session->userdata('role')!=1) {
            $param['id_user'] = $this->session->userdata('username');
        }
		$list = $this->Ikp_model->get_datatables($param);
		$data = array();

		$no = $_POST['start'];

		foreach ($list as $item) {
            if ($item->status==2){
                $btncetak = '<li>' . anchor('ikp/cetak/'.$item->no, "<i class=\"fa fa-print\"></i>Print") . '</li>';
            }else{
                $btncetak = '';
            }
            if ($this->session->userdata('role')==1) {
                $btnapprove = '<li><a href="'.site_url("hira/approve/".$item->id_hira).'"><span class="fa fa-check"></span> Approve </a></li>
                <li><a href="#" onclick="showPending(\''.$item->id_hira.'\')"><span class="fa fa-close"></span> Pending </a></li>';
            }else{
                $btnapprove = '';
            }
			$btngroup = '<div class="input-group">
					<button type="button" class="btn btn-xs btn-default pull-right dropdown-toggle" data-toggle="dropdown">
						<span> Action
						</span>
						<i class="fa fa-caret-down"></i>
					</button>
					<ul class="dropdown-menu">
						'.$btnapprove.'<li>' . anchor("ikp/lihat/" . $item->no, "<i class=\"fa fa-eye\"></i>Lihat") . '</li>
						<li>' . anchor("ikp/edit/" . $item->no, "<i class=\"fa fa-pencil\"></i>Edit") . '</li>
                        <li>' . anchor("ikp/remove/" . $item->no, "<i class=\"fa fa-trash\"></i>Delete") . '</li>
                        '.$btncetak.'
						
					</ul>
                </div>';
                
			$no++;
			$row = array();
			$row[] = $item->no;
			$row[] = $item->lanjutan_no;
			$row[] = $item->tanggal_terbit;
			$row[] = $item->nama_pelaksana;
			$row[] = $item->perusahaan;
			$row[] = $item->jumlah_pekerja;
			$row[] = $item->lokasi;
			$row[] = $item->izin_diperlukan;
			$row[] = status_hira($item->status,true);
			$row[] = $btngroup;
			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->Ikp_model->count_all($param),
			"recordsFiltered" => $this->Ikp_model->count_filtered($param),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}
    /*
     * Deleting ikp
     */
    function remove($no)
    {
        $ikp = $this->Ikp_model->get_ikp($no);

        // check if the ikp exists before trying to delete it
        if(isset($ikp['no']))
        {
            $this->Ikp_model->delete_ikp($no);
            redirect('ikp/index');
        }
        else
            show_error('The ikp you are trying to delete does not exist.');
    }
    
}
