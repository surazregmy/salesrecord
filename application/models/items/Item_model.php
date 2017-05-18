<?php 
	/**
	* created by suraj regmi 
	*/
	class Item_model extends CI_model
	{
		
		function __construct()
		{
			$this->load->database();
		}

		public function get_items($items_id = FALSE){
			if($items_id === FALSE){
				$query = $this->db->get('items');
				return $query->result_array();
			}

			$query = $this->db->get_where('items',array('items_id'=>$items_id));
			return $query->row_array();


		}
	}
?>