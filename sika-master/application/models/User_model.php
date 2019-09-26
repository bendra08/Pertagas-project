<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Model User
*/
class User_model extends CI_Model
{
	var $_table = 'user';

    var $table = 'user m';
    var $column_order = array('m.id', 'm.name','m.email','m.role','m.status'); //set column field database for datatable orderable
    var $column_search = array('m.id', 'm.name','m.email','m.role','m.status'); //set column field database for datatable searchable
    var $order = array('m.id' => 'asc'); // default order

    public function __construct()
    {
        parent::__construct();
    }

    private function _get_datatables_query($param='')
    {
        $this->db->from($this->table);
        if (!empty(@$param['id'])){
            $this->db->where('id',$param['id']);
        }
    
        $i = 0;
        foreach ($this->column_search as $item) // loop column
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {

                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    function get_datatables($param='')
    {
        $this->_get_datatables_query($param);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered($param='')
    {
        $this->_get_datatables_query($param);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all($param='')
    {
        $this->db->from($this->table);
        if (!empty(@$param['id'])){
            $this->db->where('id',$param['id']);
        }
        return $this->db->count_all_results();
	}
	
	public function login($data){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id',$data['id']);
		$this->db->where('password',fs_hash($data['password']));
		
		return $this->db->get();
	}
	public function select_all(){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->order_by('id','ASC');

		return $this->db->get();
	}
	public function get_user($id){
		return $this->select_by_id($id)->row_array();
	}
	public function select_by_id($id){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id',$id);

		return $this->db->get();
	}
	public function reset($id,$data){
		$this->db->where('id',$id);
		return $this->db->update('user',$data);
	}
	public function delete($id){
		return $this->db->delete('user',['id' => $id]);
	}
	public function insert($data){
		return $this->db->insert('user',$data);
	}
	public function add_user($data){
		return $this->insert($data);
	}
	public function delete_user($data){
		return $this->delete($data);
	}
	public function update($id,$data){
		$this->db->where('id',$id);
		return $this->db->update('user',$data);
    }
    
	public function update_user($id,$data){
		return $this->update($id,$data);
    }
    
	
}