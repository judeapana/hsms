<?php $this->load->view("admin/templates/header"); ?>

<?php 
//error
if (form_error("position") != " "){
    $this->session->set_flashdata('error', form_error("position"));
}
?>
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
                <h4 class="page-title">Add Positions </h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page"  ><button  type="button" href="#myModal" class="btn btn-sm btn-success" data-toggle="modal">Add Position</button></li>



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
            <div class="col-md-7">

                <div class="card">
                    <div class="card-body">
                        
                        <div class="table-responsive">
                            <table id="setting" class="table table-striped table-bordered ">
                                <thead>
                                    <tr>

                                        <td>#</td>
                                        <th>Position </th>
                                        <!--<th>Registered To (Teacher ID)</th>-->


                                        <th class="text-center">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($results as $rows) { ?>

                                        <tr>
                                            <td><?php echo $rows['id']; ?></td>

                                            <td>
                                                <?php echo $rows['position']; ?>
                                            </td>

<!--                                            <td>
                                                <?php echo $rows['registered_to']; ?>
                                            </td>-->
                                            <td>
                                                <div class="text-center">
                                                    <a href="delete/position/<?php echo $rows["id"]; ?>/Position/position" type="button" class="btn btn-danger btn-sm  btn1" title="edit"><span class="mdi mdi-delete-empty"></span></a>

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

        </div>
    </div>
</div>

<?php echo form_open(); ?>
<div role="dialog" tabindex="-1" class="modal fade" id="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#8e8c7a;">
                <h4 style="color:rgb(254,255,255);">Add Positions</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body">
                <div class="col">
                    <div class="form-group"><label>Position</label>
                        <select class="form-control" name="position">

                            <option value="Headmaster / Mistress">Head Master / Mistress</option>
                            <option value="Assistant  Headmaster / Mistress">Assistant  Headmaster / Mistress</option>
                            <option value="Form Master / Mistress">Form Master / Mistress</option>
                            <option value="Head Of Department">Head Of Department</option>
                            <option value="House Master /Mistress">House Master / Mistress</option>
                            <option value="Teacher">Teacher</option>

                        </select>
                    </div>
                </div>
<!--                <div class="col">
                    <div class="form-group"><label>Register To</label>
                        <select class="form-control" name="reg_to">
                            <?php foreach ($results_register_to as $rows) { ?>
                                <option value="<?php echo $rows['uname']; ?>"><?php echo strtoupper($rows["fname"] . ' ' . $rows['lname']); ?></option>

                            <?php } ?>
                        </select>
                    </div>
                </div>-->
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
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
