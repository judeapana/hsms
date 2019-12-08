<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class performance extends CI_Model {

    public function show_mark() {
        $this->db->select('*');
        $this->db->from('student_report');
        $results = $this->db->get();
        return $results->result_array();
    }

    public function specific_mark($id) {
        $this->db->select('*');
        $this->db->from('student_report');
        $this->db->where('id', $id);
        $results = $this->db->get();
        return $results->result_array();
    }

    public function search_marks($data) {
        $this->db->select('*');
        $this->db->from('student_report');
        $this->db->where($data);
        $results = $this->db->get();
        return $results->result_array();
    }

    public function student_results_card($data, $tb) {
        $this->db->select('*');
        $this->db->from($tb);
        $this->db->where($data);
        $results = $this->db->get();
        return $results->result_array();
    }

    public function update($tb, $id, $data) {
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update($tb);
        if ($this->db->affected_rows() >= 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
