<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory_software extends CI_Controller {

	public function __consruct() {

		parent::__consruct();

		$this->load->model('queries', 'db');
	}

	public function index()
	{

		if($this->session->userdata('logged_in')){

			$this->load->library('pagination');
			$this->load->model('queries');
			$config = array();
			$config['base_url'] = base_url() . 'index.php/inventory_software/index';
			$config['total_rows'] = $this->queries->count_inventory_software();
			$config['per_page'] = 10;
			$this->pagination->initialize($config);
			$page = $this->uri->segment(3);
			$data['inventory_software'] = $this->queries->fetch_inventory_software($config['per_page'], $page);
			$data['links'] = $this->pagination->create_links();

			
			$session_data = $this->session->userdata('logged_in');
			$data['type'] 	   = $session_data['type'];		
			$data['id']   	   = $session_data['id'];
			$data['firstname'] = $session_data['firstname'];
			$data['middlename']= $session_data['middlename'];
			$data['username']  = $session_data['username'];
			$data['department']= $session_data['department'];
			$data['email']     = $session_data['email'];
			$data['lastname']  = $session_data['lastname'];

			$data['inventory_software_list'] = $this->queries->getInventory_software();
			/*$data['purchase_order']	= $this->queries->getPO();*/

			$this->load->view('inventory_software_dashboard', $data);
} else{
			redirect('login', 'refresh');
		}
	}

} 