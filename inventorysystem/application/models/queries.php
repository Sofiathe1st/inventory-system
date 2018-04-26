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
    public function getManufacturer()
    {
        
        $query = $this->db->get('manufacturer');
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
    
    public function getManufacturerlist()
    {
        $q = $this->db->get('manufacturer');
        
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
    public function getManufacturerdetails()
    {
        $q = $this->db->get('manufacturer');
        
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
   public function search_software_name($software_name) {
        $this->db->select('*');
        $this->db->from('inventory_software');
        $this->db->where('software_name', $software_name);
        $query = $this->db->get();
            if ($query->num_rows() > 0) {
                return $query->result();
                # code...
            }else{
                return $query->result();
            }
        
    }
    public function search_asset_num($asset_num) {
        $this->db->select('*');
        $this->db->from('inventory_hardware');
        $this->db->where('asset_num', $asset_num);
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