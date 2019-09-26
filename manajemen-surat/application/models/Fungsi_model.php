<?php

 
class Fungsi_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
   
    function get_fungsi($id_fungsi)
    {
        return $this->db->get_where('fungsi',array('id_fungsi'=>$id_fungsi))->row_array();
    }
    function get_fungsi_full($id_fungsi)
    {
        return $this->db->from('fungsi f')
            ->join('user u','u.id_fungsi=f.id_fungsi','inner')
            ->where('f.id_fungsi',$id_fungsi)
            ->get()->row_array();
    }    
   
    function get_all_fungsi()
    {
        $this->db->order_by('id_fungsi', 'desc');
        return $this->db->get('fungsi')->result_array();
    }
 
    function add_fungsi($params)
    {
        $this->db->insert('fungsi',$params);
        return $this->db->insert_id();
    }
    
  
    function update_fungsi($id_fungsi,$params)
    {
        $this->db->where('id_fungsi',$id_fungsi);
        return $this->db->update('fungsi',$params);
    }
    
    
    function delete_fungsi($id_fungsi)
    {
        return $this->db->delete('fungsi',array('id_fungsi'=>$id_fungsi));
    }
}
