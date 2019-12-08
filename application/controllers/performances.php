<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of performance
 *
 * @author User
 */
class performances extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('performance');
        $this->load->model('setting');
    }

    public function reports()
    {
        $data['academic_year'] = $this->setting->read('academic_year');
        $this->load->view('admin/main/gen_report', $data);
    }

    public function marks()
    {
        $data['results'] = $this->performance->show_mark();
        $data['option'] = '';
        $this->load->view('admin/main/student_marks', $data);
    }

    public function marks_modal()
    {
        $id = $this->input->post('id');
        $data = $this->performance->specific_mark($id);
        foreach ($data as $rows) {


            $data = form_open('performances/update_marks/' . $rows['id']) . '
                        <div class="col">
                            <div class="form-group"><label>Subject</label>
                            <select class="form-control">
                            <option value="12"> ' . $rows['subject'] . '</option>
                            </select></div>
                        </div>
                        <div class="col">
                            <div class="form-group"><label>Class Score</label>
                            <select class="form-control" name="class_score">';
            $data2 = '              
                            </select></div>
                            <div
                                class="form-group"><label>Exams Score</label>
                                <select class="form-control" name="exams_score">';

            $data3 = '   </select></div>
                            <span class="text-muted">CURRENT CLASS SCORE = ' . $rows['class_score'] . '</span>
                            <span class="text-muted">CURRENT CLASS EXAMS = ' . $rows['exams_score'] . '</span>
                            <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="submit">Save Changes</button></div>

</div>
                </form>';
        }
        echo $data;
        for ($i = 0; $i < 31; $i++) {
            echo '<option value="' . $i . '" >' . $i . '</option>';
        }
        echo $data2;
        for ($i = 0; $i < 101; $i++) {
            echo '<option value="' . $i . '">' . $i . '</option>';
        }
        echo $data3;
    }

    public function search_marks()
    {


        $this->form_validation->set_rules('stdid', 'Student ID', 'trim|required|max_length[10]');
        if ($this->form_validation->run() == FALSE) {
            $data['results'] = '';
            $data['academic_year'] = $this->setting->read('academic_year');
            $this->load->view('admin/main/gen_report', $data);
        } else {
            $data = array('stdid' => $this->input->post('stdid'),
                'semester' => $this->input->post('semester'),
                'form' => $this->input->post('form'),
                'academic_year' => $this->input->post('academic_year'),
                'term' => $this->input->post('term')
            );
            $results = $this->performance->search_marks($data);
            if (!empty($results)) {

//setting attributes for popup window       

                $attr = base_url() . 'performances/student_results/' . $results[0]['stdid'] . '/' . $results[0]['semester'] . '/' . $results[0]['form'] . '/' . $results[0]['term'] . '/' . $results[0]['academic_year'];

                $data['search'] = ' <div class="col-md-12">
                                    
                                            <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title m-b-0">Search Results</h4>
                                    </div>
                                    <div class="comment-widgets scrollable">
                                        <!-- Comment Row -->
                                        <div class="d-flex flex-row comment-row m-t-0">
                                            <div class="p-2"><img src="' . base_url() . 'assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle"></div>
                                            <div class="comment-text w-100">
                                                <h6 class="font-medium">Student ID :  ' . $results[0]['stdid'] . '</h6>
                                                <h6 class="font-medium">Semester  :  ' . $results[0]['semester'] . '</h6>
                                                <h6 class="font-medium">Term :  ' . $results[0]['term'] . '</h6>
                                                <div class="comment-footer">
                                                    <span class="text-muted float-right">' . date('D-M-Y', time()) . '</span>
                                                    <a type="button" target="_blank" class="btn btn-info btn-sm" href="' . $attr . '"><span class="mdi mdi-eye"> view Results</span></a>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                </div>';
                $this->session->set_flashdata('success', 'Student Details Found');
                $data['academic_year'] = $this->setting->read('academic_year');
                $this->load->view('admin/main/gen_report', $data);
            } else {
                $this->session->set_flashdata('error', 'Student Report Doesnt Exist, <br> Please Check Student Info You Inserted ');
                redirect('performances/reports');
            }
        }
    }

    public function student_results($stdid, $semister, $form, $term, $acc_from, $acc_to)
    {
        $data1 = array('stdid' => $stdid,
            'semester' => $semister,
            'form' => $form,
            'academic_year' => $acc_from . '/' . $acc_to,
            'term' => $term
        );

        $data['results'] = $this->performance->search_marks($data1, 'students');

        $param = array('stdid' => $stdid);
        $data['results_user'] = $this->performance->student_results_card($param, 'students');

        $data['resume_date'] = $this->performance->student_results_card(array('academic_year' => $acc_from . '/' . $acc_to,
            'term' => $term), 'resume_date');

        $data['student_remarks'] = $this->performance->student_results_card($data1, 'remarks');

        $this->load->view('admin/main/student_results', $data);
    }

    public function update_marks($id)
    {
        $this->form_validation->set_rules('class_score', '', 'trim|required');
        $this->form_validation->set_rules('exams_score', '', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/main/student_results');
        } else {
            $class_score = $this->input->post('class_score');
            $exams_score = $this->input->post('exams_score');
            $total = $class_score + $exams_score;
            if ($total > 101) {
                $this->session->set_flashdata('error', 'Score Cant Be Greater Than 100');
                redirect('performances/marks');
            } else {
                $this->load->model('uploadmark');

                $grade_sys = $this->uploadmark->grade_order();

                foreach ($grade_sys as $grades) {
                    if ($total <= $grades['to_int']) {
                        $grade = $grades['gp'];
                        $remarks = $grades['remarks'];
                        break;
                    }
                }
                $data = array(
                    'class_score' => $class_score,
                    'exams_score' => $exams_score,
                    'total_score' => $total,
                    'grade' => $grade,
                    'remarks' => $remarks
                );
                $this->performance->update('student_report', $id, $data);
                $this->session->set_flashdata('success', 'Student Score Updated Successfully');
                redirect('performances/marks');
            }
        }
    }

}
