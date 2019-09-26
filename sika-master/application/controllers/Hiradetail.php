<?php
 
class Hiradetail extends CI_Controller{
    
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in'))
		{
			redirect('logout');
        }
        $this->load->model('Hiradetail_model','Hira_model');
    } 

    /*
     * Listing of hira
     */
    function index($id_hira)
    {
        $data['id_hira'] = $id_hira;
        $data['_view'] = 'hiradetail/index';
        $this->load->view('layouts/main',$data);
    }

    public function cetak($id){
        $data['hiradetail'] = $this->Hira_model->get_hiradetail_id_hira($id);
        $data['hira'] = $this->Hira_model->get_hira_id_hira($id);
        $this->load->view('hiradetail/cetak',$data);
    }
    /*
     * get
     */

    function add($id_hira)
    {    
        $data['id_hira'] = $id_hira;
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
                'dh_kegiatan' => $this->input->post('kegiatan'),
                'dh_bahaya' => $this->input->post('bahaya'),
                'dh_konsekwensi' => $this->input->post('konsekwensi'),
                'dh_p1' => $this->input->post('p1'),
                'dh_c1' => $this->input->post('c1'),
                'dh_r1' => $this->input->post('r1'),
                'dh_pengendalian' => $this->input->post('pengendalian'),
                'dh_penanggungjawab' => $this->input->post('penanggungjawab'),
                'dh_p2' => $this->input->post('p2'),
                'dh_c2' => $this->input->post('c2'),
                'dh_r2' => $this->input->post('r2'),
                'id_hira' => $id_hira,
            );
            
            $hira_id = $this->Hira_model->add_hira($params);
            if ($hira_id) {
                fs_create_alert(['type'=>'success','message'=>'Data berhasil disimpan']);
                redirect('hiradetail/index/'.$id_hira);
            }else{
                fs_create_alert(['type'=>'success','message'=>'gagal disimpan']);
                redirect('hiradetail/add/'.$id_hira);
            }
            
           
        }
        else
        {            
            $data['_view'] = 'hiradetail/add';
            $this->load->view('layouts/main',$data);
        }
    }  
    
    /*
     * Editing a hira
     */
    function edit($no,$id_hira)
    {   
        // check if the hira exists before trying to edit it
        $data['hira'] = $this->Hira_model->get_hira($no);
        $data['id_hira'] = $id_hira;
        if(isset($data['hira']['dh_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
                    'dh_kegiatan' => $this->input->post('kegiatan'),
                    'dh_bahaya' => $this->input->post('bahaya'),
                    'dh_konsekwensi' => $this->input->post('konsekwensi'),
                    'dh_p1' => $this->input->post('p1'),
                    'dh_c1' => $this->input->post('c1'),
                    'dh_r1' => $this->input->post('r1'),
                    'dh_pengendalian' => $this->input->post('pengendalian'),
                    'dh_penanggungjawab' => $this->input->post('penanggungjawab'),
                    'dh_p2' => $this->input->post('p2'),
                    'dh_c2' => $this->input->post('c2'),
                    'dh_r2' => $this->input->post('r2'),
                    'id_hira' => $id_hira,
                  
                );
                $q = $this->Hira_model->update_hira($no,$params);
                if ($q){
                    fs_create_alert(['type'=>'success','message'=>'Data berhasil diupdate']);                 
                    redirect('hiradetail/index'.'/'.$id_hira);
                }else{
                    fs_create_alert(['type'=>'danger','message'=>'Data gagal diupdate']);           
                    redirect('hiradetail/edit/'.$no.'/'.$id_hira);
                }

                
            }
            else
            {
                $data['_view'] = 'hiradetail/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The hira you are trying to edit does not exist.');
    } 
    public function ajax_list()
	{
        $param['id_hira'] = $this->input->post('id_hira',TRUE); 
		$list = $this->Hira_model->get_datatables($param);
		$data = array();

		$no = $_POST['start'];

		foreach ($list as $item) {
		
            
			$btngroup = '<div class="input-group">
					<button type="button" class="btn btn-xs btn-default pull-right dropdown-toggle" data-toggle="dropdown">
						<span> Action
						</span>
						<i class="fa fa-caret-down"></i>
					</button>
					<ul class="dropdown-menu">
						<li>' . anchor("hiradetail/edit/" . $item->dh_id.'/'.$param['id_hira'], "<i class=\"fa fa-pencil\"></i>Edit") . '</li>
                        <li>' . anchor("hiradetail/remove/" . $item->dh_id.'/'.$param['id_hira'], "<i class=\"fa fa-trash\"></i>Delete") . '</li>
						
					</ul>
                </div>';
                
			$no++;
			$row = array();
			$row[] = $item->dh_id;
			$row[] = $item->dh_kegiatan;
			$row[] = $item->dh_bahaya;
			$row[] = $item->dh_konsekwensi;
			$row[] = $item->dh_p1;
			$row[] = $item->dh_c1;
			$row[] = $item->dh_r1;
			$row[] = $item->dh_pengendalian;
			$row[] = $item->dh_penanggungjawab;
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
    function remove($no,$id_hira)
    {
        $hira = $this->Hira_model->get_hira($no);

        // check if the hira exists before trying to delete it
        if(isset($hira['dh_id']))
        {
            $this->Hira_model->delete_hira($no);
            redirect('hiradetail/index/'.$id_hira);
        }
        else
            show_error('The hira you are trying to delete does not exist.');
    }
    
}
