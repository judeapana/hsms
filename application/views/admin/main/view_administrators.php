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
                <h4 class="page-title">View User (Administator)</h4>

            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid ">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row justify-content-center align-items-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Administators</h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered ">
                                <thead>
                                    <tr >
                                        <th>#</th>
                                        <th>Admin ID</th>
                                        <th>Email</th>
                                        <th>Full Name</th>
                                        <th>Telephone</th>
                                        <th class="text-center">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($results as $rows) {
                                        ?>
                                        <tr>
                                            <td><?php echo $rows["id"]; ?></td>

                                            <td><a href="" class="pl-2">
                                                    <img src="<?php echo base_url("assets/images/users/admin/" . $rows['profileimg']); ?>" class="img-responsive rounded-circle " height="50" width="50">
                                                    <span class="text-capitalize"><?php echo $rows['uname']; ?></span></a>
                                            </td>
                                             <td><?php echo $rows['email']; ?></td>
                                             <td><?php echo $rows['fname']." ".$rows['lname']; ?></td>
                                           <td><?php echo $rows['contact']; ?></td>
                                            <td>
                                                <div class="text-center">
                                                    <button type="button"  class="btn btn-danger btn-sm  btn1 delete" title="delete" id="<?php echo $rows['id']; ?>"><span class="mdi mdi-delete-empty"></span></button>
                                                    <!--<button disabled=""type="button" class="btn btn-info btn-sm btn1" title="save as pdf"><span class="mdi mdi-file-pdf-box"></span></button>-->
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

    <div>
        <div role="dialog" tabindex="-1" class="modal fade" id="delete-administrators">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:rgba(174,10,10,0.8);">
                        <h4 style="color:rgb(254,255,255);">Delete Administrator Account</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                    <div class="modal-body">

                        <div id="delete_administrators"></div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<?php $this->load->view("admin/templates/footer"); ?>
<script>
    $("#zero_config").on('click', ".edit", function () {
        var id = $(this).attr("id");
        $.ajax({
            url: "<?php echo base_url(); ?>view_users/get_<?php echo $option; ?>",
                        method: "POST",
                        data: {id: id},
                        success: function (data) {
                            $("#view_<?php echo $option; ?>").html(data);
                            $("#edit-<?php echo $option; ?>").modal("show");
                        }
                    });
                });


                $("#zero_config").on("click", ".delete", function () {
                    var id = $(this).attr("id");
                    $.ajax({
                        url: "<?php echo base_url(); ?>view_users/prep_delete/<?php echo $option; ?>",
                                    method: "POST",
                                    data: {id: id},
                                    success: function (data) {
                                        $("#delete_<?php echo $option; ?>").html(data);
                                        $("#delete-<?php echo $option; ?>").modal("show");
                                    }
                                });
                            });



                            $("#zero_config").on("click", ".marks", function () {
                                var id = $(this).attr("id");
                                $.ajax({
                                    url: "<?php echo base_url(); ?>performances/marks_modal",
                                    method: "POST",
                                    data: {id: id},
                                    success: function (data) {
                                        $("#edit_marks").html(data);
                                        $("#edit_modal").modal("show");
                                    }
                                });
                            });





</script>