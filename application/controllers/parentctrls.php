<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of parentctrls cpanel
 *
 * @author User
 */
class parentctrls extends CI_Controller
{

    //put your code here

    public function index()
    {
        if ($this->session->userdata('usertype') == 'parent') {
            $this->set_flashdata('error', 'Parent login is currently not available. Coming in Current Updates ');
            redirect(base_url() . 'users/parent');

            //$this->load->view('parent/main/index');
        } else {
            //destroying any available session
            $this->session->sess_destroy();
            redirect(base_url() . 'users/parent');
        }
    }

}
