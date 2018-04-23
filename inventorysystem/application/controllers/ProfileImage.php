<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileImage extends CI_Controller {

	public function index()
	{

		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['type'] 	   = $session_data['type'];		
			$data['id']   	   = $session_data['id'];
			$data['firstname'] = $session_data['firstname'];
			$data['middlename']= $session_data['middlename'];
			$data['username']  = $session_data['username'];
			$data['department']= $session_data['department'];
			$data['email']     = $session_data['email'];
			$data['lastname']  = $session_data['lastname'];


			$this->load->view('pages/profile_image', $data);
} else{
			redirect('read', 'refresh');
		}
	}

}
