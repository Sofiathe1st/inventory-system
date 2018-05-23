<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_basisdata');
        if ($this->form_validation->run() == false) {
            $this->load->view('login_view');
        } else {
            redirect(base_url('index.php/read'), 'refresh');
        }
    }
    
    function basisdata($password)
    {
        $username = $this->input->post('username');
        $result   = $this->login->login($username, $password);
        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = $arrayName = array(
                    'id' => $row->id,
                    'username' => $row->username,
                    'firstname' => $row->firstname,
                    'type' => $row->type,
                    'department' => $row->department,
                    'email' => $row->email,
                    'middlename' => $row->middlename,
                    'lastname' => $row->lastname,
                    'password' => $row->password
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return true;
        } else {
            $this->form_validation->set_message('basisdata', 'Invalid username or password ');
            return false;
        }
    }
    
    
    public function register()
    {
        if ($this->input->post('register')) {
            $this->login->register();
            redirect('read');
        } else {
            $this->load->view('pages/create');
        }
    }
    public function update()
    {
        
        $id = $this->uri->segment(3);
        
        $data               = array();
        $data['result']     = $this->login->getInfoById($id);
        $session_data       = $this->session->userdata('logged_in');
        $data['type']       = $session_data['type'];
        $data['id']         = $session_data['id'];
        $data['firstname']  = $session_data['firstname'];
        $data['middlename'] = $session_data['middlename'];
        $data['username']   = $session_data['username'];
        $data['department'] = $session_data['department'];
        $data['email']      = $session_data['email'];
        $data['lastname']   = $session_data['lastname'];
        
        $this->load->view('update_dashboard', $data);
        
        
    }
    public function delete()
    {
        
        $data = array(
            $row->id = $_GET['del']
        );
        $this->db->where('id', $row->id);
        $this->db->delete('user');
        redirect('read');
        
    }
    public function update_user()
    {
        $id_user             = $this->input->post('id');
        $firstname_user      = $this->input->post('firstname');
        $lastname_user       = $this->input->post('lastname');
        $middlename_user     = $this->input->post('middlename');
        $type_user           = $this->input->post('type');
        $department_user     = $this->input->post('department');
        $username_user       = $this->input->post('username');
        $password_user       = md5($this->input->post('password'));
        $email_user          = $this->input->post('email');
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
        
        if ($this->form_validation->run() == false) {
            echo '<script language="javascript">';
            echo 'alert("All fields Are Required To Be Inputted Correctly.")';
            echo '</script>';
            $this->load->library('user_agent');
            redirect($this->agent->referrer());
        } else {
            $data = array(
                'id' => $id_user,
                'firstname' => $firstname_user,
                'lastname' => $lastname_user,
                'middlename' => $middlename_user,
                'type' => $type_user,
                'department' => $department_user,
                'username' => $username_user,
                'password' => $password_user,
                'email' => $email_user,
                'dateregistered' => $dateregistered_user
            );
            $this->db->where('id', $id_user);
            $this->db->update('user', $data);
            redirect('read');
        }
    }
    
    public function purchase_order()
    {
        $this->load->library('form_validation');
        $this->load->model('queries');
        $session_data       = $this->session->userdata('logged_in');
        $data['type']       = $session_data['type'];
        $data['id']         = $session_data['id'];
        $data['firstname']  = $session_data['firstname'];
        $data['middlename'] = $session_data['middlename'];
        $data['username']   = $session_data['username'];
        $data['department'] = $session_data['department'];
        $data['email']      = $session_data['email'];
        $data['lastname']   = $session_data['lastname'];
        $purchase_order_no   = $this->input->post('purchase_order_no');
        $purchase_order_date = $this->input->post('purchase_order_date');
        $item_type          = $this->input->post('item_type');
        $supplier        = $this->input->post('supplier');
        $quantity            = $this->input->post('quantity');
        $category            = $this->input->post('category');
        $price               = $this->input->post('price');
        $remarks             = $this->input->post('remarks');
        $author_email        = $this->input->post('author_email');
        $author_firstname    = $this->input->post('author_firstname');
        $author_lastname     = $this->input->post('author_lastname');


        $this->security->xss_clean($purchase_order_no);
        $this->security->xss_clean($purchase_order_date);
        $this->security->xss_clean($item_type);
        $this->security->xss_clean($supplier);
        $this->security->xss_clean($quantity);
        $this->security->xss_clean($category);
        $this->security->xss_clean($price);
        $this->security->xss_clean($remarks);
        $this->security->xss_clean($author_email);
        $this->security->xss_clean($author_firstname);
        $this->security->xss_clean($author_lastname);
        
        /*$this->form_validation->set_rules('purchase_order_no', 'purchase_order_no', 'trim|required|is_unique[purchase_order.purchase_order_no]');*/
        $this->form_validation->set_rules('purchase_order_date', 'purchase_order_date', 'trim|required');
        $this->form_validation->set_rules('item_type', 'item_type', 'trim|required');
        $this->form_validation->set_rules('supplier', 'supplier', 'trim|required');
        $this->form_validation->set_rules('quantity', 'quantity', 'trim|required');
        $this->form_validation->set_rules('category', 'category', 'trim|required');
        $this->form_validation->set_rules('price', 'price', 'trim|required');
        $this->form_validation->set_rules('remarks', 'remarks', 'trim|required');
        $this->form_validation->set_rules('author_email', 'author_email', 'trim|required');
        $this->form_validation->set_rules('author_firstname', 'author_firstname', 'trim|required');
        $this->form_validation->set_rules('author_lastname', 'author_lastname', 'trim|required');
        
        if ($this->form_validation->run() == false) {
            echo '<script language="javascript">';
            echo 'alert("All fields Are Required To Be Inputted Correctly.")';
            echo '</script>';
            redirect('purchase_order', 'refresh');
            
        }
        if ($this->form_validation->set_rules('purchase_order_no', 'purchase_order_no', 'trim|required|is_unique[purchase_order.purchase_order_no]')->run() == false) {
            $data['message'] = 'PO # ' . '"' . $purchase_order_no . '"' . ' already exists!!';
            
            $this->load->view('purchase_order_dashboard', $data);
        }
        
        else {
            $data = array(
                'purchase_order_no' => $purchase_order_no,
                'purchase_order_date' => $purchase_order_date,
                'category' => $category,
                'supplier' => $supplier,
                'quantity' => $quantity,
                'item_type' => $item_type,
                'price' => $price,
                'remarks' => $remarks,
                'author_email' => $author_email,
                'author_firstname' => $author_firstname,
                'author_lastname' => $author_lastname
            );
            $this->db->insert('purchase_order', $data);
            echo '<script language="javascript">';
            echo 'alert("Your Form was Submitted Successfully.")';
            echo '</script>';
            redirect('purchase_order_view');
        }
    }
    public function purchase_order_details()
    {
        $this->load->library('form_validation');
        $this->load->model('queries');
        $serial_number               = $this->input->post('serial_number');
        $color                       = $this->input->post('color');
        $author_email                = $this->input->post('author_email');
        $author_firstname            = $this->input->post('author_firstname');
        $author_lastname             = $this->input->post('author_lastname');
        $data['purchase_order_no']   = $this->input->post("purchase_order_no");
        $data['purchase_order_date'] = $this->input->post("purchase_order_date");
        $data['manufacturer']        = $this->input->post("manufacturer");
        
        $data['results'] = $this->queries->getManufacturerList();
        
        
        
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
        
        
        if ($this->form_validation->run() == false) {
            echo '<script language="javascript">';
            echo 'alert("All fields Are Required To Be Inputted Correctly.")';
            echo '</script>';
            redirect('purchase_order_details', 'refresh');
            
        }
        
        else {
            $data = array(
                
                'serial_number' => $serial_number,
                'purchase_order_no' => $purchase_order_no,
                'color' => $color,
                'manufacturer' => $manufacturer,
                'purchase_order_date' => $purchase_order_date,
                'remarks' => $remarks,
                'author_firstname' => $author_firstname,
                'author_lastname' => $author_lastname,
                'author_email' => $author_email
            );
            
            $this->db->insert('purchase_order_details', $data);
            redirect('inventory_read');
        }
        
    }
    public function supplier_add()
    {
        if ($this->input->post('supplier_add')) {
            $this->login->supplier_add();
            redirect('supplier');
        } else {
            $this->load->view('pages/supplier_add');
        }
    }
    public function deletepurchaseorder()
    {
        
        $data = array(
            $row->id = $_GET['del']
        );
        $this->db->where('id', $row->id);
        $this->db->delete('purchase_order');
        redirect('purchase_order_view');
        
    }
    public function deletesupplier()
    {
        
        $data = array(
            $row->id = $_GET['del']
        );
        $this->db->where('id', $row->id);
        $this->db->delete('supplier');
        redirect('supplier');
        
    }
    public function edit_supplier_details()
    {
        
        $id = $this->uri->segment(3);
        
        $data               = array();
        $data['result']     = $this->login->getInfoById_supplier($id);
        $session_data       = $this->session->userdata('logged_in');
        $data['type']       = $session_data['type'];
        $data['id']         = $session_data['id'];
        $data['firstname']  = $session_data['firstname'];
        $data['middlename'] = $session_data['middlename'];
        $data['username']   = $session_data['username'];
        $data['department'] = $session_data['department'];
        $data['email']      = $session_data['email'];
        $data['lastname']   = $session_data['lastname'];
        $this->load->view('edit_supplier_dashboard', $data);
        
    }
    public function edit_supplier()
    {
        
        $id_supplier        = $this->input->post('id');
        $supplier_name       = $this->input->post('supplier_name');
        $contact_no_supplier = $this->input->post('contact_no');
        $region_supplier    = $this->input->post('region');
        $province_supplier  = $this->input->post('province');
        $city_supplier       = $this->input->post('city');
        $address_supplier    = $this->input->post('address');
        $status_supplier   = $this->input->post('status');
        
        $this->security->xss_clean($id_supplier);
        $this->security->xss_clean($contact_no_supplier);
        $this->security->xss_clean($region_supplier);
        $this->security->xss_clean($province_supplier);
        $this->security->xss_clean($city_supplier);
        $this->security->xss_clean($address_supplier);
        $this->security->xss_clean($status_supplier);
        
        $this->form_validation->set_rules('supplier_name', 'supplier_name', 'trim|required');
        $this->form_validation->set_rules('contact_no', 'contact_no', 'trim|required');
        $this->form_validation->set_rules('region', 'region', 'trim|required');
        $this->form_validation->set_rules('province', 'province', 'trim|required');
        $this->form_validation->set_rules('city', 'city', 'trim|required');
        $this->form_validation->set_rules('address', 'address', 'trim|required');
        $this->form_validation->set_rules('status', 'status', 'trim|required');
        
        if ($this->form_validation->run() == false) {
            echo '<script language="javascript">';
            echo 'alert("All fields Are Required To Be Inputted Correctly.")';
            echo '</script>';
            $this->load->library('user_agent');
            redirect($this->agent->referrer());
        } else {
            $data = array(
                'id' => $id_supplier,
                'supplier_name' => $supplier_name,
                'contact_no' => $contact_no_supplier,
                'region' => $region_supplier,
                'province' => $province_supplier,
                'city' => $city_supplier,
                'address' => $address_supplier,
                'status' => $status_supplier
            );
            $this->db->where('id', $id_supplier);
            $this->db->update('supplier', $data);
            redirect('supplier', 'refresh');
        }
    }
    public function edit_purchase_order_details()
    {
        
        $id = $this->uri->segment(3);
        $this->load->model('queries');
        
        $data                 = array();
        $data['result']       = $this->login->getInfoById_purchase_order($id);
        $data['supplier'] = $this->queries->getsupplier();
        $session_data         = $this->session->userdata('logged_in');
        $data['type']         = $session_data['type'];
        $data['id']           = $session_data['id'];
        $data['firstname']    = $session_data['firstname'];
        $data['middlename']   = $session_data['middlename'];
        $data['username']     = $session_data['username'];
        $data['department']   = $session_data['department'];
        $data['email']        = $session_data['email'];
        $data['lastname']     = $session_data['lastname'];
        $this->load->view('edit_purchase_order_dashboard', $data);
        
    }
    public function edit_purchase_order()
    {
        
        
        $id_purchase_order           = $this->input->post('id');
        $purchase_order_no           = $this->input->post('purchase_order_no');
        $purchase_order_date         = $this->input->post('purchase_order_date');
        $category                    = $this->input->post('category');
        $supplier                    = $this->input->post('supplier');
        $quantity                    = $this->input->post('quantity');
        $item_type                   = $this->input->post('item_type');
        $price                       = $this->input->post('price');
        $remarks                     = $this->input->post('remarks');
        $author_email                = $this->input->post('author_email');
        $author_firstname            = $this->input->post('author_firstname');
        $author_lastname             = $this->input->post('author_lastname');

        $this->security->xss_clean($purchase_order_no);
        $this->security->xss_clean($purchase_order_date);
        $this->security->xss_clean($category);
        $this->security->xss_clean($supplier);
        $this->security->xss_clean($quantity);
        $this->security->xss_clean($item_type);
        $this->security->xss_clean($price);
        $this->security->xss_clean($remarks_);
        $this->security->xss_clean($author_email);
        $this->security->xss_clean($author_firstname);
          
        
        $this->form_validation->set_rules('purchase_order_no', 'purchase_order_no', 'trim|required');
        $this->form_validation->set_rules('purchase_order_date', 'purchase_order_date', 'trim|required');
        $this->form_validation->set_rules('category', 'category', 'trim|required');
        $this->form_validation->set_rules('supplier', 'supplier', 'trim|required');
        $this->form_validation->set_rules('quantity', 'quantity', 'trim|required');
        $this->form_validation->set_rules('item_type', 'item_type', 'trim|required');
        $this->form_validation->set_rules('price', 'price', 'trim|required');
        $this->form_validation->set_rules('remarks', 'remarks', 'trim|required');
        $this->form_validation->set_rules('author_email', 'author_email', 'trim|required');
        $this->form_validation->set_rules('author_firstname', 'author_firstname', 'trim|required');
        $this->form_validation->set_rules('author_lastname', 'author_lastname', 'trim|required');   

        
        if ($this->form_validation->run() == false) {
            echo '<script language="javascript">';
            echo 'alert("All fields Are Required To Be Inputted Correctly.")';
            echo '</script>';
            $this->load->library('user_agent');
            redirect($this->agent->referrer());
        } else {
            $data = array(
                'id' => $id_purchase_order,
                'purchase_order_no' => $purchase_order_no,
                'purchase_order_date' => $purchase_order_date,
                'category' => $category,
                'supplier' => $supplier,
                'quantity' => $quantity,
                'item_type' => $item_type,
                'price' => $price,
                'remarks' => $remarks,
                'author_email' => $author_email,
                'author_firstname' => $author_firstname,
                'author_lastname' => $author_lastname
            );
            $this->db->where('id', $id_purchase_order);
            $this->db->update('purchase_order', $data);
            redirect('purchase_order_view', 'refresh');
        }
    }
    public function purchase_order_search()
    {
        $this->load->model('queries');
        $session_data       = $this->session->userdata('logged_in');
        $data['type']       = $session_data['type'];
        $data['id']         = $session_data['id'];
        $data['firstname']  = $session_data['firstname'];
        $data['middlename'] = $session_data['middlename'];
        $data['username']   = $session_data['username'];
        $data['department'] = $session_data['department'];
        $data['email']      = $session_data['email'];
        $data['lastname']   = $session_data['lastname'];
        
        $po_no           = $this->input->post('purchase_order_no');
        $data['results'] = $this->queries->search($po_no);
        $data['quantity1'] = $this->queries->quantity1($po_no);
        $data['quantity2'] = $this->queries->quantity2($po_no);
        
        if ($data['results'] == FALSE) {
            $data['message'] = 'PO # ' . '"' . $po_no . '"' . ' not found.';
            
            $this->load->view('purchase_order_search_dashboard', $data);
            
        }
        elseif ($data['quantity1'] == $data['quantity2']) {
             $data['message'] = 'PO # ' . '"' . $po_no . '"' . ' Already Completed.';
            
            $this->load->view('purchase_order_search_dashboard', $data);

        } else {
            
            echo '<script language="javascript">';
            echo 'alert("PO # found.")';
            echo '</script>';
            $this->load->view('purchase_order_search_result_dashboard', $data);
        }
    }
    public function purchase_order_add_info()
    {
        $purchase_order_no   = $this->input->post('purchase_order_no');
        $purchase_order_date = $this->input->post('purchase_order_date');
        $category            = $this->input->post('category');
        $serial_number       = $this->input->post('serial_number');
        $supplier            = $this->input->post('supplier');
        $name_sh             = $this->input->post('name_sh');
        $manufacturer        = $this->input->post('manufacturer');
        $quantity            = $this->input->post('quantity');
        $assigned_to         = $this->input->post('assigned_to');
        $item_type           = $this->input->post('item_type');
        $specifications      = $this->input->post('specifications');
        $price               = $this->input->post('price');
        $status              = $this->input->post('status');
        $color               = $this->input->post('color');
        $remarks             = $this->input->post('remarks');
        $author_email        = $this->input->post('author_email');
        $author_firstname    = $this->input->post('author_firstname');
        $author_lastname     = $this->input->post('author_lastname');
        $quantity2           = $this->input->post('quantity2');

        $this->security->xss_clean($purchase_order_no);
        $this->security->xss_clean($purchase_order_date);
        $this->security->xss_clean($category);
        $this->security->xss_clean($serial_number);
        $this->security->xss_clean($supplier);
        $this->security->xss_clean($name_sh);
        $this->security->xss_clean($manufacturer);
        $this->security->xss_clean($quantity);
        $this->security->xss_clean($assigned_to);
        $this->security->xss_clean($item_type);
        $this->security->xss_clean($specifications);
        $this->security->xss_clean($price);
        $this->security->xss_clean($status);
        $this->security->xss_clean($color);
        $this->security->xss_clean($remarks);
        $this->security->xss_clean($author_email);
        $this->security->xss_clean($author_firstname);
        $this->security->xss_clean($author_lastname);
        
        $this->form_validation->set_rules('purchase_order_no[]', 'purchase_order_no', 'trim|required');
        $this->form_validation->set_rules('purchase_order_date[]', 'purchase_order_date', 'trim|required');
        $this->form_validation->set_rules('category[]', 'category', 'trim|required');
        $this->form_validation->set_rules('serial_number[]', 'serial_number', 'trim|required');
        $this->form_validation->set_rules('supplier[]', 'supplier', 'trim|required');
        $this->form_validation->set_rules('name_sh[]', 'name_sh', 'trim|required');
        $this->form_validation->set_rules('manufacturer[]', 'manufacturer', 'trim|required');
        $this->form_validation->set_rules('quantity[]', 'quantity', 'trim|required');
        $this->form_validation->set_rules('assigned_to[]', 'assigned_to', 'trim|required');
        $this->form_validation->set_rules('item_type[]', 'item_type', 'trim|required');
        $this->form_validation->set_rules('specifications[]', 'specifications', 'trim|required');
        $this->form_validation->set_rules('price[]', 'price', 'trim|required');
        $this->form_validation->set_rules('status[]', 'status', 'trim|required');
        $this->form_validation->set_rules('color[]', 'color', 'trim|required');
        $this->form_validation->set_rules('remarks[]', 'remarks', 'trim|required');
        $this->form_validation->set_rules('author_email[]', 'author_email', 'trim|required');
        $this->form_validation->set_rules('author_firstname[]', 'author_firstname', 'trim|required');
        $this->form_validation->set_rules('author_lastname[]', 'author_lastname', 'trim|required');
        
        if ($this->form_validation->run() == false) {
            echo '<script language="javascript">';
            echo 'alert("All fields Are Required To Be Inputted Correctly.")';
            echo '</script>';
            redirect('purchase_order_search');
        } else {
            
            for ($i = 0; $i < $quantity2; $i++) {
                $data[$i] = array(
                    'id' => 'id',
                    'purchase_order_no' => $purchase_order_no[$i],
                    'purchase_order_date' => $purchase_order_date[$i],
                    'category' => $category[$i],
                    'supplier' => $supplier[$i],
                    'serial_number' => $serial_number[$i],
                    'name_sh' => $name_sh[$i],
                    'manufacturer' => $manufacturer[$i],
                    'quantity' => $quantity[$i],
                    'assigned_to' => $assigned_to[$i],
                    'item_type' => $item_type[$i],
                    'specifications' => $specifications[$i],
                    'price' => $price[$i],
                    'status' => $status[$i],
                    'color' => $color[$i],
                    'remarks' => $remarks[$i],
                    'author_email' => $author_email[$i],
                    'author_firstname' => $author_firstname[$i],
                    'author_lastname' => $author_lastname[$i]
                );
            }
            $this->db->insert_batch('purchase_order_details', $data);
            redirect('inventory_read');

        }
    }
    public function inventory_search() {
        $this->load->model('queries');
        $search_input = $this->input->post('search_input');

        if(isset($search_input) and !empty($search_input)){
            $data['inventory_read'] = $this->queries->inventory_search($search_input);
            $session_data         = $this->session->userdata('logged_in');
            $data['type']         = $session_data['type'];
            $data['id']           = $session_data['id'];
            $data['firstname']    = $session_data['firstname'];
            $data['middlename']   = $session_data['middlename'];
            $data['username']     = $session_data['username'];
            $data['department']   = $session_data['department'];
            $data['email']        = $session_data['email'];
            $data['lastname']     = $session_data['lastname'];
            $data['links'] = '';
            $this->load->view('inventory_read_dashboard', $data);
        }
        else{
            redirect('inventory_read', 'refresh');
        }
    }
}
