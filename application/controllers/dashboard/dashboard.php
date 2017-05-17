<?php 
	/**
	* created by suraj regmi  
	*/
	class Dashboard extends CI_Controller
	{
		public function view($page = 'home'){
			if(!file_exists(APPPATH.'views/dashboard/'.$page.'.php')){
				show_404();
			}
			$data['title'] = ucfirst($page);

			//$this->load->view('template/header');
			$this->load->view('dashboard/'.$page, $data);
			//$this->load->view('template/footer');
		}
	}
?>

