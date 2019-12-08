<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bs-gen/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bs-gen/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bs-gen/fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bs-gen/css/styles.min.css">
            <link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url(); ?>assets/images/favicon.png">
</head>

<body >
    <!--style="background-color:#f0f9ff;" class="container-fluid"-->
            <header>
            <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white transparency border-bottom border-light" id="transmenu">
                <div class="container"><a class="navbar-brand text-success" href="#header">HSMS</a><button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navcol-1"><span></span><span></span><span></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1" style="/*background-color:#6f6f6e;*//*padding-right:0px;*/">
                        <ul class="nav navbar-nav ml-auto" style="padding-right:0px;padding-left:10px;">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url()."users/teacher"?>">Teachers</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url()."users/student"?>">&nbsp;Students</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url()."users/admin"?>">Administrators</a></li>
                            <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Info</a>
                                <div class="dropdown-menu" role="menu" onclick="alert('Not Available')"><a class="dropdown-item" role="presentation" href="" >About Us</a></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="bg-success d-flex align-items-center" style="height:100vh;">
                <div class="text-center w-100 text-white">
                    <h1>HIGH SCHOOL MANAGEMENT SYSTEM</h1>
                    <h2 class="font-weight-normal"><em>Easily Manage Your Senior High Schools in Ghana</em></h2>
                </div>
            </div>
        </header>
    
    

    <script src="<?php echo base_url();?>assets/bs-gen/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/bs-gen/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/bs-gen/js/script.min.js"></script>
</body>

</html>