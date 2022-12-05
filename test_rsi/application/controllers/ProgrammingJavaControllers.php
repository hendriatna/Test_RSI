<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProgrammingJavaControllers extends CI_Controller{
	/*function __construct(){
		parent::__construct();
		$this->load->model('LantunanModel');
	}*/

	function index(){
		$data['data'] = "dashboard";
		$this->load->view('programming/java/java_main.php', $data);
	}

	function pengenalan_java_1(){
		$this->load->view('programming/java/1_pengenalan_java.php');
	}
}
?>