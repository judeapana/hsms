<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of delete
 *
 * @author User
 */
class delete_user extends CI_Model {

    //put your code here

    public function delete($id, $uname) {
        //deleting from user data
        $this->db->where('id', $id);
        $this->db->delete('teachers');

        //deleting from users table

        $this->db->where('uname', $uname);
        $this->db->delete('users');

        //removing image

        if ($this->db->affected_rows() >= 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function delete_administrators($id, $uname) {
        //deleting from user data
        $this->db->where('id', $id);
        $this->db->delete('administrators');

        //deleting from users table

        $this->db->where('uname', $uname);
        $this->db->delete('users');

        //removing image

        if ($this->db->affected_rows() >= 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function dismiss_student($id, $uname) {
        $this->db->set(array('dismissed' => 'Yes'));
        $this->db->where('id', $id);
        $this->db->update('students');

        $this->db->set(array('dismissed' => 'Yes'));
        $this->db->where('stduname', $uname);
        $this->db->update('parents');



        if ($this->db->affected_rows() >= 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    
    function delete_record($table,$id){
       $this->db->where($id);
        $this->db->delete($table);
    }

}
