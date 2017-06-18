
<?php
	class Sbill_item_model extends CI_Model{
		
		function __construct(){
			$this->load->database();
		}

		public function set_sbill_item($sbill_id){
			// echo (count($_POST));
			for ($i=4; $i < count($_POST); $i+=4) { 
				$one_row = array_slice($_POST,$i,4);
			
				if (!(in_array(null, $one_row))) {
   					$k = array_keys($one_row);

					$data = array(
							'sbills_id'=> $pbill_id,
							'items_id' =>$one_row[$k[0]],
							'quantity' =>$one_row[$k[1]],
							 'price' =>$one_row[$k[2]],
							 'total' =>$one_row[$k[3]]
						);
					echo "<pre>";
					print_r($data);
					$this->db->insert('sbills_items',$data);
					
 				}
			}
			return true;
		}
	}
	
?>