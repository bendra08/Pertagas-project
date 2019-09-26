<?php

 
class Ruang_rapat_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    

    function get_ruang_rapat($no)
    {
        return $this->db->get_where('ruang_rapat',array('no'=>$no))->row_array();
    }
        
 
    function get_all_ruang_rapat()
    {
        $this->db->order_by('no', 'desc');
        return $this->db->get('ruang_rapat')->result_array();
    }
        
 
    function add_ruang_rapat($params)
    {
        $this->db->insert('ruang_rapat',$params);
        return $this->db->insert_id();
    }
    
    function update_ruang_rapat($no,$params)
    {
        $this->db->where('no',$no);
        return $this->db->update('ruang_rapat',$params);
    }
    
 
    function delete_ruang_rapat($no)
    {
        return $this->db->delete('ruang_rapat',array('no'=>$no));
    }
}
