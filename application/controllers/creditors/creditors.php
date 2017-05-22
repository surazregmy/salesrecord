<?php
/**
 * Created by PhpStorm.
 * User: Roshan
 * Date: 5/21/2017
 * Time: 10:21 PM
 */
class Creditors extends CI_Controller{

    public function view($page='creditorlist'){
        $data['pages'] = $page;
        $data['creditors'] = $this->creditor_model->get_creditors();
//        echo "<pre>";
//        print_r($data['creditors']);
//        die;
        $this->load->view('layouts/headh');
        $this->load->view('layouts/sidebar');
        $this->load->view('creditors/'.$page,$data);
        $this->load->view('layouts/footerh');
    }

    public function addcreditor(){
        $this->form_validation->set_rules('creditor_name','Creditor Name','required');

        if($this->form_validation->run()==FALSE){
            $this->load->view('layouts/headh');
            $this->load->view('layouts/sidebar');
            $this->load->view('creditors/addcreditor');
            $this->load->view('layouts/footerh');
        }else{
            $this->creditor_model->set_creditor();
            redirect('creditors/view');
        }
//        echo "test";
    }

    public function editcreditor($id){
        $data['title'] = 'Edit Creditor';
        $data['creditor'] = $this->creditor_model->get_creditors($id);

        $this->load->view('layouts/headh');
        $this->load->view('layouts/sidebar');
        $this->load->view('creditors/editcreditor',$data);
        $this->load->view('layouts/footerh');
    }


    public function updatecreditor(){
        $this->creditor_model->update_creditor();
        redirect('creditors/view');
    }

    public function deletecreditor($id){
        $this->creditor_model->delete_creditor($id);
        redirect('creditors/view');
    }


}





?>