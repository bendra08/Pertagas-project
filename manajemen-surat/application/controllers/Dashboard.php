<?php

class Dashboard extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in')){
            redirect('login/index');
        }
    }

    function index()
    {
        $data['sp3'] = $this->db->from('sp3')->count_all_results();
        $data['absensi'] = $this->db->from('absensi')->count_all_results();
        $data['konsumsi'] = $this->db->from('konsumsi')->count_all_results();
        $data['notulen'] = $this->db->from('notulen')->count_all_results();
        $data['_view'] = 'dashboard';
        $this->load->view('layouts/main',$data);
    }
}
