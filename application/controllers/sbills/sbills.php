<?php
/**
 * Created by PhpStorm.
 * User: Roshan
 * Date: 5/23/2017
 * Time: 10:54 AM
 */

class Sbills extends CI_Controller {
    public function view($page='addsbills'){
        $data['title'] = ucfirst($page);
//        $data['sbills'] = $this->sbill_model->get_sbills();

        $this->load->view('layouts/headh');
        $this->load->view('layouts/sidebar');
        $this->load->view('sbills/'.$page);
        $this->load->view('layouts/footerh');
    }
}
