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

    	public function update_pbill(){

    		$id = $this->input->post('pbills_id');
			$data = array(
					'original_id' => $this->input->post('pbill_no'),
					'debtors_id' =>$this->input->post('debtor_id'),
					'purchase_date' =>$this->input->post('pdate'),
					'entered_by' =>$this->input->post('entered_by'),
					'status' => $this->input->post('entered_by'),
				);
			$this->db->where('pbills_id',$id);
			 $this->db->update('pbills',$data);
			 return true;
		
		}
		public function delete_pbill($id){

    		
			$this->db->where('pbills_id',$id);
			 $this->db->delete('pbills');
			 return true;
		
		}




		


	}
