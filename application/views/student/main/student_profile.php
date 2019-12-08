<?php $this->load->view("student/templates/header"); ?>





<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Student Profile</h4>
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


            <div class="col-md-12 col-sm-12">
                <div class="card">
                    <div class="form-horizontal">
                        <div class="card-body">
                            <div class="container profile profile-view" id="profile">
                               

                                <div class="form-row profile-row">
                                    <div class="col-md-4  ">
                                        <div class="">
                                            <div class="">
                                                <?php if (!empty($this->session->userdata('profileimg'))) { ?>
                                                    <img width="200" height="200" class="img-thumbnail" src="<?php echo base_url(); ?>assets/images/users/students/<?php echo $this->session->userdata('profileimg'); ?>"/>
                                                <?php } else { ?>
                                                    <h3 class="text-muted">No profile Image</h3>
                                                <?php } ?>
                                            </div>

                                        </div>
                                        
                                    </div>

                                    <div class="col-md-8 col-sm-12">
                                        <h1>Profile </h1>
                                        <hr>
                                        <div class="form-row">
                                            <div class="col-sm-12 col-md-6">
                                                <?php echo form_open_multipart("studentctrls/student_profile"); ?>
                                                <div class="form-group"><label>First name </label><input disabled="" class="form-control" type="text" name="fname"  value="<?php echo $results[0]['fname']; ?>"></div>
                                                <p class="text-danger"><?php echo form_error("fname"); ?></p>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group"><label>Last name </label><input disabled="" class="form-control" type="text" name="lname"  value="<?php echo $results[0]['lname']; ?>"></div>
                                                <p class="text-danger"><?php echo form_error("lname"); ?></p>
                                            </div>

                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group"><label>Contact</label>
                                                    <input class="form-control" disabled="" type="text" name="contact"   value="<?php echo $results[0]['contact']; ?>">
                                                </div>
                                                <p class="text-danger"><?php echo form_error("contact"); ?></p>

                                            </div>   
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group"><label>House Name </label><input disabled="" class="form-control" type="text" name="fname"  value="<?php echo $results[0]['stdhouse']; ?>"></div>
                                            </div>
                                            
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group"><label>Class</label>
                                                    <input class="form-control" disabled="" type="text" name="contact"   value="<?php echo $results[0]['stdclass']; ?>">
                                                </div>

                                            </div>   
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group"><label>Programme </label><input disabled="" class="form-control" type="text" name="fname"  value="<?php echo $results[0]['stdprogram']; ?>"></div>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group"><label>Email </label><input disabled="" class="form-control" type="email" autocomplete="off"  name="email"  value="<?php echo $results[0]['email']; ?>">
                                            <p class="text-danger"><?php echo form_error("email"); ?></p>
                                        </div>
                                        <div class="form-group"><label>User Name </label><input disabled="" class="form-control" type="text" autocomplete="off"  name="uname"  value="<?php echo $results[0]['uname']; ?>">
                                            <p class="text-danger"><?php echo form_error("uname"); ?></p>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group"><label>Change Password </label><input class="form-control" type="password" name="pass" autocomplete="off" >
                                        <p class="text-muted"><?php echo form_error("pass","<div class='text-danger'>","</div>"); ?></p>
                                                </div>

                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group"><label>Confirm Change Password</label><input class="form-control" type="password" name="cpass" autocomplete="off"  >
                                                    <p class="text-danger"><?php echo form_error("cpass","<div class='text-danger'>","</div>"); ?></p>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="form-row">
                                            <div class="col-md-12 content-right"><button class="btn btn-primary form-btn" type="submit">SAVE </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php form_close(); ?>



                            </div>
                        </div>
                    </div>





                </div>
                <!-- editor -->



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



        </div></div>







    <?php $this->load->view("student/templates/footer"); ?>
