<?php
/**
 * Created by PhpStorm.
 * User: Roshan
 * Date: 5/23/2017
 * Time: 10:54 AM
 */

class Preports extends CI_Controller {

    public function view($page='listpreports'){


    	if(!file_exists(APPPATH.'views/preports/'.$page.'.php')){
				show_404();
			}
        $data['title'] = ucfirst($page);
        $data['debtors'] = $this->debtor_model->get_debtors();
      
        $this->load->view('layouts/headh');
        $this->load->view('layouts/sidebar');
        $this->load->view('preports/'.$page,$data);
        $this->load->view('layouts/listpreports_footer');
    }

    public function showpreport(){

            $debtors_id = $this ->input->post('id');
            $data['pbills'] = $this->preport_model->get_bills_debts($debtors_id);
            $data['preceipts'] = $this->preport_model->get_preceipts_debts($debtors_id);
           // echo "<pre>";
           //  print_r($data['pbills']);
           //  print_r($data['preceipts']);


            $this->load->view('preports/singlepreport',$data);
    }
}
?>
