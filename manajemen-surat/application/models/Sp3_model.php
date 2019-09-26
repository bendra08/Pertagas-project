<?php

class Sp3_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    
    function get_sp3($no_sp3)
    {
        return $this->db->from('sp3 s')
            ->join('fungsi f','f.id_fungsi=s.id_fungsi','inner')
            ->where('no_sp3',$no_sp3)
            ->get()->row_array();
    }
        
    public function generate_id($param){
        $tabel = 'sp3';
        $kolom = 'no_kontrak_temp';
        $lebar = 3;
        $awalan = 'SP3'.$param['id_fungsi'].$param['no_kbo'];
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
            $origin = 'SP3-'.str_pad($nomor,$lebar,"0",STR_PAD_LEFT).'/'.$param['id_fungsi'].'/'.$param['no_kbo'];
        }else{
            $angka = $awalan.$nomor;
            $origin = 'SP3-'.$nomor.'/'.$param['id_fungsi'].'/'.$param['no_kbo'];
        }
            
        return array('temp'=>$angka,'origin'=>$origin);
    }
    function get_all_sp3()
    {
        $this->db->order_by('no_sp3', 'asc');
        return $this->db->get('sp3')->result_array();
    }
        
  
    function add_sp3($params)
    {
        $this->db->insert('sp3',$params);
        return $this->db->insert_id();
    }
    
   
    function update_sp3($no_sp3,$params)
    {
        $this->db->where('no_sp3',$no_sp3);
        return $this->db->update('sp3',$params);
    }
    
 
    function delete_sp3($no_sp3)
    {
        return $this->db->delete('sp3',array('no_sp3'=>$no_sp3));
    }
}
