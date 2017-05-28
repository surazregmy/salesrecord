<?php 
	/**
	* created by suraj regmi 
	*/
	class Preceipt_model extends CI_model
	{
		
		function __construct()
		{
			$this->load->database();
		}

		public function get_preceipts($items_id = FALSE){
			if($items_id === FALSE){
				$query = $this->db->get('preceipts');
				return $query->result_array();
			}

			$query = $this->db->get_where('preceipts',array('preceipts_id'=>$items_id));
			return $query->row_array();
		}

		

		public function set_preceipt(){
			$data = array(
					'po_id' => $this->input->post('po_id'),
					'debtors_id' =>$this->input->post('debtor_id'),
					'date' =>$this->input->post('paid_date'),
					'amount' => $this->input->post('amount'),
					'entered_by' => $this ->input->post('entered_by')
					
				);
			return $this->db->insert('preceipts',$data);
			//print_r($data); (It does print ! I dont know how :P Cheers :D )
		}

		public function update_preceipt(){

			$id = $this->input->post('preceipts_id');
			$data = array(
					'po_id' => $this->input->post('po_id'),
					'debtors_id' =>$this->input->post('debtor_id'),
					'date' =>$this->input->post('paid_date'),
					'amount' => $this->input->post('amount'),
					'entered_by' => $this ->input->post('entered_by')
	
				);
			      $this->db->where('preceipts_id',$id);
			return $this->db->update('preceipts',$data);
			
		}

		public function delete_preceipt($id){

			$this->db->where('preceipts_id',$id);
			$this->db->delete('preceipts');
			return true;

		}

		


		



}

?>
