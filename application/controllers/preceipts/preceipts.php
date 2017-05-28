<?php 
	/**
	* created by suraj regmi  
	*/
	class Preceipts extends CI_Controller 
	{
		public function view($page = 'listpreceipts'){

			if(!file_exists(APPPATH.'views/preceipts/'.$page.'.php')){
				show_404();
			}
			
			$data['title'] = ucfirst($page);
		//	$data['pbills'] = $this->pbill_model->get_pbill();
		//	$data['debtors'] = $this->debtor_model->get_debtors();
			//$data['items'] = $this->item_model->get_items();

			$data['preceipts']= $this->preceipt_model->get_preceipts();
			// echo "<pre>";
			// print_r($data['preceipts']);
			// die;
			

			$this->load->view('layouts/headh');
			$this->load->view('layouts/sidebar');
			$this->load->view('preceipts/'.$page, $data);
			$this->load->view('layouts/footerh');
			
		}

		public function addpreceipts(){

			$page = 'addpreceipts';
			if(!file_exists(APPPATH.'views/preceipts/'.$page.'.php')){
				show_404();
			} 
			$this->form_validation->set_rules('po_id','Po_id','required'); // Run method for now

			if($this->form_validation->run() === FALSE ){
				
					$data['debtors'] = $this->debtor_model->get_debtors();

					$this->load->view('layouts/headh');
					$this->load->view('layouts/sidebar');
					$this->load->view('preceipts/'.$page, $data);
					$this->load->view('layouts/footerh');

			}else{
				$this->preceipt_model->set_preceipt();
				redirect('preceipts/view');

			}

			
		}


		public function editpreceipt($id){
			$page = "editpreceipts";
			$data['preceipt'] = $this->preceipt_model->get_preceipts($id);
			$data['debtors'] = $this->debtor_model->get_debtors();
			
			$this->load->view('layouts/headh');
			$this->load->view('layouts/sidebar');
			$this->load->view('preceipts/'.$page, $data);
			$this->load->view('layouts/footerh');
			
		}

		public function updatepreceipt(){
			 
		     $this->preceipt_model->update_preceipt();
		     redirect('preceipts/view');

			}

		public function deletepreceipt($id){
		 
	     $this->preceipt_model->delete_preceipt($id);
	     redirect('preceipts/view');

		}


	}
?>

