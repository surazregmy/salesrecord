<?php
/**
 * Created by PhpStorm.
 * User: Roshan
 * Date: 5/22/2017
 * Time: 11:11 AM
 */

class Creditor_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function get_creditors($id=FALSE){
        if($id ==FALSE){
            $query = $this->db->get('creditors');
            return $query->result_array();
        }
        $query = $this->db->get_where('creditors',array('cid'=>$id));
        return $query->row_array();
    }

    public function set_creditor(){
        $data = array(
            'creditor_name'=>$this->input->post('creditor_name'),
            'creditor_address'=>$this->input->post('creditor_address'),
            'creditor_contact'=>$this->input->post('creditor_contact')
        );
//        return print_r($data).die;
        return $this->db->insert('creditors',$data);
    }

    public function update_creditor(){
        $id = $this->input->post('creditor_id');

        $data = array(
            'creditor_name'=>$this->input->post('creditor_name'),
            'creditor_address'=>$this->input->post('creditor_address'),
            'creditor_contact'=>$this->input->post('creditor_contact')
        );
        $this->db->where('cid',$id);
        return $this->db->update('creditors',$data);

    }

    public function delete_creditor($id){
        $this->db->where('cid',$id);
        $this->db->delete('creditors');
        return true;
    }
}