<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author User
 */
class User extends CI_Model {

    //put your code here

    public function login($data, $table = 'users') {
        $this->db->select();
        $this->db->from($table);
        $this->db->where($data);
        $results = $this->db->get();
        return $results->row_array();
    }

    public function recovery($data, $table = 'users') {
        $this->db->select();
        $this->db->from($table);
        $this->db->where($data);
        $results_exist = $this->db->get();
        return $results_exist->num_rows();
    }

    public function insert_recovery_pin($data) {
        $this->db->insert('recovery', $data);
    }

    public function check_valid_recovery_pin($data) {
        $this->db->select();
        $this->db->from('recovery');
        $this->db->where($data);
        $is_valid_pin = $this->db->get();
        return $is_valid_pin->num_rows();
    }

    public function update_on_correct_pin($data) {
        $this->db->where('email', $data['email']);
        $this->db->update('recovery', $data);
    }

    public function check_pin_already_exist($data) {
        $this->db->select();
        $this->db->from('recovery');
        $this->db->where($data);
        $is_valid_pin = $this->db->get();
        return $is_valid_pin->num_rows();
    }

    public function update_password($data) {
        $this->db->where('email', $data['email']);
        $this->db->update('users', $data);
        if ($this->db->affected_rows() >= 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
