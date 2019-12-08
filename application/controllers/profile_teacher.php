<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class profile_teacher extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('profile');
    }

    public function index()
    {
        $array = array('uname' => $this->session->userdata('username'));
        $data['results'] = $this->profile->view('teachers', $array);


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
                redirect('profile_teacher');
            }
        } else {


            $this->load->view('teacher/main/teacher_profile', $data);
        }
    }

    public function uploadimg()
    {
        //imgupload configurations
        $config['upload_path'] = 'assets/images/users/teachers';
        $config['max_size'] = 1024 * 2;
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = 'teacher' .random_string('alnum', 20);



        $this->load->library('upload', $config);
        if ($this->upload->do_upload('profileimg') == TRUE) {

            $dataimg = array('upload_data' => $this->upload->data());
            $data = array('profileimg' => $dataimg['upload_data']['file_name']);
            #update img only

            $id = array('profileimg' => $this->session->userdata('profileimg'));


            if ($this->profile->update($id, $data, 'teachers')) {
                $this->session->set_flashdata('success', 'Profile Image Updated, Changes Will Be Made Next time You Log In');
                redirect('profile_teacher');
            }
        } else {
            $this->session->set_flashdata('error', 'File Format Is Not Accepted Or Image Is Too Big. Recommended File Extension are jpg and jpeg. FILE SIZE should be less than 2MB ');
            redirect('profile_teacher');
        }
    }

    public function match_pass()
    {
        $field = $this->input->post('pass');
        if ($field == '') {
            $this->form_validation->set_message('The {field} is empty');
        } else {
            if (!preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,12}$/", $field)) {
                //May contain letter and numbers
                // Must contain at least 1 number and 1 letter
                // May contain any of these characters: !@#$%
                // Must be 8-12 characters
                $this->form_validation->set_message('match_pass', 'The {field} field must contain atleast (1) letters,(1) number and character minimum length of 6 and maximum length of 12 then a special character !@#$%'
                );
                return False;
            } else {
                return true;
            }
        }
    }

}
