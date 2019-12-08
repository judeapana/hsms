<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of uploadmarks
 *
 * @author User
 */
class uploadmarks extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('uploadmark');
    }

    public function index() {
        $programme = $this->uploadmark->find_students('programmes', array('elect_sub1' => $this->session->userdata('subject_area'),
            'elect_sub2' => $this->session->userdata('subject_area'),
            'elect_sub3' => $this->session->userdata('subject_area'),
            'elect_sub4' => $this->session->userdata('subject_area'),
            'core_sub1' => $this->session->userdata('subject_area'),
            'core_sub2' => $this->session->userdata('subject_area'),
            'core_sub3' => $this->session->userdata('subject_area'),
            'core_sub4' => $this->session->userdata('subject_area'),
            'core_sub5' => $this->session->userdata('subject_area'),
            'core_sub6' => $this->session->userdata('subject_area'),
            'core_sub7' => $this->session->userdata('subject_area')
                ), "name");


        if (empty($programme)) {
            $this->session->set_flashdata("error", "Sorry, Your Subject Area Is Not Available.");
            redirect("teacherctrls", "refresh");
        }
        for ($i = 0; $i < count($programme); $i++) {
            $students[] = $this->uploadmark->find_students('students', array('stdprogram' => $programme[$i]['name']), 'stdid');
            $classes[] = $this->uploadmark->find_students('students', array('stdprogram' => $programme[$i]['name']), 'stdclass');

            $data['stdids'] = array_filter($students);
            $data['stclass'] = array_filter($classes);
        }

        $grading_sys = $this->uploadmark->readdata('grade_sys');
        $data['grading_sys'] = $grading_sys;


        $this->form_validation->set_rules('stdid', 'Student ID', 'required|trim');
        $this->form_validation->set_rules('stdclass', 'Student Class', 'required|trim');
        $this->form_validation->set_rules('form', 'Form', 'required|trim');
        $this->form_validation->set_rules('term', 'Term', 'required|trim');
        $this->form_validation->set_rules('semester', 'Semester', 'required|trim');
        $this->form_validation->set_rules('class_score', ' Score', 'required|trim');
        $this->form_validation->set_rules('exams_score', ' Score', 'required|trim');
        $this->form_validation->set_rules('attendance', ' Attendance', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('teacher/main/uploadmarks', $data);
        } else {
            //checking of student class and id match 
            $find_stdclass_stdid = $this->uploadmark->find_students_n("students", array("stdid" => $this->input->post('stdid'), "stdclass" => $this->input->post('stdclass')));
            if (empty($find_stdclass_stdid)) {
                $this->session->set_flashdata('error', 'Student Class Or ID doesnt Exist Mis-Match Error');
                redirect('uploadmarks');
            }
            $class_score = $this->input->post('class_score');
            $exams_score = $this->input->post('exams_score');
            $total_score = $class_score + $exams_score;

            if ($total_score > 101) {
                $this->session->set_flashdata('error', 'Total Score  Cant Be Greater Than 100!');
                redirect('uploadmarks');
            }

            $grade_sys = $this->uploadmark->grade_order();

//grading sys
            foreach ($grade_sys as $grades) {
                if ($total_score <= $grades['to_int']) {
                    $grade = $grades['gp'];
                    $remarks = $grades['remarks'];
                    break;
                }
            }
            $data = array(
                'stdid' => $this->input->post('stdid'),
                'stdclass' => $this->input->post('stdclass'),
                'form' => $this->input->post('form'),
                'term' => $this->input->post('term'),
                'semester' => $this->input->post('semester'),
                'class_score' => $this->input->post('class_score'),
                'exams_score' => $this->input->post('exams_score'),
                'attendance' => $this->input->post('attendance'),
                'total_score' => $total_score,
                'grade' => $grade,
                'remarks' => $remarks,
                'subject' => $this->session->userdata('subject_area'),
                'academic_year' => $this->session->userdata('academic_year'),
                'submitttedby' => $this->session->userdata('username'));
            $select = 'subject,stdid,form,term,semester';
            $where = array(
                'subject' => $this->session->userdata('subject_area'),
                'semester' => $this->input->post('semester'),
                'stdid' => $this->input->post('stdid'),
                'form' => $this->input->post('form'),
                'term' => $this->input->post('term')
            );
            if ($this->uploadmark->res_exist('student_report', $select, $where) > 0) {
                $this->session->set_flashdata('error', 'Student Results Already Exist. Please Hit Back Button To Get Data Back');
                redirect('uploadmarks');
            } else {
                $this->uploadmark->insertmarks('student_report', $data);
                $this->session->set_flashdata('success', 'Student Results Submitted');
                redirect('uploadmarks');
            }
        }
    }

    public function enquiry() {


        $programme = $this->uploadmark->find_students('programmes', array('elect_sub1' => $this->session->userdata('subject_area'),
            'elect_sub2' => $this->session->userdata('subject_area'),
            'elect_sub3' => $this->session->userdata('subject_area'),
            'elect_sub4' => $this->session->userdata('subject_area'),
            'core_sub1' => $this->session->userdata('subject_area'),
            'core_sub2' => $this->session->userdata('subject_area'),
            'core_sub3' => $this->session->userdata('subject_area'),
            'core_sub4' => $this->session->userdata('subject_area'),
            'core_sub5' => $this->session->userdata('subject_area'),
            'core_sub6' => $this->session->userdata('subject_area'),
            'core_sub7' => $this->session->userdata('subject_area')
                ), "name");



        for ($i = 0; $i < count($programme); $i++) {
            $students[] = $this->uploadmark->find_students('students', array('stdprogram' => $programme[$i]['name']), 'stdid');
            $classes[] = $this->uploadmark->find_students('students', array('stdprogram' => $programme[$i]['name']), 'stdclass');

            $data['stdids'] = array_filter($students);
            $data['stclass'] = array_filter($classes);
        }

        $grading_sys = $this->uploadmark->readdata('grade_sys');
        $data['grading_sys'] = $grading_sys;


        $this->form_validation->set_rules('academic_year_e', 'Academic Year', 'required|trim');
        $this->form_validation->set_rules('form_e', 'form', 'required|trim');
        $this->form_validation->set_rules('class_e', 'class', 'required|trim');
        $this->form_validation->set_rules('term_e', ' term', 'required|trim');
        $this->form_validation->set_rules('semester_e', ' semester', 'required|trim');

        if ($this->form_validation->run() == False) {
            $this->load->view('teacher/main/uploadmarks', $data);
        } else {

            $data = array(
                'academic_year' => $this->input->post('academic_year_e'),
                'subject'=>$this->session->userdata("subject_area"),
                'form' => $this->input->post('form_e'),
                'stdclass' => $this->input->post('class_e'),
                'semester' => $this->input->post('semester_e'),
                'term' => $this->input->post('term_e'),
                'submitttedby' => $this->session->userdata('username')
            );


            $select = 'academic_year,form,stdclass,semester,term,submitttedby';
            $results = $this->uploadmark->res_exist('student_report', $select, $data);

            if (empty($results)) {
                $this->session->set_flashdata('error', 'Enquiry On Information Not Found');
                redirect('uploadmarks');
            } else {
                $this->session->set_userdata('data_equiry', $data);

                redirect('uploadmarks/dataenquiry');
            }
        }
    }

    public function dataenquiry() {
        $std_entire = $this->session->userdata('data_equiry');
        //readdata was repeated find other form if exist
        $data['results'] = $this->uploadmark->readdata_enquiry('student_report', $std_entire);
        
        $this->load->view('teacher/main/enquiry', $data);
    }

}
