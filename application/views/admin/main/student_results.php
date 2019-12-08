<?php if (empty($results)) {show_404();}?>
<?php $this->load->view("admin/templates/bsheader");?>
<?php
if ($this->session->userdata("usertype") != "admin" || empty($this->session->userdata("username"))) {
	$this->session->sess_destroy();
	redirect(base_url() . "users/admin");
}
?>
<body >
    <div style="font-size:99px;margin:17px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 d-inline-block" id="center">
                    <img src="<?php echo base_url('assets/images/school.png'); ?>" height="200" ></div>
                <div class="col-md-6 col-lg-8">
                    <header></header>
                    <h1 style="text-align:center;font-size:36px;color:rgb(61,145,230);"><strong>ST.CHARLES MINOR SEMINARY</strong></h1>
                    <p style="font-size:15px;text-align:center;margin-bottom:0px;"><strong>Post Office Box 175, Tamale Metro ,Salaga</strong></p>
                    <p style="font-size:15px;text-align:center;margin-bottom:5px;"><strong>West Africa Education Services</strong></p>
                    <p style="font-size:33px;text-align:center;color:rgb(62,140,218);"><strong>STUDENT SEMESTER REPORT</strong></p>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-bottom:16px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php foreach ($results_user as $rows) {
	?>
                        <p class="text-primary"><strong>NAME : <?php echo strtoupper($rows['fname'] . " " . $rows['lname']); ?></strong></p>
                        <!--<p class="text-primary"><strong>FORM : <?php // echo $rows['form'];   ;;;;;?></strong><br></p>-->
                        <p class="text-primary"><strong>STUDENT ID : <?php echo strtoupper($rows['uname']); ?></strong><br></p>
                        <p class="text-primary"><strong>PROGRAMME : <?php echo strtoupper($rows['stdprogram']); ?></strong><br></p>
                    </div>
                    <div class="col-md-4">
                        <p class="text-primary"><strong>HOUSE : <?php echo strtoupper($rows['stdhouse']); ?></strong><br></p>
                        <p class="text-primary"><strong>DATE : <?php echo date("d  M  Y", time()); ?></strong><br></p>
                        <?php if (!empty($resume_date[0]['resume'])) {?>
                            <p class="text-primary"><strong>RESUME DATE : <?php echo $resume_date[0]['resume']; ?></strong><br></p>
                        <?php } else {?>
                            <p class="text-primary"><strong>RESUME DATE : <?php echo "Not Available"; ?></strong><br></p>

                        <?php }
}?>

                </div>
                <div class="col-md-4" style="text-align:center;"><img class="img-fluid img-thumbnail" src="<?php echo base_url(); ?>assets/images/users/students/<?php echo $results_user[0]['profileimg']; ?>"  width="120" height="90"></div>
            </div>
        </div>
    </div>
    <div style="margin-bottom:10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive table-bordered">
                        <table class="table table-striped table-bordered">
                            <thead>

                                <tr class="text-success">
                                    <th>SUBJECTS</th>
                                    <th>CLASS SCORE</th>
                                    <th>EXAMS SCORE</th>
                                    <th>TOTAL SCORE</th>
                                    <th>ATTENDANCE</th>
                                    <th>GRADE</th>
                                    <th>REMARKS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($results)) {
	?>
                                    <?php
$total = 0;
	$attendance = 0;
	foreach ($results as $rows) {
		?>
                                        <tr>
                                            <td class="text-secondary"><?php echo strtoupper($rows['subject']); ?></td>
                                            <td><?php echo $rows['class_score']; ?></td>
                                            <td><?php echo $rows['exams_score']; ?></td>
                                            <td><?php echo $rows['total_score']; ?></td>
                                            <td><?php echo $rows['attendance']; ?></td>
                                            <td class="text-danger"><?php echo $rows['grade']; ?></td>
                                            <td><?php echo strtoupper($rows['remarks']); ?></td>
                                        </tr>

                                        <?php
$total = $total + $rows['total_score'];
		$attendance = $attendance + $rows['attendance'];
	}
	?>
    <?php
} else {
	echo '<p class="text-info"> Remarks Not Available </p>';
}
?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-bottom:5px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                    <p class="text-secondary"><strong>TOTAL SCORE : <?php echo $total; ?></strong><br></p>
                    <p></p>
                </div>
                <div class="col-md-4">
                    <p class="text-secondary"><strong>AVERAGE SCORE : <?php
$num = count($results);
echo ceil($total / $num);
?> </strong></p>
                </div>
                <div class="col-md-4">
                    <p class="text-secondary"><strong>ATTENDANCE : <?php echo $attendance;
?> </strong></p>

                </div>
            </div>
                <hr>
        </div>
    </div>

    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if (!empty($student_remarks)) {
	?>
                        <?php foreach ($student_remarks as $rows) {?>
                            <p class="text-info"><strong><?php echo $rows['position']; ?> Remarks : <?php echo $rows['remark']; ?></strong><br></p>

        <?php
}
} else {
	echo '<p class="text-info"> Remarks Not Available </p>';
}
?>
                </div>
            </div>
        </div>
    </div>

