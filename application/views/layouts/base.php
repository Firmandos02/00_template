<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="<?php echo base_url('assets/'); ?>logo.ico">

	<title>EduAdmin - Dashboard Blank Page </title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="<?php echo base_url('assets/edulearn/main-mini-sidebar/');
									?>css/vendors_css.css">

	<!-- Style-->
	<link rel="stylesheet" href="<?php echo base_url('assets/edulearn/main-mini-sidebar/'); ?>css/style.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/edulearn/main-mini-sidebar/'); ?>css/skin_color.css">

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed sidebar-collapse">

	<div class="wrapper">
		<div id="loader"></div>

		<header class="main-header">
			<div class="d-flex align-items-center logo-box justify-content-start">
				<a href="#" class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent" data-toggle="push-menu" role="button">
					<span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
				</a>
				<!-- Logo -->
				<a href="index.html" class="logo">
					<!-- logo-->
					<div class="logo-lg">
						<span class="light-logo fw-600"><img src="<?php echo base_url('assets/img/'); ?>logo-2kb.png" alt="logo">
							&ensp;PAKO GROUP
						</span>
						<span class="dark-logo"><img src="<?php echo base_url('assets/img/'); ?>logo-2kb.png" alt="logo"></span>
					</div>
				</a>
			</div>
			<!-- Header Navbar -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<div class="app-menu">
					<ul class="header-megamenu nav">
						<li class="btn-group nav-item d-md-none">
							<a href="#" class="waves-effect waves-light nav-link push-btn" data-toggle="push-menu" role="button">
								<span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
							</a>
						</li>
						<li class="btn-group nav-item d-none d-xl-inline-block">
							<div class="d-inline-block align-items-center">
								<nav>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
										<li class="breadcrumb-item" aria-current="page">Sample Page</li>
										<li class="breadcrumb-item active" aria-current="page">Blank page</li>
									</ol>
								</nav>
							</div>
						</li>

						<!-- 
							<li class="btn-group nav-item d-none d-xl-inline-block">
							<a href="contact_app_chat.html" class="waves-effect waves-light nav-link svg-bt-icon" title="Chat">
								<i class="icon-Chat"><span class="path1"></span><span class="path2"></span></i>
							</a>
						</li>
						<li class="btn-group nav-item d-none d-xl-inline-block">
							<a href="mailbox.html" class="waves-effect waves-light nav-link svg-bt-icon" title="Mailbox">
								<i class="icon-Mailbox"><span class="path1"></span><span class="path2"></span></i>
							</a>
						</li>
						<li class="btn-group nav-item d-none d-xl-inline-block">
							<a href="extra_taskboard.html" class="waves-effect waves-light nav-link svg-bt-icon" title="Taskboard">
								<i class="icon-Clipboard-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
							</a>
						</li>
					 -->
					</ul>
				</div>

				<div class="navbar-custom-menu r-side">
					<ul class="nav navbar-nav">
						<li class="btn-group nav-item d-lg-inline-flex d-none">
							<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen" title="Full Screen">
								<i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
							</a>
						</li>
						<li class="btn-group d-lg-inline-flex d-none">
							<div class="app-menu">
								<!-- <div class="search-bx mx-5">
									<form>
										<div class="input-group">
											<input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
											<div class="input-group-append">
												<button class="btn" type="submit" id="button-addon3"><i class="ti-search"></i></button>
											</div>
										</div>
									</form>
								</div> -->
							</div>
						</li>
						<!-- Notifications -->


						<!-- User Account-->
						<li class="dropdown user user-menu">
							<a href="#" class="waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" title="User">
								<i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
							</a>
							<ul class="dropdown-menu animated flipInX">
								<li class="user-body">
									<a class="dropdown-item" href="#"><i class="ti-user text-muted me-2"></i> Profile</a>
									<!-- <a class="dropdown-item" href="#"><i class="ti-wallet text-muted me-2"></i> My Wallet</a>
									<a class="dropdown-item" href="#"><i class="ti-settings text-muted me-2"></i> Settings</a> -->
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="ti-lock text-muted me-2"></i> Logout</a>
								</li>
							</ul>
						</li>

					</ul>
				</div>
			</nav>
		</header>

		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar-->
			<section class="sidebar position-relative">
				<div class="multinav">
					<div class="multinav-scroll" style="height: 100%;">
						<!-- sidebar menu-->
						<ul class="sidebar-menu" data-widget="tree">
							<li class="header">Dashboard & Apps</li>
							<li class="treeview">
								<a href="#">
									<i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
									<span>Dashboard</span>
									<span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 1</a></li>
									<li><a href="index2.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 2</a></li>

								</ul>
							</li>
							<li class="treeview">
								<a href="#">
									<i span class="icon-Layout-grid"><span class="path1"></span><span class="path2"></span></i>
									<span>Apps</span>
									<span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="extra_calendar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Calendar</a></li>
									<li><a href="contact_app.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Contact List</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</section>
			<div class="sidebar-footer">
				<!-- <a href="javascript:void(0)" class="link" data-bs-toggle="tooltip" title="Settings"><span class="icon-Settings-2"></span></a>
				<a href="mailbox.html" class="link" data-bs-toggle="tooltip" title="Email"><span class="icon-Mail"></span></a> -->
				<a href="javascript:void(0)" class="link" data-bs-toggle="tooltip" title="Logout"><span class="icon-Lock-overturning"><span class="path1"></span><span class="path2"></span></span></a>
			</div>
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<div class="container-full">
				<!-- Content Header (Page header) -->
				<!-- <div class="content-header">
					<div class="d-flex align-items-center">

						<div class="me-auto">
							<h3 class="page-title">Blank page</h3>
						</div>

					</div>
				</div> -->

				<!-- Main content -->
				<section class="content">
					<div class="row">
						<div class="col-12">
							<div class="box">
								<div class="box-header with-border">
									<h4 class="box-title">Title</h4>
								</div>
								<div class="box-body">
									This is some text within a card block.
								</div>
								<!-- /.box-body -->
								<div class="box-footer">
									Footer
								</div>
								<!-- /.box-footer-->
							</div>
						</div>
					</div>
				</section>
				<!-- /.content -->

			</div>
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<div class="pull-right d-none d-sm-inline-block">
				<ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
					<!-- <li class="nav-item">
						<a class="nav-link" href="javascript:void(0)">FAQ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Purchase Now</a>
					</li> -->
				</ul>
			</div>
			&copy; 2023 <a href="#">4.0 PAKO</a>. All Rights Reserved.
		</footer>


		<!-- END: BODY -->
		<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
		<div class="control-sidebar-bg"></div>
	</div>
	<!-- ./wrapper -->

	<!-- Vendor JS -->
	<script src="<?php echo base_url('assets/edulearn/main-mini-sidebar/'); ?>js/vendors.min.js"></script>
	<script src="<?php echo base_url('assets/edulearn/main-mini-sidebar/'); ?>js/pages/chat-popup.js"></script>
	<script src="<?php echo base_url('assets/edulearn/'); ?>assets/icons/feather-icons/feather.min.js"></script>

	<!-- EduAdmin App -->
	<script src="<?php echo base_url('assets/edulearn/main-mini-sidebar/'); ?>js/template.js"></script>

</body>

</html>