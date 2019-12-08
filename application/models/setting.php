<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of setting
 *
 * @author User
 */
class setting extends CI_Model {

    //put your code here
    public function create($tb, $data) {
        $this->db->insert($tb, $data);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return False;
        }
    }

    public function res_exist($tb, $select, $where) {
        $this->db->select($select);
        $this->db->from($tb);
        $this->db->where($where);
        $results = $this->db->get();
        return $results->num_rows();
    }

    public function read($tb) {
        $this->db->select('*');
        $this->db->from($tb);
        $results = $this->db->get();
        return $results->result_array();
    }

    public function readplus($tb, $data, $select = '*') {
        $this->db->select($select);
        $this->db->from($tb);
        $this->db->where($data);
        $results = $this->db->get();
        return $results->result_array();
    }

    public function update($tb, $data, $id) {
        $this->db->where('id', $id);
        $this->db->update($tb, $data);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return False;
        }
    }

    public function updater($id, $data, $table) {
        $this->db->set($data);
        $this->db->where($id);
        $this->db->update($table);
        if ($this->db->affected_rows() >= 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function delete($tb, $id) {
        $this->db->where('id', $id);
        $this->db->delete($tb);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return False;
        }
    }

}
