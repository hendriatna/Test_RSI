<?php

class Test extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('test.php');
	}

	public function testing(){
		$data['variabel1'] = "Ini test variabel 1";
		$data['variabel2'] = "Ini test variabel 2";
		$this->load->view("test.php", $data);
	}
}

?>