<?php $this->load->view('student/templates/header'); ?>
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h2 class="page-title text-muted p-t-5 p-b-5 " >High Management System  Student</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row">

            <!--Column--> 
            <div class="col-md-6 col-lg-4 col-xlg-3">
                <a href="<?php echo site_url("studentctrls/results"); ?>">
                    <div class="card card-hover ">
                        <div class="box bg-primary text-center p-b-40 p-t-40">
                            <h1 class="font-light text-white"><i class="fa fa-tasks"></i></h1>
                            <h6 class="text-white">Results</h6>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-4 col-xlg-3">
                <a href="<?php echo site_url('studentctrls/student_profile'); ?>">
                    <div class="card card-hover">
                        <div class="box bg-cyan text-center p-b-40 p-t-40">
                            <h1 class="font-light text-white"><i class="fa fa-key"></i></h1>
                            <h6 class="text-white">Change Password</h6>
                        </div>
                    </div>
                </a>
            </div>

         
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <a href="<?php echo site_url('studentctrls/student_profile'); ?>">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center p-b-40 p-t-40">
                                <h1 class="font-light text-white"><i class="fa fa-user-circle"></i></h1>
                                <h6 class="text-white">Profile</h6>
                            </div>
                        </div>
                    </a>
                </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-0">Grading System</h5>
                    </div>
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">From Score</th>
                                <th scope="col">To Score</th>
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

            

            <!-- Column -->
        </div>



    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <?php $this->load->view("student/templates/footer"); ?>