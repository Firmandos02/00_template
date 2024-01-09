	<!-- ============ -->
	<!-- START : navbar -->
	<aside class="main-sidebar">
		<!-- sidebar-->
		<section class="sidebar position-relative">
			<div class="multinav">
				<div class="multinav-scroll" style="height: 100%;">
					<!-- sidebar menu-->
					<ul class="sidebar-menu" data-widget="tree">
						<li class="">
							<?php if ($this->session->userdata('role') == 1 || $this->session->userdata('role') == 2) : ?>
								<a href="<?= base_url('Chome/teknisi'); ?>">
									<i class="mdi mdi-home" data-bs-toggle="tooltip" title="Home"><span class="path1"></span><span class="path2"></span></i>
									<span>Home</span>
								</a>
							<?php elseif ($this->session->userdata('role') == 3 || $this->session->userdata('role') == 4) : ?>
								<a href="<?= base_url('Chome/fr_spv'); ?>">
									<i class="mdi mdi-home" data-bs-toggle="tooltip" title="Home"><span class="path1"></span><span class="path2"></span></i>
									<span>Home</span>
								</a>
							<?php endif; ?>
						</li>
						<li class="header">Menu</li>
						<?php if ($this->session->userdata('role') > 2) : ?>
							<li class="treeview">
								<a href="#">
									<i span class="mdi mdi-chart-bar"><span class="path1"></span><span class="path2"></span></i>
									<span>Dashboard</span>
									<span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="<?php echo base_url('Cdash/pm_dtl');
												?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Detail PM</a></li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#">
									<i span class="mdi mdi-calendar"><span class="path1"></span><span class="path2"></span></i>
									<span>Calendar</span>
									<span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="<?= base_url('Cdash/mon_cal'); ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Approval</a></li>
									<li><a href="<?= base_url('Cdash/mon_cal_pm'); ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Schedule</a></li>
								</ul>

							</li>
							<li class="treeview">
								<a href="#">
									<i span class="mdi mdi-file-chart"><span class="path1"></span><span class="path2"></span></i>
									<span>Data Approval</span>
									<span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="<?= base_url('Ctrans/data_ch/all'); ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>All Data</a></li>
									<li><a href="<?= base_url('Ctrans/data_ch/ip'); ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>In Proccess</a></li>
									<?php if ($this->session->userdata('role') == 3) : ?>
										<li><a href="<?= base_url('Ctrans/data_ch/dt'); ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Done Teknisi</a></li>
									<?php elseif ($this->session->userdata('role') == 4) : ?>
										<li><a href="<?= base_url('Ctrans/data_ch/dt'); ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Done Foreman</a></li>
									<?php endif; ?>
									<li><a href="<?= base_url('Ctrans/data_ch/rj'); ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Reject Check</a></li>
									<li><a href="<?= base_url('Ctrans/data_ch/fc'); ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Finish Check</a></li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#">
									<i span class="mdi mdi-sitemap"><span class="path1"></span><span class="path2"></span></i>
									<span>Buat Schedule</span>
									<span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="<?= base_url('Ctrans/sch/pm'); ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>PM</a></li>
								</ul>
							</li>
						<?php endif; ?>
						<?php if ($this->session->userdata('role') == 9) : ?>
							<li class="treeview">
								<a href="#">
									<i span class="mdi mdi-account-multiple"><span class="path1"></span><span class="path2"></span></i>
									<span>User</span>
									<span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="<?php echo base_url('Auth/r3gist') ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add User</a></li>
									<li><a href="<?php echo base_url('Auth/user') ?>"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>List User</a></li>
								</ul>
							</li>
						<?php endif; ?>

					</ul>
				</div>
			</div>
		</section>
		<div class="sidebar-footer">
			<?php if ($this->session->userdata('id') != '') : ?>
				<a href="<?php echo base_url('Auth/logout'); ?>" class="link" data-bs-toggle="tooltip" title="Logout"><span class="mdi mdi-logout"><span class="path1"></span><span class="path2"></span></span></a>
			<?php elseif ($this->session->userdata('id') == '') : ?>
				<a href="<?php echo base_url('Auth/index'); ?>" class="link" data-bs-toggle="tooltip" title="Login"><span class="mdi mdi-login"><span class="path1"></span><span class="path2"></span></span></a>
			<?php endif; ?>
		</div>

	</aside>
	<!-- END: Navbar -->
	<!-- ============ -->
