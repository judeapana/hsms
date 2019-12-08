<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of profile
 *
 * @author User
 */
class profile extends CI_Model {

    //put your code here

    public function view($tb, $where) {
        $this->db->select("*");
        $this->db->from($tb);
        $this->db->where($where);
        $results = $this->db->get();
        return $results->result_array();
    }

        public function update($id, $data, $table) {
        $this->db->set($data);
        $this->db->where($id);
        $this->db->update($table);
        if ($this->db->affected_rows() >= 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
