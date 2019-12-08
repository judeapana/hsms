<?php $this->load->view("student/templates/header"); ?>





<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Results</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">

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
        <?php
        $atts = array(
            'width' => 1500,
            'height' => 700,
            'scrollbars' => 'yes',
            'status' => 'yes',
            'resizable' => 'yes',
            'window_name' => 'Results',
            "class" => "btn btn-cyan btn-sm"
        );
        ?>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title m-b-0">Recent Results</h4>
                    </div>
                    <?php if (!empty($student_available_res)) { ?>
                        <?php foreach (array_unique($student_available_res, SORT_REGULAR) as $rows) { ?>

                            <div class="comment-widgets scrollable ps-container ps-theme-default" data-ps-id="ec59829d-7700-2c4e-81bd-641162e3ec80">
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row m-t-0">
                                    <div class="p-2"><img src="<?php echo site_url(); ?>assets/images/users/results-icon.png" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium text-primary"><?php echo "Form " . $rows['form'] . " Term " . $rows['term']; ?></h6>
                                        <span class="m-b-5 d-block">Academic Year - <?php echo $rows['academic_year']; ?></span>
                                        <div class="comment-footer">
                                            <?php echo anchor_popup("studentctrls/showres/" . $rows['form'] . '/' . $rows['term'] . '/' . $rows['academic_year'], "Print Results", $atts); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                        }
                    } else {
                        ?>
                        <div class="comment-widgets scrollable ps-container ps-theme-default" data-ps-id="ec59829d-7700-2c4e-81bd-641162e3ec80">
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row m-t-0">
                                <div class="p-2"><img src="<?php echo site_url(); ?>assets/images/users/warning.png" alt="user" width="50" class="rounded-circle"></div>
                                <div class="comment-text w-100">
                                    <h6 class="font-medium text-primary">Sorry, No Results Are Available</h6>
                                    <span class="m-b-5 d-block">Academic Year - None</span>
                                    <div class="comment-footer">
                                        <button type="button" disabled="" class="btn btn-cyan btn-sm">Print Results <span class="fa fa-print"></span></button>

                                    </div>
                                </div>
                            </div>
                        </div>


                    <?php } ?>
                </div>








            </div>
            <!-- editor -->


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



    </div></div>







<?php $this->load->view("student/templates/footer"); ?>
