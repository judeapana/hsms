<?php $this->load->view("teacher/templates/header"); ?>



<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Upload Student Marks</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <!-- <li class="breadcrumb-item active" aria-current="page"><a href="#" class="btn btn-sm btn-success">View Students</a></li> -->
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->

        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="card">
                    <div class="form-horizontal">
                        <div class="card-body">
                            <h4 class="card-title">Grade Student <a href="" class="" title="things you should now" data-toggle="modal" data-target="#Modal1"><span class="mdi mdi-comment-question-outline"></span></a></h4>

                            <hr>                                               
                            <!-- Col-->
                            <?php echo form_open("uploadmarks/"); ?>
                            <div class="row" >
                                <div class="col-md-6 col-sm-12"><div class="form-group row">
                                        <label class="col-md-3 m-t-5">Student ID</label>
                                        <div class="col-md-9" data-select2-id="11">
                                            <select name="stdid" class="select2 form-control custom-select select2-hidden-accessible" style="width: 100%; height:36px;" data-select2-id="1"  value="<?php echo set_value("stdid"); ?>" >
                                                <option selected disabled data-select2-id="3">Search and Select ID</option>                                         
                                             <?php foreach ($stdids as $rows) { ?>                                         
                                                    <option  value="<?php echo $rows[0]["stdid"]; ?>"><?php echo $rows[0]['stdid']; ?></option>                
                                                <?php } ?>

                                            </select>
                                            <?php echo form_error("stdid", '<div class="text-danger m-t-5">', '</div>'); ?>

                                        </div>
                                    </div></div>
                                <div class="col-md-6 col-sm-12 ">
                                    <div class="form-group row">
                                        <label class="col-md-2 m-t-5 m-l-5">Class</label>
                                        <div class="col-md-9" data-select2-id="ed">
                                            <select name="stdclass" class="select2 form-control custom-select select2-hidden-accessible" style="width: 100%; height:36px;" data-select2-id="ed" tabindex="-1" aria-hidden="true">
                                                <option selected disabled data-select2-id="ed">Search Or Select Class</option>                                         
                                                <?php
                                                foreach (array_unique($stclass, SORT_REGULAR) as $rows) {
                                                    ?>                                         
                                                    <option  value="<?php echo $rows[0]["stdclass"]; ?>"><?php echo $rows[0]['stdclass']; ?></option>
                                                <?php } ?>
                                            </select>
                                            <?php echo form_error("stdclass", '<div class="text-danger m-t-5">', '</div>'); ?>

                                        </div>
                                    </div></div>

                            </div>
                            <hr>
                            <!-- Col-->

                            <div class="row p-t-10" >
                                <div class="col-md-6 col-sm-12"><div class="form-group row">
                                        <label class="col-md-3 m-t-5">Form</label>
                                        <div class="col-md-9" data-select2-id="55">
                                            <select name="form" class="select2 form-control custom-select select2-hidden-accessible" style="width: 100%; height:36px;" data-select2-id="55" tabindex="-1" aria-hidden="true">
                                                <option selected disabled data-select2-id="q">Search Or Select Form</option>                                         
                                                <option value="1">Form 1</option>
                                                <option value="2">Form 2</option>
                                                <option value="3">Form 3</option>
                                                <option value="4">Form 4</option>


                                            </select>
                                            <?php echo form_error("form", '<div class="text-danger m-t-5">', '</div>'); ?>

                                        </div>
                                    </div></div>

                                <div class="col-md-6 col-sm-12 ">
                                    <div class="form-group row">
                                        <label class="col-md-2 m-t-5 m-l-5">Term</label>
                                        <div class="col-md-9" data-select2-id="w">
                                            <select name="term" class="select2 form-control custom-select select2-hidden-accessible" style="width: 100%; height:36px;" data-select2-id="w" tabindex="-1" aria-hidden="true">
                                                <option selected disabled data-select2-id="w">Search Or Select Term</option>                                         
                                                <option value="1">Term 1</option>
                                                <option value="2">Term 2</option>
                                                <option value="3">Term 3</option>
                                            </select>
                                            <?php echo form_error("term", '<div class="text-danger m-t-5">', '</div>'); ?>

                                        </div>
                                    </div></div>

                            </div>

                            <hr>
                            <!-- Col-->
                            <div class="row p-t-10" >
                                <div class="col-md-6 col-sm-12"><div class="form-group row">
                                        <label class="col-md-3 m-t-5">Semester</label>
                                        <div class="col-md-9" data-select2-id="x">
                                            <select name="semester" class="select2 form-control custom-select select2-hidden-accessible" style="width: 100%; height:36px;" data-select2-id="x" tabindex="-1" aria-hidden="true">
                                                <option selected disabled data-select2-id="x">Search Or Select Semester</option>                                         
                                                <option value="1">Semester 1</option>
                                                <option value="2">Semester 2</option>


                                            </select>                 
                                            <?php echo form_error("semester", '<div class="text-danger m-t-5">', '</div>'); ?>

                                        </div>
                                    </div></div>

                                <div class="col-md-6 col-sm-12 ">
                                    <div class="form-group row">
                                        <label class="col-md-4 m-t-5 m-l-5">Attendance</label>
                                        <div class="col-md-7" data-select2-id="b">
                                            <select name="attendance" class="select2 form-control custom-select select2-hidden-accessible" style="width: 100%; height:36px;" data-select2-id="b tabindex="-1" aria-hidden="true">
                                                <option selected disabled data-select2-id="b">Search Or Select Attendance</option>                                         
                                                <?php for ($i = 0; $i < 51; $i++) { ?>
                                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                <?php } ?>
                                            </select>                 
                                            <?php echo form_error("attendance", '<div class="text-danger m-t-5">', '</div>'); ?>

                                        </div>
                                    </div></div>

                            </div>

                            <hr>

                            <!-- Col-->
                            <div class="row p-t-10" >
                                <div class="col-md-6 col-sm-12"><div class="form-group row">
                                        <label class="col-md-4 m-t-5">Class Score</label>
                                        <div class="col-md-7" data-select2-id="e">
                                            <select name="class_score" class="select2 form-control custom-select select2-hidden-accessible" style="width: 100%; height:36px;" data-select2-id="e" tabindex="-1" aria-hidden="true">
                                                <option selected disabled data-select2-id="e">Search Or Select Score</option>                                         
                                                <?php for ($i = 0; $i < 31; $i++) { ?>
                                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                <?php } ?>


                                            </select>
                                            <?php echo form_error("class_score", '<div class="text-danger m-t-5">', '</div>'); ?>

                                        </div>
                                    </div></div>

                                <div class="col-md-6 col-sm-12 ">
                                    <div class="form-group row">
                                        <label class="col-md-4 m-t-5 m-l-5">Exams Score</label>
                                        <div class="col-md-7" data-select2-id="i">
                                            <select name="exams_score" class="select2 form-control custom-select select2-hidden-accessible" style="width: 100%; height:36px;" data-select2-id="i" tabindex="-1" aria-hidden="true">
                                                <option selected disabled data-select2-id="i">Search Or Select Score</option>                                         
                                                <?php for ($i = 0; $i < 71; $i++) { ?>
                                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                <?php } ?>


                                            </select>
                                            <?php echo form_error("exams_score", '<div class="text-danger m-t-5">', '</div>'); ?>

                                        </div>
                                    </div>
                                </div>


                            </div>
                            <hr>
                            <div class="col-md-12 col-sm-12 text-center"> 
                                <button type="submit" class="btn btn-primary btn pull-right">Save</button>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="form-horizontal">
                        <div class="card-body">
                            <h4 class="card-title">Extra Details</h4>
                            <hr>

                            <div id="accordian-4">
                                <div class="card m-t-5">
                                    <a class="card-header link border-top" data-toggle="collapse" data-parent="#accordian-4" href="#Toggle-3" aria-expanded="true" aria-controls="Toggle-3">
                                        <i class="mdi mdi-chevron-double-down" aria-hidden="true"></i>
                                        <span class="text-primary">See Teacher's Info</span>
                                    </a>
                                    <div id="Toggle-3" class="multi-collapse collapse" style="">
                                        <div class="card-body widget-content">
                                            <p class="text-muted">Name : <span class="text-red"><?php echo $this->session->userdata("fullname"); ?></span></p><hr>
                                            <p class="text-muted">Teacher ID : <span class="text-red"><?php echo $this->session->userdata("username"); ?></span></p><hr>
                                            <p class="text-muted">Subject Master : <span class="text-red"><?php echo $this->session->userdata("subject_area"); ?></span></p><hr>
                                            <p class="text-muted">Position : <?php echo $this->session->userdata("current_pos"); ?></p><hr>
                                            <p class="text-muted">Email Address : <?php echo $this->session->userdata("email"); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="accordian-5">
                                <div class="card m-t-5">
                                    <a class="card-header link border-top" data-toggle="collapse" data-parent="#accordian-5" href="#Toggle-5" aria-expanded="true" aria-controls="Toggle-5">
                                        <i class="mdi mdi-chevron-double-down" aria-hidden="true"></i>
                                        <span class="text-primary">See Grading System</span>
                                    </a>
                                    <div id="Toggle-5" class="multi-collapse collapse" style="">
                                        <div class="card-body widget-content">
                                            <table class="table table-striped table-bordered table-primary">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Mark(%)</th>
                                                        <th scope="col">Mark(%)</th>
                                                        <th scope="col">Grade</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($grading_sys as $rows) { ?>
                                                        <tr>
                                                            <td><?php echo $rows['from_int']; ?></td>
                                                            <td><?php echo $rows['to_int']; ?></td>
                                                            <td><?php echo $rows['gp']; ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="accordian-11">
                                <div class="card m-t-5">
                                    <a class="card-header link border-top" data-toggle="collapse" data-parent="#accordian-11" href="#Toggle-11" aria-expanded="true" aria-controls="Toggle-11">
                                        <i class="mdi mdi-chevron-double-down" aria-hidden="true"></i>
                                        <span class="text-primary">See Enquiry Form</span>
                                    </a>
                                    <div id="Toggle-11" class="multi-collapse collapse show">
                                        <div class="card-body widget-content">
                                            <?php echo form_open("uploadmarks/enquiry"); ?>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-3 text-right control-label col-form-label"><span class="mdi mdi-calendar-multiple"></span></label>
                                                <div class="col-sm-9">
                                                    <select name="academic_year_e" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                                        <option selected disabled data-select2-id="acc_year">Select Academic Year</option>          
                                                        <option value="<?php echo $this->session->userdata("academic_year"); ?>"><?php echo $this->session->userdata("academic_year"); ?></option>
                                                    </select>                         
                                                    <?php echo form_error("academic_year_e", '<div class="text-danger m-t-5">', '</div>'); ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-3 text-right control-label col-form-label"><span class="mdi mdi-calendar-multiple"></span></label>
                                                <div class="col-sm-9">
                                                    <select name="form_e" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                                        <option selected disabled data-select2-id="form">Select Form</option>          
                                                        <option value="1">Form 1</option>
                                                        <option value="2">Form 2</option>
                                                        <option value="3">Form 3</option>
                                                        <option value="3">Form 4</option>
                                                    </select>                         
                                                    <?php echo form_error("form_e", '<div class="text-danger m-t-5">', '</div>'); ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-3 text-right control-label col-form-label"><span class="mdi mdi-calendar-multiple"></span></label>
                                                <div class="col-sm-9">
                                                    <select name="class_e" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                                        <option selected disabled data-select2-id="v">Select Class</option>          
                                                        <?php
                                                        foreach (array_unique($stclass, SORT_REGULAR) as $rows) {
                                                            ?>                                         
                                                            <option  value="<?php echo $rows[0]["stdclass"]; ?>"><?php echo $rows[0]['stdclass']; ?></option>
                                                        <?php } ?>
                                                    </select>                         
                                                    <?php echo form_error("class_e", '<div class="text-danger m-t-5">', '</div>'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-3 text-right control-label col-form-label"><span class="mdi mdi-calendar-multiple"></span></label>
                                                <div class="col-sm-9">
                                                    <select name="term_e" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                                        <option selected disabled data-select2-id="j">Select Term</option>          
                                                        <option value="1">Term 1</option>
                                                        <option value="2">Term 2</option>
                                                        <option value="3">Term 3</option>
                                                    </select>                         
                                                    <?php echo form_error("term_e", '<div class="text-danger m-t-5">', '</div>'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-3 text-right control-label col-form-label"><span class="mdi mdi-calendar-multiple"></span></label>
                                                <div class="col-sm-9">
                                                    <select name="semester_e" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                                        <option selected disabled data-select2-id="sele">Select Semester</option>          
                                                        <option value="1">Semester 1</option>
                                                        <option value="2">Semester 2</option>
                                                    </select>                         
                                                    <?php echo form_error("semester_e", '<div class="text-danger m-t-5">', '</div>'); ?>
                                                </div>
                                            </div>



                                            <div class="float-right p-b-10 p-r-10">
                                                <button type="submit" class="btn btn-info ">Get Info</button>
                                            </div>
                                            <?php echo form_close(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>





            </div>
            <!-- editor -->



            <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
                <div class="modal-dialog" role="document ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Things You Should Now</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true ">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <ol class="list-unstyled list-group-item text-capitalize">
                                <li type="1">Changes cant made after submission of student results. So please check details properly before hitting the save button</li>
                                <li type="1">Error messages are really important, it will help you find out what you did wrong , So read error messages properly and correct your errors</li>
                                <li type="1">Make sure you have all student information before filling the form</li>
                                <li type="1">Your Form will not hold your data after wrong submission. All fields will be cleared</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
































        <?php $this->load->view("teacher/templates/footer"); ?>
