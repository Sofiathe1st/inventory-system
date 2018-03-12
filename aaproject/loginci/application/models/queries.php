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
		$q = $this->db->get('inventory');
	    
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