<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BeritaControllers extends CI_Controller{
	/*function __construct(){
		parent::__construct();
		$this->load->model('LantunanModel');
	}*/

	function index(){
		$this->load->view('berita/berita_main.php');
	}

}
?>