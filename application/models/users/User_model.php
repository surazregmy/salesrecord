<?php 

/**
* 
*/
class User_model extends CI_Model
{

	function __construct()
		{
			$this->load->database();
		}

	function validate_user_exist(){
		  $user= array(
            'username' => $this->input->post('username'),
            'password' =>$this->input->post('password')
        );
		$query = $this->db->get_where('users',$user);
		return ($query->row_array());
		

	}

	
	
}



?>