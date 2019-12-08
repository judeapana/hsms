<?php require_once 'template/header.php'; ?>
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
                <h4 class="page-title">Send Mail</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <form class="p-r-10">

                                <select class="select form-control" style="width: 100%; height:36px;">

                                    <option value="CT">Students</option>
                                    <option value="DE">Lecturers</option>
                                    <option value="DE">All</option>
                                    </optgroup>
                                </select>

                            </form>
                            <li class="breadcrumb-item active" aria-current="page"><a href="#"
                                                                                      class="btn btn-sm btn-success">Send
                                    Message</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="#"
                                                                                      class="btn btn-sm btn-success">View
                                    Send Messages</a></li>

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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Broadcast Message</h4>
                                <!-- Create the editor container -->
                                <div id="editor" style="height: 800px;">
                                    <p>
                                        <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- ============================================================== -->
        <!-- EEROR HANDLERS Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Notification</h5>
                        <div class="row">
                            <div class="col-md-3 col-sm-12">
                                <button type="button" class="btn btn-lg btn-block btn-outline-success" id="ts-success">
                                    Success
                                </button>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <button type="button" class="btn btn-lg btn-block btn-outline-info" id="ts-info">Info
                                </button>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <button type="button" class="btn btn-lg btn-block btn-outline-warning" id="ts-warning">
                                    Warning
                                </button>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <button type="button" class="btn btn-lg btn-block btn-outline-danger" id="ts-error">
                                    Error
                                </button>
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
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <?php $this->load->view("admin/templates/footer"); ?>
