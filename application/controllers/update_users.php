<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of update_users
 *
 * @author User
 */
class update_users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('update_user');
    }

    public function administrators()
    {

    }

    public function students($id, $stdid)
    {

        $this->form_validation->set_rules('fname', 'First Name', 'trim|required|max_length[15]|min_length[2]|alpha');
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|max_length[15]|min_length[2]|alpha');
        $this->form_validation->set_rules('contact', 'contact', 'trim|required');
        $this->form_validation->set_rules('address', 'address', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email');
        $this->form_validation->set_rules('dateofbirth', 'Date of Birth', 'trim|required');


        $this->form_validation->set_rules('stdprogram', 'Student Programme', 'trim|required');
        $this->form_validation->set_rules('stdhouse', 'tudent House', 'trim|required');
        $this->form_validation->set_rules('stdclass', 'student Id', 'trim|required');
        $this->form_validation->set_rules('nationality', 'Student Nationality', 'trim|required');
        $this->form_validation->set_rules('hometown', 'Home town', 'trim|required|max_length[15]|min_length[2]|alpha');
        $this->form_validation->set_rules('stdid', 'Student ID', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Form Error Detected, Please Check An Try Again ');
            redirect('view_users/students');
        } else {
            $data = array(
                'fname' => $this->input->post('fname'),
                'uname' => $this->input->post('stdid'),
                'lname' => $this->input->post('lname'),
                'contact' => $this->input->post('contact'),
                'postaladdr' => $this->input->post('address'),
                'email' => $this->input->post('email'),
                'nationality' => $this->input->post('nationality'),
                'date_of_birth' => $this->input->post('dateofbirth'),
                'hometown' => $this->input->post('hometown'),
                'stdprogram' => $this->input->post('stdprogram'),
                'stdclass' => $this->input->post('stdclass'),
                'stdid' => $this->input->post('stdid'),
                'stdhouse' => $this->input->post('stdhouse')
            );
            if ($this->update_user->update($id, $data, 'students')) {
                $this->session->set_flashdata('update', 'Update Successful');
                redirect('view_users/students');
            }
        }
    }

    public function teachers($id)
    {
        $this->form_validation->set_rules('current_pos', 'Current Position', 'trim|required');
        $this->form_validation->set_rules('subject_area', 'Subject Area', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            redirect('view_users/teachers');
        } else {
            $data = array(
                'current_pos' => $this->input->post('current_pos'),
                'subject_area' => $this->input->post('subject_area')
            );

            if ($this->update_user->update($id, $data, 'teachers')) {

                $this->session->set_flashdata('update', 'Update Successful');
                redirect('view_users/teachers');
            }
        }
    }

    public function remove_dismissed($id, $uname)
    {
        if ($this->update_user->undo_dismiss_student($id, $uname)) {
            $this->session->set_flashdata('update', 'Update Successful Student Restated Dismissed Removed');
            redirect('view_users/students');
        }
    }

}
