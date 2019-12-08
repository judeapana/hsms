<?php $this->load->view("admin/templates/header"); ?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title"> Account Settings</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page"><a href="#"
                                                                                      class="btn btn-sm btn-success">View
                                    Profile</a></li>
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
        <form>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="form-horizontal">
                            <div class="card-body">
                                <h4 class="card-title">Administrator | Profile</h4>
                                <hr>
                                <br>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">First
                                        Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname"
                                               placeholder="First Name Here">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Last
                                        Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="lname" placeholder="Last Name Here">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="uname" class="col-sm-3 text-right control-label col-form-label">User
                                        Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="uname" placeholder="User Name Here">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">School
                                        Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="email1"
                                               placeholder="School Name Here">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Contact
                                        No</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control phone-inputmask" id="cono1"
                                               placeholder="Contact No Here">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1"
                                           class="col-sm-3 text-right control-label col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="cono1"
                                               placeholder="Your Address Here">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 text-right control-label col-form-label">Passport
                                        Upload</label>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="validatedCustomFile"
                                                   required>
                                            <label class="custom-file-label" for="validatedCustomFile">Choose
                                                file...(Optional)</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Email
                                        Address</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" id="email" placeholder="Email"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title m-b-0">Admin Status Information</h4>
                            <hr>
                            <div class="form-group m-t-20">
                                <label>Appearance Date
                                    <small class="text-muted"> (When You Started Working In The School)</small>
                                </label>
                                <input type="text" class="form-control date-inputmask" id="date-mask"
                                       placeholder="Enter Date">
                            </div>
                            <div class="form-group m-t-20">
                                <label> Educational Level
                                    <small class="text-muted"> (Certification)</small>
                                </label>
                                <input type="text" class="form-control " id="date-mask"
                                       placeholder="Enter Certifcation Name and Level">
                            </div>
                            <div class="form-group">
                                <label>Other Contact No
                                    <small class="text-muted">(020) 999-9999</small>
                                </label>
                                <input type="text" class="form-control phone-inputmask" id="phone-mask"
                                       placeholder="Enter Phone Number">
                            </div>
                            <div class="form-group">
                                <label>Current Positon
                                    <small class="text-muted"> (What Postion Are You Holding In The School)</small>
                                </label>
                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                    <option>Postion</option>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Departmental HOD</option>
                                        <option value="DE">Senior House Master</option>
                                        <option value="FL">Departmental Helper</option>
                                        <option value="GA">Departmental libary Management</option>
                                        <option value="IN">Departmental System check</option>
                                        <option value="ME">Optional OP</option>
                                    </optgroup>
                                </select>
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
                                <button type="submit" class="btn btn-success">Update Adminstrator</button>
                                <button type="reset" class="btn btn-primary">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
