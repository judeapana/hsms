<?php $this->load->view("admin/templates/header"); ?>

<?php
//error message
if (form_error() != " ") {
    $this->session->set_flashdata('error', form_error("class"));
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
                <h4 class="page-title">Add Classes / Halls</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item active" aria-current="page"><button href="#myModal" data-toggle="modal" class="btn btn-sm btn-success" >Add Class</button></li>

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
                        <h5 class="card-title">Classes</h5>                    
                        <div class="table-responsive">
                            <table id="setting" class="table table-striped table-bordered ">
                                <thead>
                                    <tr >
                                        <td>#</td>
                                        <th>Name Of Class</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <?php foreach ($results as $rows) { ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $rows['id']; ?></td>
                                            <th><?php echo $rows['name']; ?></th>
                                            <td>
                                                <div class="text-center">
                                                    <a href="delete/classes/<?php echo $rows["id"]; ?>/Class/reg_classes" type="button" class="btn btn-danger btn-sm  btn1" title="edit"><span class="mdi mdi-delete-empty"></span></a>
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
                        <h5 class="card-title m-b-0">Number Of Students In Each Class</h5>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Class Name</th>
                                <th scope="col">Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($results as $rows) {  $name = $rows['name'];?>                                   
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

<div role="dialog" tabindex="-1" class="modal fade" id="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#8e8c7a;">
                <h4 style="color:rgb(254,255,255);">Add  Classes</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body">
                <?php echo form_open("system_settings/reg_classes"); ?>
                <div class="col">
                    <div class="form-group"><label  for="input">Class Name</label></div>
                    <div class="col"><input type="text" placeholder=" " class="form-control" name="class" /></div>
                </div>
            </div>
            <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Save</button></div>
                <?php echo form_close(); ?>

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
