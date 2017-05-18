<?php 
	/**
	* created by suraj regmi  
	*/
	class Items extends CI_Controller
	{
		public function index($page = 'itemlist'){
			if(!file_exists(APPPATH.'views/items/'.$page.'.php')){
				show_404();
			}
			$data['title'] = ucfirst($page);

			$this->load->view('layouts/header');
			$this->load->view('layouts/sidebar');
			$this->load->view('items/'.$page, $data);
			$this->load->view('layouts/footer');
			
		}
		
	}
?>

