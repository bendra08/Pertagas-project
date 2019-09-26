<?php

class Konsumsi_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
 
    function get_konsumsi($no_konsumsi)
    {
        return $this->db->get_where('konsumsi',array('no_konsumsi'=>$no_konsumsi))->row_array();
    }
        
    public function generate_id($param){
        $fungsi = $this->db->where('id_fungsi',$param['id_fungsi'])->get('fungsi')->row_array();
        $param['no_kbo'] = $fungsi['no_kbo'];
        $tabel = 'konsumsi';
        $kolom = 'no_konsumsi_tmp';
        $lebar = 3;
        $awalan = $param['id_fungsi'].$param['no_kbo'];
        if(empty($awalan)){
            $query="select $kolom from $tabel order by $kolom desc limit 1";
        }else{
            $query="select $kolom from $tabel where $kolom like '%$awalan%' order by $kolom desc limit 1";
        }
        $hasil          = $this->db->query($query)->row();
        $jumlahrecord   = count($hasil);
        if($jumlahrecord == 0)
            $nomor=1;
        else
        {
            $row=$hasil;
            $nomor=intval(substr($row->$kolom,strlen($awalan)))+1;
        }
        if($lebar>0){
            $angka = $awalan.str_pad($nomor,$lebar,"0",STR_PAD_LEFT);
            $origin = str_pad($nomor,$lebar,"0",STR_PAD_LEFT).'/'.$param['id_fungsi'].'/'.$param['no_kbo'];
        }else{
            $angka = $awalan.$nomor;
            $origin = $nomor.'/'.$param['id_fungsi'].'/'.$param['no_kbo'];
        }
            
        return array('temp'=>$angka,'origin'=>$origin);
    }
    function get_all_konsumsi()
    {
        $this->db->order_by('no_konsumsi', 'desc');
        return $this->db->get('konsumsi')->result_array();
    }
        
  
    function add_konsumsi($params)
    {
        $this->db->insert('konsumsi',$params);
        return $this->db->insert_id();
    }
    
  
    function update_konsumsi($no_konsumsi,$params)
    {
        $this->db->where('no_konsumsi',$no_konsumsi);
        return $this->db->update('konsumsi',$params);
    }
    
   
    function delete_konsumsi($no_konsumsi)
    {
        return $this->db->delete('konsumsi',array('no_konsumsi'=>$no_konsumsi));
    }
}
