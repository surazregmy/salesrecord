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
			$data['items'] = $this->item_model->get_items();
			

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

	}
?>

