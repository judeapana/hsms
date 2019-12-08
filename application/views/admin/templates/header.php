<?php
if ($this->session->userdata("usertype")!="admin"|| empty($this->session->userdata("username"))){
  $this->session->sess_destroy();
            redirect(base_url()."users/admin");
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
	<title>School Management System administration</title>
	<link href="<?php echo site_url(); ?>assets/dist/css/style.min.css" rel="stylesheet">
	<link href="<?php echo site_url(); ?>assets/dist/css/profile-styles.min.css" rel="stylesheet">
	<link href="<?php echo site_url(); ?>assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
    <link href="<?php echo site_url(); ?>assets/libs/datatable/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/libs/fakeloader/fakeLoader.css">

</head>

<body class="no-print">
    <!--create preloader-->
<div id="fakeLoader"></div>
	<div id="main-wrapper">

		<header class="topbar" data-navbarbg="skin5">
			<nav class="navbar top-navbar navbar-expand-md navbar-dark">
				<div class="navbar-header" data-logobg="skin5">
					<a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
						<i class="ti-menu ti-close"></i>
					</a>
					<a class="navbar-brand" href="<?php echo base_url()."adminctrls"; ?>">
						<!-- Logo icon -->
						<b class="logo-icon p-l-10">
							<span class="fa fa-users"></span>

							<!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
							<!-- Dark Logo icon -->
							<!-- <img src="<?php //echo site_url(); ?>/assets/images/logo-icona.png" alt="homepage" class="light-logo" /> -->

						</b>
						<!--End Logo icon -->
						<!-- Logo text -->
						<span class="logo-text">
							<span class="text-muted">Administrators</span>
							

						</span>
						<!-- Logo icon -->
						<!-- <b class="logo-icon"> -->
						<!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
						<!-- Dark Logo icon -->
						<!-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

						<!-- </b> -->
						<!--End Logo icon -->
					</a>
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
				<div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
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
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							 aria-expanded="false">
								<span class="d-none d-md-block">Quick Access
									<i class="fa fa-angle-down"></i>
								</span>
								<span class="d-block d-md-none">
									<i class="fa fa-plus"></i>
								</span>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?php echo base_url("view_users/parents"); ?>">
									<span class="fa fa-eye"></span> Parents </a>
								<a class="dropdown-item" href="<?php echo base_url("view_users/students"); ?>">
									<span class="fa fa-eye"></span> Students </a>
								<a class="dropdown-item" href="<?php echo base_url("view_users/administrators"); ?>">
									<span class="fa fa-eye"></span> Administrators </a>
							</div>
						</li>

					</ul>
					<!-- ============================================================== -->
					<!-- Right side toggle and nav items -->
					<!-- ============================================================== -->
					<ul class="navbar-nav float-right">

                                                                                                                                 
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true"
                                                           aria-expanded="false"><span class="text-capitalize p-r-10"><?php  echo strtoupper($this->session->userdata("username"));   ?></span>
                                                                        <?php if(!empty($this->session->userdata("profileimg"))){ ?>
                                                            <img src="<?php echo base_url();?>assets/images/users/admin/<?php echo $this->session->userdata("profileimg");?>" alt="user" class="rounded-circle img-responsive" width="31">
                                                                        <?php }else{ ?>
            <img src="<?php echo base_url();?>assets/images/users/1.jpg " alt="user" class="rounded-circle" width="31">
                                                                        <?php }?>		</a>
							<div class="dropdown-menu dropdown-menu-right user-dd animated">
								<a class="dropdown-item" href="<?php echo base_url("profiles/administrators"); ?>">
									<i class="fa fa-user m-r-5 m-l-5"></i> My Profile</a>

								
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?php  echo base_url("users/logout/".$this->session->userdata("usertype")); ?>">
									<i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>


							</div>
						</li>
						
					</ul>
				</div>
			</nav>
		</header>
		
		<aside class="left-sidebar" data-sidebarbg="skin5">
			<!-- Sidebar scroll-->
			<div class="scroll-sidebar">
				<!-- Sidebar navigation-->
				<nav class="sidebar-nav">
					<ul id="sidebarnav" class="p-t-30">
						<li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo site_url("/adminctrls");?>" aria-expanded="false">
								<i class="mdi mdi-view-dashboard"></i>
								<span class="hide-menu">Dashboard</span>
							</a>
						</li>



						<li class="sidebar-item">
							<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
								<i class="mdi mdi-account-card-details"></i>
								<span class="hide-menu"> Registration Forms </span>
							</a>
							<ul aria-expanded="false" class="collapse  first-level">
								<li class="sidebar-item">
									<a href="<?php echo base_url("create_users/teachers"); ?>" class="sidebar-link">
										<i class="mdi mdi-account-plus"></i>
										<span class="hide-menu"> Register Teachers </span>
									</a>
								</li>

								<li class="sidebar-item">
									<a href="<?php echo base_url("create_users/students"); ?>" class="sidebar-link">
										<i class="mdi mdi-account-plus"></i>
										<span class="hide-menu"> Register Students </span>
									</a>
								</li>

								<li class="sidebar-item">
									<a href="<?php echo base_url("create_users/administrators"); ?>" class="sidebar-link">
										<i class="mdi mdi-account-plus"></i>
										<span class="hide-menu"> Register Adminstrators</span>
									</a>
								</li>
							</ul>
						</li>


						<li class="sidebar-item">
							<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
								<i class="mdi mdi-account"></i>
								<span class="hide-menu"> View Users </span>
							</a>
							<ul aria-expanded="false" class="collapse  first-level">
								<li class="sidebar-item">
									<a href="<?php echo base_url("view_users/teachers"); ?>" class="sidebar-link">
										<i class="mdi mdi-account-box"></i>
										<span class="hide-menu"> Teachers</span>
									</a>
								</li>
								<li class="sidebar-item">
									<a href="<?php echo base_url("view_users/parents"); ?>" class="sidebar-link">
										<i class="mdi mdi-account-box"></i>
										<span class="hide-menu"> Parents </span>
									</a>
								</li>
								<li class="sidebar-item">
									<a href="<?php echo base_url("view_users/students"); ?>" class="sidebar-link">
										<i class="mdi mdi-account-box"></i>
										<span class="hide-menu"> Students </span>
									</a>
								</li>
								<li class="sidebar-item">
									<a href="<?php echo base_url("view_users/administrators"); ?>" class="sidebar-link">
										<i class="mdi mdi-account-box"></i>
										<span class="hide-menu"> Administrators </span>
									</a>
								</li>
							</ul>
						</li>

						<li class="sidebar-item">
							<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
								<i class="mdi mdi-pulse"></i>
								<span class="hide-menu"> Student Performance </span>
							</a>
							<ul aria-expanded="false" class="collapse  first-level">
								<li class="sidebar-item">
									<a href="<?php echo base_url("performances/reports"); ?>" class="sidebar-link">
										<i class="mdi mdi-animation"></i>
										<span class="hide-menu"> Generate Report </span>
									</a>
								</li>
								<li class="sidebar-item">
									<a href="<?php echo base_url("performances/marks"); ?>" class="sidebar-link">
										<i class="mdi mdi-note-text"></i>
										<span class="hide-menu"> Student Marks </span>
									</a>
								</li>

							</ul>
						</li>


						<li class="sidebar-item">
							<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
								<i class="mdi mdi-settings"></i>
								<span class="hide-menu"> Settings</span>
							</a>
							<ul aria-expanded="false" class="collapse  first-level">
								<li class="sidebar-item">
									<a href="<?php echo base_url("system_settings/reg_classes"); ?>" class="sidebar-link">
										<i class="mdi mdi-octagram"></i>
										<span class="hide-menu"> Register Classes </span>
									</a>
								</li>
								<li class="sidebar-item">
									<a href="<?php echo base_url("system_settings/reg_programmes"); ?>" class="sidebar-link">
										<i class="mdi mdi-octagram"></i>
										<span class="hide-menu"> Register Programmes </span>
									</a>
								</li>
								<li class="sidebar-item">
									<a href="<?php echo base_url("system_settings/reg_subjects"); ?>" class="sidebar-link">
										<i class="mdi mdi-octagram"></i>
										<span class="hide-menu"> Register Subjects </span>
									</a>
								</li>
								<li class="sidebar-item">
									<a href="<?php echo base_url("system_settings/set_years"); ?>" class="sidebar-link">
										<i class="mdi mdi-octagram"></i>
										<span class="hide-menu"> Set Academic Year </span>
									</a>
								</li>
								<li class="sidebar-item">
									<a href="<?php echo base_url("system_settings/grade_sys"); ?>" class="sidebar-link">
										<i class="mdi mdi-octagram"></i>
										<span class="hide-menu"> Grade System </span>
									</a>
								</li>
								<li class="sidebar-item">
									<a href="<?php echo base_url("system_settings/position"); ?>" class="sidebar-link">
										<i class="mdi mdi-book-open-page-variant"></i>
										<span class="hide-menu"> Register Positions</span>
									</a>
								</li>
							</ul>
						</li>


			</div>
			<!-- End Sidebar scroll-->
		</aside>
		