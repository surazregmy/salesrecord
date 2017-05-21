<?php 
	/**
	* created by suraj regmi  
	*/
	class Items extends CI_Controller
	{
		public function view($page = 'itemlist'){
			if(!file_exists(APPPATH.'views/items/'.$page.'.php')){
				show_404();
			}
			$data['title'] = ucfirst($page);
			$data['items'] = $this->item_model->get_items();
			

			$this->load->view('layouts/headh');
			$this->load->view('layouts/sidebar');
			$this->load->view('items/'.$page, $data);
			$this->load->view('layouts/footerh');
			
		}

		public function additem(){
			$this->form_validation->set_rules('name','Name','required');
	
			if($this->form_validation->run() === FALSE ){
				$this->load->view('layouts/headh');
				$this->load->view('layouts/sidebar');
				$this->load->view('items/additem');
				$this->load->view('layouts/footerh');
			}else{
				$this->item_model->set_item();
				redirect('items/view');

			}	
		}
		
		public function edititem($id){
			$data['item'] = $this->item_model->get_items($id); // It gets one items from the 

				$this->load->view('layouts/headh');
				$this->load->view('layouts/sidebar');
				$this->load->view('items/edititem',$data);
				$this->load->view('layouts/footerh');
			
		}
		

		public function updateitem(){
			 $this->item_model->update_item();
			 redirect('items/view');
			
		}

		public function deleteitem($id){
			echo "Hello " ;
			 $this->item_model->delete_item($id);
			 redirect('items/view');
			
		}
	}
?>

