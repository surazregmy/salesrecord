<?php

class Sbill_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function get_sbill($id = FALSE){
        if($id==FALSE){
            $query = $this->db->get('sbills');
            return $query->result_array();
        }
        $query = $this->db->get_where('sbills',array('id'=>$id));
        return $query->row_array();
    }

    public function set_sbill($id = FALSE){
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