<?php $this->load->view("admin/templates/header"); ?>

<?php 
//error
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
                <h4 class="page-title">Add Subject</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page"><button  href="#myModal" data-toggle="modal" class="btn btn-sm btn-success">Add Subject</button></li>

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
                        <h5 class="card-title">Subjects</h5>
                        <div class="table-responsive">
                            <table id="setting" class="table table-striped table-bordered ">
                                <thead>
                                    <tr >

                                        <td>#</td>

                                        <th>Subject Name</th>

                                        <th class="text-center">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($results as $rows) { ?>

                                        <tr>
                                            <td><?php echo $rows['id']; ?></td>

                                            <td><?php echo $rows['name']; ?></td>


                                            <td>
                                                <div class="text-center">
                                                    <a type="button" class="btn btn-danger btn-sm  btn1" title="delete" href="delete/subjects/<?php echo $rows['id']; ?>/Subject/reg_subjects"><span class="mdi mdi-delete-empty"></span></a>

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
                        <h5 class="card-title m-b-0">Number Of Students Offering Programmes</h5>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Programme </th>
                                <th scope="col">Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($results_programme as $rows) { ?>
                                <tr>
                                    <td><a href="#" class="link"><?php echo $rows['name']; ?></a></td>
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

<?php echo form_open("system_settings/reg_subjects"); ?>
<div role="dialog" tabindex="-1" class="modal fade" id="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#8e8c7a;">
                <h4 style="color:rgb(254,255,255);">Add  Subject</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body">

                <div class="col">
                    <div class="form-group"><label>Subjects</label>
                        <select class="form-control" name="subject">
                            <option value="Elective Mathematics">Elective Mathematics</option>
                            <!--<option value="English Language">English Language</option>-->
                            <option value="Physics">Physics</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Biology">Biology</option>
                            <!--<option value="Social Studies">Social Studies</option>-->
                            <option value="Geography">Geography</option>
                            <option value="French">French</option>
                            <option value="Christian Religious Studies">Christian Religious Studies</option>
                            <!--<option value="Core Mathematics">Core Mathematics</option>-->
                            <option value="Management In Living">Management In Living</option>
                            <option value="Economics">Economics</option>
                            <option value="Financial Accounting">Financial Accounting</option>
                            <option value="Business Management">Business Management</option>
                            <option value="Costing Accounting">Costing Accounting</option>
                            <option value="Food And Nutrition">Food And Nutrition</option>
                            <option value="Literature">Literature</option>
                            <option value="Government">Government</option>
                            <option value="History">History</option>
                            <option value="Graphic Design">Graphic Design</option>
                             <option value="Textiles">Textiles</option>
                             <option value="Fashion And Design">Fashion And Design</option>
                             <option value="English Language">English Language</option>
                             <option value="Core Mathematics">Core Mathematics</option>
                             <option value="English Language">English Language</option>
                             <option value="French">French</option>
                      
                       </select></div>
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
