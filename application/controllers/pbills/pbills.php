<?php 
	/**
	* created by suraj regmi  
	*/
	class Pbills extends CI_Controller 
	{
		public function view($page = 'listpbills'){

			if(!file_exists(APPPATH.'views/pbills/'.$page.'.php')){
				show_404();
			}
			
			$data['title'] = ucfirst($page);
			$data['pbills'] = $this->pbill_model->get_pbill();
			$data['debtors'] = $this->debtor_model->get_debtors();
			//$data['items'] = $this->item_model->get_items();
			

			$this->load->view('layouts/headh');
			$this->load->view('layouts/sidebar');
			$this->load->view('pbills/'.$page, $data);
			$this->load->view('layouts/footerh');
			
		}

		public function addpbills(){

			$data['debtors'] = $this->debtor_model->get_debtors();
			$data['items'] = $this->item_model->get_items();

			$this->load->view('layouts/headh');
			$this->load->view('layouts/sidebar');
			$this->load->view('pbills/addpbills',$data);
			$this->load->view('layouts/pbill_footer');
			
		}
		public function savepbills(){
			
			$pbill_id =$this->pbill_model->set_pbill();
			$this->pbill_item_model->set_pbill_item($pbill_id);
			redirect('pbills/view');

			// $data['debtors'] = $this->debtor_model->get_debtors();
			// $data['items'] = $this->item_model->get_items();
			
			// $this->load->view('layouts/headh');
			// $this->load->view('layouts/sidebar');
			// $this->load->view('pbills/addpbills',$data);
			// $this->load->view('layouts/pbill_footer');
			
		}
		public function viewsinglepbill($id){
			$page = 'viewsinglepbill';
			if(!file_exists(APPPATH.'views/pbills/'.$page.'.php')){
				show_404();
			}
			
			
		 //    $data['pbills'] = $this->pbill_model->get_pbill($id);
			// $data['debtors'] = $this->debtor_model->get_debtors();
			// $data['items'] = $this->item_model->get_items();
		 //    $data['pbills_items'] = $this->pbill_item_model->get_pbill_items($id);


		     $data['pbills_items'] = $this->pbill_item_model->get_singlepbill_from_join($id);
		    // echo "<pre>";
		    // print_r($data['pbills_items']);
		    // die;
			
			$this->load->view('layouts/headh');
			$this->load->view('layouts/sidebar');
			$this->load->view('pbills/'.$page, $data);
			$this->load->view('layouts/footerh');
			
		}

		

		public function editpbills($id){
			$page = 'editpbills';
			if(!file_exists(APPPATH.'views/pbills/'.$page.'.php')){
				show_404();
			}
			


		    $data['debtors'] = $this->debtor_model->get_debtors();
			$data['items'] = $this->item_model->get_items();
			$data['pbills_items'] = $this->pbill_item_model->get_singlepbill_from_join($id);
			// echo "<pre>";
			// print_r($data['pbills_items']);
			// die;

		
			
			$this->load->view('layouts/headh');
			$this->load->view('layouts/sidebar');
			$this->load->view('pbills/'.$page, $data);
			$this->load->view('layouts/pbill_footer');
			
		}

		public function updatepbills(){
			// echo "<pre>";
			// print_r($_POST);
			// die;
            $id = $this->input->post('pbills_id');
			$this->pbill_model->update_pbill();
			$this->pbill_item_model->update_pbill_item($id);
			redirect('pbills/viewsinglepbill/'.$id);
		
		}

		public function deletepbills($id){
			
			$this->pbill_model->delete_pbill($id);
			$this->pbill_item_model->delete_pbill_item($id);
			redirect('pbills/view');
		
		}




	}
?>

