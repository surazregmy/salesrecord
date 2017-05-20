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


        $this->load->view('layouts/headh');
        $this->load->view('layouts/sidebar');
        $this->load->view('debtors/'.$page);
        $this->load->view('layouts/footerh');

    }
}