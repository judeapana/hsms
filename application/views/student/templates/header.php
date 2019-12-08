<?php
if ($this->session->userdata("usertype") != "student" || empty($this->session->userdata("username"))) {
    $this->session->sess_destroy();
    redirect(base_url() . "users/student");
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url(); ?>assets/images/favicon.png">
        <title>School Management System Student</title>
        <link href="<?php echo site_url(); ?>assets/dist/css/style.min.css" rel="stylesheet">
        <link href="<?php echo site_url(); ?>assets/dist/css/profile-styles.min.css" rel="stylesheet">
        <link href="<?php echo site_url(); ?>assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
        <link href="<?php echo site_url(); ?>assets/libs/datatable/css/dataTables.bootstrap4.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/libs/select2/dist/css/select2.min.css">
     <link rel="stylesheet" href="<?php echo base_url(); ?>assets/libs/fakeloader/fakeLoader.css">
   </head>

    <body >

        <div id="main-wrapper" >
    <!--create preloader-->
<div id="fakeLoader-portal"></div>
            <header class="topbar  " data-navbarbg="skin5">
                <nav class="navbar top-navbar navbar-expand-md navbar-dark ">
                    <div class="navbar-header bg-primary" data-logobg="skin5">
                        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                            <i class="ti-menu ti-close"></i>
                        </a>
                        <a class="navbar-brand" href="<?php echo base_url() . "studentctrls"; ?>">
                            <!-- Logo icon -->
                            <b class="logo-icon p-l-10">
                                <span class="mdi mdi-view-dashboard"></span>


                            </b>

                            <marquee onclick="stop()">    <span class="m-l-40 " style="font-weight: bold;">STUDENT PORTAL</span></marquee>


                            </span>


                            <!-- ============================================================== -->
                            <!-- End Logo -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- Toggle which is visible on mobile only -->
                            <!-- ============================================================== -->
                            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                               aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="ti-more"></i>
                            </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-collapse collapse " id="navbarSupportedContent" data-navbarbg="skin5">
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-left mr-auto">
                            <li class="nav-item d-none d-md-block">
                                <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                                    <i class="mdi mdi-menu font-24" title="Navigation Toggle: minimises your navigation bar"></i>
                                </a>
                            </li>
                            <!-- ============================================================== -->
                            <!-- create new -->
                            <!-- ============================================================== -->


                        </ul>
                        <!-- ============================================================== -->
                        <!-- Right side toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-right">

                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic " href="" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false"><span class="text-capitalize p-r-10 fa fa-window-maximize  " title="Logout">          

                                </a>
                                <div class="dropdown-menu dropdown-menu-right user-dd animated">



                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?php echo base_url("users/logout/" . $this->session->userdata("usertype")); ?>">
                                        <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>


                                </div>
                            </li>

                        </ul>
                    </div>
                </nav>
            </header>

            <aside class="left-sidebar no-print" data-sidebarbg="skin5">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav" class="p-t-30">
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url("studentctrls"); ?>" aria-expanded="false">
                                    <i class="fa fa-tachometer-alt"></i>
                                    <span class="hide-menu"> Dashboard</span>
                                </a>
                            </li>

                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url("studentctrls/results"); ?>" aria-expanded="false">
                                    <i class="fa fa-tasks"></i>
                                    <span class="hide-menu">Results</span>
                                </a>
                            </li>

                     

                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url("studentctrls/student_profile"); ?>" aria-expanded="false">
                                    <i class="fa fa-user-circle"></i>
                                    <span class="hide-menu">Profile</span>
                                </a>
                            </li>

                           

                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link bg-danger" href="<?php echo base_url("users/logout/" . $this->session->userdata("usertype")); ?>" aria-expanded="false">
                                    <i class="fa fa-power-off"></i>
                                    <span class="hide-menu">Logout</span>
                                </a>
                            </li>
                            </div>
                            <!-- End Sidebar scroll-->
                            </aside>
