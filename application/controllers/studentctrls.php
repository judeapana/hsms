<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of studentctrls
 *
 * @author User
 */
class studentctrls extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('setting');
        $this->load->model('profile');
    }

    //put your code here

    public function index() {
        if ($this->session->userdata('usertype') == 'student') {
            $data['grading_sys'] = $this->setting->read('grade_sys');
            $data['student'] = $this->setting->readplus('students', array('uname' => $this->session->userdata('username')));
            $this->session->set_userdata('fullname', $data['student'][0]['fname'] . ' ' . $data['student'][0]['lname']);
            $this->session->set_userdata('profileimg', $data['student'][0]['profileimg']);
            $this->load->view('student/main/index', $data);
        } else {
            //destroying any available session
            $this->session->sess_destroy();
            redirect(base_url() . 'users/student');
        }
    }

    public function results() {

        $data['student_available_res'] = $this->setting->readplus('student_report', array('stdid' => $this->session->userdata('username')), 'term,form,academic_year');
        rsort($data['student_available_res']);
        $this->load->view('student/main/results', $data);
    }

    public function showres($form, $term, $academic_year1, $academic_year2) {


        $academic_year = $academic_year1 . '/' . $academic_year2;
        $data['results'] = $this->setting->readplus('student_report', array('stdid' => $this->session->userdata('username'), 'form' => $form, 'term' => $term, 'academic_year' => $academic_year));

        if (empty($data['results'])) {
            show_404();
        } else {
            $data['student'] = $this->setting->readplus('students', array('uname' => $this->session->userdata('username')));
            $data['resume_date'] = $this->setting->readplus('resume_date', array('term' => $term, 'academic_year' => $academic_year));
            $data['student_remarks'] = $this->setting->readplus('remarks', array('term' => $term, 'academic_year' => $academic_year, 'form' => $form, 'stdid' => $this->session->userdata('username')));

            $this->load->view('student/main/card_template', $data);
        }
    }

    public function student_profile() {
        $array = array('uname' => $this->session->userdata('username'));
        $data['results'] = $this->profile->view('students', $array);


        //setting rules
        $this->form_validation->set_rules('uname', 'User Name', '');
        $this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[6]|max_length[12]|callback_match_pass');
        $this->form_validation->set_rules('cpass', 'Comfirm Password', 'trim|required|matches[pass]');
        //if form_val == false or upload ==false ==> true

        if ($this->form_validation->run() == TRUE) {

            $data_login = array(
                'pass' => do_hash($this->input->post('pass'), 'sha1')
            );
            if ($this->profile->update($array, $data_login, 'users')) {

                $this->session->set_flashdata('success', 'Profile Updated');
                redirect('studentctrls/student_profile');
            }
        } else {


            $this->load->view('student/main/student_profile', $data);
        }
    }

    public function match_pass() {
        $field = $this->input->post('pass');
        if ($field == '') {
            $this->form_validation->set_message('The {field} is empty');
        } else {
            if (!preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,12}$/", $field)) {
                //May contain letter and numbers
                // Must contain at least 1 number and 1 letter
                // May contain any of these characters: !@#$%
                // Must be 8-12 characters
                $this->form_validation->set_message('match_pass', 'The {field} field must contain atleast (1) letters, <br>(1) number and character minimum length of 6 and maximum length of 12 then a special character !@#$%'
                );
                return False;
            } else {
                return true;
            }
        }
    }

}
