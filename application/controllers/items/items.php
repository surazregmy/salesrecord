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
		
	}
?>

