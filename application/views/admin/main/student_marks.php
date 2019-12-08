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
                <h4 class="page-title">Student Marks Record</h4>

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
                <h5 class="card-title">Student Marks</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered ">
                        <thead>
                            <tr >


                                <th> Student ID</th>
                                <th>Academic Year</th>                                                
                                <th>Subject Name</th>
                                <th>Form</th>
                                <th>semester</th>

                                <th>Class Score</th>
                                <th>Exams Score</th>
                                <th>Total Score</th>
                                <!--<th>Excellent</th>-->
                                <th>Grade</th>
                                <th class="text-center">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($results as $rows) { ?>
                                <tr>

                                    <td>
                                        <?php echo $rows['stdid']; ?>
                                    </td>
                                    <td><?php echo $rows['academic_year']; ?></td>
                                    <td><?php echo $rows['subject']; ?></td>
                                    <td><?php echo $rows['form']; ?></td>
                                    <td><?php echo $rows['semester']; ?></td>

                                    <td><?php echo $rows['class_score']; ?></td>
                                    <td><?php echo $rows['exams_score']; ?></td>
                                    <td><?php echo $rows['total_score']; ?></td>
                                    <!--<td>Remarks</td>-->
                                    <td><?php echo $rows['grade']; ?></td>
                                    <td>
                                        <div class="text-center">
                                            <button type="button" class="btn btn-primary btn-sm  btn1 marks" id="<?php echo $rows['id']; ?>" title="edit"><span class="mdi mdi-pencil"></span></button>
    <!--                                                      <button type="button" class="btn btn-danger btn-sm  btn1" title="edit"><span class="mdi mdi-delete-empty"></span></button>-->

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
        <div role="dialog" tabindex="-1" class="modal fade" id="edit_modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#50508f;">
                        <h4 style="color:rgb(254,255,255);">Edit Student Marks</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                    <div class="modal-body">
                        <div id="edit_marks"></div>
                    </div>
                    <?php echo form_close(); ?>
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
