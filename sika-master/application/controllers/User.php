<?php
 
class User extends CI_Controller{
    
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in'))
		{
			redirect('logout');
        }
        $this->load->model('User_model');
    } 

    /*
     * Listing of user
     */
    function index()
    {
        
        $data['_view'] = 'user/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * get
     */

    function add()
    {    
        $data['role'] = [''=>'Pilih Role', '1'=>'Admin','2'=>'User'];
        $data['status'] = [''=>'Pilih Status', '0'=>'Tidak aktif','1'=>'Aktif'];
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
                'id' => $this->input->post('username'),
                'name' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'password' => sha1($this->input->post('password')),
                'role' => $this->input->post('role'),
                'status' => $this->input->post('status'),
            );
            
            $user_id = $this->User_model->add_user($params);
            fs_create_alert(['type'=>'success','message'=>'Data berhasil disimpan']);
            redirect('user/index');
        }
        else
        {            
            $data['_view'] = 'user/add';
            $this->load->view('layouts/main',$data);
        }
    }  
    /*
     * Editing a user
     */
    function edit($no)
    {   
        // check if the user exists before trying to edit it
        $data['user'] = $this->User_model->get_user($no);
        $data['role'] = [''=>'Pilih Role', '1'=>'Admin','2'=>'User'];
        $data['status'] = [''=>'Pilih Status', '0'=>'Tidak aktif','1'=>'Aktif'];
        
        if(isset($data['user']['id']))
        {
            $data['selected']['role'] = $data['user']['role'];
            $data['selected']['status'] = $data['user']['status'];

            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
                    'id' => $this->input->post('username'),
                    'name' => $this->input->post('nama'),
                    'email' => $this->input->post('email'),
                    'role' => $this->input->post('role'),
                    'status' => $this->input->post('status'),
                );
                $password = $this->input->post('password');
                if ($password === NULL || empty($password)){
                    // tidak diupdate
                }else{
                     $params['password'] = sha1($password);
                }
                $this->User_model->update_user($no,$params);
                fs_create_alert(['type'=>'success','message'=>'Data berhasil diupdate']);                 
                        redirect('user/index');
                
            }
            else
            {
                $data['_view'] = 'user/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The user you are trying to edit does not exist.');
    } 
    public function ajax_list()
	{
        $param = '';
        if ($this->session->userdata('role')!=1) {
            $param['id'] = $this->session->userdata('username');
        }
		$list = $this->User_model->get_datatables($param);
		$data = array();

		$no = $_POST['start'];

		foreach ($list as $item) {
            $btnhapus = '';
            if ($this->session->userdata('role')==1) {
                $btnhapus = '<li>' . anchor("user/remove/" . $item->id, "<i class=\"fa fa-trash\"></i>Delete") . '</li>';
            }
			$btngroup = '<div class="input-group">
					<button type="button" class="btn btn-xs btn-default pull-right dropdown-toggle" data-toggle="dropdown">
						<span> Action
						</span>
						<i class="fa fa-caret-down"></i>
					</button>
					<ul class="dropdown-menu">

						<li>' . anchor("user/edit/" . $item->id, "<i class=\"fa fa-pencil\"></i>Edit") . '</li>
                        '.$btnhapus.'
						
					</ul>
                </div>';
                
			$no++;
			$row = array();
			$row[] = $item->id;
			$row[] = $item->name;
			$row[] = $item->email;
			$row[] = convert_role($item->role,true);
			$row[] = convert_status_user($item->status,true);
			$row[] = $btngroup;
			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->User_model->count_all($param),
			"recordsFiltered" => $this->User_model->count_filtered($param),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}
    /*
     * Deleting user
     */
    function remove($no)
    {
        $user = $this->User_model->get_user($no);

        // check if the user exists before trying to delete it
        if(isset($user['id']))
        {
            $this->User_model->delete_user($no);
            redirect('user/index');
        }
        else
            show_error('The user you are trying to delete does not exist.');
    }
    
}
