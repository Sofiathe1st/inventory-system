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
		$this->security->xss_clean($dateregistered_user);

		$this->form_validation->set_rules('firstname', 'Firstname', 'trim|required');
		$this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
		$this->form_validation->set_rules('middlename', 'Middlename', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('dateregistered', 'Dateregistered', 'trim|required');

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
        echo "<script>window.close();</script>";
    }
 }
 
public function purchase_order(){
		$this->load->library('form_validation');
		$this->load->model('queries');
		$purchase_order_no 		= $this->input->post('purchase_order_no');
		$purchase_order_date	= $this->input->post('purchase_order_date');
		$manufacturer			= $this->input->post('manufacturer');
		$remarks 				= $this->input->post('remarks');
		$author_email			= $this->input->post('author_email');
		$author_firstname		= $this->input->post('author_firstname');
		$author_lastname		= $this->input->post('author_lastname');
		
		$this->security->xss_clean($purchase_order_no);
		$this->security->xss_clean($purchase_order_date);
		$this->security->xss_clean($remarks);
		$this->security->xss_clean($author_email);
		$this->security->xss_clean($author_firstname);
		$this->security->xss_clean($author_lastname);

		$this->form_validation->set_rules('purchase_order_no', 'purchase_order_no', 'trim|required');
		$this->form_validation->set_rules('purchase_order_date', 'purchase_order_date', 'trim|required');
		$this->form_validation->set_rules('manufacturer', 'manufacturer', 'trim|required');
		$this->form_validation->set_rules('remarks', 'remarks', 'trim|required');
		$this->form_validation->set_rules('author_email', 'author_email', 'trim|required');
		$this->form_validation->set_rules('author_firstname', 'author_firstname', 'trim|required');
		$this->form_validation->set_rules('author_lastname', 'author_lastname', 'trim|required');

   	if($this->form_validation->run()==false){
		echo '<script language="javascript">';
		echo 'alert("All fields Are Required To Be Inputted Correctly.")';
		echo '</script>';
      		redirect('purchase_order', 'refresh');

    }

    else {
        $data = array(
			'purchase_order_no' 	=> $purchase_order_no,
			'purchase_order_date'  	=> $purchase_order_date,
			'manufacturer'	     	=> $manufacturer,
			'remarks'   	 		=> $remarks,
			'author_email'			=> $author_email,
			'author_firstname'		=> $author_firstname,
			'author_lastname'		=> $author_lastname
		);
		$this->db->insert('purchase_order', $data);
		echo '<script language="javascript">';
		echo 'alert("Your Form was Submitted Successfully.")';
		echo '</script>';// Proceed with DB insertion
		redirect('purchase_order_view');
}}
public function purchase_order_details(){
		$this->load->library('form_validation');
		$this->load->model('queries');
		$serial_number	= $this->input->post('serial_number');
		$color 				= $this->input->post('color');
		$author_email			= $this->input->post('author_email');
		$author_firstname		= $this->input->post('author_firstname');
		$author_lastname		= $this->input->post('author_lastname');
		$data['purchase_order_no'] = $this->input->post("purchase_order_no");
		$data['purchase_order_date']     = $this->input->post("purchase_order_date");
		$data['manufacturer']     = $this->input->post("manufacturer");

		$data['results'] 	= $this->queries->getManufacturerList();



		$this->security->xss_clean($serial_number);
		$this->security->xss_clean($purchase_order_no);
		$this->security->xss_clean($color);
		$this->security->xss_clean($author_firstname);
		$this->security->xss_clean($author_lastname);
		$this->security->xss_clean($author_email);

		$this->form_validation->set_rules('serial_number', 'serial_number', 'trim|required');
		$this->form_validation->set_rules('purchase_order_no', 'purchase_order_no', 'trim|required');
		$this->form_validation->set_rules('color', 'color', 'trim|required');
		$this->form_validation->set_rules('author_firstname', 'author_firstname', 'trim|required');
		$this->form_validation->set_rules('author_lastname', 'author_lastname', 'trim|required');
		$this->form_validation->set_rules('author_email', 'author_email', 'trim|required');


   	if($this->form_validation->run()==false){
		echo '<script language="javascript">';
		echo 'alert("All fields Are Required To Be Inputted Correctly.")';
		echo '</script>';
      		redirect('purchase_order_details', 'refresh');

    }

    else {
        $data = array(

			'serial_number'  		=> $serial_number,
			'purchase_order_no'		=> $purchase_order_no,
			'color'					=> $color,
			'manufacturer'			=> $manufacturer,
			'purchase_order_date'	=> $purchase_order_date,
			'remarks'				=> $remarks,
			'author_firstname'		=> $author_firstname,
			'author_lastname'		=> $author_lastname,
			'author_email'			=> $author_email
		);
		
		$this->db->insert('purchase_order_details', $data);// Proceed with DB insertion
		redirect('inventory_read');
}

	}
	public function manufacturer_add(){
		if($this->input->post('manufacturer_add')){
			$this->login->manufacturer_add();
			redirect('manufacturer');
		} else{
			$this->load->view('pages/manufacturer_add');
		}
	}
	public function deletepurchaseorder() {

		 $data = array(
					$row->id = $_GET['del']
				);
				 $this->db->where('id', $row->id);
       			 $this->db->delete('purchase_order');
       			 redirect('purchase_order_view');
 
	}
	public function deletemanufacturer() {

		 $data = array(
					$row->id = $_GET['del']
				);
				 $this->db->where('id', $row->id);
       			 $this->db->delete('manufacturer');
       			 redirect('manufacturer');

}
public function edit_manufacturer_details() {

		$id = $this->uri->segment(3);

		$data= array();
		$data['result'] = $this->login->getInfoById_manufacturer($id);
		$session_data = $this->session->userdata('logged_in');
			$data['type'] 	   = $session_data['type'];		
			$data['id']   	   = $session_data['id'];
			$data['firstname'] = $session_data['firstname'];
			$data['middlename']= $session_data['middlename'];
			$data['username']  = $session_data['username'];
			$data['department']= $session_data['department'];
			$data['email']     = $session_data['email'];
			$data['lastname']  = $session_data['lastname'];
			$this->load->view('edit_manufacturer_dashboard', $data);

}
public function edit_manufacturer() {

 		$id_manufacturer          = $this->input->post('id');
        $manufacturer_name        = $this->input->post('manufacturer_name');
        $contact_no_manufacturer  = $this->input->post('contact_no');
        $region_manufacturer      = $this->input->post('region');
        $province_manufacturer    = $this->input->post('province');
        $city_manufacturer     	  = $this->input->post('city');
        $address_manufacturer     = $this->input->post('address');
        $status_manufacturer      = $this->input->post('status');
		
		$this->security->xss_clean($id_manufacturer);
		$this->security->xss_clean($contact_no_manufacturer);
		$this->security->xss_clean($region_manufacturer);
		$this->security->xss_clean($province_manufacturer);
		$this->security->xss_clean($city_manufacturer);
		$this->security->xss_clean($address_manufacturer);
		$this->security->xss_clean($status_manufacturer);

		$this->form_validation->set_rules('manufacturer_name', 'manufacturer_name', 'trim|required');
		$this->form_validation->set_rules('contact_no', 'contact_no', 'trim|required');
		$this->form_validation->set_rules('region', 'region', 'trim|required');
		$this->form_validation->set_rules('province', 'province', 'trim|required');
		$this->form_validation->set_rules('city', 'city', 'trim|required');
		$this->form_validation->set_rules('address', 'address', 'trim|required');
		$this->form_validation->set_rules('status', 'status', 'trim|required');

   	if($this->form_validation->run()==false){
		echo '<script language="javascript">';
		echo 'alert("All fields Are Required To Be Inputted Correctly.")';
		echo '</script>';
		$this->load->library('user_agent');
		redirect($this->agent->referrer());
}
else{  
            $data = array(
			'id' 			 	=> $id_manufacturer,
			'manufacturer_name' => $manufacturer_name,
			'contact_no'	    => $contact_no_manufacturer,
			'region'			=> $region_manufacturer,
			'province'			=> $province_manufacturer,
			'city'   	 		=> $city_manufacturer,
			'address' 			=> $address_manufacturer,
			'status' 		 	=> $status_manufacturer,
        );
        $this->db->where('id', $id_manufacturer);
        $this->db->update('manufacturer', $data);
        echo "<script>window.close();</script>";
    }
 }
 public function edit_purchase_order_details() {

		$id = $this->uri->segment(3);
		$this->load->model('queries');

		$data= array();
		$data['result'] = $this->login->getInfoById_purchase_order($id);
		$data['manufacturer'] = $this->queries->getManufacturer();
		$session_data = $this->session->userdata('logged_in');
			$data['type'] 	   = $session_data['type'];		
			$data['id']   	   = $session_data['id'];
			$data['firstname'] = $session_data['firstname'];
			$data['middlename']= $session_data['middlename'];
			$data['username']  = $session_data['username'];
			$data['department']= $session_data['department'];
			$data['email']     = $session_data['email'];
			$data['lastname']  = $session_data['lastname'];
			$this->load->view('edit_purchase_order_dashboard', $data);

}
public function edit_purchase_order() {


        $id_purchase_order          = $this->input->post('id');
        $purchase_order_no          = $this->input->post('purchase_order_no');
        $purchase_order_date        = $this->input->post('purchase_order_date');
        $manufacturer_purchase_order= $this->input->post('manufacturer');
        $remarks_purchase_order     = $this->input->post('remarks');
        $author_email    	        = $this->input->post('author_email');
        $author_firstname           = $this->input->post('author_firstname');
        $author_lastname            = $this->input->post('author_lastname');
		
		$this->security->xss_clean($purchase_order_no);
		$this->security->xss_clean($purchase_order_date);
		$this->security->xss_clean($manufacturer_purchase_order);
		$this->security->xss_clean($remarks_purchase_order);
		$this->security->xss_clean($author_email);
		$this->security->xss_clean($author_firstname);
		$this->security->xss_clean($author_lastname);

		$this->form_validation->set_rules('purchase_order_no', 'purchase_order_no', 'trim|required');
		$this->form_validation->set_rules('purchase_order_date', 'purchase_order_date', 'trim|required');
		$this->form_validation->set_rules('manufacturer', 'manufacturer', 'trim|required');
		$this->form_validation->set_rules('remarks', 'remarks', 'trim|required');
		$this->form_validation->set_rules('author_email', 'author_email', 'trim|required');
		$this->form_validation->set_rules('author_firstname', 'author_firstname', 'trim|required');
		$this->form_validation->set_rules('author_lastname', 'author_lastname', 'trim|required');

   	if($this->form_validation->run()==false){
		echo '<script language="javascript">';
		echo 'alert("All fields Are Required To Be Inputted Correctly.")';
		echo '</script>';
		$this->load->library('user_agent');
		redirect($this->agent->referrer());
}
else{  
            $data = array(
			'id' 			 	=> $id_purchase_order,
			'purchase_order_no' => $purchase_order_no,
			'purchase_order_date'	    => $purchase_order_date,
			'manufacturer'			=> $manufacturer_purchase_order,
			'remarks'			=> $remarks_purchase_order,
			'author_email'   	 		=> $author_email,
			'author_firstname' 			=> $author_firstname,
			'author_lastname' 		 	=> $author_lastname,
        );
        $this->db->where('id', $id_purchase_order);
        $this->db->update('purchase_order', $data);
        echo "<script>window.close();</script>";
    }
 }
 public function delete2() {
		$po_no 	= $this->input->post('purchase_order_no');
		$data 	= array(
						'purchase_order_no' => $po_no,
						);
				 $this->db->where('purchase_order_no', $po_no);
       			 $this->db->delete('purchase_order', $data);
       			 redirect('purchase_order_view');
}
}
