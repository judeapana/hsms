<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of uploadmark
 *
 * @author User
 */
class uploadmark extends CI_Model {

    //put your code here

    public function find_students($tb, $data, $col = '*') {
        $this->db->select($col);
        $this->db->from($tb);
        $this->db->or_where($data);
        $results = $this->db->get();
        return $results->result_array();
    }
    public function find_students_n($tb, $data, $col = '*') {
        $this->db->select($col);
        $this->db->from($tb);
        $this->db->where($data);
        $results = $this->db->get();
        return $results->result_array();
    }
    public function readdata($tb) {
        $this->db->select('*');
        $this->db->from($tb);
        $results = $this->db->get();
        return $results->result_array();
    }

        public function readdata_enquiry($tb,$where) {
        $this->db->select('*');
        $this->db->from($tb);
        $this->db->where($where);
        $results = $this->db->get();
        return $results->result_array();
    }
    public function insertmarks($tb, $data) {
        $this->db->insert($tb, $data);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return False;
        }
    }

    public function grade_order() {
        $this->db->select('to_int,gp,remarks');
        $this->db->from('grade_sys');
        $this->db->order_by('to_int', 'ASC');
        $results = $this->db->get();
        return $results->result_array();
    }

    public function res_exist($tb,$select,$where) {
        $this->db->select($select);
        $this->db->from($tb);
        $this->db->where($where);
        $results = $this->db->get();
        return $results->num_rows();
    }

    public function findexist($tb, $data, $col = '*') {
        $this->db->select($col);
        $this->db->from($tb);
        $this->db->or_where($data);
        $results = $this->db->get();
        return $results->result_array();
    }


}
