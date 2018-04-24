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
    public function getInventory_HS()
    {
        
        $query = $this->db->get('inventory_hs');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        
    }
    
}
?>