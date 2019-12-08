<?php $this->load->view("admin/templates/bsheader"); ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bs-gen/css/recovery_pin.min.css">
</head>

<body >
    <p style="background-color:#ffffff;color:rgb(83,136,190);height:97px;font-size:48px;padding:8px;"><strong>Recovery&nbsp;</strong><i class="fa fa-refresh"></i></p>
    <div class="col"><i class="fa fa-envelope-o" style="font-size:216px;color:rgb(102,163,255);"></i></div>
    <div class="col">
        <p style="font-size:19px;color:rgb(82,122,163);">An email has been sent to your email account. kindly check your email and fill in the recovery pin and click send.</p>
    </div><small class="form-text text-muted" style="font-size:18px;margin-bottom:4px;color:#ce1126;">

        <?php echo form_open("users/recoverystatic/" . $option); ?>
        <?php echo form_error("pin"); ?>
        <strong> <?php if ($error) {
            echo "You entered an invalid pin";
        } ?></strong>&nbsp;</small>
    <div class="container-fluid" style="width:392px;">
        <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text" style="color:#ffffff;background-color:#28c4d8;width:61px;">
                    <strong>PIN</strong></span></div><input class="form-control" type="text" name="pin">
            <div class="input-group-append"><button class="btn btn-primary" type="submit" style="width:82px;"><i class="fa fa-send-o" style="font-size:23px;letter-spacing:8px;"></i></button></div>
        </div>
    </div>

    <?php echo form_close(); ?>

<?php $this->load->view("admin/templates/bsfooter"); ?>
