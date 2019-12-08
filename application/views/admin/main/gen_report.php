<?php $this->load->view("admin/templates/header"); ?>
<div class="page-wrapper no-print">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Generate Student Report</h4>

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
            <div class="col-md-12">
                <div class="card">
                    <div class="form-horizontal">
                        <div class="card-body">
                            <h4 class="card-title">Student Info</h4>
                            <hr>
                            <?php echo form_open("performances/search_marks"); ?>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Student ID
                                    Or Name</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" placeholder="Enter Student ID Or Name Here"
                                           name="stdid" value="<?php echo set_value("stdid"); ?>">
                                    <br/><span class="text-danger"><?php echo form_error("stdid"); ?>  </span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Academic Year</label>
                                <div class="col-sm-5">
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                            name="academic_year">
                                        <?php foreach ($academic_year as $rows) { ?>
                                            <option value="<?php echo $rows['year']; ?>"><?php echo $rows['year']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Student Level</label>
                                <div class="col-sm-5">
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                            name="form">
                                        <option value="1"> Form 1</option>
                                        <option value="2"> Form 2</option>
                                        <option value="3"> Form 3</option>
                                        <option value="4">Form 4</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Semester</label>
                                <div class="col-sm-5">
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                            name="semester">
                                        <option value="1"> Semester 1</option>
                                        <option value="2">Semester 2</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Term</label>
                                <div class="col-sm-5">
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                            name="term">
                                        <option value="1"> Term 1</option>
                                        <option value="2">Term 2</option>
                                        <option value="3">Term 3</option>
                                    </select>
                                </div>
                            </div>


                        </div>
                        <div class="border-top text-right col-md-5 m-l-10">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Generate Report <span
                                            class="mdi mdi-flash"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>

            <?php
            if (!empty($search)) {
                echo $search;
            }
            ?>

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
<?php $this->load->view("admin/templates/footer"); ?>
