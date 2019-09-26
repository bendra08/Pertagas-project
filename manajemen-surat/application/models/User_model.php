<?php

 
class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function login($param)
    {
        return $this->db->from('user u')->join('fungsi f','f.id_fungsi=u.id_fungsi')
            ->where('username',$param['username'])
            ->where('password',$param['password'])
            ->get()->row_array();
    }
    function get_user($no_pek)
    {
        return $this->db->from('user u')->join('fungsi f','f.id_fungsi=u.id_fungsi')->where('no_pek',$no_pek)->get()->row_array();
    }
        
   
    function get_all_user()
    {   return $this->db->from('user u')->join('fungsi f','f.id_fungsi=u.id_fungsi')->order_by('no_pek', 'desc')->get()->result_array();

        //$this->db->order_by('id_user', 'desc');
        //return $this->db->get('user')->result_array();
    }
 
    function add_user($params)
    {
        $this->db->insert('user',$params);
        return $this->db->insert_id();
    }
    
  
    function update_user($no_pek,$params)
    {
        $this->db->where('no_pek',$no_pek);
        return $this->db->update('user',$params);
    }
    
    
    function delete_user($no_pek)
    {
        return $this->db->delete('user',array('no_pek'=>$no_pek));
    }
}