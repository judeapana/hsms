<?php $this->load->view("admin/templates/header"); ?>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title"> <?php  echo var_dump($this->session->userdata("usertype"));   ?></h4>
                        
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
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="<?php echo site_url()."dashboard" ?>">
                             <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                <h6 class="text-white">Dashboard</h6>
                            </div>
                        </div>
                        </a>
                       
                    </div>
                     <!-- Column -->
                    
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="<?php echo site_url("dashboard/register_teacher");?>">
                            <div class="card card-hover">
                                <div class="box bg-info text-center">
                                    <h1 class="font-light text-white"><i class="fa fa-user-plus"></i></h1>
                                    <h6 class="text-white">Register - Lecturer</h6>
                                </div>
                            </div>
                            </a>
                    </div>
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="">
                            <div class="card card-hover">
                                <div class="box bg-info text-center">
                                    <h1 class="font-light text-white"><i class="fa fa-graduation-cap"></i></h1>
                                    <h6 class="text-white">Register - Student</h6>
                                </div>
                            </div>
                            </a>
                    </div>

                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="">
                            <div class="card card-hover">
                                <div class="box bg-info text-center">
                                    <h1 class="font-light text-white"><i class="fa fa-user-circle"></i></h1>
                                    <h6 class="text-white">Register - Admin</h6>
                                </div>
                            </div>
                            </a>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="">
                            <div class="card card-hover">
                                <div class="box bg-info text-center">
                                    <h1 class="font-light text-white"><i class="fa fa-user"></i></h1>
                                    <h6 class="text-white">Register  - Parent</h6>
                                </div>
                            </div>
                            </a>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="">
                            <div class="card card-hover">
                                <div class="box bg-primary text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-email"></i></h1>
                                    <h6 class="text-white">Send Message</h6>
                                </div>
                            </div>
                            </a>
                    </div>

                     <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="">
                            <div class="card card-hover">
                                <div class="box bg-cyan text-center">
                                    <h1 class="font-light text-white"><i class="fa fa-calendar"></i></h1>
                                    <h6 class="text-white">Academic Year</h6>
                                </div>
                            </div>
                            </a>
                    </div>

                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="">
                            <div class="card card-hover">
                                <div class="box bg-warning text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-help-circle-outline"></i></h1>
                                    <h6 class="text-white">HelpLine </h6>
                                </div>
                            </div>
                            </a>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
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
                                                   <h5 class="m-b-0 m-t-5">2540</h5>
                                                   <small class="font-light">Total Users</small>
                                                </div>
                                            </div>
                                             <div class="col-md-6 col-lg-2 col-xlg-3 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="fa fa-user m-b-5 font-16"></i>
                                                   <h5 class="m-b-0 m-t-5">120</h5>
                                                   <small class="font-light">Total Parents</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-2 col-xlg-3 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="mdi mdi-account-circle m-b-5 font-16"></i>
                                                   <h5 class="m-b-0 m-t-5">656</h5>
                                                   <small class="font-light">Total Lecturers</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-2 col-xlg-3 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="fa fas fa-child m-b-5 font-16"></i>
                                                   <h5 class="m-b-0 m-t-5">656</h5>
                                                   <small class="font-light">Total Students</small>
                                                </div>
                                            </div>
                                             <div class="col-md-6 col-lg-2 col-xlg-3 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="mdi mdi-account-star-variant m-b-5 font-16"></i>
                                                   <h5 class="m-b-0 m-t-5">9540</h5>
                                                   <small class="font-light">Total Administrators</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-2 col-xlg-3 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="fa fa-table m-b-5 font-16"></i>
                                                   <h5 class="m-b-0 m-t-5">100</h5>
                                                   <small class="font-light">Academic Years</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-2 col-xlg-3 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="mdi mdi-account-key m-b-5 font-16"></i>
                                                   <h5 class="m-b-0 m-t-5">8540</h5>
                                                   <small class="font-light">Blocked Users</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-2 col-xlg-3 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="mdi mdi-cards-variant m-b-5 font-16"></i>
                                                   <h5 class="m-b-0 m-t-5">8540</h5>
                                                   <small class="font-light">Classes</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-2 col-xlg-3 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="mdi mdi-book-open m-b-5 font-16"></i>
                                                   <h5 class="m-b-0 m-t-5">8540</h5>
                                                   <small class="font-light">Programmes</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-2 col-xlg-3 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class=" mdi mdi-book-open-page-variant m-b-5 font-16"></i>
                                                   <h5 class="m-b-0 m-t-5">8540</h5>
                                                   <small class="font-light">Subjects</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-2 col-xlg-3 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="mdi mdi-alpha m-b-5 font-16"></i>
                                                   <h5 class="m-b-0 m-t-5">8540</h5>
                                                   <small class="font-light">Excellent Students</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-2 col-xlg-3 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="mdi mdi-beta m-b-5 font-16"></i>
                                                   <h5 class="m-b-0 m-t-5">8540</h5>
                                                   <small class="font-light">Passed Students</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-2 col-xlg-3 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="mdi mdi-alert-outline m-b-5 font-16"></i>
                                                   <h5 class="m-b-0 m-t-5">8540</h5>
                                                   <small class="font-light">Failed Students</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-2 col-xlg-3 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="mdi mdi-creation m-b-5 font-16"></i>
                                                   <h5 class="m-b-0 m-t-5">8540</h5>
                                                   <small class="font-light">Schoolarship Students</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-2 col-xlg-3 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="mdi mdi-plane-shield m-b-5 font-16"></i>
                                                   <h5 class="m-b-0 m-t-5">8540</h5>
                                                   <small class="font-light">Foreign Students</small>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <!-- column -->
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
 
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
     <?php $this->load->view("admin/templates/footer");  ?>