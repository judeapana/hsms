<?php
if ($this->session->userdata('usertype') != 'admin' || empty($this->session->userdata('username'))) {
	$this->session->sess_destroy();
	redirect(base_url() . 'users/admin');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>School Management System</title>
        <link rel='stylesheet' href='<?php echo base_url(); ?>assets/bs-gen/bootstrap/css/bootstrap.min.css'>
        <link rel='stylesheet' href='<?php echo base_url(); ?>assets/bs-gen/fonts/font-awesome.min.css'>
        <link rel='stylesheet' href='<?php echo base_url(); ?>assets/bs-gen/fonts/ionicons.min.css'>
        <link href='<?php echo site_url(); ?>assets/libs/toastr/build/toastr.min.css' rel='stylesheet'>
        <link rel='icon' type='image/png' sizes='16x16' href='<?php echo site_url(); ?>assets/images/favicon.png'>
        <link href='<?php echo site_url(); ?>assets/bs-gen/js/enquiry.min.js' rel='stylesheet'>
        <link href='<?php echo site_url(); ?>assets/bs-gen/css/enquiry.min.css' rel='stylesheet'>
        <link href='<?php echo site_url(); ?>assets/libs/datatable/css/dataTables.bootstrap4.css' rel='stylesheet'>
    </head>


    <body>
        <div style='background-color:#00a5db;height:180px;' >
            <div class='container'>
                <div class='row'>
                    <div class='col'>
                        <div class='row clearmargin clearpadding row-image-txt' style='height:159px;padding:-1px;'>
                            <div class='col-xs-12 col-sm-12 col-md-12' style='padding:20px;'>

                                <h1 class="text-center">St.Charles Minor Seminary  <br>Student Details</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style='margin-top:4px;margin-bottom:35px;'>
            <div class='container'>
                <div class='row'>
                    <div class='col-md-4 offset-8' style='padding:10px;'>
                        <img src='<?php echo base_url(); ?>assets/images/users/students/<?php echo $result[0]['profileimg']; ?>' width='150' height='150' class=' img-responsive img-thumbnail' alt='student image'>
                    </div>
                    <?php
foreach ($result as $rows) {
	foreach ($ptresult as $ptrow) {
		?>
                            <div class='col-md-6 col-xl-6'>
                                <ul class='list-group'>
                                    <li class='list-group-item'><span class='text-capitalize'>First Name :&nbsp; <?php echo $rows['fname']; ?></span></li>
                                    <li class='list-group-item'><span>Last Name &nbsp;: <?php echo $rows['lname']; ?></span></li>
                                    <li class='list-group-item'><span>Contact Number : <?php echo $rows['contact']; ?></span></li>
                                    <li class='list-group-item'><span>Address: <?php echo $rows['postaladdr']; ?></span></li>
                                    <li class='list-group-item'><span>Nationality: <?php echo $rows['nationality']; ?></span></li>
                                    <li class='list-group-item'><span>Student Class : <?php echo $rows['stdclass']; ?></span></li>
                                    <li class='list-group-item'><span>User Name: <?php echo $rows['stdid']; ?></span></li>
                                    <li class='list-group-item'><span>Email Address : <?php echo $rows['email']; ?></span></li>
                                    <li class='list-group-item'><span>Sex : <?php echo $rows['sex']; ?></span></li>

                                </ul>
                            </div>
                            <div class='col-md-6 col-xl-6'>
                                <ul class='list-group'>
                                    <li class='list-group-item'><span>Student Date Of Birth : <?php echo $rows['date_of_birth']; ?></span></li>
                                    <li class='list-group-item'><span>Student Programme : <?php echo $rows['stdprogram']; ?></span></li>
                                    <li class='list-group-item'><span>Student House : <?php echo $rows['stdhouse']; ?></span></li>
                                    <li class='list-group-item'><span>Parent First Name: <?php echo $ptrow['ptuname']; ?></span></li>
                                    <li class='list-group-item'><span>Parent Last Name : <?php echo $ptrow['ptlname']; ?></span></li>
                                    <li class='list-group-item'><span>Parent Contact : <?php echo $ptrow['ptcontact']; ?></span></li>
                                    <li class='list-group-item'><span>Parent Occupation : <?php echo $ptrow['ptoccupation']; ?></span></li>
                                    <li class='list-group-item'><span>Parent Email Address : <?php echo $ptrow['ptemail']; ?></span></li>
                                    <li class='list-group-item'><span>Parent User Name (ID) : <?php echo $ptrow['ptuname']; ?></span></li>
                                </ul>
                            </div>

                            <?php
}
}
?>
                </div>
            </div>
        </div>
        <div>
            <div class='container-fluid bg-primary'>
                <div class='row'>
                    <div class='col-md-12'>
                        <div class='footer-2'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-8 col-sm-6 col-md-6'>
                                        <p class='text-left' style='margin-top:5%;margin-bottom:3%;'>© <?php echo date('Y', time()); ?> Hsms</p>
                                    </div>
                                    <div class='col-12 col-sm-6 col-md-6'>
                                        <p class='text-right' style='margin-top:5%;margin-bottom:8%;font-size:1em;'>Privacy Policy</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            @media print{
                .noprint{
                    display: none;
                }
            }
        </style>
    </body>
</html>