<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required|callback_basisdata');
		if($this->form_validation->run()==false){
			$this->load->view('login_view');
		} else{
			redirect(base_url('index.php/home'), 'refresh');
		}
	}

	function basisdata($password){
		$username = $this->input->post('username');
		$result = $this->login->login($username,$password);
		if($result){
			$sess_array = array();
			foreach ($result as $row) {
				$sess_array = $arrayName = array(
					'id' 		 => $row->id, 
					'username'   => $row->username, 
					'firstname'  => $row->firstname, 
					'type'		 => $row->type, 
					'department' => $row->department, 
					'email'		 => $row->email,
					'middlename' => $row->middlename,
					'lastname' 	 => $row->lastname);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return true;
		} else{
			$this->form_validation->set_message('basisdata', 'Invalid username or password ');
			return false;
		}
	}


	public function register(){
		if($this->input->post('register')){
			$this->login->register();
			redirect('home');
		} else{
			$this->load->view('pages/create');
		}
	}
	public function update() {
		$id 			= $this->input->post('id');
		$firstname 		= $this->input->post('firstname');
		$lastname 		= $this->input->post('lastname');
		$middlename 	= $this->input->post('middlename');
		$type 			= $this->input->post('type');
		$department 	= $this->input->post('department');
		$username 		= $this->input->post('username');
		$password 		= md5($this->input->post('password'));
		$email			= $this->input->post('email');
		$dateregistered = $this->input->post('dateregistered');
    // Load form helper and validation library
   // $this->load->helper('form');
   // $this->load->library('form_validation');
    // Update field validation
    	$this->form_validation->set_rules('firstname', 'Firstname', 'trim|required|min_length[4]|is_unique[user.firstname]', array('is_unique' => 'This username already exists.'));
		$this->form_validation->set_rules('lastname', 'Lastname', 'trim|required|min_length[4]|is_unique[user.lastname]', array('is_unique' => 'This username already exists.'));
		$this->form_validation->set_rules('middlename', 'Middlename', 'trim|required|min_length[4]|is_unique[user.middlename]', array('is_unique' => 'This username already exists.'));
		$this->form_validation->set_rules('type', 'Type', 'trim|required');
		$this->form_validation->set_rules('department', 'Department', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|is_unique[user.username]', array('is_unique' => 'This username already exists.'));
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]', array('is_unique' => 'This email already exists.'));
		$this->form_validation->set_rules('dateregistered', 'Dateregistered');
		 $data = array(
					
					'firstname'  	 => $firstname,
					'lastname'	     => $lastname,
					'middlename'	 => $middlename,
					'type'			 => $type,
					'department'   	 => $department,
					'username' 		 => $username,
					'password' 		 => $password,
					'email' 		 => $email,
					'dateregistered' => $dateregistered
				);
				 $this->db->where('id', $id);
       			 $this->db->update('user', $data);
       			 redirect('read');
   
    /*if($this->form_validation->run() == false) {
        redirect('update');
    } else {
        // Set variable from Form
        $id         =   $this->input->post('id');
        $username   =   $this->input->post('username');
        $email      =   $this->input->post('email');
        if($this->user_model->update_user($id, $username, $email)) {
            $this->session->set_flashdata('notice','<div class="success">Your details updated Successfully!</div>');
            redirect('read');
        } else {    
            $this->session->set_flashdata('msg', '<div class="error">Problem with update your detail!</div>');
            redirect('read');
        }
    }
}*/
}
public function delete() {
		$id 			= $this->input->post('id');

    // Load form helper and validation library
   // $this->load->helper('form');
   // $this->load->library('form_validation');
    // Update field validation
    $this->form_validation->set_rules('firstname', 'Firstname', 'trim|required|min_length[4]|is_unique[user.firstname]', array('is_unique' => 'This username already exists.'));
		$this->form_validation->set_rules('lastname', 'Lastname', 'trim|required|min_length[4]|is_unique[user.lastname]', array('is_unique' => 'This username already exists.'));
		$this->form_validation->set_rules('middlename', 'Middlename', 'trim|required|min_length[4]|is_unique[user.middlename]', array('is_unique' => 'This username already exists.'));
		$this->form_validation->set_rules('type', 'Type', 'trim|required');
		$this->form_validation->set_rules('department', 'Department', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|is_unique[user.username]', array('is_unique' => 'This username already exists.'));
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]', array('is_unique' => 'This email already exists.'));
		$this->form_validation->set_rules('dateregistered', 'Dateregistered');
		 $data = array(
					'id'			 => $id,
				);
				 $this->db->where('id', $id);
       			 $this->db->delete('user', $data);
       			 redirect('home');
   
    /*if($this->form_validation->run() == false) {
        redirect('update');
    } else {
        // Set variable from Form
        $id         =   $this->input->post('id');
        $username   =   $this->input->post('username');
        $email      =   $this->input->post('email');
        if($this->user_model->update_user($id, $username, $email)) {
            $this->session->set_flashdata('notice','<div class="success">Your details updated Successfully!</div>');
            redirect('read');
        } else {    
            $this->session->set_flashdata('msg', '<div class="error">Problem with update your detail!</div>');
            redirect('read');
        }
    }
}*/
}

}
