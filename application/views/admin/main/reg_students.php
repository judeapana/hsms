<?php $this->load->view("admin/templates/header"); ?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Student Registration Form</h4>

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
        <?php echo form_open_multipart("create_users/students"); ?>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="form-horizontal">
                        <div class="card-body">

                            <h4 class="card-title">Student Personal Info</h4><hr>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">First Name</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo set_value("fname"); ?>" class="form-control" name="fname" placeholder="First Name Here">
                                    <span class="text-danger"><?php echo form_error("fname"); ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Last Name</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo set_value("lname"); ?>" class="form-control" name="lname" placeholder="Last Name Here">
                                    <span class="text-danger"><?php echo form_error("lname"); ?></span>
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
                                <label for="nationality" class="col-sm-3 text-right control-label col-form-label">Nationality</label>
                                <div class="col-sm-9">
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="nationality">
                                        <option value="Ghanaian">Ghanaian</option>

                                    </select>
                                    <span class="text-danger"><?php echo form_error("nationality"); ?></span>
                                </div>


                            </div>

                            <div class="form-group row">
                                <div class="input-group">
                                    <label class="col-sm-3 text-right control-label col-form-label">Date Of Birth</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" placeholder="mm/dd/yyyy" name="dateofbirth" value="<?php echo set_value("dateofbirth"); ?>">
                                        <span class="text-danger"><?php echo form_error("dateofbirth"); ?></span>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="Contact" class="col-sm-3 text-right control-label col-form-label">Contact No</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo set_value("contact"); ?>" class="form-control"  placeholder="Contact No Here" name="contact">
                                    <span class="text-danger"><?php echo form_error("contact"); ?></span>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Home" class="col-sm-3 text-right control-label col-form-label">Home Town</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo set_value("hometown"); ?>" class="form-control"  placeholder="Home Town Here" name="hometown">
                                    <span class="text-danger"><?php echo form_error("hometown"); ?></span>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="region" class="col-sm-3 text-right control-label col-form-label">Region</label>
                                <div class="col-sm-9">
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="region">
                                        <option value="Upper East Region">Upper East Region</option>
                                        <option value="Southern Region">Southern Region</option>
                                        <option value="Upper West Region">Upper West Region</option>           
                                        <option value="Northern">Northern Region</option>           

                                    </select>
                                    <span class="text-danger"><?php echo form_error("region"); ?></span>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Postal" class="col-sm-3 text-right control-label col-form-label">Postal Address</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo set_value("address"); ?>" class="form-control"  placeholder="Postal Address Here" name="address">
                                    <span class="text-danger"><?php echo form_error("address"); ?></span>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 text-right control-label col-form-label">Passport Upload</label>
                                <div class="col-md-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input"   name="profileimg">
                                        <label class="custom-file-label">Choose file...(Required)</label>
                                        <span class="text-danger"><?php echo $error; ?></span>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Email Address</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control"  placeholder="Email Address" name="email" value="<?php echo set_value("email"); ?>">
                                    <small class="text-muted"> <?php echo anchor_popup("https://gmail.com", "Click Here To Create G-mail Account For Student l"); ?></small>
                                    <span class="text-danger"><?php echo form_error("email"); ?></span>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>



            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="form-horizontal">
                        <div class="card-body">
                            <h4 class="card-title">Parent / Guardian Information</h4><hr>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">First Name</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo set_value("ptfname"); ?>" class="form-control" name="ptfname" placeholder="Guardian First Name Here">
                                    <span class="text-danger"><?php echo form_error("ptfname"); ?></span>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Last Name</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo set_value("ptlname"); ?>" class="form-control" name="ptlname" placeholder="Guardian Last Name Here">
                                    <span class="text-danger"><?php echo form_error("ptlname"); ?></span>

                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-md-3 text-right control-label col-form-label">Sex</label>
                                <div class="col-md-9">

                                    <input type="radio"   name="ptsex" value="male" checked="">
                                    <label >Male</label>


                                    <input type="radio"  name="ptsex" value="female" >
                                    <label  >Female</label>
                                    <span class="text-danger"><?php echo form_error("ptsex"); ?></span>
                                </div>


                            </div>

                            <div class="form-group row">
                                <label for="occupation" class="col-sm-3 text-right control-label col-form-label"> Occupation</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo set_value("ptoccupation"); ?>" class="form-control" name="ptoccupation" placeholder="Occupation">
                                    <span class="text-danger"><?php echo form_error("ptoccupation"); ?></span>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="relationship" class="col-sm-3 text-right control-label col-form-label">Relationship</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo set_value("reltostd"); ?>" class="form-control" name="reltostd" placeholder="Relation to Student">
                                    <span class="text-danger"><?php echo form_error("reltostd"); ?></span>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Contact" class="col-sm-3 text-right control-label col-form-label">Contact No</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo set_value("ptcontact"); ?>" class="form-control"  name="ptcontact" placeholder="Contact No Here">
                                    <span class="text-danger"><?php echo form_error("ptcontact"); ?></span>

                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="Email" class="col-sm-3 text-right control-label col-form-label">Email Address</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="ptemail" placeholder="Contact No Here" value="<?php echo set_value("ptemail"); ?>">
                                    <span class="text-danger"><?php echo form_error("ptemail"); ?></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Student Programme Details</h5><hr>

                        <div class="form-group row">
                            <label for="Programme" class="col-sm-3 text-right control-label col-form-label">Programme </label>
                            <div class="col-sm-9">
                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="stdprogram">
                                    <?php foreach ($subjects as $rows) { ?>
                                        <option value="<?php echo $rows['name']; ?>"><?php echo $rows['name']; ?></option>

                                    <?php } ?>        
                                </select>
                                <span class="text-danger"><?php echo form_error("stdprogram"); ?></span>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Class" class="col-sm-3 text-right control-label col-form-label">Class Option</label>
                            <div class="col-sm-9">
                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="stdclass">  
                                    <?php foreach ($classes as $rows) { ?>
                                        <option value="<?php echo $rows['name']; ?>"><?php echo $rows['name']; ?></option>

                                    <?php } ?>                  

                                </select>
                                <span class="text-danger"><?php echo form_error("stdclass"); ?></span>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="House" class="col-sm-3 text-right control-label col-form-label">House Option</label>
                            <div class="col-sm-9">
                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="stdhouse">

                                    <option value="Hawa House">Hawa House</option>
                                    <option value="Fidelity House">Fidelity House</option>           
                                    <option value="Nkrumah House">Nkrumah House</option>           
                                    <option value="Ampofo House">Ampofo House</option>           
                                    <option value="Acnachi House">Acnachi House</option>           

                                </select>
                                <span class="text-danger"><?php echo form_error("stdhouse"); ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Folio" class="col-sm-3 text-right control-label col-form-label">Folio ID</label>
                            <div class="col-sm-9">
                                <div class="input-group mb-3">
                                    <input type="text"  class="form-control" placeholder="" value="<?php echo set_value("stdid", "SX" . random_string("numeric", 3)); ?>" name="stdid">
                                </div>
                                <span class="text-danger"><?php echo form_error("stdid"); ?></span>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Parent Portal Credentials</h4><hr>
                        <div class="form-group row">
                            <label for="parent" class="col-sm-3 text-right control-label col-form-label">User Name</label>
                            <div class="col-sm-9">
                                <input type="text" value="<?php echo set_value("ptuname"); ?>" class="form-control" id="email1" placeholder="User Name Here" name="ptuname">
                                <span class="text-danger"><?php echo form_error("ptuname"); ?></span>                 
                                <br> <h5 class="text-muted">An SMS will be with your default passwords</h5 >
                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 d-block mx-auto">
                <div class="border-top">
                    <div class="card">

                        <div class="card-body d-block mx-auto">
                            <button type="submit" class="btn btn-success">Create Account </button>
                            <button type="reset" class="btn btn-primary">Reset</button>
                        </div>
                    </div>
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