<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of create_user
 *
 * @author User
 */
class create_user extends CI_Model {

    //put your code here

    public function insert_teacher($data) {
        $this->db->insert('teachers', $data);
        if ($this->db->affected_rows() >= 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function insert_student($data) {
        $this->db->insert('students', $data);
        if ($this->db->affected_rows() >= 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function insert_administrator($data) {
        $this->db->insert('administrators', $data);
        if ($this->db->affected_rows() >= 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function insert_parent($data) {
        $this->db->insert('parents', $data);
        if ($this->db->affected_rows() >= 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function create_login($data) {
        $this->db->insert('users', $data);
    }

}
