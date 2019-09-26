<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Hira_model extends CI_Model
{
    var $_table = 'hira';

    var $table = 'hira m';
    var $column_order = array('m.pekerjaan', 'm.jenis_sika','m.no_notifikasi','m.upload'); //set column field database for datatable orderable
    var $column_search = array('m.pekerjaan', 'm.jenis_sika','m.no_notifikasi','m.upload'); //set column field database for datatable searchable
    var $order = array('m.no' => 'asc'); // default order

    public function __construct()
    {
        parent::__construct();
    }

    private function _get_datatables_query($param='')
    {
        $this->db->from($this->table);
        if (!empty(@$param['id_user'])){
            $this->db->where('id_user',$param['id_user']);
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
        if (!empty(@$param['id_user'])){
            $this->db->where('id_user',$param['id_user']);
        }
        return $this->db->count_all_results();
    }
    
    /*
     * Get hira by no
     */
    function get_hira($no)
    {
        return $this->db->get_where('hira',array('no'=>$no))->row_array();
    }
    function get_hira_detail_by_hira($id_hira)
    {
        return $this->db->get_where('hira_detail',array('id_hira'=>$id_hira))->result_array();
    }
        
    /*
     * Get all hira
     */


    function get_all_sp3()
    {
        $this->db->order_by('no_sp3', 'desc');
        return $this->db->get('sp3')->result_array();
    }
        

    function get_all_hira()
    {
        $this->db->order_by('no', 'desc');
        return $this->db->get('hira')->result_array();
    }
        
    /*
     * function to add new hira
     */
    function add_hira($params)
    {
        $params['no']  = $this->new_no();
        $this->db->insert('hira',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update hira
     */
    function update_hira($no,$params)
    {
        $this->db->where('no',$no);
        return $this->db->update('hira',$params);
    }
    
    /*
     * function to delete hira
     */
    function delete_hira($no)
    {
        return $this->db->delete('hira',array('no'=>$no));
    }

    function new_no(){
        $q = $this->db->from('hira')->order_by('no','desc')->get()->row();
        if (empty($q)){
            return 1;
        }else{
            return $q->no + 1;  
        }
    }
}
