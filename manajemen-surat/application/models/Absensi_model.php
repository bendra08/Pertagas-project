<?php

class Absensi_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
   
    function get_absensi($no_absensi)
    {
        return $this->db->from('absensi a')
            ->join('ruang_rapat r','r.no=a.no','inner')
            ->where('no_absensi',$no_absensi)
            ->get()->row_array();
    }
        
  
    function get_all_absensi()
    {
        $this->db->order_by('no_absensi', 'asc');
        return $this->db->from('absensi a')
            ->join('ruang_rapat r','r.no=a.no','inner')
            ->get()->result_array();
    }
        
  
    function add_absensi($params)
    {
        $this->db->insert('absensi',$params);
        return $this->db->insert_id();
    }
    
   
    function update_absensi($no_absensi,$params)
    {
        $this->db->where('no_absensi',$no_absensi);
        return $this->db->update('absensi',$params);
    }
   
    function delete_absensi($no_absensi)
    {
        return $this->db->delete('absensi',array('no_absensi'=>$no_absensi));
    }
}
