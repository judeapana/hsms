<?php $this->load->view("admin/templates/header"); ?>


<div class="container profile profile-view" id="profile">
    <div class="row">
        <div class="col-md-12 alert-col relative">
            <div class="alert alert-info absolue center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                <span>Profile save with success</span></div>
        </div>
    </div>

    <div class="form-row profile-row">
        <div class="col-md-4  ">
            <div class="">
                <div class="">
                    <?php if (!empty($this->session->userdata("profileimg"))) { ?>
                        <img width="200" height="200" class=" img-thumbnail"
                             src="<?php echo base_url(); ?>assets/images/users/admin/<?php echo $this->session->userdata('profileimg'); ?>"/>
                    <?php } else { ?>
                        <h3 class="text-muted">No profile Image</h3>
                    <?php } ?>
                </div>

            </div>
            <?php echo form_open_multipart("profiles/uploadimg"); ?>
            <div class="col-md-12  ">
                <div class="form-group"><label> Change Profile Image</label>
                    <input type="file" name="profileimg">
                </div>
                <p class="text-danger"><?php echo form_error("profileimg"); ?></p>
                <button class="btn btn-small btn-success" type="submit"> Change</button>
            </div>
            <?php echo form_close(); ?>
        </div>

        <div class="col-md-8 col-sm-12">
            <h1>Profile </h1>
            <hr>
            <div class="form-row">
                <div class="col-sm-12 col-md-6">
                    <?php echo form_open_multipart("profiles/administrators"); ?>
                    <div class="form-group"><label>Firstname </label><input disabled="" class="form-control" type="text"
                                                                            name="fname"
                                                                            value="<?php echo $results[0]['fname']; ?>">
                    </div>
                    <p class="text-danger"><?php echo form_error("fname"); ?></p>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group"><label>Lastname </label><input disabled="" class="form-control" type="text"
                                                                           name="lname"
                                                                           value="<?php echo $results[0]['lname']; ?>">
                    </div>
                    <p class="text-danger"><?php echo form_error("lname"); ?></p>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="form-group"><label>Contact</label>
                        <input class="form-control" disabled="" type="text" name="contact"
                               value="<?php echo $results[0]['contact']; ?>">
                    </div>
                    <p class="text-danger"><?php echo form_error("contact"); ?></p>

                </div>
            </div>
            <div class="form-group"><label>Email </label><input disabled="" class="form-control" type="email"
                                                                autocomplete="off" name="email"
                                                                value="<?php echo $results[0]['email']; ?>">
                <p class="text-danger"><?php echo form_error("email"); ?></p>
            </div>
            <div class="form-group"><label>User Name </label><input disabled="" class="form-control" type="text"
                                                                    autocomplete="off" name="uname"
                                                                    value="<?php echo $results[0]['uname']; ?>">
                <p class="text-danger"><?php echo form_error("uname"); ?></p>
            </div>
            <div class="form-row">
                <div class="col-sm-12 col-md-6">
                    <div class="form-group"><label>Change Password </label><input class="form-control" type="password"
                                                                                  name="pass" autocomplete="off">
                        <p class="text-muted"><?php echo form_error("pass", "<div class='text-danger'>", "</div>"); ?></p>
                    </div>

                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group"><label>Confirm Change Password</label><input class="form-control"
                                                                                         type="password" name="cpass"
                                                                                         autocomplete="off">
                        <p class="text-danger"><?php echo form_error("cpass", "<div class='text-danger'>", "</div>"); ?></p>
                    </div>
                </div>
            </div>

            <hr>
            <div class="form-row">
                <div class="col-md-12 content-right">
                    <button class="btn btn-primary form-btn" type="submit">SAVE</button>
                </div>
            </div>
        </div>
    </div>
    <?php form_close(); ?>
    <?php $this->load->view("admin/templates/footer"); ?>



