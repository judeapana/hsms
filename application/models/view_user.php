<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of view_user
 *
 * @author User
 */
class view_user extends CI_Model {

    //put your code here

    public function view_all($data) {
        $this->db->select();
        $this->db->from($data);
        $results = $this->db->get();
        return $results->result_array();
    }

    public function specify_view($table, $id) {
        $this->db->select();
        $this->db->from($table);
        $this->db->where('id', $id);
        $results = $this->db->get();
        return $results->result_array();
    }

    public function get_parent_details($parentid) {
        $this->db->select();
        $this->db->from('parents');
        $this->db->where('ptuname', $parentid);
        $results = $this->db->get();
        return $results->result_array();
    }

}
