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
                <h4 class="page-title">Register Academic Year</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page"><button href="#myModal" data-toggle="modal"  class="btn btn-sm btn-success" >Add Year</button></li>

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
            <div class="col-md-8">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Years</h5>
                        <div class="table-responsive">
                            <table id="setting" class="table table-striped table-bordered ">
                                <thead>
                                    <tr>

                                        <td>#</td>
                                        <th>Years</th>
                                        <th>Register Time</th>
                                        <th>Added By</th>

                                        <th class="text-center">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($results as $rows) { ?>

                                        <tr>
                                            <td><?php echo $rows['id']; ?></td>

                                            <td> <?php echo $rows['year']; ?></td>

                                            <td><?php echo $rows['register_time']; ?></td>
                                            <td><?php echo $rows['addedby']; ?></td>
                                            <td>
                                                <div class="text-center">
                                                    <a type="button" class="btn btn-danger btn-sm  btn1" href="delete/academic_year/<?php echo $rows['id']; ?>/Academic-Year/set_years"><span class="mdi mdi-delete-empty"></span></a>

                                                </div>
                                            </td>

                                        </tr>
                                    <?php } ?>

                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-0">Academic Years And Number Of Students </h5>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Academic Year</th>
                                <th scope="col">Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($results as $rows) { ?>

                                <tr>
                                    <td><a href="#" class="link"><?php echo $rows['year']; ?></a></td>
                                    <td><?php echo $rows[0]['num']; ?></td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>


<?php echo form_open("system_settings/set_years"); ?>
<div role="dialog" tabindex="-1" class="modal fade" id="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#8e8c7a;">
                <h4 style="color:rgb(254,255,255);">Add Academic Year</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body">

                <div class="col">
                    <div class="form-group"><label>From Year</label>
                        <select class="form-control" name="from_year">
                            <?php for ($i = 2018; $i < 2032; $i++) { ?>
                                <option value="<?php echo $i; ?>" ><?php echo $i; ?></option>   
                            <?php } ?>

                        </select></div>
                    <div class="form-group"><label>To Year</label>
                        <select class="form-control" name="to_year">
                            <?php for ($i = 2018; $i < 2032; $i++) { ?>
                                <option value="<?php echo $i; ?>" ><?php echo $i; ?></option>   
                            <?php } ?>

                        </select></div>           
                    <p class="text-muted">Format:  From Year / To year eg (2018/2019)</p>
                </div>

            </div>
            <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Save</button></div>
        </div>
    </div>
</div>
<?php echo form_close(); ?>
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

<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<?php $this->load->view("admin/templates/footer"); ?>
