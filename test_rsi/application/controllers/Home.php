<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
  
    function __construct(){
		parent::__construct();
		$this->load->model('EmployeeModel', 'rsi_model');
        $this->load->library("form_validation");
	}

    function index(){
        $data['message'] = "Silahkan Login";
        $this->load->view('home.php', $data);
    }

    function login()
    {
        
        
        $employee = $this->rsi_model;
        $validation = $this->form_validation;
        $validation->set_rules($employee->rules());
         if ($validation->run()) {
            $data['message'] = "Berhasil Login";
            $data['rsi'] = $employee->checkUser();
            if ($data['rsi']){
                $employee->updatelogin();
                $this->load->view('input.php', $data);
                // redirect(site_url("input/".$data->id));
            } else {
                $data['message'] = "Gagal Login";
            $this->load->view('home.php', $data);
            }
            
        } else {
            $data['message'] = "Gagal Login";
            $this->load->view('home.php', $data);
        }
        
    }

    function input($id)
    {
        $data['message'] = "Silahkan Input Data";
        $employee = $this->rsi_model;
        $data['rsi'] = $employee->checklogin($id);
        if(!$data['rsi']){
            if($data['rsi'] == 1){
                $data['message'] = "Silahkan Input Data";
                $this->load->view('input.php', $data);
            }else{
                $data['message'] = "Anda Belum login";
                $this->load->view('home.php', $data);
            }
        }
        // if($data[3] == 1){
        //     $data['message'] = "Silahkan Input Data";
        //     $this->load->view('input.php', $data);
        // }else{
            $data['message'] = "Anda Belum login";
            $this->load->view('home.php', $data);
        // }   
    }
    // function employeetest(){
    //     $data['employee'] = $this->employee_model->getAll();
    //     $this->load->view('base.php', $data);
    // }

    // function input(){
    //     $this->load->view('form.php');
    // }

    // function save()
    // {
    //     $data['message'] = array("Success", "Data Karyawan Berhasil Ditambahkan");

    //     $employee = $this->employee_model;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($employee->rules());

    //     if ($validation->run()) {
    //         $employee->save();
    //         redirect(site_url("employees"));
    //     } else {
    //         $this->load->view("form.php");
    //     }
        
    // }

    // function prosesedit()
    // {
    //     $employee = $this->employee_model;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($employee->rules());

    //     if ($validation->run()) {
    //         $employee->update();
    //         redirect(site_url("employees"));
    //     } else {
    //         $post = $this->input->post();
    //         $data['employee'] = $employee->getById($post['id']);
    //         $this->load->view("form_edit.php", $data);
    //     }
    // }
    // function delete($id = null)
    // {
    //     $employee = $this->employee_model;
    //     if (isset($id)) {
    //         $employee->delete($id);
    //         redirect(site_url("employees"));
    //     } else {
    //         show_404();
    //     }
        
    // }

    // function update($id = null)
    // {
    //     $employee = $this->employee_model;
    //     if (isset($id)) {
    //         $data['employee'] = $employee->getById($id);
    //         if (!$data['employee'])
    //             show_404();
    //         $this->load->view("form_edit.php", $data);
    //     } else {
    //         show_404();
    //     }
        
    // }

}
?>