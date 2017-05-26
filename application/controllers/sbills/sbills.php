<?php
/**
 * Created by PhpStorm.
 * User: Roshan
 * Date: 5/23/2017
 * Time: 10:54 AM
 */

class Sbills extends CI_Controller {
    public function view($page='listsbills'){
    	if(!file_exists(APPPATH.'views/sbills/'.$page.'.php')){
				show_404();
			}
        $data['title'] = ucfirst($page);
        $data['creditors'] = $this->creditor_model->get_creditors();
       // $data['sbills'] = $this->sbill_model->get_sbills();

        $this->load->view('layouts/headh');
        $this->load->view('layouts/sidebar');
        $this->load->view('sbills/'.$page);
        $this->load->view('layouts/footerh');
    }

    public function addsbills(){
    	// echo("tstssssss");
    	// die();
    	$data['creditors'] = $this->creditor_model->get_creditors();
    	// print_r($data).die();
		$data['items'] = $this->item_model->get_items();

			$this->load->view('layouts/headh');
			$this->load->view('layouts/sidebar');
			$this->load->view('sbills/addsbills',$data);
			$this->load->view('layouts/pbill_footer');
    }

    public function savesbills(){
    	// echo "<pre>";
    	// print_r($_POST);
    	// die;
    	$sbills_id = $this->sbills_model->set_sbills();
    }
    public function viewsinglesbill($id){
			$page = 'viewsinglesbill';
			if(!file_exists(APPPATH.'views/sbills/'.$page.'.php')){
				show_404();
			}

		     $data['pbills_items'] = $this->sbill_item_model->get_singlesbill_from_join($id);
		    // echo "<pre>";
		    // print_r($data['pbills_items']);
		    // die;
			
			$this->load->view('layouts/headh');
			$this->load->view('layouts/sidebar');
			$this->load->view('sbills/'.$page, $data);
			$this->load->view('layouts/footerh');
			
		
 }
}

?>
