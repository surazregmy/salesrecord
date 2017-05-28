
<?php 
	/**
	* created by suraj regmi 
	*/
	class Preport_model extends CI_model
	{
		
		function __construct()
		{
			$this->load->database();
		}

		
// This is for report section 
		public function get_bills_debts($debtors_id){
		
			$query = $this->db->get_where('pbills',array('debtors_id'=>$debtors_id));
			return $query->result_array();
		}

		//This is for report section 
		
		public function get_preceipts_debts($debtors_id){
		
			
			$query = $this->db->get_where('preceipts',array('debtors_id'=>$debtors_id));
			return $query->result_array();
		}

		

		

}

?>
