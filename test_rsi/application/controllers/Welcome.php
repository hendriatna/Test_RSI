<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->model('EmployeeModel', 'employee');
	}

	public function index()
	{
//        echo 'ok';
//		$data['lantunan'] =  $this->LantunanModel->getLantunan();
//		if(empty($data)){
//			$this->load->view('errors/cli/error_404.php');
//		}else{
//        $data;
//			$this->load->view('home.php', $data);
        $this->load->view('home.php');
//		}
	}

	public function about(){
		$this->load->view('about.php');
	}
}
