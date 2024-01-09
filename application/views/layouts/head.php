<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="<?php echo base_url('assets/'); ?>logo.ico">

	<title><?php echo $titlepage ?></title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="<?php echo base_url('assets/edulearn/main-mini-sidebar/'); ?>css/vendors_css.css">

	<!-- Style-->
	<link rel="stylesheet" href="<?php echo base_url('assets/edulearn/main-mini-sidebar/'); ?>css/style.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/edulearn/main-mini-sidebar/'); ?>css/skin_color.css">

	<!-- sweet alert -->
	<script src="<?php echo base_url('assets/js/sweetalert2.js'); ?>"></script>
	<link href="<?php echo base_url('assets/css/sweetalert2.css'); ?>" rel="stylesheet">

	<!-- extend javascript -->
	<?php $this->load->view('layouts/extend_css.php'); ?>

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed sidebar-collapse">
	<!-- START BODY -->
	<div class="wrapper">
		<div id="loader"></div>
		<!-- ============ -->
