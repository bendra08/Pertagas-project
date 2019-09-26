<?php

function fs_create_alert($config){

	$CI =& get_instance();

	$alert = '<div class="box-body">
	  <div class="alert alert-'.$config["type"].' alert-dismissible">
	    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	    '.$config["message"].'
	  </div>
	</div>';
	$CI->session->set_flashdata('notification',$alert);
}
function fs_show_alert(){
	$CI =& get_instance();
	echo $CI->session->flashdata('notification');
}

function terbilang($x){
  $abil = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
  if ($x < 12)
    return " " . $abil[$x];
  elseif ($x < 20)
    return Terbilang($x - 10) . " Belas";
  elseif ($x < 100)
    return Terbilang($x / 10) . " Puluh" . Terbilang($x % 10);
  elseif ($x < 200)
    return " Seratus" . Terbilang($x - 100);
  elseif ($x < 1000)
    return Terbilang($x / 100) . " Ratus" . Terbilang($x % 100);
  elseif ($x < 2000)
    return " Seribu" . Terbilang($x - 1000);
  elseif ($x < 1000000)
    return Terbilang($x / 1000) . " Ribu" . Terbilang($x % 1000);
  elseif ($x < 1000000000)
    return Terbilang($x / 1000000) . " Juta" . Terbilang($x % 1000000);
}
function convert_bulan($bln){
	switch ($bln) {
		case '01':
			return "Januari";
			break;
		case '02':
			return "Februari";
			break;
		case '03':
			return "Maret";
			break;
		case '04':
			return "April";
			break;
		case '05':
			return "Mei";
			break;
		case '06':
			return "Juni";
			break;
		case '07':
			return "Juli";
			break;
		case '08':
			return "Agustus";
			break;
		case '09':
			return "September";
			break;
		case '10':
			return "Oktober";
			break;
		case '11':
			return "November";
			break;
		case '12':
			return "Desember";
			break;
		
		default:
			return "";
			break;
	}
}
function konversi($x){
  
  $x = abs($x);
  $angka = array ("","satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
  $temp = "";
  
  if($x < 12){
   $temp = " ".$angka[$x];
  }else if($x<20){
   $temp = konversi($x - 10)." belas";
  }else if ($x<100){
   $temp = konversi($x/10)." puluh". konversi($x%10);
  }else if($x<200){
   $temp = " seratus".konversi($x-100);
  }else if($x<1000){
   $temp = konversi($x/100)." ratus".konversi($x%100);   
  }else if($x<2000){
   $temp = " seribu".konversi($x-1000);
  }else if($x<1000000){
   $temp = konversi($x/1000)." ribu".konversi($x%1000);   
  }else if($x<1000000000){
   $temp = konversi($x/1000000)." juta".konversi($x%1000000);
  }else if($x<1000000000000){
   $temp = konversi($x/1000000000)." milyar".konversi($x%1000000000);
  }
  
  return $temp;
 }
  
 function tkoma($x){
  $str = stristr($x,".");
  $ex = explode('.',$x);
  $a=0;
  if(($ex[1]/10) >= 1){
   $a = abs($ex[1]);
  }
  $string = array("nol", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan",   "sembilan","sepuluh", "sebelas");
  $temp = "";
 
  $a2 = $ex[1]/10;
  $pjg = strlen($str);
  $i =1;
    
  
  if($a>=1 && $a< 12){   
   $temp .= " ".$string[$a];
  }else if($a>12 && $a < 20){   
   $temp .= konversi($a - 10)." belas";
  }else if ($a>20 && $a<100){   
   $temp .= konversi($a / 10)." puluh". konversi($a % 10);
  }else{
   if($a2<1){
    
    while ($i<$pjg){     
     $char = substr($str,$i,1);     
     $i++;
     $temp .= " ".$string[$char];
    }
   }
  }  
  return $temp;
 }
 
 function terbilang2($x){
  if($x<0){
   $hasil = "minus ".trim(konversi(x));
  }else{
   $poin = trim(tkoma($x));
   $hasil = trim(konversi($x));
  }
  
if($poin){
   $hasil = $hasil." koma ".$poin;
  }else{
   $hasil = $hasil;
  }
  return $hasil;  
 }