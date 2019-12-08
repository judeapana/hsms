<?php $this->load->view("admin/templates/header"); ?>

<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">View User (Teachers)</h4>

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


        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Teachers</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered ">
                        <thead>
                            <tr >
                                <th>#</th>
                                <th>Teacher ID</th>
                                <th>Position</th>
                                <th>Subject Area</th>
                                <th>Telephone</th>
                                <th class="text-center">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($results as $rows) {
                                ?>
                                <tr>
                                    <td><?php echo $rows['id']; ?></td>

                                    <td><a href="" class="pl-2">
                                            <img src="<?php echo base_url("assets/images/users/teachers/" . $rows['profileimg']); ?>" class="img-responsive rounded-circle " height="50" width="50">
                                            <span class="text-capitalize" title="<?php echo "Address: " . $rows['address'] . " Email: " . $rows['email']; ?>"><?php echo $rows['uname']; ?> </span></a>
                                    </td>
                                    <td><?php echo $rows['current_pos']; ?></td>
                                    <td><?php echo $rows['subject_area']; ?></td>
                                    <td><?php echo $rows['contact']; ?></td>
                                    <td>
                                        <div class="text-center">
                                            <a type="button"  class="btn btn-primary btn-sm  btn1 edit" title="edit"  id="<?php echo $rows['id'] ?>"><span class="mdi mdi-pencil"></span></a>
                                            <a type="button"  class="btn btn-danger btn-sm  btn1 delete" title="delete" id="<?php echo $rows['id']; ?>"><span class="mdi mdi-delete-empty"></span></a>
                                            <?php
                                            $attr = array('width' => 800, 'height' => 700, 'scrollbars' => 'yes', 'window_name' => '_blank', "class" => "mdi mdi-file-pdf-box btn btn-info btn-sm btn1", "type" => "button");
                                            echo anchor_popup('view_users/pdf_report/' . $option . "/" . $rows['id'], ' Pdf', $attr);
                                            ?>
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


    <div>
        <div role="dialog" tabindex="-1" class="modal fade" id="edit-teachers">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#50508f;">
                        <h4 style="color:rgb(254,255,255);">Edit Teacher&#39;s Details</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                    <div class="modal-body">

                        <div id="view_teachers"></div> 
                    </div>



                </div>
            </div>
        </div>
    </div>


    <div>
        <div role="dialog" tabindex="-1" class="modal fade" id="delete-teachers">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:rgba(174,10,10,0.8);">
                        <h4 style="color:rgb(254,255,255);">Delete Teacher Account</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                    <div class="modal-body">

                        <div id="delete_teachers"></div>

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