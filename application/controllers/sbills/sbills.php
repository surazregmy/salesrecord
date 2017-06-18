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
			$this->load->view('layouts/sbill_footer');
    }

    public function savesbills(){
        // echo "<pre>";
        // print_r($_POST);
        // die;
        $sbill_id =$this->sbill_model->set_sbill();
        $this->sbill_item_model->set_sbill_item($sbill_id);
        die("saved!");
        redirect('pbills/view');
    }

    public function save_sbill_item(){
    	// echo "<pre>";
    	// print_r($_POST);
    	// die;
    	$sbills_id = $this->sbill_model->set_sbills();
    }
    public function viewsinglesbill($id){
			$page = 'viewsinglesbill';
			if(!file_exists(APPPATH.'views/sbills/'.$page.'.php')){
				show_404();
			}

		     $data['sbills_items'] = $this->sbill_item_model->get_singlesbill_from_join($id);
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
