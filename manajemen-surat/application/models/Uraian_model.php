<?php

 
class Uraian_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
  
    function get_uraian($no_uraian)
    {
        return $this->db->get_where('uraian',array('no_uraian'=>$no_uraian))->row_array();
    }
    function get_uraian_notulen($no_notulen)
    {
        return $this->db->order_by('jangka_waktu','asc')->get_where('uraian',array('id_notulen'=>$no_notulen))->result();
    }  

    function get_all_uraian($notulen='')
    {
        $this->db->order_by('no_uraian', 'desc');
        if (!empty($notulen)) $this->db->where('id_notulen',$notulen);
        return $this->db->get('uraian')->result_array();
    }
        
 
    function add_uraian($params)
    {
        $this->db->insert('uraian',$params);
        return $this->db->insert_id();
    }
    
 
    function update_uraian($no_uraian,$params)
    {
        $this->db->where('no_uraian',$no_uraian);
        return $this->db->update('uraian',$params);
    }
    
 
    function delete_uraian($no_uraian)
    {
        return $this->db->delete('uraian',array('no_uraian'=>$no_uraian));
    }
}
