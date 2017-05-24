<?php
/**
 * Created by PhpStorm.
 * User: Roshan
 * Date: 5/23/2017
 * Time: 7:26 PM
 */

class Sbill_model extends CI_Model{
    public function __construct(){
        $this->load->databse();
    }

    public function get_sbills($id = FALSE){
        if($id==FALSE){
            $query = $this->db->get('sbills');
            return $query->result_array();
        }
        $query = $this->db->get_where('sbills',array('id'=>$id));
        return $query->row_array();
    }
}