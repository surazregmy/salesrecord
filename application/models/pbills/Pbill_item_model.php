<?php 
	/**
	* created by suraj regmi 
	*/
	class Pbill_item_model extends CI_model
	{
		
		function __construct()
		{
			$this->load->database();
		}

		public function set_pbill_item($pbill_id){
			echo (count($_POST));

			// Slice is the array slice that gives element in ith index

			for ($i=4; $i < count($_POST); $i+=4) { 
				$one_row = array_slice($_POST,$i,4);
			
				if (!(in_array(null, $one_row))) {
   					$k = array_keys($one_row);

					$data = array(
							'pbills_id'=> $pbill_id,
							'items_id' =>$one_row[$k[0]],
							'quantity' =>$one_row[$k[1]],
							 'price' =>$one_row[$k[2]],
							 'total' =>$one_row[$k[3]]
						);
					echo "<pre>";
					print_r($data);
					$this->db->insert('pbills_items',$data);
					
 				}
			}
			return true;
		}



		public function get_pbill_items($id =FALSE){
	        if($id === FALSE){
	            $query = $this->db->get('pbills');
	            return $query->result_array();
	        }

	        $query = $this->db->get_where('pbills_items',array('pbills_id'=>$id));
	        return $query->result_array();
    	}

	}
