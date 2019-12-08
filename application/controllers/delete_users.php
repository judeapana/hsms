<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of deleting user or data form database
 *
 * @author User
 */
class delete_users extends CI_Controller
{

    //put your code here
    public function __construct()
    {
        parent::__construct();
        $this->load->model('delete_user');
    }

    public function teachers($id, $uname)
    {
        //deleting data from teacher
        if ($this->delete_user->delete($id, $uname)) {
            $this->session->set_flashdata('delete', 'Delete Successful');
            redirect('view_users/teachers');
        }
    }

    public function students($id, $uname)
    {
        //dismissing student
        if ($this->delete_user->dismiss_student($id, $uname)) {
            $this->session->set_flashdata('delete', 'Delete Successful But Student Data Will Be Maintained');
            redirect('view_users/students');
        }
    }

    public function administrators($id, $uname)
    {
        //deleting administrator from database
        if ($this->delete_user->delete_administrators($id, $uname)) {
            $this->session->set_flashdata('delete', 'Delete Successful');
            redirect('view_users/administrators');
        }
    }

}
