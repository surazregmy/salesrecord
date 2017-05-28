<?php
/**
 * Created by PhpStorm.
 * User: Roshan
 * Date: 5/23/2017
 * Time: 7:26 PM
 */

class Sbill_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function get_sbills($id = FALSE){
        if($id==FALSE){
            $query = $this->db->get('sbills');
            return $query->result_array();
        }
        $query = $this->db->get_where('sbills',array('id'=>$id));
        return $query->row_array();
    }

    public function set_sbills($id = FALSE){
        $data = array(
                    'original_id' => $this->input->post('sbill_no'),
                    'creditors_id' =>$this->input->post('creditor_id'),
                    'sells_date' =>$this->input->post('sdate'),
                    'entered_by' =>$this->input->post('entered_by'),
                    'status' => $this->input->post('entered_by'),
                );
        $this->db->insert('sbills',$data);
        return $insert_id = $this->db->insert_id();
    }
}