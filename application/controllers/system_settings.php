<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of system_settings
 *
 * @author User
 */
class system_settings extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('setting');
    }

    public function reg_classes() {
        $data['results'] = $this->setting->read('classes');
       //looping through the class getting the name 
        for ($i = 0; $i < count($data['results']); $i++) {
            //name of classes are extracted
            $where = $data['results'][$i]['name'];
            //number of times the class name hits is returned with the name of the class stored in $num[$where] $where variable
            $num[$where] = $this->setting->res_exist('students', 'stdclass', array('stdclass' => $where));
            }
            //looping through and pushing number of times class hits to respect classes arrays
        for ($i = 0; $i < count($data['results']); $i++) {
             $where = $data['results'][$i]['name'];           
             //pushing respect number of student in class to respective class arrays
             array_push($data['results'][$i], ['num'=>$num[$where]]);            
        }
       
        $this->form_validation->set_rules('class', 'class', 'trim|required|is_unique[classes.name]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/main/reg_class', $data);
        } else {
            $name = $this->input->post('class');
            $data = array('name' => ucfirst($name));
            if ($this->setting->create('classes', $data)) {
                $this->session->set_flashdata('success', 'Class  Added');
                redirect('system_settings/reg_classes');
            } else {
                $this->session->set_flashdata('error', 'Class  Was Not Added');
                redirect('system_settings/reg_classes');
            }
        }
    }


    public function reg_subjects() {
        $data['results'] = $this->setting->read('subjects');
        $data['results_programme'] = $this->setting->read('programmes');
               //looping through the programme getting the name 
        for ($i = 0; $i < count($data['results_programme']); $i++) {
            //name of programmes are extracted
            $where = $data['results_programme'][$i]['name'];
            //number of times the programmmes name hits is returned with the name of the programme stored in $num[$where] $where variable
            $num[$where] = $this->setting->res_exist('students', 'stdprogram', array('stdprogram' => $where));
            }
            //looping through and pushing number of times programme hits to respect programmes arrays
        for ($i = 0; $i < count($data['results_programme']); $i++) {
             $where = $data['results_programme'][$i]['name'];           
             //pushing respect number of student in programme to respective program arrays
             array_push($data['results_programme'][$i], ['num'=>$num[$where]]);            
        }
      
        $this->form_validation->set_rules('subject', 'Subject', 'trim|required|is_unique[subjects.name]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/main/reg_subject', $data);
        } else {
            $name = $this->input->post('subject');
            $data = array('name' => $name);
            if ($this->setting->create('subjects', $data)) {
                $this->session->set_flashdata('success', 'Subject  Added');
                redirect('system_settings/reg_subjects');
            } else {
                $this->session->set_flashdata('error', 'Subject  Was Not Added');
                redirect('system_settings/reg_subjects');
            }
        }
    }

    public function reg_programmes() {
        $data['subjects'] = $this->setting->read('subjects');
        $data['results'] = $this->setting->read('programmes');

        $this->form_validation->set_rules('programme', 'programme', 'trim|required|is_unique[programmes.name]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/main/reg_program', $data);
        } else {
            $data = array(
                'name' => $this->input->post('programme')
            );
            if ($this->setting->create('programmes', $data)) {
                $this->session->set_flashdata('success', 'Subject  Added To Programme');
                redirect('system_settings/reg_programmes');
            } else {
                $this->session->set_flashdata('error', 'Subject Not Added To Programme');
                redirect('system_settings/reg_programmes');
            }
        }
    }

    public function set_years() {
        $data['results'] = $this->setting->read('academic_year');

                       //looping through the year getting the name 
        for ($i = 0; $i < count($data['results']); $i++) {
            //name of year are extracted
            $where = $data['results'][$i]['year'];
            //number of times the year name hits is returned with the name of the year stored in $num[$where] $where variable
            $num[$where] = $this->setting->res_exist('students', 'academic_year', array('academic_year' => $where));
            }
            //looping through and pushing number of times year hits to respect years arrays
        for ($i = 0; $i < count($data['results']); $i++) {
             $where = $data['results'][$i]['year'];           
             //pushing respect number of student in year to respective year arrays
             array_push($data['results'][$i], ['num'=>$num[$where]]);            
        }
        $this->form_validation->set_rules('from_year', 'From Year', 'trim|required|differs[to_year]');
        $this->form_validation->set_rules('to_year', 'To Year', 'trim|required|differs[from_year]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/main/reg_acc_year', $data);
        } else {
            $year = $this->input->post('from_year') . '/' . $this->input->post('to_year');
            $data = array(
                'year' => $year,
                'addedby' => $this->session->userdata('username'));
            //checking if academic year already exist
            if ($this->setting->res_exist("academic_year", "year", array("year" => $year)) < 1) {

                if ($this->setting->create('academic_year', $data)) {
                    $this->session->set_flashdata('success', 'Academic Year Added');
                    redirect('system_settings/set_years');
                } else {
                    $this->session->set_flashdata('error', 'Academic Year Was Not Added');
                    redirect('system_settings/set_years');
                }
            } else {
                $this->session->set_flashdata('error', 'Academic Year Already Exist');
                redirect('system_settings/set_years');
            }
        }
    }

    public function grade_sys() {
        $data['results'] = $this->setting->read('grade_sys');

        $this->form_validation->set_rules('from_int', 'From Number', 'trim|required|differs[to_int]');
        $this->form_validation->set_rules('to_int', 'To Number', 'trim|required|differs[from_int]');
        $this->form_validation->set_rules('gp', 'Grade Point', 'trim|required');
        $this->form_validation->set_rules('remarks', 'Remarks', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/main/grade_sys', $data);
        } else {
            $data = array(
                'from_int' => $this->input->post('from_int'),
                'to_int' => $this->input->post('to_int'),
                'gp' => $this->input->post('gp'),
                'remarks' => $this->input->post('remarks'));
            if ($this->setting->create('grade_sys', $data)) {
                $this->session->set_flashdata('success', 'Mark Added');
                redirect('system_settings/grade_sys');
            } else {
                $this->session->set_flashdata('error', 'Mark Was Not Added');
                redirect('system_settings/grade_sys');
            }
        }
    }

    public function position() {
        $data['results'] = $this->setting->read('position');
        $data['results_register_to'] = $this->setting->read('teachers');
        $this->form_validation->set_rules('position', 'Position', 'trim|required|is_unique[position.position]');
        // $this->form_validation->set_rules('reg_to', 'Register To', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/main/reg_position', $data);
        } else {
            $data = array(
                'position' => $this->input->post('position'),
                    // 'registered_to' => $this->input->post('reg_to'),
            );
            if ($this->setting->create('position', $data)) {
                $this->session->set_flashdata('success', 'Position Added');
                redirect('system_settings/position');
            } else {
                $this->session->set_flashdata('error', 'Position Was Not Added');
                redirect('system_settings/position');
            }
        }
    }

    public function delete($tb, $where, $message = 'mark', $loc = 'grade_sys', $dir = 'system_settings') {
        if ($this->setting->delete($tb, $where)) {
            $this->session->set_flashdata('success', $message . ' Deleted Successfully');
            redirect($dir . '/' . $loc);
        } else {
            $this->session->set_flashdata('error', $message . 'Not Deleted');
        }
    }

    public function add_program() {

        $id = $this->input->post('id');
        if (!empty($id) && isset($id)) {

            $results = $this->setting->readplus('programmes', array('id' => $id));

            $subjects = $this->setting->read('subjects', $id);
            $data1 = '';
            $data2 = '';
            $data1 .= form_open('system_settings/edit_program/' . $results[0]['id']) . '
                    <div class="col">
                            <div class="form-group"><label>Programme</label>
                            <select class="form-control" >
                <option value="' . $results[0]['name'] . '">' . $results[0]['name'] . '</option>            
                </select></div>
                            ';
            $data2 .= '</div>
                                <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="submit">Save</button></div></form>';
        }
        echo $data1;
        for ($i = 1; $i < 5; $i++) {
            echo '<div class="form-group"><label>Elective Subject  <span class="text-muted">' . $i . '</span>
                                </label><select class="form-control" name="subject' . $i . '">
                                <option value="Null">Select</option>';
            foreach ($subjects as $rows) {
                echo '<option value="' . $rows['name'] . '">' . $rows['name'] . '</option>';
            }
            echo '</select></div>';
        }
        echo $data2;
    }

    public function edit_program($id) {
        //making sure no field name is equal to the other
        $this->form_validation->set_rules('subject1', 'Subject', 'required|trim|differs[subject2]|differs[subject3]|differs[subject4]');
        $this->form_validation->set_rules('subject2', 'Subject', 'required|trim|differs[subject1]|differs[subject3]|differs[subject4]');
        $this->form_validation->set_rules('subject3', 'Subject', 'required|trim|differs[subject2]|differs[subject1]|differs[subject4]');
        $this->form_validation->set_rules('subject4', 'Subject', 'required|trim|differs[subject2]|differs[subject3]|differs[subject1]');
        if ($this->form_validation->run() == FALSE) {
            redirect('system_settings/reg_programmes');
        } else {
            $data = array(
                'elect_sub1' => $this->input->post('subject1'),
                'elect_sub2' => $this->input->post('subject2'),
                'elect_sub3' => $this->input->post('subject3'),
                'elect_sub4' => $this->input->post('subject4'),
                'core_sub1' => 'English Language',
                'core_sub2' => 'Social Studies',
                'core_sub3' => 'Core Mathematics',
                'core_sub4' => 'Integrated Science',
                'core_sub5' => 'Information Communication Technology',
                'core_sub6' => 'Physical Education',
                'core_sub7' => 'French'
            );
            if ($this->setting->update('programmes', $data, $id)) {
                $this->session->set_flashdata('success', 'Programme Successfully Updated');
                redirect('system_settings/reg_programmes');
            } else {
                $this->session->set_flashdata('error', 'Programme Not Updated');
                redirect('system_settings/reg_programmes');
            }
        }
    }

}
