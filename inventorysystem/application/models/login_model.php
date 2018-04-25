<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{
    
    function login($username_user, $password_user)
    {
        $this->db->select('id,firstname,lastname,middlename,type,department,username,password,email,dateregistered');
        $this->db->from('user');
        $this->db->where('username', $username_user);
        $this->db->where('password', md5($password_user));
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
    
    public function register()
    {
        $this->load->library('form_validation');
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
        
        $this->form_validation->set_rules('firstname', 'Firstname', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
        $this->form_validation->set_rules('middlename', 'Middlename', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[user.email]');
        
        if ($this->form_validation->run() == false) {
            echo '<script language="javascript">';
            echo 'alert("All fields Are Required To Be Inputted Correctly.")';
            echo '</script>';
            redirect('create', 'refresh');
            
        }
        
        else {
            $data = array(
                'id' => '',
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
            $this->db->insert('user', $data);
        }
    }
    public function update($id, $firstname, $astname, $middlename, $type, $department, $username, $password, $email, $dateregistered)
    {
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
        
        $this->form_validation->set_rules('firstname', 'Firstname', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
        $this->form_validation->set_rules('middlename', 'Middlename', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[user.email]');
        
        if ($this->form_validation->run() == false) {
            echo '<script language="javascript">';
            echo 'alert("All fields Are Required To Be Inputted Correctly.")';
            echo '</script>';
            redirect('create', 'refresh');
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
            return $this->db->update('user', $data);
        }
    }
    public function deleteuser($id)
    {
        $this->load->database();
        $this->db->where('id', $iduser);
        $this->db->delete();
        return true;
    }
    
    public function getInfoById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('user');
        return $query->result_array();
    }
    
    
    public function manufacturer_add()
    {
        $this->load->library('form_validation');
        $manufacturer_name = $this->input->post('manufacturer_name');
        $contact_no        = $this->input->post('contact_no');
        $region            = $this->input->post('region');
        $province          = $this->input->post('province');
        $city              = $this->input->post('city');
        $address           = $this->input->post('address');
        $status            = ($this->input->post('status'));
        
        $this->security->xss_clean($manufacturer_name);
        $this->security->xss_clean($contact_no);
        $this->security->xss_clean($region);
        $this->security->xss_clean($province);
        $this->security->xss_clean($city);
        $this->security->xss_clean($address);
        $this->security->xss_clean($status);
        
        $this->form_validation->set_rules('manufacturer_name', 'manufacturer_name', 'trim|required|is_unique[manufacturer.manufacturer_name]');
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
            redirect('manufacturer_add', 'refresh');
            
        }
        if ($this->form_validation->run() == true) {
            echo '<script language="javascript">';
            echo 'alert("success.")';
            echo '</script>';
            $data = array(
                'id' => '',
                'manufacturer_name' => $manufacturer_name,
                'contact_no' => $contact_no,
                'region' => $region,
                'province' => $province,
                'city' => $city,
                'address' => $address,
                'status' => $status
            );
            $this->db->insert('manufacturer', $data);
            redirect('manufacturer', 'refresh');
        }
        
        else {
            redirect('login', 'refresh');
        }
    }
    public function getInfoById_manufacturer($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('manufacturer');
        return $query->result_array();
    }
    public function getInfoById_purchase_order($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('purchase_order');
        return $query->result_array();
    }
    public function inventory_hardware_add(){
    $this->load->library('form_validation');
        $asset_type = $this->input->post('asset_type');
        $asset_num        = $this->input->post('asset_num');
        $type_item            = $this->input->post('type_item');
        $brand          = $this->input->post('brand');
        $assigned_to              = $this->input->post('assigned_to');
        $specifications           = $this->input->post('specifications');
        $date_purchased            = $this->input->post('date_purchased');
        $amount = $this->input->post('amount');
        $status = $this->input->post('status');
        $comment = $this->input->post('comment');
        $author_email = $this->input->post('author_email');
        $author_firstname = $this->input->post('author_firstname');
        $author_lastname = $this->input->post('author_lastname');

        $this->security->xss_clean($asset_type);
        $this->security->xss_clean($asset_num);
        $this->security->xss_clean($type_item);
        $this->security->xss_clean($brand);
        $this->security->xss_clean($assigned_to);
        $this->security->xss_clean($specifications);
        $this->security->xss_clean($date_purchased);
        $this->security->xss_clean($amount);
        $this->security->xss_clean($status);
        $this->security->xss_clean($comment);
        $this->security->xss_clean($author_email);
        $this->security->xss_clean($author_firstname);
        $this->security->xss_clean($author_lastname);

        
        $this->form_validation->set_rules('asset_type', 'asset_type', 'trim|required');
        $this->form_validation->set_rules('asset_num', 'asset_num', 'trim|required');
        $this->form_validation->set_rules('type_item', 'type_item', 'trim|required');
        $this->form_validation->set_rules('brand', 'brand', 'trim|required');
        $this->form_validation->set_rules('assigned_to', 'assigned_to', 'trim|required');
        $this->form_validation->set_rules('specifications', 'specifications', 'trim|required');
        $this->form_validation->set_rules('date_purchased', 'date_purchased', 'trim|required');
        $this->form_validation->set_rules('amount', 'amount', 'trim|required');
        $this->form_validation->set_rules('status', 'status', 'trim|required');
        $this->form_validation->set_rules('comment', 'comment', 'trim|required');
        $this->form_validation->set_rules('author_email', 'author_email', 'trim|required');
        $this->form_validation->set_rules('author_firstname', 'author_firstname', 'trim|required');
        $this->form_validation->set_rules('author_lastname', 'author_lastname', 'trim|required');

        if ($this->form_validation->run() == false) {
            echo '<script language="javascript">';
            echo 'alert("All fields Are Required To Be Inputted Correctly.")';
            echo '</script>';
            redirect('inventory_hardware_add', 'refresh');
            
        }
        if ($this->form_validation->run() == true) {
            echo '<script language="javascript">';
            echo 'alert("success.")';
            echo '</script>';
            $data = array(
                'id' => '',
                'asset_type' => $asset_type,
                'asset_num' => $asset_num,
                'type_item' => $type_item,
                'brand' => $brand,
                'assigned_to' => $assigned_to,
                'specifications' => $specifications,
                'date_purchased' => $date_purchased,
                'amount' => $amount,
                'status' => $status,
                'comment' => $comment,
                'author_email' => $author_email,
                'author_firstname' => $author_firstname,
                'author_lastname' => $author_lastname
            );
            $this->db->insert('inventory_hardware', $data);
            redirect('inventory_hardware', 'refresh');
        }
        
        else {
            redirect('login', 'refresh');
        }
    }
    public function getInfoById_inventory_hardware_details($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('inventory_hardware');
        return $query->result_array();
    }
    public function edit_inventory_hardware_details()
    {
        $this->load->library('form_validation');
        $this->load->model('queries');
        $id_inv_h              = $this->input->post('id');
        $asset_type             = $this->input->post('asset_type');
        $asset_num              = $this->input->post('asset_num');
        $type                   = $this->input->post('type_item');
        $brand                  = $this->input->post('brand');
        $assigned_to            = $this->input->post('assigned_to');
        $specifications         = $this->input->post('specifications');
        $date_purchased         = $this->input->post('date_purchased');
        $amount                 = $this->input->post('amount');
        $status                 = $this->input->post('status');
        $comment                = $this->input->post('comment');
        $author_email           = $this->input->post('author_email');
        $author_firstname       = $this->input->post('author_firstname');
        $author_lastname        = $this->input->post('author_lastname');


        /*echo "<pre>";
        echo var_dump($id_inv_hs);
        echo var_dump($asset_type);
        echo var_dump($asset_num);
        echo var_dump($type);
        echo var_dump($brand);
        echo var_dump($assigned_to);
        echo var_dump($specifications);
        echo var_dump($date_purchased);
        echo var_dump($amount);
        echo var_dump($status);
        echo var_dump($comment);
        echo var_dump($author_email);
        echo var_dump($author_firstname);
        echo var_dump($author_lastname);

        echo "<pre>";
        exit();*/
        
        
        $this->security->xss_clean($asset_type);
        $this->security->xss_clean($asset_num);
        $this->security->xss_clean($type);
        $this->security->xss_clean($brand);
        $this->security->xss_clean($assigned_to);
        $this->security->xss_clean($specifications);
        $this->security->xss_clean($date_purchased);
        $this->security->xss_clean($amount);
        $this->security->xss_clean($status);
        $this->security->xss_clean($comment);
        $this->security->xss_clean($author_email);
        $this->security->xss_clean($author_firstname);
        $this->security->xss_clean($author_lastname);

        
        $this->form_validation->set_rules('asset_type', 'asset_type', 'trim|required');
        $this->form_validation->set_rules('asset_num', 'asset_num', 'trim|required');
        $this->form_validation->set_rules('type_item', 'type_item', 'trim|required');
        $this->form_validation->set_rules('brand', 'brand', 'trim|required');
        $this->form_validation->set_rules('assigned_to', 'assigned_to', 'trim|required');
        $this->form_validation->set_rules('specifications', 'specifications', 'trim|required');
        $this->form_validation->set_rules('date_purchased', 'date_purchased', 'trim|required');
        $this->form_validation->set_rules('amount', 'amount', 'trim|required');
        $this->form_validation->set_rules('status', 'status', 'trim|required');
        $this->form_validation->set_rules('comment', 'comment', 'trim|required');
        $this->form_validation->set_rules('author_email', 'author_email', 'trim|required');
        $this->form_validation->set_rules('author_firstname', 'author_firstname', 'trim|required');
        $this->form_validation->set_rules('author_lastname', 'author_lastname', 'trim|required');

        if ($this->form_validation->run() == false) {
            echo '<script language="javascript">';
            echo 'alert("All fields Are Required To Be Inputted Correctly.")';
            echo '</script>';
            $this->load->library('user_agent');
            redirect($this->agent->referrer());
            /*redirect('edit_inventory_hardware', 'refresh');*/
            
        }
        
        if ($this->form_validation->run() == true) {
            echo '<script language="javascript">';
            echo 'alert("success.")';
            echo '</script>';
            $data = array(
                
                'asset_type' => $asset_type,
                'asset_num' => $asset_num,
                'type_item' => $type,
                'brand' => $brand,
                'assigned_to' => $assigned_to,
                'specifications' => $specifications,
                'date_purchased' => $date_purchased,
                'amount' => $amount,
                'status' => $status,
                'comment' => $comment,
                'author_email' => $author_email,
                'author_firstname' => $author_firstname,
                'author_lastname' => $author_lastname
            );
            $this->db->where('id', $id_inv_h);
            $this->db->update('inventory_hardware', $data);
            redirect('inventory_hardware', 'refresh');
        }
        
        else {
            redirect('login', 'refresh');
        }
    }
    public function inventory_software_add(){
    $this->load->library('form_validation');
        $asset_type = $this->input->post('asset_type');
        $software_name        = $this->input->post('software_name');
        $software_info            = $this->input->post('software_info');
        $assigned_to          = $this->input->post('assigned_to');
        $quantity              = $this->input->post('quantity');
        $date_purchased            = $this->input->post('date_purchased');
        $amount = $this->input->post('amount');
        $status = $this->input->post('status');
        $comments = $this->input->post('comments');
        $author_email = $this->input->post('author_email');
        $author_firstname = $this->input->post('author_firstname');
        $author_lastname = $this->input->post('author_lastname');

        $this->security->xss_clean($asset_type);
        $this->security->xss_clean($software_name);
        $this->security->xss_clean($software_info);
        $this->security->xss_clean($assigned_to);
        $this->security->xss_clean($quantity);
        $this->security->xss_clean($date_purchased);
        $this->security->xss_clean($amount);
        $this->security->xss_clean($status);
        $this->security->xss_clean($comments);
        $this->security->xss_clean($author_email);
        $this->security->xss_clean($author_firstname);
        $this->security->xss_clean($author_lastname);

        
        $this->form_validation->set_rules('asset_type', 'asset_type', 'trim|required');
        $this->form_validation->set_rules('software_name', 'software_name', 'trim|required');
        $this->form_validation->set_rules('software_info', 'software_info', 'trim|required');
        $this->form_validation->set_rules('assigned_to', 'assigned_to', 'trim|required');
        $this->form_validation->set_rules('quantity', 'quantity', 'trim|required');
        $this->form_validation->set_rules('date_purchased', 'date_purchased', 'trim|required');
        $this->form_validation->set_rules('amount', 'amount', 'trim|required');
        $this->form_validation->set_rules('status', 'status', 'trim|required');
        $this->form_validation->set_rules('comments', 'comments', 'trim|required');
        $this->form_validation->set_rules('author_email', 'author_email', 'trim|required');
        $this->form_validation->set_rules('author_firstname', 'author_firstname', 'trim|required');
        $this->form_validation->set_rules('author_lastname', 'author_lastname', 'trim|required');

        if ($this->form_validation->run() == false) {
            echo '<script language="javascript">';
            echo 'alert("All fields Are Required To Be Inputted Correctly.")';
            echo '</script>';
            redirect('inventory_hardware_add', 'refresh');
            
        }
        if ($this->form_validation->run() == true) {
            echo '<script language="javascript">';
            echo 'alert("success.")';
            echo '</script>';
            $data = array(
                'id' => '',
                'asset_type' => $asset_type,
                'software_name' => $software_name,
                'software_info' => $software_info,
                'assigned_to' => $assigned_to,
                'quantity' => $quantity,
                'date_purchased' => $date_purchased,
                'amount' => $amount,
                'status' => $status,
                'comments' => $comments,
                'author_email' => $author_email,
                'author_firstname' => $author_firstname,
                'author_lastname' => $author_lastname
            );
            $this->db->insert('inventory_software', $data);
            redirect('inventory_software', 'refresh');
        }
        
        else {
            redirect('login', 'refresh');
        }
    }
    public function edit_inventory_software_details()
    {
        $this->load->library('form_validation');
        $this->load->model('queries');
        $id_inv_s              = $this->input->post('id');
        $asset_type = $this->input->post('asset_type');
        $software_name        = $this->input->post('software_name');
        $software_info            = $this->input->post('software_info');
        $assigned_to          = $this->input->post('assigned_to');
        $quantity              = $this->input->post('quantity');
        $date_purchased            = $this->input->post('date_purchased');
        $amount = $this->input->post('amount');
        $status = $this->input->post('status');
        $comments = $this->input->post('comments');
        $author_email = $this->input->post('author_email');
        $author_firstname = $this->input->post('author_firstname');
        $author_lastname = $this->input->post('author_lastname');


        /*echo "<pre>";
        echo var_dump($id_inv_s);
        echo var_dump($asset_type);
        echo var_dump($asset_num);
        echo var_dump($type);
        echo var_dump($brand);
        echo var_dump($assigned_to);
        echo var_dump($specifications);
        echo var_dump($date_purchased);
        echo var_dump($amount);
        echo var_dump($status);
        echo var_dump($comment);
        echo var_dump($author_email);
        echo var_dump($author_firstname);
        echo var_dump($author_lastname);

        echo "<pre>";
        exit();*/
        
        
        $this->security->xss_clean($asset_type);
        $this->security->xss_clean($software_name);
        $this->security->xss_clean($software_info);
        $this->security->xss_clean($assigned_to);
        $this->security->xss_clean($quantity);
        $this->security->xss_clean($date_purchased);
        $this->security->xss_clean($amount);
        $this->security->xss_clean($status);
        $this->security->xss_clean($comments);
        $this->security->xss_clean($author_email);
        $this->security->xss_clean($author_firstname);
        $this->security->xss_clean($author_lastname);

        
        $this->form_validation->set_rules('asset_type', 'asset_type', 'trim|required');
        $this->form_validation->set_rules('software_name', 'software_name', 'trim|required');
        $this->form_validation->set_rules('software_info', 'software_info', 'trim|required');
        $this->form_validation->set_rules('assigned_to', 'assigned_to', 'trim|required');
        $this->form_validation->set_rules('quantity', 'quantity', 'trim|required');
        $this->form_validation->set_rules('date_purchased', 'date_purchased', 'trim|required');
        $this->form_validation->set_rules('amount', 'amount', 'trim|required');
        $this->form_validation->set_rules('status', 'status', 'trim|required');
        $this->form_validation->set_rules('comments', 'comments', 'trim|required');
        $this->form_validation->set_rules('author_email', 'author_email', 'trim|required');
        $this->form_validation->set_rules('author_firstname', 'author_firstname', 'trim|required');
        $this->form_validation->set_rules('author_lastname', 'author_lastname', 'trim|required');

        if ($this->form_validation->run() == false) {
            echo '<script language="javascript">';
            echo 'alert("All fields Are Required To Be Inputted Correctly.")';
            echo '</script>';
            $this->load->library('user_agent');
            redirect($this->agent->referrer());
            /*redirect('edit_inventory_hardware', 'refresh');*/
            
        }
        
        if ($this->form_validation->run() == true) {
            echo '<script language="javascript">';
            echo 'alert("success.")';
            echo '</script>';
            $data = array(
                'asset_type' => $asset_type,
                'software_name' => $software_name,
                'software_info' => $software_info,
                'assigned_to' => $assigned_to,
                'quantity' => $quantity,
                'date_purchased' => $date_purchased,
                'amount' => $amount,
                'status' => $status,
                'comments' => $comments,
                'author_email' => $author_email,
                'author_firstname' => $author_firstname,
                'author_lastname' => $author_lastname
            );
            $this->db->where('id', $id_inv_s);
            $this->db->update('inventory_software', $data);
            redirect('inventory_software', 'refresh');
        }
        
        else {
            redirect('login', 'refresh');
        }
    }
    public function getInfoById_inventory_software_details($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('inventory_software');
        return $query->result_array();
    }
}