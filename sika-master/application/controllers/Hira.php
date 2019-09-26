<?php
 
class Hira extends CI_Controller{
    
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in'))
		{
			redirect('logout');
        }
        $this->load->model('Hira_model');
    } 

    /*
     * Listing of hira
     */
    function index()
    {
        $data['hira'] = $this->Hira_model->get_all_hira();
        
        $data['_view'] = 'hira/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * get
     */

    function add()
    {    
        $data['equip_status'] = [''=>'Pilih Equipment Status', 'in service'=>'IN SERVICE','standby'=>'STANDBY', 'under maintenance'=>'UNDER MAINTENANCE'];
        $data['work_status'] = [''=>'Pilih Work Status', 'normal'=>'NORMAL','turnarround'=>'TURNARROUND','emergency'=>'EMERGENCY'];
        $data['lokasi_owner'] = [''=>'Pilih Lokasi/Owner', 'operation'=>'OPERATION','maintenance'=>'MAINTENANCE','project'=>'PROJECT','hse'=>'HSE','it'=>'IT'];
        $data['jenis_sika'] = [''=>'Pilih Jenis Sika', 'izin kerja panas'=>'IZIN KERJA PANAS','izin kerja dingin'=>'IZIN KERJA DINGIN'];
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $file_name = $this->do_upload('upload',sha1(date('Y-m-d H:i:s').rand()));
            if ($file_name['status']){
                $params = array(
                    'equip_status' => $this->input->post('equip_status'),
                    'work_status' => $this->input->post('work_status'),
                    'lokasi_owner' => $this->input->post('lokasi_owner'),
                    'jenis_sika' => $this->input->post('jenis_sika'),
                    'date_mulai' => $this->input->post('date_mulai'),
                    'date_selesai' => $this->input->post('date_selesai'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'fungsi' => $this->input->post('fungsi'),
                    'pengawas' => $this->input->post('pengawas'),
                    'equip_number' => $this->input->post('equip_number'),
                    'no_notifikasi' => $this->input->post('no_notifikasi'),
                    'ringkasan_pek' => $this->input->post('ringkasan_pek'),
                    'tools' => $this->input->post('tools'),
                    'id_user' => $this->session->userdata('username'),
                    'upload' => $file_name['file_name'],
                );
                
                $hira_id = $this->Hira_model->add_hira($params);
                fs_create_alert(['type'=>'success','message'=>'Data berhasil disimpan']);
                redirect('hira/index');
            }else{
                fs_create_alert(['type'=>'danger','message'=>$file_name['message']]);
                redirect('hira/add');
            }
        }
        else
        {            
            $data['_view'] = 'hira/add';
            $this->load->view('layouts/main',$data);
        }
    }  
    public function approve($id){
        $this->Hira_model->update_hira($id,['status'=>2,'comment'=>'']);

        $data['hira'] = $this->Hira_model->get_hira($id);
        if ($data['hira']['jenis_sika']=='izin kerja panas'){
            redirect('ikp');
        }else{
            redirect('ikd');
        }
        
    }

    public function approve_detail($id){
        $this->Hira_model->update_hira($id,['status_hira'=>2,'comment_hira'=>'']);

        $data['hira'] = $this->Hira_model->get_hira($id);
        redirect('hira');
        
    }
    public function pending_detail($id){
        $comment = $this->input->post('comment',true);
        $this->Hira_model->update_hira($id,['status_hira'=>1,'comment_hira'=>$comment]);
        
        $data['hira'] = $this->Hira_model->get_hira($id);
        redirect('hira');
    }
    public function pending($id){
        $comment = $this->input->post('comment',true);
        $this->Hira_model->update_hira($id,['status'=>1,'comment'=>$comment]);
        
        $data['hira'] = $this->Hira_model->get_hira($id);
        if ($data['hira']['jenis_sika']=='izin kerja panas'){
            redirect('ikp');
        }else{
            redirect('ikd');
        }
    }
    public function do_upload($name,$file_name)
    {
        $config['allowed_types']        = "pdf|doc|docx";
        $config['max_size']             = 5000;
        $config['file_name']            = $file_name;
        $config['upload_path']          = 'assets/lampiran/';
        $config['overwrite']            = TRUE;

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload($name)){
            $error = $this->upload->display_errors();
            return array('status'=>false,'message'=>$name.".".$error);
        }else{
            return array('status'=>true,'message'=>'Berhasil','file_name'=>$this->upload->data('file_name'));
        }
    }
    /*
     * Editing a hira
     */
    function edit($no)
    {   
        // check if the hira exists before trying to edit it
        $data['hira'] = $this->Hira_model->get_hira($no);
        $data['equip_status'] = [''=>'Pilih Equipment Status', 'in service'=>'IN SERVICE','standby'=>'STANDBY', 'under maintenance'=>'UNDER MAINTENANCE'];
        $data['work_status'] = [''=>'Pilih Work Status', 'normal'=>'NORMAL','turnarround'=>'TURNARROUND','emergency'=>'EMERGENCY'];
        $data['lokasi_owner'] = [''=>'Pilih Lokasi/Owner', 'operation'=>'OPERATION','maintenance'=>'MAINTENANCE','project'=>'PROJECT','hse'=>'HSE','it'=>'IT'];
        $data['jenis_sika'] = [''=>'Pilih Jenis Sika', 'izin kerja panas'=>'IZIN KERJA PANAS','izin kerja dingin'=>'IZIN KERJA DINGIN'];
        
        if(isset($data['hira']['no']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
                    'equip_status' => $this->input->post('equip_status'),
                    'work_status' => $this->input->post('work_status'),
                    'lokasi_owner' => $this->input->post('lokasi_owner'),
                    'jenis_sika' => $this->input->post('jenis_sika'),
                    'date_mulai' => $this->input->post('date_mulai'),
                    'date_selesai' => $this->input->post('date_selesai'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'fungsi' => $this->input->post('fungsi'),
                    'pengawas' => $this->input->post('pengawas'),
                    'equip_number' => $this->input->post('equip_number'),
                    'no_notifikasi' => $this->input->post('no_notifikasi'),
                    'ringkasan_pek' => $this->input->post('ringkasan_pek'),
                    'tools' => $this->input->post('tools'),
                  
                );
                if($_FILES['upload']['name']!=""){
                    $file_name = $this->do_upload('upload',sha1(date('Y-m-d H:i:s').rand()));
                    if ($file_name['status']){
                        $params['upload'] = $file_name['file_name'];

                        $this->Hira_model->update_hira($no,$params);

                        fs_create_alert(['type'=>'success','message'=>'Data berhasil diupdate']);                 
                        redirect('hira/index');
                    }else{
                        fs_create_alert(['type'=>'danger','message'=>$file_name['message']]);           
                        redirect('hira/edit/'.$no);
                    }

                    
                }else{
                    $this->Hira_model->update_hira($no,$params);            
                    fs_create_alert(['type'=>'success','message'=>'Data berhasil diupdate']); 
                    redirect('hira/index');
                }
                

                
            }
            else
            {
                $data['_view'] = 'hira/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The hira you are trying to edit does not exist.');
    } 
    function lihat($no)
    {   
        // check if the hira exists before trying to edit it
        $data['hira'] = $this->Hira_model->get_hira($no);
        $data['hira_detail'] = $this->Hira_model->get_hira_detail_by_hira($no);
        $data['equip_status'] = [''=>'Pilih Equipment Status', 'in service'=>'IN SERVICE','standby'=>'STANDBY', 'under maintenance'=>'UNDER MAINTENANCE'];
        $data['work_status'] = [''=>'Pilih Work Status', 'normal'=>'NORMAL','turnarround'=>'TURNARROUND','emergency'=>'EMERGENCY'];
        $data['lokasi_owner'] = [''=>'Pilih Lokasi/Owner', 'operation'=>'OPERATION','maintenance'=>'MAINTENANCE','project'=>'PROJECT','hse'=>'HSE','it'=>'IT'];
        $data['jenis_sika'] = [''=>'Pilih Jenis Sika', 'izin kerja panas'=>'IZIN KERJA PANAS','izin kerja dingin'=>'IZIN KERJA DINGIN'];
        
        $data['assets_footer'] = ['hira/script_footer_lihat'];
        if(isset($data['hira']['no']))
        {
            $data['_view'] = 'hira/lihat';
            $this->load->view('layouts/main',$data);
        }
        else
            show_error('The hira you are trying to edit does not exist.');
    } 
    public function ajax_list()
	{
        $param = '';
        if ($this->session->userdata('role')!=1) {
            $param['id_user'] = $this->session->userdata('username');
        }
		$list = $this->Hira_model->get_datatables($param);
		$data = array();

		$no = $_POST['start'];

		foreach ($list as $item) {
			if (strtolower($item->jenis_sika)=='izin kerja panas'){
                $url_proses = 'ikp/add/';
            }else{
                $url_proses = 'ikd/add/';
            }

            $btnproses='';
            if ($this->session->userdata('role')==1) {
                $btnapprove = '<li><a href="'.site_url("hira/approve_detail/".$item->no).'"><span class="fa fa-check"></span> Approve </a></li>
                <li><a href="#" onclick="showPending(\''.$item->no.'\')"><span class="fa fa-close"></span> Pending </a></li>';
            }else{
                $btnapprove = '';
                if ($item->status_hira==2){
                    if ($item->status==0 || $item->status==2){
                        $btnproses = '<li>' . anchor($url_proses.$item->no, "<i class=\"fa fa-globe\"></i>Proses") . '</li>';
                    }else{
                        $btnproses = '<li><a href="#" onclick="showMsg(\''.$item->comment.'\')"><span class="fa fa-globe"></span> Proses </a></li>';
                    }
                }else if ($item->status_hira==1){
                    $btnproses = '<li><a href="#"  onclick="showMsg(\''.$item->comment_hira.'\')"><span class="fa fa-globe"></span> Proses </a></li>';
                }
            }
            
            
            
			$btngroup = '<div class="input-group">
					<button type="button" class="btn btn-xs btn-default pull-right dropdown-toggle" data-toggle="dropdown">
						<span> Action
						</span>
						<i class="fa fa-caret-down"></i>
					</button>
					<ul class="dropdown-menu">
						'.$btnapprove.'<li>' . anchor("hiradetail/index/" . $item->no, "<i class=\"fa fa-edit\"></i>Detail Hira") . '</li>
						<li>' . anchor("hira/lihat/" . $item->no, "<i class=\"fa fa-eye\"></i>Lihat") . '</li>
						<li>' . anchor("hira/edit/" . $item->no, "<i class=\"fa fa-pencil\"></i>Edit") . '</li>
                        <li>' . anchor("hira/remove/" . $item->no, "<i class=\"fa fa-trash\"></i>Delete") . '</li>
                        '.$btnproses.'
						
					</ul>
                </div>';
                
			$no++;
			$row = array();
			$row[] = $item->no;
			$row[] = $item->pekerjaan;
			$row[] = $item->jenis_sika;
			$row[] = $item->no_notifikasi;
            $row[] = (empty($item->upload) || $item->upload === NULL) ? '' : anchor('assets/lampiran/'.$item->upload,'Lihat',array('target'=>'_blank')) ;
			$row[] = status_hira($item->status_hira,true);
			$row[] = $btngroup;
			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->Hira_model->count_all($param),
			"recordsFiltered" => $this->Hira_model->count_filtered($param),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}
    /*
     * Deleting hira
     */
    function remove($no)
    {
        $hira = $this->Hira_model->get_hira($no);

        // check if the hira exists before trying to delete it
        if(isset($hira['no']))
        {
            $this->Hira_model->delete_hira($no);
            redirect('hira/index');
        }
        else
            show_error('The hira you are trying to delete does not exist.');
    }
    
}
