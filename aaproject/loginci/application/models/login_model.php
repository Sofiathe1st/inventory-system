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
      		redirect('create', 'refresh');
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
        return $this->db->update('user', $data); //Change effect
    }
}
    public function deleteuser($id) //Change effect
	{  
		$this->load->database();
		$this->db->where('id',$iduser);
		$this->db->delete();
		return true;
    }

    public function getInfoById($id) //Change effect
	{  
		$this->db->where('id', $id);
		$query = $this->db->get('user');
		return $query->result_array();
    }


}