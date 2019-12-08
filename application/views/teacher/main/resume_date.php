<?php $this->load->view("teacher/templates/header"); ?>


<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Resume Dates</h4>
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
            <div class="col-md-7 col-sm-12">
                <div class="card">
                    <div class="form-horizontal">
                        <div class="card-body">
                            <h4 class="card-title">Resume Dates <a href="" class="" title="things you should now" data-toggle="modal" data-target="#Modal1"><span class="mdi mdi-comment-question-outline"></span></a></h4>

                            <hr>
                            <!-- Col-->
                            <?php echo form_open("resume_date"); ?>



                            <div class="row p-t-10" >


                                <div class="col-md-6 col-sm-12 ">
                                    <div class="form-group row">
                                        <label class="col-md-4 m-t-5 m-l-5">Term</label>
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
                                <div class="col-md-6 col-sm-12 ">
                                    <div class="form-group row">
                                        <label class="col-md-5 m-t-5">Academic Year</label>
                                        <div class="col-md-9" data-select2-id="xv">
                                            <select name="academic_year" class="select2 form-control custom-select select2-hidden-accessible" style="width: 100%; height:36px;" data-select2-id="xv" tabindex="-1" aria-hidden="true">
                                                <option selected disabled data-select2-id="xv">Search Or Select Academic Year</option>                                         
                                                <option value="<?php echo $this->session->userdata("academic_year"); ?>"><?php echo $this->session->userdata("academic_year"); ?></option>


                                            </select>                 
                                            <?php echo form_error("academic_year", '<div class="text-danger m-t-5">', '</div>'); ?>

                                        </div>
                                    </div></div>

                            </div>

                            <hr>
                            <div class="col-md-6 col-sm-12 ">
                                <div class="form-group row">
                                    <label class="col-md-5 m-t-5">Resume Date</label>
                                    <div class="col-md-9" data-select2-id="xv">
                                        <input name="resume" class=" form-control " style="width: 100%; height:36px;" type="date">
                                        </select>                 
                                        <?php echo form_error("resume", '<div class="text-danger m-t-5">', '</div>'); ?>

                                    </div>
                                </div></div>




                            <div class="col-md-12 col-sm-12 text-center"> 
                                <button type="submit" class="btn btn-primary btn pull-right"><span class="mdi mdi-update"> Insert Resume Date</span></button>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-sm-12">
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
                                        <span class="text-primary">Resume Dates Here</span>
                                    </a>
                                    <div id="Toggle-5" class="multi-collapse collapse " style="">

                                        <div class="card-body widget-content table-responsive">
                                            <table class="table  table-bordered " id="zero_config">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Academic Year</th>
                                                        <th scope="col">Term</th>
                                                        <th scope="col">Resume Date</th>
                                                        <th scope="col">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($resume_date as $rows) { ?>
                                                        <tr>
                                                            <td><?php echo $rows['academic_year']; ?></td>
                                                            <td><?php echo $rows['term']; ?></td>
                                                            <td><?php echo $rows['resume']; ?></td>
                                                            <td><a href="resume_date/delete/resume_date/<?php echo $rows['id']; ?>/Date/resume_date" class="btn btn-danger btn-sm"><span class="mdi mdi-delete-empty"></span></a></td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
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
                                <li type="1">This section is for student remarks only</li>
                                <li type="1">If you submitted wrong results kindly contact the <a href="">administrator by clicking this link</a> for corrections to be made</li>
                                <li type="1">You have the ability to update student remarks and add new remarks</li>
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



        <?php if (!empty($this->session->userdata("student_report_format"))) { ?>
            <div class="modal-open"> 
                <div role="dialog" tabindex="-1" class="modal fade show  " style="display: block;">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Student Results</h4>
                                <a type="button" class="btn btn-primary" href="student_remarks/burn_dform"><span aria-hidden="true"  >Close</span></a></div>
                            <div class="modal-body">
                                <p>Please add Remarks At The End Of The Results</p>
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Subject</th>
                                                <th>Class Score</th>
                                                <th>Exams Score</th>
                                                <th>Total Score</th>
                                                <th>Grade</th>
                                                <th>Remark</th>
                                                <th>Attendance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $results = $this->session->userdata("student_report_format");
                                            $total = 0;
                                            foreach ($results as $rows) {
                                                $total+=$rows['total_score'];
                                                ?>

                                                <tr>
                                                    <td><?php echo $rows['subject']; ?></td>
                                                    <td><?php echo $rows['class_score']; ?></td>
                                                    <td><?php echo $rows['exams_score']; ?></td>
                                                    <td><?php echo $rows['total_score']; ?></td>
                                                    <td><?php echo $rows['grade']; ?></td>
                                                    <td><?php echo $rows['remarks']; ?></td>
                                                    <td><?php echo $rows['attendance']; ?></td>

                                                </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="border-top text-center p-t-5">Total Score :<?php echo $total; ?><br> Average : <?php echo ceil($total / count($results)); ?></div> 
                                <hr><!--                                 Col-->
                                <?php echo form_open("student_remarks/insert_remark"); ?>
                                <div class="row p-t-10 m-b-10" >
                                    <label >Insert Remarks Here <span class="mdi mdi-help-circle-outline"></span></label>
                                    <div class="col-md-9" data-select2-id="x">
                                        <select name="remark" class="select2 form-control custom-select select2-hidden-accessible" style="width: 100%; height:36px;" data-select2-id="x" tabindex="-1" aria-hidden="true">
                                            <option selected disabled data-select2-id="x">Search Or Select Remark</option>                                         
                                            <option value="Good Performance">Good Performance</option>
                                            <option value="Bad Performance">Bad Performance</option>
                                            <option value="Can Do Better">Can Do Better</option>
                                            <option value="Sit Up, And Perform Well">Sit Up, And Perform Well</option>
                                            <option value="Excellent Performance Keep It Up">Excellent Performance Keep It Up</option>


                                        </select>                 
                                        <?php echo form_error("remarks", '<div class="text-danger m-t-5">', '</div>'); ?>

                                    </div>               


                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" type="submit">Save</button></div>
                                <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>


        <script>function clear() {
                alert("clear");
            }</script>

























        <?php $this->load->view("teacher/templates/footer"); ?>
    