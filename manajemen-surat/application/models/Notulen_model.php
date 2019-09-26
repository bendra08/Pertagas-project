<?php

class Notulen_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    
    function get_notulen($no_notulen)
    {
        $this->db->order_by('n.no_notulen', 'desc');
        return $this->db->from('notulen n')
            ->join('ruang_rapat r','r.no=n.no','inner')
            ->join('fungsi f','f.id_fungsi=n.id_fungsi','inner')
            ->where('no_notulen',$no_notulen)
            ->get()->row_array();
    }
        
  
    function get_all_notulen()
    {
        $this->db->order_by('n.no_notulen', 'desc');
        return $this->db->from('notulen n')
            ->join('ruang_rapat r','r.no=n.no')
            ->join('fungsi f','f.id_fungsi=n.id_fungsi')
            ->get()->result_array();
    }
        
    
    function add_notulen($params)
    {
        $this->db->insert('notulen',$params);
        return $this->db->insert_id();
    }
    
   
    function update_notulen($no_notulen,$params)
    {
        $this->db->where('no_notulen',$no_notulen);
        return $this->db->update('notulen',$params);
    }
    
  
    function delete_notulen($no_notulen)
    {
        return $this->db->delete('notulen',array('no_notulen'=>$no_notulen));
    }
    public function generate_id($param){
        $fungsi = $this->db->where('id_fungsi',$param['id_fungsi'])->get('fungsi')->row_array();
        $param['no_kbo'] = $fungsi['no_kbo'];
        $tabel = 'notulen';
        $kolom = 'no_notulen_tmp';
        $lebar = 3;
        $awalan = 'NR'.$param['id_fungsi'].$param['no_kbo'];
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
            $origin = 'NR-'.str_pad($nomor,$lebar,"0",STR_PAD_LEFT).'/'.$param['id_fungsi'].'/'.$param['no_kbo'];
        }else{
            $angka = $awalan.$nomor;
            $origin = 'NR-'.$nomor.'/'.$param['id_fungsi'].'/'.$param['no_kbo'];
        }
            
        return array('temp'=>$angka,'origin'=>$origin);
    }
}
