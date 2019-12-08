<?php $this->load->view("admin/templates/header"); ?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right side bar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Administrator Registration Form</h4>

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
        <?php echo form_open_multipart("create_users/administrators"); ?>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="form-horizontal">
                        <div class="card-body">
                            <h4 class="card-title">Personal Information</h4><hr><br>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">First Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="fname" placeholder="First Name Here" value="<?php echo set_value("fname"); ?>">
                                    <span class="text-danger"><?php echo form_error("fname"); ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Last Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="lname" placeholder="Last Name Here" value="<?php echo set_value("lname"); ?>">
                                    <span class="text-danger"><?php echo form_error("lname"); ?></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="uname" class="col-sm-3 text-right control-label col-form-label">User Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="uname" placeholder="User Name Here" value="<?php echo set_value("uname"); ?>" >
                                    <span class="text-danger"><?php echo form_error("uname"); ?></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 text-right control-label col-form-label">Sex</label>
                                <div class="col-md-9">

                                    <input type="radio"   name="sex" value="male" checked="">
                                    <label >Male</label>


                                    <input type="radio"  name="sex" value="female" >
                                    <label  >Female</label>

                                    <span class="text-danger"><?php echo form_error("sex"); ?></span>
                                </div>

                            </div>


                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Contact No</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control "   placeholder="Contact No Here" name="contact" value="<?php echo set_value("contact"); ?>">
                                    <span class="text-danger"><?php echo form_error("contact"); ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control"  placeholder="Your Address Here" name="address" value="<?php echo set_value("address"); ?>">
                                    <span class="text-danger"><?php echo form_error("address"); ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 text-right control-label col-form-label">Profile Image</label>
                                <div class="col-md-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="profileimg" value="<?php echo set_value("profileimg"); ?>">
                                        <label class="custom-file-label" >Choose file...(Optional)</label>
                                        <span class="text-danger"><?php echo $error; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Email Address</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email"  placeholder="email" class="form-control" value="<?php echo set_value("email"); ?>">
                                    <span class="text-danger"><?php echo form_error("email"); ?></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title m-b-0">Status Information</h4><hr>


                        <div class="form-group">
                            <label>Other Contact No <small class="text-muted">(020) 999-9999</small></label>
                            <input type="text" class="form-control " id="phone-mask" placeholder="Enter Phone Number" name="othernum" value="<?php echo set_value("othernum"); ?>"/>
                            <span class="text-danger"><?php echo form_error("othernum"); ?></span>
                        </div>


                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 d-block mx-auto">

                        <h5 class="text-muted">An SMS will be with your default passwords</h5 >

                    </div>

                    <div class="card-body d-block mx-auto">
                        <button type="submit" class="btn btn-success">Create Account </button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                    </div>
                </div>
            </div>
        </div>


        <?php form_close(); ?>


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
    <?php $this->load->view("admin/templates/footer"); ?>