<?php defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeModel extends CI_Model{


    private $_table = "user";

	private $id;
	private $username;
	private $password;

    private $is_login;

	public function rules()
    {
        return [
            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'],
            // matches[password]'
            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required']
        ];
    }

	// public function getAll()
    // {
    //     return $this->db->get($this->_table)->result();
    // }


    public function checkUser()
    {
        $post = $this->input->post();
        $data = array(
            'username' => $post["username"],
            'password' => $post["password"]);

            return $this->db->get_where($this->_table, $data)->row();
    }

    public function updatelogin()
    {
        $post = $this->input->post();
        $data = array(
            'is_login' => 1
    );
        return $this->db->update($this->_table, $data, array('username' => $post["username"]));
    }

    public function checklogin($id){
        $data = array(
            'id' => $id);

            return $this->db->get_where($this->_table, $data)->row();
    }
	// private $_table = "tbl_employee";

	// private $id;
	// private $nama;
	// private $nama_alias;
	// private $tgl_lahir;
	// private $jenis_kelamin;
	// private $alamat;
	// private $email;
	// private $telepon;

	// public function rules()
    // {
    //     return [
    //         ['field' => 'nama',
    //         'label' => 'Nama',
    //         'rules' => array('required', 'min_length[5]', 'max_length[20]'),
    //         'errors' => array(
    //             'required' => 'Nama harus di isi',
    //             'max_length' => 'Panjang maximal 20',
    //             'min_length' => 'Panjang minimal 5')
    //         ],
    //         // matches[password]'
    //         ['field' => 'nama_alias',
    //         'label' => 'Nama Alias',
    //         'rules' => 'required'],
            
    //         ['field' => 'tgl_lahir',
    //         'label' => 'Tgl_lahir',
    //         'rules' => 'required'],

	// 		['field' => 'jenis_kelamin',
    //         'label' => 'Jenis_kelamin',
    //         'rules' => 'required'],

	// 		['field' => 'alamat',
    //         'label' => 'Alamat',
    //         'rules' => 'required'],

	// 		['field' => 'email',
    //         'label' => 'Email',
    //         'rules' => array('required', 'valid_email')],

	// 		['field' => 'telepon',
    //         'label' => 'Telepon',
    //         'rules' => 'required']
    //     ];
    // }

	// public function getAll()
    // {
    //     return $this->db->get($this->_table)->result();
    // }
    
    // public function getById($id)
    // {
    //     return $this->db->get_where($this->_table, ["id" => $id])->row();
    // }

	// public function save()
    // {
    //     $post = $this->input->post();
    //     $data = array(
    //         'nama' => $post["nama"],
    //         'nama_alias' => $post["nama_alias"],
    //         'tgl_lahir' => $post["tgl_lahir"],
    //         'jenis_kelamin' => $post["jenis_kelamin"],
    //         'alamat' => $post["alamat"],
    //         'email' => $post["email"],
    //         'telepon' => $post["telepon"]
    // );
    //     return $this->db->insert($this->_table, $data);
    // }

	// public function update()
    // {
    //     $post = $this->input->post();
    //     $data = array(
    //         'nama' => $post["nama"],
    //         'nama_alias' => $post["nama_alias"],
    //         'tgl_lahir' => $post["tgl_lahir"],
    //         'jenis_kelamin' => $post["jenis_kelamin"],
    //         'alamat' => $post["alamat"],
    //         'email' => $post["email"],
    //         'telepon' => $post["telepon"]
    // );
    //     return $this->db->update($this->_table, $data, array('id' => $post["id"]));
    // }

    // public function delete($id)
    // {
    //     return $this->db->delete($this->_table, array("id" => $id));
    // }

	// function getEmployee(){
	// 	$sql = "SELECT 
	// 				id,
	// 				nama,
	// 				nama_alias,
	// 				DATE_FORMAT(tgl_lahir, '%d %M %Y') as tgl_lahir,
	// 				jenis_kelamin,
	// 				alamat,
	// 				email,
	// 				telepon
	// 			FROM tbl_employee
	// 			order by id asc";
	// 	$query = $this->db->query($sql);
    //     $result = $query->result_array();    
    //     return $result;
	// }
}?>