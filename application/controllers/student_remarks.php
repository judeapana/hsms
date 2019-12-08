<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of student_behaviour
 *
 * @author User
 */
class student_remarks extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('uploadmark');
    }

    public function index()
    {
        $students = $this->uploadmark->readdata('students');
        $data['stdids'] = $students;
        $grading_sys = $this->uploadmark->readdata('grade_sys');
        $data['grading_sys'] = $grading_sys;


        $this->form_validation->set_rules('stdid', 'Student ID', 'required|trim');
        $this->form_validation->set_rules('form', 'Form', 'required|trim');
        $this->form_validation->set_rules('term', 'Term', 'required|trim');
        $this->form_validation->set_rules('semester', 'Semester', 'required|trim');
        $this->form_validation->set_rules('academic_year', 'Academic Year', 'required|trim');
        //    $this->form_validation->set_rules("remarks", "Remarks", "required|trim");
        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'stdid' => $this->input->post('stdid'),
                'form' => $this->input->post('form'),
                'semester' => $this->input->post('semester'),
                'term' => $this->input->post('term'),
                'academic_year' => $this->input->post('academic_year'),
            );

            $data['student_report'] = $this->uploadmark->find_students_n('student_report', $data);

            if (empty($data['student_report'])) {
                $this->session->set_flashdata('error', 'Student Report Not Found');
                redirect('student_remarks');
            } else {
                $data_check_remark = array(
                    'stdid' => $this->input->post('stdid'),
                    'form' => $this->input->post('form'),
                    'semester' => $this->input->post('semester'),
                    'term' => $this->input->post('term'),
                    'academic_year' => $this->input->post('academic_year'),
                    'position' => $this->session->userdata('current_pos'));

                $exist_remark = $this->uploadmark->find_students_n('remarks', $data_check_remark);

                if (!empty($exist_remark[0]['position'])) {
                    $this->session->set_flashdata('error', 'Student Remarks Already Inserted');
                    $this->session->unset_userdata('student_report_format');

                    redirect('student_remarks');
                } else {
                    $this->session->set_userdata('student_report_format', $data['student_report']);
                    $this->session->set_flashdata('success', 'Student Report Generated, Upload Remarks');
                    redirect('student_remarks');
                }
            }
        } else {
            $this->load->view('teacher/main/student_remarks', $data);
        }
    }

    public function burn_dform()
    {
        $this->session->unset_userdata('student_report_format');
        redirect('student_remarks');
    }

    public function insert_remark()
    {
        $this->form_validation->set_rules('remark', 'Remark', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Remark Field Is Required');
            redirect('student_remarks');
        } else {
            $remark_data = $this->session->userdata('student_report_format');
            $data = array(
                'stdid' => $remark_data[0]['stdid'],
                'position' => $this->session->userdata('current_pos'),
                'remark' => $this->input->post('remark'),
                'uname' => $this->session->userdata('username'),
                'academic_year' => $remark_data[0]['academic_year'],
                'semester' => $remark_data[0]['semester'],
                'form' => $remark_data[0]['form'],
                'term' => $remark_data[0]['term']
            );

            if ($this->uploadmark->insertmarks('remarks', $data)) {
                $this->session->set_flashdata('success', 'Remark Successfully Inserted');
                $this->session->unset_userdata('student_report_format');
                redirect('student_remarks');
            } else {
                $this->session->set_flashdata('error', 'Remark Not Inserted, Contact Administrator');
                $this->session->unset_userdata('student_report_format');
                redirect('student_remarks');
            }
        }
    }

}
