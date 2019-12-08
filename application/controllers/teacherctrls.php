<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of teacherctrls
 *
 * @author User
 */
class teacherctrls extends CI_Controller
{

    //put your code here


    public function index()
    {
        if ($this->session->userdata('usertype') == 'teacher') {
            $this->load->model('setting');

            $data['teacher'] = $this->setting->readplus('teachers', array('uname' => $this->session->userdata('username')));
            $this->session->set_userdata('current_pos', $data['teacher'][0]['current_pos']);
            $this->session->set_userdata('subject_area', $data['teacher'][0]['subject_area']);
            $this->session->set_userdata('fullname', $data['teacher'][0]['fname'] . ' ' . $data['teacher'][0]['lname']);
            $this->session->set_userdata('contact', $data['teacher'][0]['contact']);
            $this->session->set_userdata('profileimg', $data['teacher'][0]['profileimg']);

            $data['grading_sys'] = $this->setting->read('grade_sys');
            $cacadmicYear = $this->setting->read('academic_year');
            $data['academic_year'] = $this->setting->read('academic_year');

            $data['resume'] = $this->setting->read('resume_date');
            if ($cacadmicYear == NULL) {
                $this->session->set_flashdata('error', 'Academic Year Not Registered. Sorry Login Cant Be Granted');
                redirect(base_url() . 'users/teacher');
                $this->session->sess_destroy();
            }
            $last_aca_year = end($cacadmicYear);
            $this->session->set_userdata('academic_year', $last_aca_year['year']);

            $this->load->view('teacher/main/index', $data);
        } else {
            //destroying any available session
            $this->session->sess_destroy();
            redirect(base_url() . 'users/teacher');
        }
    }

}
