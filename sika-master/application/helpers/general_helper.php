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

function fs_hash($val){
	return sha1($val);
}
function label_skin($config){
	return '<span class="label label-'.$config['type'].'">'.$config['text'].'</span>';
}
function status_hira($status,$skin=false){
	switch ($status) {
		case '0':
			$msg = 'Belum diproses';
			$type = 'default';
			break;
		case '1':
			$msg = 'Pending';
			$type = 'warning';
			break;
		case '2':
			$msg = 'Disetujui';
			$type = 'success';
			break;
		default:
			$msg = 'Belum diproses';
			$type = 'default';
			break;
	}
	if ($skin){
		return label_skin(['type'=>$type,'text'=>$msg]);
	}else{
		return $msg;
	}
}
function convert_role($role,$skin=false){
	switch ($role) {
		case '1':
			$msg = 'Admin';
			$type = 'primary';
			break;
		case '2':
			$msg = 'User';
			$type = 'default';
			break;
		
		default:
			$msg = 'User';
			$type = 'default';
			break;
	}
	if ($skin){
		return label_skin(['type'=>$type,'text'=>$msg]);
	}else{
		return $msg;
	}
}

function convert_status_user($status,$skin=false){
	switch ($status) {
		case '0':
			$msg = 'Tidak aktif';
			$type = 'danger';
			break;
		case '1':
			$msg = 'Aktif';
			$type = 'success';
			break;
		
		default:
			$msg = 'Tidak aktif';
			$type = 'default';
			break;
	}
	if ($skin){
		return label_skin(['type'=>$type,'text'=>$msg]);
	}else{
		return $msg;
	}
}