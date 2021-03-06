<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory_hardware extends CI_Controller {

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
			$config['base_url'] = base_url() . 'index.php/inventory_hardware/index';
			$config['total_rows'] = $this->queries->count_inventory_hardware();
			$config['per_page'] = 10;
			$this->pagination->initialize($config);
			$page = $this->uri->segment(3);
			$data['inventory_hardware'] = $this->queries->fetch_inventory_hardware($config['per_page'], $page);
			$data['links'] = $this->pagination->create_links();
			/*$this->load->view('inventory_hardware_list',$data);*/
			
			$session_data = $this->session->userdata('logged_in');
			$data['type'] 	   = $session_data['type'];		
			$data['id']   	   = $session_data['id'];
			$data['firstname'] = $session_data['firstname'];
			$data['middlename']= $session_data['middlename'];
			$data['username']  = $session_data['username'];
			$data['department']= $session_data['department'];
			$data['email']     = $session_data['email'];
			$data['lastname']  = $session_data['lastname'];

			$data['inventory_hardware_list'] = $this->queries->getInventory_hardware();
			/*$data['purchase_order']	= $this->queries->getPO();*/

			$this->load->view('inventory_hardware_dashboard', $data);
} else{
			redirect('login', 'refresh');
		}
	}
} 