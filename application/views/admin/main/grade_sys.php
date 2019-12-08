<?php $this->load->view("admin/templates/header"); ?>
<?php
//error message
if ((form_error("from_int") != " ")){
    $this->session->set_flashdata('error', form_error("from_int"));
}
?>

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Grading System</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <!-- <li class="breadcrumb-item active" aria-current="page"><a href="#" class="btn btn-sm btn-success">View Students</a></li> -->
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
            <div class="col-md-7 col-sm-12">
                <div class="card">
                    <div class="form-horizontal">
                        <div class="card-body">
                            <h4 class="card-title">Student Grading</h4>
                            <hr>
                            <div class="table-responsive"> 
                            <div class="form-group row" id="grade">
                                <?php echo form_open("system_settings/grade_sys"); ?>
                                <div class="">

                                    <table class=" text-center table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <td>#</td>
                                            <td>From Mark</td>
                                            <td>To Mark</td>
                                            <td>Grade Point</td>
                                            <td>Remark</td>
                                            <td>Action</td>

                                        </tr>
                                        </thead>
                                        <tbody class="tb-body">


                                        <tr class="table-row">
                                            <td>1</td>
                                            <td>
                                                <select class="select2 form-control custom-select" name="from_int">
                                                    <?php for ($i = 0; $i <= 100; $i++) { ?>
                                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="select2 form-control custom-select" name="to_int">
                                                    <?php for ($i = 0; $i <= 100; $i++) { ?>
                                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="select2 form-control custom-select" name="gp">
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="B2">B2</option>
                                                    <option value="B3">B3</option>
                                                    <option value="C">C</option>
                                                    <option value="C4">C4</option>
                                                    <option value="C5">C5</option>
                                                    <option value="C6">C6</option>
                                                    <option value="D7">D7</option>
                                                    <option value="E8">E8</option>
                                                    <option value="F9">F9</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="select2 form-control custom-select" name="remarks">
                                                    <option value="Excellent">Excellent</option>
                                                    <option value="Very Good">Very Good</option>
                                                    <option value="Good">Good</option>
                                                    <option value="Credit">Credit</option>
                                                    <option value="Pass">Pass</option>
                                                    <option value="Fail">Fail</option>

                                                </select>
                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-success mdi mdi-plus btn-sm"
                                                        id="btn3"> Add
                                                </button>

                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                                </div>
                               


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-sm-12 ">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-0">Grading </h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="setting">
                            <thead>

                            <tr>
                                <th scope="col">From Mark</th>
                                <th scope="col">To Mark</th>
                                <th scope="col">Grade Point</th>
                                <th scope="col">Remarks</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($results as $rows) { ?>

                                <tr>
                                    <td><?php echo $rows['from_int']; ?></td>
                                    <td><?php echo $rows['to_int']; ?></td>
                                    <td><?php echo $rows['gp']; ?></td>
                                    <td><?php echo $rows['remarks']; ?></td>
                                    <td><a type="button" class="btn btn-danger mdi mdi-minus btn-sm"
                                           id="<?php echo $rows['id']; ?>"
                                           href="delete/grade_sys/<?php echo $rows['id']; ?>"></a></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <!-- editor -->
    </form>

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
<?php $this->load->view("admin/templates/footer"); ?>
