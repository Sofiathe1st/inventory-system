<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_supplier extends CI_Controller {
	public function __consruct() {

		parent::__consruct();

		$this->load->model('queries', 'db');
	}

	public function index()
	{

		if($this->session->userdata('logged_in')){
			$this->load->model('queries');
			$session_data = $this->session->userdata('logged_in');
			$data['type'] 	   = $session_data['type'];		
			$data['id']   	   = $session_data['id'];
			$data['firstname'] = $session_data['firstname'];
			$data['middlename']= $session_data['middlename'];
			$data['username']  = $session_data['username'];
			$data['department']= $session_data['department'];
			$data['email']     = $session_data['email'];
			$data['lastname']  = $session_data['lastname'];

			$data['supplier_details'] = $this->queries->getsupplierdetails();

			$this->load->view('edit_supplier_dashboard', $data);
} else{
			redirect('login', 'refresh');
		}
	}
}