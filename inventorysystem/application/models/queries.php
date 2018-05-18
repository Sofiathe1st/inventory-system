<?php

class queries extends CI_Model
{
    
    public function getPosts()
    {
        $q = $this->db->get('user');
        
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }
    public function getInv()
    {
        $q = $this->db->get('purchase_order_details');
        
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }
    public function getPO()
    {
        $q = $this->db->get('purchase_order');
        
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }
    public function getSupplier()
    {
        
        $query = $this->db->get('supplier');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        
    }
    public function getLastInsertedPurchaseOrderID()
    {
        $this->db->select_max('id');
        $query = $query = $this->db->get('purchase_order');
        return $query->result_array();
    }
    
    public function getSupplierlist()
    {
        $q = $this->db->get('supplier');
        
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }
    public function getPurchaseOrderList()
    {
        $q = $this->db->get('purchase_order');
        
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }
    public function getSupplierdetails()
    {
        $q = $this->db->get('supplier');
        
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }
    public function getPurchaseOrderdetails()
    {
        $q = $this->db->get('purchase_order');
        
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }
    public function search($po_no)
    {
        $this->db->where('purchase_order_no', $po_no);
        $query = $this->db->get('purchase_order');
        return $query->result();
    }
    public function getInventory_hardware()
    {
        
        $query = $this->db->get('inventory_hardware');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        
    }
    public function getInventory_software()
    {
        
        $query = $this->db->get('inventory_software');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }

   }
   public function count_inventory_hardware() {
    return $this->db->count_all('inventory_hardware');
   }
   public function fetch_inventory_hardware($limit,$offset) {
    $this->db->limit($limit,$offset);
    $query = $this->db->get('inventory_hardware');
    if($query->num_rows() > 0){
        return $query->result();
    }else{
        return $query->result();
    }
   }
   public function count_inventory_software() {
    return $this->db->count_all('inventory_software');
   }
   public function fetch_inventory_software($limit,$offset) {
    $this->db->limit($limit,$offset);
    $query = $this->db->get('inventory_software');
    if($query->num_rows() > 0){
        return $query->result();
    }else{
        return $query->result();
    }
   }
   public function software_search($search_input) {
        $this->db->select('*');
        $this->db->from('inventory_software');
        $this->db->where('asset_type', $search_input);
        $this->db->or_where('software_name', $search_input);
        $this->db->or_where('software_info', $search_input);
        $this->db->or_where('assigned_to', $search_input);
        $this->db->or_where('date_purchased', $search_input);
        $this->db->or_where('amount', $search_input);
        $this->db->or_where('status', $search_input);


        $query = $this->db->get();
            if ($query->num_rows() > 0) {
                return $query->result();
                # code...
            }else{
                return $query->result();
            }
        
    }
    public function hardware_search($search_input) {
        $this->db->select('*');
        $this->db->from('inventory_hardware');
        $this->db->where('asset_num', $search_input);
        $this->db->or_where('asset_type', $search_input);
        $this->db->or_where('type_item', $search_input);
        $this->db->or_where('brand', $search_input);
        $this->db->or_where('assigned_to', $search_input);
        $this->db->or_where('specifications', $search_input);
        $this->db->or_where('date_purchased', $search_input);
        $this->db->or_where('amount', $search_input);
        $this->db->or_where('status', $search_input);

        $query = $this->db->get();
            if ($query->num_rows() > 0) {
                return $query->result();
                # code...
            }else{
                return $query->result();
            }
        
    }
    public function fetch_inventory_read($limit,$offset) {
    $this->db->limit($limit,$offset);
    $query = $this->db->get('purchase_order_details');
    if($query->num_rows() > 0){
        return $query->result();
    }else{
        return $query->result();
    }
   }
   public function count_inventory_read() {
    return $this->db->count_all('purchase_order_details');
   }
   public function inventory_search($search_input) {
        $this->db->select('*');
        $this->db->from('purchase_order_details');
        $this->db->where('purchase_order_no', $search_input);
        $this->db->or_where('purchase_order_date', $search_input);
        $this->db->or_where('category', $search_input);
        $this->db->or_where('serial_number', $search_input);
        $this->db->or_where('name_sh', $search_input);
        $this->db->or_where('manufacturer', $search_input);
        $this->db->or_where('quantity', $search_input);
        $this->db->or_where('assigned_to', $search_input);
        $this->db->or_where('item_type', $search_input);
        $this->db->or_where('supplier', $search_input);
        $this->db->or_where('specifications', $search_input);
        $this->db->or_where('price', $search_input);
        $this->db->or_where('supplier', $search_input);
        $this->db->or_where('status', $search_input);
        $this->db->or_where('color', $search_input);

        $query = $this->db->get();
            if ($query->num_rows() > 0) {
                return $query->result();
                # code...
            }else{
                return $query->result();
            }
        
    }
}
?>