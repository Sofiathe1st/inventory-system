<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function login($username, $password){
		$this->db->select('id,firstname,lastname,middlename,type,department,username,password,email,dateregistered');
		$this->db->from('user');
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$this->db->limit(1);
		$query = $this->db->get();
		if($query->num_rows()==1){
			return $query->result();
		} else{
			return false;
		}
	}

	public function register(){
		$this->load->library('form_validation');
		$firstname 		= $this->input->post('firstname');
		$lastname 		= $this->input->post('lastname');
		$middlename 	= $this->input->post('middlename');
		$type 			= $this->input->post('type');
		$department 	= $this->input->post('department');
		$username 		= $this->input->post('username');
		$password 		= md5($this->input->post('password'));
		$email			= $this->input->post('email');
		$dateregistered = $this->input->post('dateregistered');
		

		$this->security->xss_clean($firstname);
		$this->security->xss_clean($lastname);
		$this->security->xss_clean($middlename);
		$this->security->xss_clean($username);
		$this->security->xss_clean($password);
		$this->security->xss_clean($email);

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
      		redirect('create', 'refresh');

    }

    else {
        $data = array(
			'id' 			 => '',
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
		$this->db->insert('user', $data);// Proceed with DB insertion
     }
 }
     public function update($id, $firstname, $astname,$middlename,$type,$department,$username,$password,$email,$dateregistered){ //Change effect
     	$this->form_validation->set_rules('firstname', 'Firstname', 'trim|required');
		$this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
		$this->form_validation->set_rules('middlename', 'Middlename', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.username]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[user.email]');

		$this->security->xss_clean($firstname);
		$this->security->xss_clean($lastname);
		$this->security->xss_clean($middlename);
		$this->security->xss_clean($username);
		$this->security->xss_clean($password);
		$this->security->xss_clean($email);

   	if($this->form_validation->run()==false){
		//$this->session->set_flashdata('msg', 'All fields Are Required.');
		echo '<script language="javascript">';
		echo 'alert("All fields Are Required To Be Inputted Correctly.")';
		echo '</script>';
      		redirect('create', 'refresh');
}
else{  
            $data = array(
			'id' 			 => '',
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
        return $this->db->update('user', $data); //Change effect
    }
}
    public function delete($id, $firstname, $astname,$middlename,$type,$department,$username,$password,$email,$dateregistered) //Change effect
{  
            $data = array(
			'id' 			 => '',
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
        return $this->db->delete('user', $data); //Change effect
    }

 }


//}

	

//put the function here maybe... for linking the read button