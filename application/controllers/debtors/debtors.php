<?php
/**
 * Created by PhpStorm.
 * User: Roshan
 * Date: 5/20/2017
 * Time: 4:57 PM
 */
class Debtors extends CI_Controller{
    public function view($page = 'debtorlist')
    {
        if (!file_exists(APPPATH.'views/debtors/'.$page.'php')) {
            show_404();
        }

        $data['debtors'] = ucfirst($page);
//        print_r($data['debtors']);
//        $this->load->debtor_model->get_debtors();

        $this->load->view('layouts/headh');
        $this->load->view('layouts/sidebar');
        $this->load->view('debtors/'.$page, $data);
        $this->load->view('layouts/footerh');

    }
}