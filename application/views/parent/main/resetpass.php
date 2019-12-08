     <?php $this->load->view("admin/templates/bsheader");  ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bs-gen/css/resetpass.min.css">
</head>

<body>
    <div class="container profile profile-view" id="profile">
        <div class="row">
            <div class="col-md-12 alert-col relative">
                <p style="background-color:#ffffff;color:rgb(83,136,190);height:97px;font-size:55px;padding:8px;"><strong>Recovery&nbsp;</strong><i class="fa fa-refresh"></i></p>
            </div>
        </div>
     <?php 

     echo form_open("users/reset_password/".$option);
        
     ?>
        
            <div class="form-row profile-row">
                <div class="col-md-4 relative"><i class="fa fa-key" data-bs-hover-animate="swing" style="font-size:268px;color:rgb(102,163,255);"></i></div>
                <div class="col-md-8">
                    <div class="form-group"><label style="color:rgb(51,109,167);"><strong>Email </strong></label><input class="form-control" type="email" disabled=""   name="email" value="<?php echo $this->session->userdata("email")?>"></div>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label style="color:rgb(51,109,167);"><strong>Password </strong></label><input class="form-control" type="password" name="pass" autocomplete="off" ></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label style="color:rgb(51,109,167);"><strong>Confirm Password</strong></label><input class="form-control" type="password" name="confirmpass" autocomplete="off" ></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col"><small class="form-text text-muted" style="font-size:17px;color:rgb(156,57,86);"><strong>     <?php echo validation_errors();?></strong></small></div>
                        <div class="col-md-12 content-right"><button class="btn btn-primary form-btn" type="submit">SAVE </button></div>
                    </div>
                </div>
            </div>
        <?php form_close();?>
    </div>

    <?php $this->load->view("admin/templates/bsfooter");  ?>