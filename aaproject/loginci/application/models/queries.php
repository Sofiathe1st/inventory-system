<?php 

class queries extends CI_Model{

	public function getPosts(){
		// $query = $this->db->get('user');
		// if($query->num_rows() > 0){
		// 	return $query->result();
		// }

		// s
		$q = $this->db->get('user');
	    
	    if($q->num_rows() > 0)
	    {
	      foreach ($q->result() as $row)
	      {
	        $data[] = $row;
	      }
	      return $data;
	    }			
	}
	public function getInv(){
		$q = $this->db->get('purchase_order_details');
	    
	    if($q->num_rows() > 0)
	    {
	      foreach ($q->result() as $row)
	      {
	        $data[] = $row;
	      }
	      return $data;
	}
	}
	public function getPO(){
		$q = $this->db->get('purchase_order');

		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $row)
			{
				$data[] = $row;
			}
			return $data;
		}
	}
    public function getManufacturer()
    {
        /*
        $query = $this->db->get('location');

        foreach ($query->result() as $row)
        {
            echo $row->description;
        }*/

        $query = $this->db->get('manufacturer');
        if($query->num_rows() >0)
        {
        	foreach ($query->result() as $row)
        	{
        		$data[] = $row;
        	}
        	return $data;
        }

    }
    public function getLastInsertedPurchaseOrderID(){
		$this->db->select_max('id');
		$query = $query = $this->db->get('purchase_order');
		return $query->result_array();
	}

	public function getManufacturerlist(){
		// $query = $this->db->get('user');
		// if($query->num_rows() > 0){
		// 	return $query->result();
		// }

		// s
		$q = $this->db->get('manufacturer');
	    
	    if($q->num_rows() > 0)
	    {
	      foreach ($q->result() as $row)
	      {
	        $data[] = $row;
	      }
	      return $data;
	    }			
	}
	public function getPurchaseOrderList(){
		$q = $this->db->get('purchase_order');
	    
	    if($q->num_rows() > 0)
	    {
	      foreach ($q->result() as $row)
	      {
	        $data[] = $row;
	      }
	      return $data;
	}
	}
	public function getManufacturerdetails(){
		// $query = $this->db->get('user');
		// if($query->num_rows() > 0){
		// 	return $query->result();
		// }

		// s
		$q = $this->db->get('manufacturer');
	    
	    if($q->num_rows() > 0)
	    {
	      foreach ($q->result() as $row)
	      {
	        $data[] = $row;
	      }
	      return $data;
	    }			
	}

}
?>