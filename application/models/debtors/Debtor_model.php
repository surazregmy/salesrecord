<?php

/**
 * Created by PhpStorm.
 * User: Roshan
 * Date: 5/20/2017
 * Time: 5:03 PM
 */

class Debtor_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }
    public function get_debtors($id =FALSE){
        if($id === FALSE){
            $query = $this->db->get('debtors');
            return $query->result_array();
        }

        $query = $this->db->get_where('debtors',array('id'=>$id));
        return $query->row_array();
    }

    public function set_debtor(){
        $data = array(
            'name' => $this->input->post('name'),
            'address' =>$this->input->post('address'),
            'contact' =>$this->input->post('contact'),
        );
        return $this->db->insert('debtors',$data);
    }

    public function update_debtor(){
        $id = $this->input->post('id');

        $data = array(
            'name' => $this->input->post('name'),
            'address' =>$this->input->post('address'),
            'contact' =>$this->input->post('contact'),
        );
        $this->db->where('id',$id);
        return $this->db->update('debtors',$data);

    }

    public function delete_debtor($id){
        $this->db->where('id',$id);
        $this->db->delete('debtors');
        return true;

    }
}

?>