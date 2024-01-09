	<!-- ============ -->
	<!-- START : HEADER/TOPBAR -->
	<header class="main-header">
		<div class="d-flex align-items-center logo-box justify-content-start">
			<a href="#" class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent" data-toggle="push-menu" role="button">
				<span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
			</a>
			<!-- Logo -->
			<a href="#" class="logo">
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
					<li class="btn-group d-lg-inline-flex d-xl-inline-flex d-sm-inline-flex d-none">
						<div class="app-menu">
							<div class="search-bx mx-5">

								<div class="input-group">
									<input id="timenow" type="search" class="form-control fs-5" placeholder="Search" aria-label="Search" aria-describedby="button-addon2" readonly>
									<div class="input-group-append">
										<button class="btn" type="submit" id="button-addon3" disabled><i class="ti-time"></i></button>
									</div>
								</div>

							</div>
						</div>
					</li>
					<li class="btn-group nav-item d-none d-xl-inline-block">
						<div class="d-inline-block align-items-center">
							<!-- <nav>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
									<li class="breadcrumb-item" aria-current="page">Sample Page</li>
									<li class="breadcrumb-item active" aria-current="page">Blank page</li>
								</ol>
							</nav> -->
						</div>
					</li>
				</ul>
			</div>

			<div class="navbar-custom-menu r-side">
				<ul class="nav navbar-nav">
					<li class="btn-group nav-item d-inline-flex">
						<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen" title="Full Screen">
							<i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
						</a>
					</li>

					<li class="btn-group d-lg-inline-flex d-none">
						<div class="app-menu">

						</div>
					</li>
					<!-- Notifications -->


					<!-- User Account-->
					<?php if ($this->session->userdata('id') != '') : ?>
						<li class="dropdown user user-menu">
							<a href="#" class="waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" title="User">
								<i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
							</a>
							<ul class="dropdown-menu animated flipInX">
								<li class="user-body">
									<a class="dropdown-item" href="#"><i class="mdi mdi-account-card-details text-muted me-2"></i> <?php echo $this->session->userdata('dispname');  ?></a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="ti-user text-muted me-2"></i> Profile</a>
									<a class="dropdown-item" href="<?php echo base_url('auth/logout'); ?>"><i class="ti-lock text-muted me-2"></i> Logout</a>
								</li>
							</ul>
						</li>
					<?php elseif ($this->session->userdata('id') == '') : ?>
						<li class="btn-group nav-item d-inline-flex">
							<a href="<?php echo base_url('Auth/index'); ?>" class="waves-effect waves-light nav-link" title="Login">
								<i class="mdi mdi-login"><span class="path1"></span><span class="path2"></span></i>
							</a>
						</li>
					<?php endif; ?>

				</ul>
			</div>
		</nav>

	</header>

	<!-- END : HEADER/TOPBAR -->
	<!-- ============ -->
