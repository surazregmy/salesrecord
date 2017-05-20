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

		public function set_item(){
			$data = array(
					'items_name' => $this->input->post('name'),
					'items_category' =>$this->input->post('category'),
					'items_quantity' =>$this->input->post('quantity'),
					'items_cp' => $this->input->post('cp'),
					'items_sp' => $this ->input->post('sp'),
					'items_dp' => $this ->input->post('dr')
				);
			return $this->db->insert('items',$data);
			//print_r($data); (It does print ! I dont know how :P Cheers :D )
		}
	}
?>