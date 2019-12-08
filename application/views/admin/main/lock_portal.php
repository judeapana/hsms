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
                <h4 class="page-title">Portal Manager</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <!-- <li class="breadcrumb-item active" aria-current="page"><a href="#" class="btn btn-sm btn-success"></a></li> -->

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
                        <h5 class="card-title">Available Portals</h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered text-center">
                                <thead>
                                <tr>

                                    <td>#</td>
                                    <th>Position</th>
                                    <th>Portal User</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>Teacher</td>

                                    <td><a href="" class="pl-2">
                                            <img src="1.jpg" class="img-responsive rounded-circle " height="50"
                                                 width="50">
                                            Thomas23</a>
                                    </td>
                                    <td class="text-primary"><span class="fas fa-lock-open"></span></td>


                                    <td>
                                        <div class="text-center">
                                            <button type="button" class="btn btn-primary btn-sm  btn1" title="lock">
                                                <span class="fa fa-lock"></span></button>
                                            <button type="button" class="btn btn-danger btn-sm  btn1"
                                                    title="delete portal"><span class="mdi mdi-delete-empty"></span>
                                            </button>

                                        </div>
                                    </td>


                                </tr>

                                <tr>
                                    <td>1</td>
                                    <td>Student</td>

                                    <td><a href="" class="pl-2">
                                            <img src="1.jpg" class="img-responsive rounded-circle " height="50"
                                                 width="50">
                                            kenndy agepoen</a>
                                    </td>
                                    <td class="text-primary"><span class="fas fa-lock"></span></td>


                                    <td>
                                        <div class="text-center">
                                            <button type="button" class="btn btn-primary btn-sm  btn1" title="edit">
                                                <span class="mdi mdi-pencil"></span></button>
                                            <button type="button" class="btn btn-danger btn-sm  btn1" title="edit"><span
                                                        class="mdi mdi-delete-empty"></span></button>

                                        </div>
                                    </td>


                                </tr>


                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-0">Number Of Students Offering Subjects</h5>
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Portal Actions</th>
                            <th scope="col">Number</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><a href="#" class="link">Deleted</a></td>
                            <td>1240</td>
                        </tr>
                        <tr>
                            <td><a href="#" class="link">Blocked</a></td>
                            <td>1200</td>
                        </tr>
                        <tr>
                            <td><a href="#" class="link">Open</a></td>
                            <td>1542</td>
                        </tr>

                        </tbody>
                    </table>
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
