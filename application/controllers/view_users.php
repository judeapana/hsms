<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of viewusers
 *
 * @author User
 */
class view_users extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('view_user');
        $this->load->model('setting');
        //$this->load->library('pdf');
    }

    public function index($option) {
        $data['results'] = $this->view_user->view_all($option);
        $data['option'] = $option;
        $this->load->view('admin/main/view_' . $option, $data);
    }

    public function get_teachers() {


        $id = $this->input->post('id');
        if (!empty($id) && isset($id)) {


            $results = $this->view_user->specify_view('teachers', $id);
            $position = $this->setting->read('position');
            $subject = $this->setting->read('subjects');



            $data = form_open('update_users/teachers/' . $results[0]['id']);
            $data1 = ' <div class="col">
                            <div class="form-group"><label>Current Position</label>
        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="current_pos" >';



            $data2 = ' </select>   </div>
                        </div>
                        <div class="col">
                            <div class="form-group"><label>Subject Area</label>
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="subject_area">';


            $data3 = '      </select>
                        </div>
                        </div>
                        <div class="modal-footer"><button class="btn btn-secondary " type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary submit" type="submit">Save Changes</button></div>';
        }
        echo $data;
        echo $data1;
        if (!empty($position)) {
            foreach ($position as $rows) {
                echo '<option value="' . $rows['position'] . '">' . $rows['position'] . '</option>';
            }
        } else {
            echo '<option value="">No Position Available</option>';
        }

        echo $data2;
        foreach ($subject as $rows) {
            echo '<option value="' . $rows['name'] . '">' . $rows['name'] . '</option>';
        }
        echo $data3;
    }

    function prep_delete($option) {

        $id = $this->input->post('id');
        if (isset($id) && !empty($id)) {
            $results = $this->view_user->specify_view($option, $id);
            $data = '';
            foreach ($results as $rows) {
                $data .= form_open('delete_users/' . $option . '/' . $rows['id'] . '/' . $rows['uname']) . '<div class="card text-danger border-primary">
                            <div class="card-header">
                                <h5 class="text-capitalize mb-0">' . $option . ' Name : ' . $rows['fname'] . ' ' . $rows['lname'] . '</h5>
                            </div>
                            <div class="card-body">
                                <p class="text-capitalize card-text">do you want to authorise this delete ?</p>
                            </div>
                        </div><div class="modal-footer"><button class="btn btn-secondary" type="reset" data-dismiss="modal">No</button>
                    <button class="btn btn-danger" type="submit">Yes</button></div>';
            }
        }
        echo $data;
    }

    public function get_students() {


        $id = $this->input->post('id');
        if (!empty($id) && isset($id)) {


            $results = $this->view_user->specify_view('students', $id);
            $data = '';
            foreach ($results as $rows) {


                $data .=form_open('update_users/students/' . $rows['id'] . '/' . $rows['stdid']) . '  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control form-control"  value="' . $rows['fname'] . '"  name="fname"/>
                    </div>
                    
                        <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control form-control" value="' . $rows['lname'] . '" name="lname"/>
                        </div>
                    
                        <div class="form-group">
                        <label>Nationality</label>
                        <input type="text" class="form-control form-control" value="' . $rows['nationality'] . '" name="nationality"/>
                        </div>
                    
                        <div class="form-group">
                        <label>Date Of Birth</label>
                        <input class="form-control" type="date" value="' . $rows['date_of_birth'] . '" name="dateofbirth"/>
                        </div>
                    
                        <div class="form-group">
                        <label>Contact Number</label>
                        <input type="text" class="form-control form-control" value="' . $rows['contact'] . '" name="contact"/>
                        </div>
                        
                        <div class="form-group">
                        <label>Home Town</label>
                        <input type="text" class="form-control form-control" value="' . $rows['hometown'] . '" name="hometown"/>
                        </div>
                        
                        <div class="form-group">
                        <label>Postal Address</label>
                        <input type="text" class="form-control form-control" value="' . $rows['postaladdr'] . '" name="address"/>
                        </div>
                        
                        <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" class="form-control form-control" value="' . $rows['email'] . '" name="email"/>
                        </div>

                        <div class="form-group">
                        <label>Programme</label>
                        <select class="form-control" name="stdprogram">';


                $data2 = '       </select>
                       
                        </div>
                        
                        <div class="form-group">
                            <label>Class Option</label>
                            </div>
                            <select class="form-control"  name="stdclass">';



                $data3 = '   </select> 
                 <br>              
                <div class="form-group">
                <label>House Option</label>
                <select class="form-control" value="' . $rows['stdhouse'] . '" name="stdhouse">

                  <option value="Hawa House">Hawa House</option>
                  <option value="Fidelity House">Fidelity House</option>           
                  <option value="Nkrumah House">Nkrumah House</option>           
                  <option value="Ampofo House">Ampofo House</option>           
                  <option value="Acnachi House">Acnachi House</option>                       
                
                </select>
                </div>
                
            <div  class="form-group">
            <label>Student ID</label>
            <input type="text" class="form-control form-control" value="' . $rows['stdid'] . '"/ name="stdid">
            </div>
            <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
        <button class="btn btn-primary submit" type="submit">Save Changes</button>
    </div>';
            }
        }
        echo $data;
        $programme = $this->setting->read('programmes');
        $class = $this->setting->read('classes');

        foreach ($programme as $rows) {
            echo '<option value="' . $rows['name'] . '">' . $rows['name'] . '</option>';
        }
        echo $data2;
        foreach ($class as $rows) {
            echo '<option value="' . $rows['name'] . '">' . $rows['name'] . '</option>';
        }
        echo $data3;
    }

//         public function get_parents(){
//                
//               
//                $id = $this->input->post("id");
//                if(!empty($id) && isset($id)){
//                    
//                
//                $results = $this->view_user->specify_view("parents",$id);
//                $data = "";
//                foreach ($results as $rows) {
//                    
//               
//                $data .='<div class="col">
//                            <div class="form-group"><label>Student ID (Parent&#39;s  ward ID)</label>
//                            <input type="text" class="form-control form-control" value="'.$rows['stduname'].'"/></div>
//                        </div>';
//                 
//            }
//                 }
//            echo $data;
//
//            
//                }

    public function pdf_report($option, $id) {
        //generating pdf report for users
        if ($option == 'administrators') {

            $data['result'] = $this->view_user->specify_view($option, $id);
            $this->load->view('admin/main/report_' . $option, $data);

        } elseif ($option == 'teachers') {

            $data['result'] = $this->view_user->specify_view($option, $id);
      $this->load->view('admin/main/report_' . $option, $data);



        } elseif ($option == 'students') {

            $data['result'] = $this->view_user->specify_view($option, $id);
            foreach ($data as $value) {
                $ptuname = $value[0]['ptuname'];
            }
            $data['ptresult'] = $this->view_user->get_parent_details($ptuname);
            $this->load->view('admin/main/report_' . $option, $data);

        } elseif ($option == 'parents') {

            $data['result'] = $this->view_user->specify_view($option, $id);
            $this->load->view('admin/main/report_' . $option, $data);

        } else {
            show_404();
        }
    }

}
