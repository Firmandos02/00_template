<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="<?php echo base_url('assets/'); ?>logo.ico">

	<title>LOGIN Maintenance 2W</title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="<?php echo base_url('assets/edulearn/main-mini-sidebar/'); ?>css/vendors_css.css">

	<!-- Style-->
	<link rel="stylesheet" href="<?php echo base_url('assets/edulearn/main-mini-sidebar/'); ?>css/style.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/edulearn/main-mini-sidebar/'); ?>css/skin_color.css">

	<!-- trail scan -->



</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url(<?php echo base_url() ?>assets/images/auth-bg/bg-1.jpg)">

	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">

			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-xl-5 col-lg-5 col-md-7 col-sm-12 col-xs-12">
						<div class="bg-white rounded10 shadow-lg p-20">
							<div class="content-top-agile p-10 pb-0">

								<div class="logo-lg">
									<span class="light-logo fw-600"><img src="<?php echo base_url('assets/img/'); ?>logo-2kb.png" alt="logo">
										&ensp;PAKO GROUP
									</span>
								</div>
								<hr>
								<h3 class="text-primary">Maintenance 2W Application Login</h3>
								<!-- <p class="mb-0">Sign in to continue to WebkitX.</p>							 -->
							</div>
							<div class="p-20">
								<?php echo form_open('Auth/login') ?>
								<div class="form-group">
									<div class="input-group mb-3">
										<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
										<input type="text" class="form-control ps-15 bg-transparent" id="username" name="username" placeholder="Nomor Pokok Karyawan" required data-validation-required-message="This field is required" maxlength="10" minlength="2" autocomplete="off">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
										<input type="password" class="form-control ps-15 bg-transparent" id="password" name="password" placeholder="Password" required>
									</div>
								</div>

								<div class="text-center pull-up">
									<button type="submit" class="waves-effect waves-light btn btn-social btn-dropbox container-fluid ">Log In</button>
								</div>


								<?php echo form_close() ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

	<!-- Vendor JS -->
	<script src="<?php echo base_url('assets/edulearn/main-mini-sidebar/'); ?>js/vendors.min.js"></script>
	<script src="<?php echo base_url('assets/edulearn/main-mini-sidebar/'); ?>js/pages/chat-popup.js"></script>
	<script src="<?php echo base_url('assets/edulearn/'); ?>assets/icons/feather-icons/feather.min.js"></script>
	<!-- sweet alert -->
	<script src="<?php echo base_url('assets/js/sweetalert2.js'); ?>"></script>
	<link href="<?php echo base_url('assets/css/sweetalert2.css'); ?>" rel="stylesheet">

	<!-- buat sweet alert -->
	<script>
		<?php if ($this->session->flashdata('success') != null) { ?>
			Swal.fire({
				icon: 'success',
				title: 'Great!',
				text: '<?= $this->session->flashdata("success") ?>'
			})
		<?php } else if ($this->session->flashdata('error') != null) { ?>
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: '<?= $this->session->flashdata("error") ?>'
			})
		<?php } else if ($this->session->flashdata('warning') != null) { ?>
			Swal.fire({
				icon: 'warning',
				title: 'Great!',
				text: '<?= $this->session->flashdata("warning") ?>'
			})
		<?php } else if ($this->session->flashdata('info') != null) { ?>
			Swal.fire({
				icon: 'info',
				title: 'Hi!',
				text: '<?= $this->session->flashdata("info") ?>'
			})
		<?php } ?>
	</script>

	<!-- ===================== -->
	<!-- trail scan -->
	<!-- ===================== -->
	<!-- Tambahkan link library QR Code -->

	<!-- ===================== -->
	<!-- trail scan -->
	<!-- ===================== -->
</body>

</html>
