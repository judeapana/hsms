
<?php $this->load->view("student/templates/bsheader");?>
<section  class="container">
    <div style="font-size:99px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 d-inline-block" id="center" ><img src="<?php echo base_url('assets/images/school.png'); ?>" height="200" ></div>
                <div class="col-md-6 col-lg-8">
                    <header></header>
                    <h1 style="text-align:center;font-size:36px;color:rgb(61,145,230);"><strong>ST.CHARLES SEMINARY</strong></h1>
                    <p style="font-size:15px;text-align:center;margin-bottom:0px;"><strong>Post Office Box 175, Tamale Metro ,Salaga</strong></p>
                    <p style="font-size:15px;text-align:center;margin-bottom:5px;"><strong>West Africa Education ServIces</strong></p>
                    <p style="font-size:15px;text-align:center;color:rgb(62,140,218);"><strong>STUDENT SEMESTER REPORT</strong></p>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-bottom:16px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p class="text-primary"><strong>NAME : <?php echo strtoupper($this->session->userdata("fullname")); ?></strong></p>
                    <p class="text-primary"><strong>STUDENT ID : <?php echo $this->session->userdata("username"); ?></strong><br></p>
                    <p class="text-primary"><strong>FORM : <?php echo $results[0]['form']; ?></strong> | <strong>TERM : <?php echo $results[0]['term']; ?></strong><br></p>
                    <span class="text-primary"><br></span>
                </div>
                <div class="col-md-4">
                    <p class="text-primary"><strong>HOUSE : <?php echo strtoupper($student[0]['stdhouse']); ?></strong><br></p>
                    <p class="text-primary"><strong>RESUME DATE : <?php if (!empty($resume_date)) {echo $resume_date[0]['resume'];} else {echo "--";}?></strong><br></p>
                    <p class="text-primary"><strong>PROGRAMME : <?php echo strtoupper($student[0]['stdprogram']); ?></strong><br></p>

                </div>
                <div class="col-md-4 m-t-0" style="text-align:center;"><img class="img-fluid img-thumbnail" src="<?php echo base_url(); ?>assets/images/users/students/<?php echo $this->session->userdata("profileimg"); ?>" width="120" height="90"></div>
            </div>
        </div>
    </div>
    <div style="margin-bottom:10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive table-bordered">
                        <table class="table table-striped table-bordered table-light">
                            <thead>

                                <tr class="text-success">
                                    <th>SUBJECTS</th>
                                    <th>CLASS SCORE</th>
                                    <th>EXAMS SCORE</th>
                                    <th>TOTAL SCORE</th>
                                    <th>GRADE</th>
                                    <th>REMARKS</th>
                                    <th>ATTENDANCE</th>
                                </tr>
                            </thead>
                            <tbody class="">
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
                                            <td class="text-danger"><?php echo $rows['grade']; ?></td>
                                            <td><?php echo strtoupper($rows['remarks']); ?></td>
                                            <td><?php echo $rows['attendance']; ?></td>
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
            <hr>
            <div class="row">
                <div class="col-md-4">

                    <p class="text-secondary"><strong>TOTAL SCORE : <?php echo $total; ?></strong><br></p>

                </div>
                <div class="col-md-4">
                    <p class="text-secondary text-center"><strong>AVERAGE SCORE : <?php echo ceil($total / count($results)); ?></strong></p>
                </div>
                <div class="col-md-4">
                    <p class="text-secondary float-right"><strong>ATTENDANCE : <?php echo $attendance; ?> </strong></p>
                </div>
            </div>
            <hr>
        </div>

    </div>
    <div>
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

        <div>

        </div>
</section>

<?php $this->load->view("student/templates/bsfooter");?>