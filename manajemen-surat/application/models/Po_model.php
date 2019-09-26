<?php

class Po_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
  
    function get_po($no_po)
    {
        return $this->db->get_where('po',array('no_po'=>$no_po))->row_array();
    }
    function get_po_full($no_po)
    {
        return $this->db->from('po p')
            ->where('p.no_po',$no_po)
            ->get()->row_array();
    }  
  
    function get_all_po()
    {
        $this->db->order_by('no_po', 'desc');
        return $this->db->get('po')->result_array();
    }
        
   
    function add_po($params)
    {
        $this->db->insert('po',$params);
        return $this->db->insert_id();
    }
    
  
    function update_po($no_po,$params)
    {
        $this->db->where('no_po',$no_po);
        return $this->db->update('po',$params);
    }
    
 
    function delete_po($no_po)
    {
        return $this->db->delete('po',array('no_po'=>$no_po));
    }
}
