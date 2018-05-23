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
    
    public function fetch_inventory_read($limit, $offset)
    {
        $this->db->limit($limit, $offset);
        $query = $this->db->get('purchase_order_details');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return $query->result();
        }
    }
    public function count_inventory_read()
    {
        return $this->db->count_all('purchase_order_details');
    }
    public function inventory_search($search_input)
    {
        $this->db->select('*');
        $this->db->from('purchase_order_details');
        $this->db->where('purchase_order_no', $search_input);
        $this->db->or_where('purchase_order_date', $search_input);
        $this->db->or_where('category', $search_input);
        $this->db->or_where('serial_number', $search_input);
        $this->db->or_where('name_sh', $search_input);
        $this->db->or_where('manufacturer', $search_input);
        /*$this->db->or_where('quantity', $search_input);*/
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
        } else {
            return $query->result();
        }
        
    }
    public function quantity1($po_no)
    {
        $this->db->select('quantity');
        $this->db->from('purchase_order');
        $this->db->where('purchase_order_no', $po_no);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            $row = $query->row_array();
            return $row;
        }
        
        
    }
    public function quantity2($po_no)
    {
        $this->db->select_sum('quantity');
        $this->db->from('purchase_order_details');
        $this->db->where('purchase_order_no', $po_no);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            $row = $query->row_array();
            return $row;
        }
    }
    
}
?>