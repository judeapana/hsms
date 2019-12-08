<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of update_user
 *
 * @author User
 */
class update_user extends CI_Model {

    //$option is tb name

    public function update($id, $data, $table) {
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update($table);
        if ($this->db->affected_rows() >= 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function undo_dismiss_student($id, $uname) {
        $this->db->set(array('dismissed' => 'No'));
        $this->db->where('id', $id);
        $this->db->update('students');

        $this->db->set(array('dismissed' => 'No'));
        $this->db->where('stduname', $uname);
        $this->db->update('parents');


        if ($this->db->affected_rows() >= 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
