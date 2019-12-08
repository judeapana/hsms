<?php $this->load->view("admin/templates/header"); ?>
<?php
//error message
if (form_error("programme") != " "){
    $this->session->set_flashdata('error', form_error("programme"));
}
//error message
if (form_error("subject") != " "){
    $this->session->set_flashdata('error', form_error("subject"));
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
                <h4 class="page-title">Add Programmes</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page"><button href="#myModal" data-toggle="modal" class="btn btn-sm btn-success">Add Programme</button></li>

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
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Programmes</h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered ">
                                <thead>
                                    <tr>

                                        <td>#</td>
                                        <th>Programme Name</th>
                                        <th>Elective Subjects 1</th>
                                        <th>Elective Subjects 2</th>
                                        <th>Elective Subjects 3</th>
                                        <th>Elective Subjects 4</th>

                                        <th class="text-center">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($results as $rows) { ?>
                                        <tr>
                                            <td><?php echo $rows['id']; ?></td>
                                            <td><?php echo $rows['name']; ?></a>
                                            <td><?php echo $rows['elect_sub1']; ?></td>
                                            <td><?php echo $rows['elect_sub2']; ?></td>
                                            <td><?php echo $rows['elect_sub3']; ?></td>
                                            <td><?php echo $rows['elect_sub4']; ?></td>


                                            </td>

                                            <td>
                                                <div class="text-center">
                                                    <a type="button"  class="btn btn-primary btn-sm  btn1 edit" title="edit"  id="<?php echo $rows['id'] ?>"><span class="mdi mdi-pencil"></span></a>
                                                    <a href="delete/programmes/<?php echo $rows["id"]; ?>/Programme/reg_programmes" type="button" class="btn btn-danger btn-sm  btn1" title="edit"><span class="mdi mdi-delete-empty"></span></a>

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

<?php echo form_open("system_settings/reg_programmes"); ?>
<div role="dialog" tabindex="-1" class="modal fade " id="myModal" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#8e8c7a;">
                <h4 style="color:rgb(254,255,255);">Add  Programme</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body">
                <form>
                    <div class="col">
                        <div class="form-group"><label>Programme</label>
                            <select class="form-control"name="programme">

                                <option value="General Science" >General Science</option>
                                <option value="General Science II" >General Science II</option>
                                <option value="General Arts" >General Arts</option>
                                <option value="General Arts II" >General Arts II</option>
                                <option value="Home Economics" >Home Economics</option>
                                <option value="Agriculture Science" >Agriculture Science</option>
                                <option value="Business" >Business</option>
                                <option value="Visual Arts" >Visual Arts</option>
                                <option value="Technical" >Technical</option>
                                </optgroup>
                            </select></div>
                                
                    </div>
                </form>
            </div>
            <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Save</button></div>
        </div>
    </div>
</div>
<?php echo form_close(); ?>




<div>
    <div role="dialog" tabindex="-1" class="modal fade" id="program_modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#50508f;">
                    <h4 style="color:rgb(254,255,255);">Add Subject To Programmes</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div id="program"></div> 
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

<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<?php $this->load->view("admin/templates/footer"); ?>
<script>

    $("#zero_config").on("click", ".edit", function () {
        var id = $(this).attr("id");
        $.ajax({
            url: "<?php echo base_url(); ?>system_settings/add_program",
            method: "POST",
            data: {id: id},
            success: function (data) {
                $("#program").html(data);
                $("#program_modal").modal("show");
            }
        });
    });

</script>