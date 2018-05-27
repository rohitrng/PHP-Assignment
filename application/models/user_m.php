<?php
/**
* Rohit Jadhav
*/
class User_m extends CI_Model
{
	protected $user = 'user';
	function __construct()
	{
		parent::__construct();
	}

	public function check_login($data){
		$query = $this->db->select('u_id,u_email,u_password')
		         ->where('u_email',$data['email'])
		         ->where('u_password',$data['password'])
		         ->from($this->user)
		         ->get();
        if ($query->num_rows()) {
        	return $query->row()->u_id;
        	//return TRUE;
        } else {
        	return FALSE;
        }
	}

	public function create_user($data){
		$query = $this->db->insert($this->user,$data);

		if ($query->num_rows) {
			return TRUE;
		} else {
			return FALES;
		}
	}

	public function user_data($user_id){
	$query = $this->db->select('u_username')
	                  ->where('u_id',$user_id)
	                  ->from($this->user)
	                  ->get();
	return $query->result_array();
	}

	public function user_list( $limit,$offset ){
		$query = $this->db->select('u_id,u_username,u_email,u_mobile')
		                  ->from($this->user)
		                  ->limit( $limit,$offset )
		                  ->get();
		return $query->result();
	}

	public function num_rows(){
	    $query = $this->db->select('u_id,u_username,u_email,u_mobile')
		                  ->from($this->user)
		                  ->get();
		return $query->num_rows();	
	}

	public function search( $data,$limit,$offset ){
		$query = $this->db->from($this->user)
		                  ->like('u_username',$data)
		                  ->limit($limit,$offset )
		                  ->get();
		return $query->result();
	}

	public function date_search( $dateFrom,$dateTo,$limit,$offset ){
		$query = $this->db->from($this->user)
		                  ->where('u_dob >=', $dateFrom)
                          ->where('u_dob <=', $dateTo)
		                  ->limit($limit,$offset )
		                  ->get();
		return $query->result();
	}

	public function count_search_results( $data ){
		$query = $this->db->from($this->user)
		                  ->like('u_username',$data)
		                  ->get();
		return $query->num_rows();
	}             

	public function count_date_search_results( $dateFrom,$dateTo ){
        $query = $this->db->from($this->user)
		                  ->where('u_dob >=', $dateFrom)
                          ->where('u_dob <=', $dateTo)
		                  ->get();
		return $query->num_rows();
	}
	
	public function find($id){
        $query = $this->db->from($this->user)
                          ->where('u_id',$id)
                          ->get();
        return $query->result();
	}

	public function update($data){
		$query = $this->db->where('u_id', $data['u_id'])
						  ->update($this->user, $data);
	    if ($query) {
	    	return TRUE;
	    } else {
	    	return FALES;
	    }
	}

	public function getdata(){
	     $query = $this->db->select('u_id,u_username,u_email,u_mobile,u_address')
	                       ->get($this->user);
	     return $query->result();
    }

	public function delete($id){
		$query = $this->db->where('u_id',$id)
		                  ->delete($this->user);
		if ($query) {
			return TRUE;
		} else {
			return FALES;
		}
	}     
}
?>