<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of registers
 *
 * @author Gentech
 */
class create_users extends CI_Controller {

    /**
     * creating users and inserting into database
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('create_user');
        $this->load->model('setting');
    }

    public function teachers() {


        //imgupload configurations
        $config['upload_path'] = 'assets/images/users/teachers';
        $config['max_size'] = 1024;
        $config['allowed_types'] = 'jpg|jpeg';
        $config['file_name'] = 'teacher' . random_string('alnum', 20);

        $this->load->library('upload', $config);
        //setting rules
        $this->form_validation->set_rules('fname', 'First Name', 'trim|required|max_length[15]|min_length[2]'); /*alpha*/
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|max_length[15]|min_length[2]');/*alpha*/
        $this->form_validation->set_rules('uname', 'User Name', 'trim|required|max_length[15]|min_length[5]|is_unique[teachers.uname]|is_unique[users.uname]');
        $this->form_validation->set_rules('sex', 'sex', 'trim|required');
        $this->form_validation->set_rules('contact', 'contact', 'trim|required|is_unique[teachers.contact]|exact_length[10]|numeric|is_unique[users.contact]');
        $this->form_validation->set_rules('address', 'address', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('email', 'email', 'valid_email|required|trim|is_unique[teachers.email]|is_unique[users.email]');
        $this->form_validation->set_rules('app_date', 'Appearance Date', 'trim|required');
        $this->form_validation->set_rules('othernum', 'Other Contact', 'trim|exact_length[10]|numeric');
        $this->form_validation->set_rules('subject_area', 'subject area', 'trim|required');


        //if form_val == false or upload ==false ==> true
        if ($this->form_validation->run() == FALSE || $this->upload->do_upload('profileimg') == FALSE) {
            $data['error'] = $this->upload->display_errors();
            $this->load->model('setting');
            $data['subjects'] = $this->setting->read('subjects');
            $data['position'] = $this->setting->read('position');
            $this->load->view('admin/main/reg_teachers', $data);
        } else {
            $dataimg = array('upload_data' => $this->upload->data());
            //                       prep data to submit 
            $data = array(
                'fname' => ucfirst($this->input->post('fname')),
                'uname' => ucfirst($this->input->post('uname')),
                'lname' => ucfirst($this->input->post('lname')),
                'sex' => ucfirst($this->input->post('sex')),
                'contact' => ucfirst($this->input->post('contact')),
                'address' => ucfirst($this->input->post('address')),
                'profileimg' => $dataimg['upload_data']['file_name'],
                'email' => $this->input->post('email'),
                'app_date' => $this->input->post('app_date'),
                'subject_area' => $this->input->post('subject_area'),
                'othernum' => $this->input->post('othernum'),
                'current_pos' => 'Teacher'
            );
            $pass = random_string('alnum', 6);
            $data_login = array(
                'uname' => $this->input->post('uname'),
                'email' => $this->input->post('email'),
                'contact' => $this->input->post('contact'),
                'usertype' => 'teacher',
                'pass' => do_hash("1234"),
                'active' => 1,
                'acc_level' => 200
            );

            // 'pass' => do_hash($pass, 'sha1'),
            //sms api
            // $msg='Your User name Is '.$this->input->post('uname').' Your Password Is'.$pass.' Thank for signing Up ';
            // $this->load->library('Phpsms');
            // if($this->phpsms->sendmsg($this->input->post('contact'),$msg)){
            //     $msgerror = $this->phpsms->sendmsg($this->input->post('contact'),$msg);
            //     $this->session->set_flashdata('error',$msgerror );
            //     redirect(current_url(), 'refresh');
            // }



            if ($this->create_user->insert_teacher($data)) {

                $this->create_user->create_login($data_login);
                $this->session->set_flashdata('added', 'Teacher Account Created');
            } else {
                $this->session->set_flashdata('Error', 'Teacher Account Not Created');
            }
            $data['error'] = '';
            redirect(current_url(), 'refresh');
        }
    }

    public function students() {

        $this->form_validation->set_rules('fname', 'First Name', 'trim|required|max_length[15]|min_length[2]');
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|max_length[15]|min_length[2]');
        //  $this->form_validation->set_rules("uname","User Name","trim|required|max_length[15]|min_length[5]|is_unique[students.uname]|is_unique[users.uname]");
        $this->form_validation->set_rules('sex', 'sex', 'trim|required');
        $this->form_validation->set_rules('contact', 'contact', 'trim|required|is_unique[students.contact]|exact_length[10]|numeric|is_unique[users.contact]');
        $this->form_validation->set_rules('address', 'address', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('email', 'email', 'valid_email|required|trim|is_unique[students.email]|is_unique[users.email]');
        $this->form_validation->set_rules('dateofbirth', 'Date of Birth', 'trim|required');

        //parent data
        $this->form_validation->set_rules('ptfname', 'Parent First Name', 'trim|required|max_length[15]|min_length[2]');
        $this->form_validation->set_rules('ptlname', ' Parent Last Name', 'trim|required|max_length[15]|min_length[2]');
        $this->form_validation->set_rules('ptuname', 'Parent User Name', 'trim|required|max_length[15]|min_length[5]|is_unique[parents.ptuname]|is_unique[users.uname]');
        $this->form_validation->set_rules('ptsex', ' Parent sex', 'trim|required');
        $this->form_validation->set_rules('ptcontact', ' Parent contact', 'trim|required|is_unique[parents.ptcontact]|exact_length[10]|numeric|is_unique[users.contact]');
        $this->form_validation->set_rules('ptemail', 'Parent email', 'valid_email|required|trim|is_unique[parents.ptemail]|is_unique[users.email]');
        $this->form_validation->set_rules('stdprogram', 'Student Programme', 'trim|required');
        $this->form_validation->set_rules('stdhouse', 'tudent House', 'trim|required');
        $this->form_validation->set_rules('stdclass', 'student Id', 'trim|required');
        $this->form_validation->set_rules('nationality', 'Student Nationality', 'trim|required');
        $this->form_validation->set_rules('ptoccupation', 'Parent Occupation', 'trim|required');
        $this->form_validation->set_rules('region', 'region', 'trim|required');
        $this->form_validation->set_rules('hometown', 'Home town', 'trim|required|max_length[15]|min_length[2]');
        $this->form_validation->set_rules('reltostd', 'Relationship', 'trim|required|max_length[15]|min_length[2]|alpha');
        $this->form_validation->set_rules('stdid', 'Student ID', 'trim|required|is_unique[students.uname]');

        //getting the current academic_year for each student according to the current datetime last year entered by admin
        $ca_demic = $this->setting->read('academic_year');
        //end gets last year 
        //imgupload
        //student image with config
        $year = end($ca_demic);
        $config['upload_path'] = 'assets/images/users/students';
        $config['max_size'] = 1024;
        $config['allowed_types'] = 'png|jpg|jpeg';
        $config['file_name'] = $this->input->post('fname').$this->input->post('lname').random_string('alnum', 20).$year['year'];
        $this->load->library('upload', $config);
        //loading student data for insert and validating

        //valudating if form validation run and upload run
        if ($this->form_validation->run() == FALSE || $this->upload->do_upload('profileimg') == FALSE) {
            $data['error'] = $this->upload->display_errors();
            $this->load->model('setting');
            $data['subjects'] = $this->setting->read('programmes');
            $data['classes'] = $this->setting->read('classes');
            $this->load->view('admin/main/reg_students', $data);
        } else {
            $dataimg = array('upload_data' => $this->upload->data());
            // formatting data for insert
            //getting the current academic_year for each student according to the current datetime last year entered by admin
            $ca_demic = $this->setting->read('academic_year');
            $year = end($ca_demic);
            $data = array(
                'fname' => ucfirst($this->input->post('fname')),
                'uname' => ucfirst($this->input->post('stdid')),
                'lname' => ucfirst($this->input->post('lname')),
                'sex' => $this->input->post('sex'),
                'contact' => $this->input->post('contact'),
                'postaladdr' => ucfirst($this->input->post('address')),
                'profileimg' => $dataimg['upload_data']['file_name'],
                'email' => $this->input->post('email'),
                'nationality' => ucfirst($this->input->post('nationality')),
                'date_of_birth' => $this->input->post('dateofbirth'),
                'hometown' => ucfirst($this->input->post('hometown')),
                'region' => $this->input->post('region'),
                'stdprogram' => ucfirst($this->input->post('stdprogram')),
                'stdclass' => ucfirst($this->input->post('stdclass')),
                'stdid' => $this->input->post('stdid'),
                'ptuname' => $this->input->post('ptuname'),
                'stdhouse' => ucfirst($this->input->post('stdhouse')),
                'academic_year' => $year['year'],
                'dismissed' => 'No'
            );

            $data_parent = array(
                'ptuname' => $this->input->post('ptuname'),
                'ptfname' => ucfirst($this->input->post('ptfname')),
                'ptlname' => ucfirst($this->input->post('ptlname')),
                'ptcontact' => $this->input->post('ptcontact'),
                'ptsex' => $this->input->post('ptsex'),
                'ptoccupation' => ucfirst($this->input->post('ptoccupation')),
                'reltostd' => ucfirst($this->input->post('reltostd')),
                'ptemail' => $this->input->post('ptemail'),
                'stduname' => $this->input->post('stdid'),
                'dismissed' => 'No',
            );
            $data_login = array(
                'uname' => $this->input->post('stdid'),
                'email' => $this->input->post('email'),
                'contact' => $this->input->post('contact'),
                'usertype' => 'student',
                'pass' => do_hash('1234', 'sha1'),
                'active' => 1,
                'acc_level' => 0
            );
            //parent login credentials
            $data_login_parent = array(
                'uname' => $this->input->post('ptuname'),
                'email' => $this->input->post('ptemail'),
                'contact' => $this->input->post('ptcontact'),
                'usertype' => 'parent',
                'pass' => do_hash('1234', 'sha1'),
                'active' => 1,
                'acc_level' => 0
            );
            if ($this->create_user->insert_student($data) == TRUE && $this->create_user->insert_parent($data_parent) == TRUE) {
                $this->create_user->create_login($data_login);
                $this->create_user->create_login($data_login_parent);
                
                //            //sms api student
//            $msg='Your User name Is '.$this->input->post('uname').' Your Password Is'.$pass.' Thank for signing Up ';
//            $this->load->library('Phpsms');
//            if($this->phpsms->sendmsg($this->input->post('contact'),$msg)){
//                $msgerror = $this->phpsms->sendmsg($this->input->post('contact'),$msg);
//                $this->session->set_flashdata('error',$msgerror );
//                redirect(current_url(), 'refresh');
//            }

                
                $this->session->set_flashdata('added', 'Student Account Created');
            } else {
                //error message
                $this->session->set_flashdata('Error', 'Student Account Not Created');
            }
            $data['error'] = '';
            redirect(current_url(), 'refresh');
        }
    }

    public function administrators() {

        //imgupload
        $config['upload_path'] = 'assets/images/users/admin';
        $config['max_size'] = 1024;
        $config['allowed_types'] = 'jpg|jpeg';
        $config['file_name'] = 'admin' . random_string('alnum', 20);



        $this->load->library('upload', $config);

        $this->form_validation->set_rules('fname', 'First Name', 'trim|required|max_length[15]|min_length[2]');
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|max_length[15]|min_length[2]');
        $this->form_validation->set_rules('uname', 'User Name', 'trim|required|max_length[15]|min_length[5]|is_unique[administrators.uname]|is_unique[users.uname]');
        $this->form_validation->set_rules('sex', 'sex', 'trim|required');
        $this->form_validation->set_rules('contact', 'contact', 'trim|required|is_unique[administrators.contact]|exact_length[10]|numeric|is_unique[users.contact]');
        $this->form_validation->set_rules('address', 'address', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('email', 'email', 'valid_email|required|trim|is_unique[administrators.email]|is_unique[users.email]');

        $this->form_validation->set_rules('othernum', 'Other Contact', 'trim|exact_length[10]|numeric');


        if ($this->form_validation->run() == FALSE || $this->upload->do_upload('profileimg') == FALSE) {
            $data['error'] = $this->upload->display_errors();

            $this->load->view('admin/main/reg_administrators', $data);
        } else {
            $dataimg = array('upload_data' => $this->upload->data());
            //                        
            $data = array(
                'fname' => ucfirst($this->input->post('fname')),
                'uname' => $this->input->post('uname'),
                'lname' => ucfirst($this->input->post('lname')),
                'sex' => $this->input->post('sex'),
                'contact' => $this->input->post('contact'),
                'address' => ucfirst($this->input->post('address')),
                'profileimg' => $dataimg['upload_data']['file_name'],
                'email' => $this->input->post('email'),
                'othernum' => $this->input->post('othernum'),
            );

            $data_login = array(
                'uname' => $this->input->post('uname'),
                'email' => $this->input->post('email'),
                'contact' => $this->input->post('contact'),
                'usertype' => 'admin',
                'pass' => do_hash('1234', 'sha1'),
                'active' => 1,
                'acc_level' => 911
            );
            if ($this->create_user->insert_administrator($data)) {
                $this->create_user->create_login($data_login);
                $this->session->set_flashdata('added', 'Administrator Account Created');
            } else {
                $this->session->set_flashdata('Error', 'Administrator Account  Not Created');
            }
            $data['error'] = '';
            redirect(current_url(), 'refresh');
        }
    }
    
    public function preview(){
       print_r($_POST);
    }

}
