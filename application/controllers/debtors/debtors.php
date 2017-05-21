<?php
/**
 * Created by PhpStorm.
 * User: Roshan
 * Date: 5/20/2017
 * Time: 4:57 PM
 */
class Debtors extends CI_Controller{

    public function view($page = 'debtorlist'){

        $data['title'] = ucfirst($page);
        $data['debtors'] = $this->debtor_model->get_debtors();

        $this->load->view('layouts/headh');
        $this->load->view('layouts/sidebar');
        $this->load->view('debtors/'.$page,$data);
        $this->load->view('layouts/footerh');
    }

    public function adddebtor(){
        $this->form_validation->set_rules('name','Name','required');

        if($this->form_validation->run()==FALSE){
            $this->load->view('layouts/headh');
            $this->load->view('layouts/sidebar');
            $this->load->view('debtors/adddebtor');
            $this->load->view('layouts/footerh');
        }
        else{
            $this->debtor_model->set_debtor();
            redirect('debtors/view');
        }

    }
}