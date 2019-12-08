     <?php $this->load->view("admin/templates/bsheader");?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bs-gen/css/styles.min.css">


    <body style="background-color:#282d32;height:723px;">
        <div id="fakeLoader"></div>
        <div class="login-clean" style="height:634.2px;padding-top:38px;">
            <?php echo form_open(); ?>
                <h2 class="sr-only">Login Form</h2>
                <h1 style="text-align:center;margin-left:0px;color:rgba(43,98,182,0.76);font-size:19px;text-transform:uppercase;"><strong>Teacher</strong></h1>
                <div class="illustration"><i class="icon ion-ios-locked"></i></div>
                <div class="form-group">
                    <small class="form-text text-muted" style="margin-bottom:8px;text-align:center;color:#f28411 !important;">
                        <strong><?php echo form_error("username"); ?></strong></small>
                    <?php

if ($error) {
	echo '<small class="form-text text-muted" style="margin-bottom:8px;text-align:center;color:#f28411 !important;">
                        <strong>Incorrect Username Or Password</strong></small>';
}?>
                    <input class="form-control" type="text" name="username"  placeholder="User name"autocomplete="on" value="<?php echo set_value("username"); ?>">
                </div>
                <div class="form-group">
                    <small class="form-text text-muted" style="margin-bottom:8px;text-align:center;color:#f28411 !important;">
                        <strong><?php echo form_error("password"); ?></strong></small>
                    <input class="form-control" type="password" name="password"  placeholder="Password Here" >

                </div>

                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div><a class="text-primary forgot" href="<?php echo base_url("users/recovery/teacher"); ?>">Forgot your email or password?&nbsp;<i class="fa fa-link"></i></a>
                <a class="text-primary forgot" href="<?php echo base_url("/"); ?>">Go back&nbsp;</a>
            </form>
        </div>
        <footer>
            <div class="m-sm-auto m-md-auto m-lg-auto m-xl-auto " style="height:20px;padding-top:35px;">
                <p class="text-white" style="text-align:center;">Genius Developers @ 2019</p>
            </div>
        </footer>



     <?php $this->load->view("admin/templates/bsfooter");?>