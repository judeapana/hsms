<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of adminctrls
 *
 * @author User
 */
class adminctrls extends CI_Controller
{

    //put your code here
    public function __construct()
    {
        parent::__construct();
        $this->load->model('profile');
        $this->load->model('setting');
    }

    public function index()
    {
        if ($this->session->userdata('usertype') == 'admin') {
            //    $this->session->mark_as_temp("usertype",10);
            //creating session to keep user in check
            $array = array('uname' => $this->session->userdata('username'));
            $data = $this->profile->view('administrators', $array);
            $this->session->set_userdata('profileimg', $data[0]['profileimg']);

            //pulling data to fill site analysis on index page of adminctrls;
            $data['users'] = $this->setting->read('users');
            $data['teachers'] = $this->setting->read('teachers');
            $data['parents'] = $this->setting->read('parents');
            $data['students'] = $this->setting->read('students');
            $data['administrators'] = $this->setting->read('administrators');
            $data['academic_year'] = $this->setting->read('academic_year');
            $data['programmes'] = $this->setting->read('programmes');
            $data['subjects'] = $this->setting->read('subjects');
            //loading view with data
            $this->load->view('admin/main/index', $data);
        } else {
            //destroying any available session
            $this->session->sess_destroy();
            redirect(base_url() . 'users/admin');
        }
    }

}
