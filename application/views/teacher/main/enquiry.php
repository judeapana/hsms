<?php
if ($this->session->userdata("usertype") != "teacher" || empty($this->session->userdata("username"))) {
    $this->session->sess_destroy();
    redirect(base_url() . "users/teacher");
}
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>School Management System</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bs-gen/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bs-gen/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bs-gen/fonts/ionicons.min.css">
        <link href="<?php echo site_url(); ?>assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url(); ?>assets/images/favicon.png">
        <link href="<?php echo site_url(); ?>assets/bs-gen/js/enquiry.min.js" rel="stylesheet">
        <link href="<?php echo site_url(); ?>assets/bs-gen/css/enquiry.min.css" rel="stylesheet">
        <link href="<?php echo site_url(); ?>assets/libs/datatable/css/dataTables.bootstrap4.css" rel="stylesheet">

    <body>
        <div style="background-color:#00a5db;height:180px; margin-bottom: 20px;" class="noprint">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row clearmargin clearpadding row-image-txt" style="height:159px;padding:-1px;">
                            <div class="col-xs-12 col-sm-12 col-md-12" style="padding:20px;">

                                <h1>Enquiry System Student Results</h1>
                                <button class="button" type="button" data-hover="Ok!" onclick="print();"><span>Do You Want To Print?</span></button>

                                <button class="button " type="button" data-hover="Ok!" onclick="window.location.href = '<?php echo site_url("uploadmarks"); ?>'"><span > << Go Back ?</span></button>
                                <hr>
                                <div style="text-align:center"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top:4px;margin-bottom:35px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xl-6">
                        <ul class="list-group">
                            <li class="list-group-item"><span class="text-capitalize">Teacher Name :&nbsp; <?php echo $this->session->userdata("fullname"); ?></span></li>
                            <li class="list-group-item"><span>Teacher &nbsp;ID : <?php echo ucfirst($this->session->userdata("username")); ?></span></li>
                            <li class="list-group-item"><span>Subject Name : <?php echo $this->session->userdata("subject_area"); ?></span></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-xl-6">
                        <ul class="list-group">
                            <li class="list-group-item"><span>Academic Year : <?php echo $this->session->userdata("academic_year"); ?></span></li>
                            <li class="list-group-item"><span>Semester : <?php
                                    $sem = $this->session->userdata("data_equiry");
                                    echo $sem['semester'];
                                    ?></span></li>
                            <li class="list-group-item"><span>Teacher Contact : <?php echo $this->session->userdata("contact"); ?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid"><table id="zero_config" class="table table-striped table-bordered " id cellspacing="0" width="100%">
                <thead>

                    <tr>
                        <th>#</th>
                        <th>Student ID</th>
                        <th>Form</th>
                        <th>Class</th>
                        <th>Term</th>
                        <th>Class Score</th>
                        <th>Exams Score</th>
                        <th>Total Score</th>
                        <th>Grade</th>
                        <th>Attendance</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($results as $rows) {
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $rows['stdid']; ?></td>
                            <td><?php echo $rows['form']; ?></td>
                            <td><?php echo $rows['stdclass']; ?></td>
                            <td><?php echo $rows['term']; ?></td>
                            <td><?php echo $rows['class_score']; ?></td>
                            <td><?php echo $rows['exams_score']; ?></td>
                            <td><?php echo $rows['total_score']; ?></td>
                            <td><?php echo $rows['grade']; ?></td>
                            <td><?php echo $rows['attendance']; ?></td>
                        </tr>
                        <?php $i++;
                    }
                    ?>
                </tbody>
            </table></div>

        <style>
            @media print{
                .noprint{
                    display: none;
                }
            }
        </style>
<?php $this->load->view("admin/templates/bsfooter"); ?>
