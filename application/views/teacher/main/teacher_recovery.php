     <?php $this->load->view("admin/templates/bsheader");  ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bs-gen/css/styles.min.css">
</head>

<body style="background-color:#282d32;">
    <div class="login-clean" style="color:#3f3f38;height:604px;padding-top:49px;">
        <?php echo form_open("users/recovery/".$option); ?>
            <h2 class="sr-only">Login Form</h2>
            <h2 style="text-align:center;margin-left:0px;color:rgba(43,98,182,0.76);font-size:19px;text-transform:uppercase;"><strong><?php echo $option; ?> recovery</strong></h2>
            <div class="illustration"><i class="icon ion-ios-unlocked" style="color:#c6ad0f;"></i></div>
            <div class="form-group">
                <small class="form-text text-muted" style="text-align:center;color:#fc2366 !important;margin-bottom:6px;">
                    <strong><?php echo form_error("email");?></strong>
                </small>
                <input class="form-control" type="email" name="email"  placeholder="Enter Your Email Here"
                       autocomplete="on" value="<?php echo set_value("email")?>"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color:#c6ad0f;">Recover Account</button></div>
            <a class="text-primary forgot" href="<?php echo base_url("users/".$option);?>" style="color:rgb(228,25,12);">Click to return to login page&nbsp;<i class="fa fa-link"></i></a>
            <p class="forgot">&nbsp;A reset pin will be sent to your &nbsp;email account&nbsp;<i class="fa fa-envelope-o"></i></p>
              <?php echo form_hidden("usertype",$option);?>
        <?php echo form_close(); ?>
    </div>
                <div class="m-sm-auto m-md-auto m-lg-auto m-xl-auto " style="height:20px;padding-top:35px;">
                <p class="text-white" style="text-align:center;">Genius Developers @ 2019</p>
            </div>
    </div>
     <?php $this->load->view("admin/templates/bsfooter");  ?>