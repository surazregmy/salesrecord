<?php 
	/**
	* created by suraj regmi 
	*/
	class Pbill_model extends CI_model
	{
		
		function __construct()
		{
			$this->load->database();
		}

		public function set_pbill(){
			$data = array(
					'original_id' => $this->input->post('pbill_no'),
					'debtors_id' =>$this->input->post('debtor_id'),
					'purchase_date' =>$this->input->post('pdate'),
					'entered_by' =>$this->input->post('entered_by'),
					'status' => $this->input->post('entered_by'),
				);
			 $this->db->insert('pbills',$data);
			 return $insert_id = $this->db->insert_id();
		
		}

		public function get_pbill($id =FALSE){
	        if($id === FALSE){
	            $query = $this->db->get('pbills');
	            return $query->result_array();
	        }

	        $query = $this->db->get_where('pbills',array('pbills_id'=>$id));
	        return $query->row_array();
    	}




		//This in  not used for now
		// public function get_pbill_id(){
		// 	$select_attr = array(
		// 			'original_id' => $this->input->post('pbill_no'),
		// 			'debtors_id' => $this->input->post('debtor_id'),	
		// 		);

		// 	$this->db->select('pbills_id'); 
		// 	 $this->db->from('pbills');   
		//     $this->db->where($select_attr);
		//      return $this->db->get()->result();
		    
		// }


		


	}
