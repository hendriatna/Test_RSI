<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProgrammingJavaScriptControllers extends CI_Controller{
	/*function __construct(){
		parent::__construct();
		$this->load->model('LantunanModel');
	}*/

	function index(){
		$this->load->view('programming/javascript/javascript_main.php');
	}
}
?>