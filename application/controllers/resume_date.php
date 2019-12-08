<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of resume_date
 *
 * @author User
 */
class resume_date extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('uploadmark');
    }

    //put your code here

    public function index()
    {
        $this->form_validation->set_rules('academic_year', 'Academic Year', 'required|trim');
        $this->form_validation->set_rules('term', 'Term', 'required|trim');
        $this->form_validation->set_rules('resume', 'Resume Date', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $data['resume_date'] = $this->uploadmark->readdata('resume_date');
            $this->load->view('teacher/main/resume_date', $data);
        } else {
            $data = array(
                'academic_year' => $this->input->post('academic_year'),
                'term' => $this->input->post('term'),
                'resume' => $this->input->post('resume')
            );
            $select = 'term,resume';

            $resumedate_exist = $this->uploadmark->findexist('resume_date', array('term' => $this->input->post('term'),
                'resume' => $this->input->post('resume')), $select);

            if (!empty($resumedate_exist)) {
                $this->session->set_flashdata('error', 'Resume Date Already Exist ');
                redirect('resume_date');
            } else {
                if (count($resumedate_exist[0]['academic_year']) > 4) {
                    $this->session->set_flashdata('error', 'Resume Date Limit Reached For 3 Terms');
                    redirect('resume_date');
                }
                if ($this->uploadmark->insertmarks('resume_date', $data)) {
                    $this->session->set_flashdata('success', 'Resume Date Successfully Inserted');
                    redirect('resume_date');
                } else {
                    $this->session->set_flashdata('error', 'Resume Date Failed Insertion');
                    redirect('resume_date');
                }
            }
        }
    }

    public function delete($tb, $where, $message, $loc = '', $dir = '')
    {
        $this->load->model('setting');
        if ($this->setting->delete($tb, $where)) {
            $this->session->set_flashdata('success', $message . ' Deleted Successfully');
            redirect($dir . '/' . $loc);
        } else {
            $this->session->set_flashdata('error', $message . 'Not Deleted');
        }
    }

}
