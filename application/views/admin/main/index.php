<?php $this->load->view("admin/templates/header"); ?>
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h3 class="page-title text-muted">High Management System Administrator</h3>

            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row">

            <!-- Column -->

            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <a href="<?php echo site_url("create_users/teachers"); ?>">
                    <div class="card card-hover">
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white"><i class="fa fa-user-plus"></i></h1>
                            <h6 class="text-white">Register - Teacher</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <a href="<?php echo site_url("create_users/students"); ?>">
                    <div class="card card-hover">
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white"><i class="fa fa-graduation-cap"></i></h1>
                            <h6 class="text-white">Register - Student</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-2 col-xlg-3">
                <a href="<?php echo site_url("create_users/administrators"); ?>">
                    <div class="card card-hover">
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white"><i class="fa fa-user-circle"></i></h1>
                            <h6 class="text-white">Register - Admin</h6>
                        </div>
                    </div>
                </a>
            </div>

            <!--Column-->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <a href="<?php echo site_url("performances/reports"); ?>">
                    <div class="card card-hover">
                        <div class="box bg-primary text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-pulse"></i></h1>
                            <h6 class="text-white">Performances</h6>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <a href="<?php echo site_url("system_settings/reg_classes"); ?>">
                    <div class="card card-hover">
                        <div class="box bg-cyan text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-settings"></i></h1>
                            <h6 class="text-white">Settings</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <a href="<?php echo site_url("performances/marks"); ?>">
                    <div class="card card-hover">
                        <div class="box bg-warning text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-note-text"></i></h1>
                            <h6 class="text-white">Student Marks </h6>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Column -->
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center">
                            <div>
                                <h4 class="card-title">School Analysis</h4>
                                <h5 class="card-subtitle">Overview of double Track System</h5>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-md-6 col-lg-2 col-xlg-3 m-t-15">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class="mdi mdi-account-multiple m-b-5 font-16"></i>
                                        <h5 class="m-b-0 m-t-5"><?php echo count($users); ?></h5>
                                        <small class="font-light">Total Users</small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-2 col-xlg-3 m-t-15">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class="fa fa-user m-b-5 font-16"></i>
                                        <h5 class="m-b-0 m-t-5"><?php echo count($parents); ?></h5>
                                        <small class="font-light">Total Parents</small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-2 col-xlg-3 m-t-15">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class="mdi mdi-account-circle m-b-5 font-16"></i>
                                        <h5 class="m-b-0 m-t-5"><?php echo count($teachers); ?></h5>
                                        <small class="font-light">Total Teachers</small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-2 col-xlg-3 m-t-15">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class="fa fas fa-child m-b-5 font-16"></i>
                                        <h5 class="m-b-0 m-t-5"><?php echo count($students); ?></h5>
                                        <small class="font-light">Total Students</small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-2 col-xlg-3 m-t-15">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class="mdi mdi-account-star-variant m-b-5 font-16"></i>
                                        <h5 class="m-b-0 m-t-5"><?php echo count($administrators); ?></h5>
                                        <small class="font-light">Total Administrators</small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-2 col-xlg-3 m-t-15">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class="fa fa-table m-b-5 font-16"></i>
                                        <h5 class="m-b-0 m-t-5"><?php echo count($academic_year); ?></h5>
                                        <small class="font-light">Academic Years</small>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-2 col-xlg-3 m-t-15">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class="mdi mdi-book-open m-b-5 font-16"></i>
                                        <h5 class="m-b-0 m-t-5"><?php echo count($programmes); ?></h5>
                                        <small class="font-light">Programmes</small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-2 col-xlg-3 m-t-15">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class=" mdi mdi-book-open-page-variant m-b-5 font-16"></i>
                                        <h5 class="m-b-0 m-t-5"><?php echo count($subjects); ?></h5>
                                        <small class="font-light">Subjects</small>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- column -->

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
<?php $this->load->view("admin/templates/footer"); ?>