<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LantunanControllers extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('LantunanModel');
	}

	function index(){
		$data['lantunan'] =  $this->LantunanModel->getLantunan();
		// $data['var1'] = "ada datanya";
		if(empty($data)){
			echo "data kosong rek!!!";
		}else{
			$this->load->view('lantunan.php', $data);
		}
	}

	function test(){
		$this->load->view('about.php');
	}

}
?>