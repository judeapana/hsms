<?php $this->load->view("teacher/templates/header"); ?>
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h2 class="page-title text-muted p-t-5 p-b-5 " >High Management System  Teachers</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row">

            <!--Column--> 
            <div class="col-md-6 col-lg-4 col-xlg-3">
                <a href="<?php echo site_url("uploadmarks"); ?>">
                    <div class="card card-hover ">
                        <div class="box bg-primary text-center p-b-40 p-t-40">
                            <h1 class="font-light text-white"><i class="fa fa-edit"></i></h1>
                            <h6 class="text-white">Student Marks</h6>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-4 col-xlg-3">
                <a href="<?php echo site_url("profile_teacher"); ?>">
                    <div class="card card-hover">
                        <div class="box bg-cyan text-center p-b-40 p-t-40">
                            <h1 class="font-light text-white"><i class="fa fa-key"></i></h1>
                            <h6 class="text-white">Change Password</h6>
                        </div>
                    </div>
                </a>
            </div>

            <?php if ($this->session->userdata("current_pos") != "Teacher") { ?>
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <a href="<?php echo site_url("student_remarks"); ?>">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center p-b-40 p-t-40">
                                <h1 class="font-light text-white"><i class="fa fa-file"></i></h1>
                                <h6 class="text-white">Remarks</h6>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } else { ?>
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <a href="">
                        <div class="card card-hover " style="cursor: not-allowed;" >
                            <div class="box bg-warning text-center p-b-40 p-t-40">
                                <h1 class="font-light text-white"><i class="fa fa-file"></i></h1>
                                <h6 class="text-white">Remarks</h6>
                                <span class="text-danger text-capitalize">(Only For Positional Users)</span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-0">Grading System</h5>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">From</th>
                                <th scope="col">To</th>
                                <th scope="col">Grade</th>
                                <th scope="col">Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($grading_sys as $rows) { ?>
                                <tr>
                                    <td ><?php echo $rows['from_int']; ?></td>
                                    <td><?php echo $rows['to_int']; ?></td>
                                    <td><?php echo $rows['gp']; ?></td>
                                    <td><?php echo $rows['remarks']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-0">Academic Years</h5>
                    </div>
                    <div class="table-responsive"> 
                        <table class="table " id="setting">
                            <thead>
                                <tr>
                                    <th scope="col">Year</th>
                                    <th scope="col">Registered Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($academic_year as $rows) { ?>
                                    <tr>
                                        <td><?php echo $rows['year']; ?></td>
                                        <td><?php echo $rows['register_time']; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-0">Resumal Dates</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table " id="zero_config">
                            <thead>
                                <tr>
                                    <th scope="col">Term</th>
                                    <th scope="col">Resume Date</th>
                                    <th scope="col">Academic Year</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($resume as $rows) { ?>
                                    <tr>
                                        <td><?php echo $rows["term"]; ?></td>
                                        <td><?php echo $rows["resume"]; ?></td>
                                        <td><?php echo $rows["academic_year"]; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Column -->
        </div>



    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <?php $this->load->view("teacher/templates/footer"); ?>