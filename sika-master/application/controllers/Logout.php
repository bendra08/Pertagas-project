<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Logout
*/
class Logout extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function index(){
		$this->session->sess_destroy();
		redirect('login/index');
	}
}