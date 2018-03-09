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
					'lastname' 	 => $row->lastname,
					'password'	 => $row->password);
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

		$id = $this->uri->segment(3);

		$data= array();
		$data['result'] = $this->login->getInfoById($id);
		$session_data = $this->session->userdata('logged_in');
			$data['type'] 	   = $session_data['type'];		
			$data['id']   	   = $session_data['id'];
			$data['firstname'] = $session_data['firstname'];
			$data['middlename']= $session_data['middlename'];
			$data['username']  = $session_data['username'];
			$data['department']= $session_data['department'];
			$data['email']     = $session_data['email'];
			$data['lastname']  = $session_data['lastname'];

			$this->load->view('update_dashboard', $data);


}
public function delete() {

		 $data = array(
					$row->id = $_GET['del']
				);
				 $this->db->where('id', $row->id);
       			 $this->db->delete('user');
       			 redirect('read');
 
}
	public function update_user() {
		$id_user			= $this->input->post('id');
	    $firstname_user		= $this->input->post('firstname');
		$lastname_user 		= $this->input->post('lastname');
		$middlename_user 	= $this->input->post('middlename');
		$type_user 			= $this->input->post('type');
		$department_user 	= $this->input->post('department');
		$username_user 		= $this->input->post('username');
		$password_user 		= md5($this->input->post('password'));
		$email_user			= $this->input->post('email');
		$dateregistered_user = $this->input->post('dateregistered');
		
		$this->security->xss_clean($firstname_user);
		$this->security->xss_clean($lastname_user);
		$this->security->xss_clean($middlename_user);
		$this->security->xss_clean($username_user);
		$this->security->xss_clean($password_user);
		$this->security->xss_clean($email_user);

		$this->form_validation->set_rules('firstname', 'Firstname', 'trim|required');
		$this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
		$this->form_validation->set_rules('middlename', 'Middlename', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.username]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[user.email]');

   	if($this->form_validation->run()==false){
		echo '<script language="javascript">';
		echo 'alert("All fields Are Required To Be Inputted Correctly.")';
		echo '</script>';
		$this->load->library('user_agent');
		redirect($this->agent->referrer());
}
else{  
            $data = array(
			'id' 			 => $id_user,
			'firstname'  	 => $firstname_user,
			'lastname'	     => $lastname_user,
			'middlename'	 => $middlename_user,
			'type'			 => $type_user,
			'department'   	 => $department_user,
			'username' 		 => $username_user,
			'password' 		 => $password_user,
			'email' 		 => $email_user,
			'dateregistered' => $dateregistered_user
        );
        $this->db->where('id', $id_user);
        $this->db->update('user', $data);
        redirect('read');
    }
 }
}