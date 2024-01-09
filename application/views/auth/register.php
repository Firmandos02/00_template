	<!-- ============ -->
	<!-- START : CONTENT -->
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<div class="container-full">
			<!-- Main content -->
			<section class="content">
				<div class="row">
					<!-- batas -->
					<div class="col-12">
						<div class="box">
							<div class="box-header with-border">
								<div class="row" style="margin: -10px;">
									<div class="col-6">
										<h3 class="box-title"><?= $titleapp; ?></h3>
									</div>
									<div class="col-6">
										<ul class="box-controls pull-right">
											<li><a class="box-btn-slide p-5" href="#"></a></li>
											<li><a class="box-btn-fullscreen p-5" href="#"></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="box-body ">
								<?php echo form_open('Auth/valid_r3gist', array('id' => 'myForm')) ?>
								<div class="row" style="padding: 0.5rem;">

									<div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-xs-12">
										<div class="form-group">
											<h6>NPK <span class="text-danger">*</span></h6>
											<div class="controls">
												<input type="text" name="username" class="form-control" required data-validation-required-message="This field is required" placeholder="Input Number" maxlength="14" max="14">
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-xs-12">
										<div class="form-group">
											<h6>Name <span class="text-danger">*</span></h6>
											<div class="controls">
												<input type="text" name="dispname" class="form-control" required data-validation-required-message="This field is required" placeholder="Input Text" max="40" maxlength="40">
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<h6>Role ID <span class="text-danger">*</span></h6>
											<div class="controls">
												<select name="role" id="select" required class="form-select">
													<option selected disabled value="">Select Role</option>
													<?php foreach ($role as $val) : ?>
														<?php if ($val['id'] == 9) : ?>
															<option disabled value=""><?= $val['description']; ?>&nbsp;"Dev only"</option>
														<?php else : ?>
															<option value="<?= $val['id']; ?>"><?= $val['description']; ?></option>
														<?php endif ?>
													<?php endforeach; ?>
												</select>
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-xs-12">
										<div class="form-group">
											<h6>Password <span class="text-danger">*</span></h6>
											<div class="controls">
												<input type="password" name="password" class="form-control" required data-validation-required-message="This field is required" placeholder="*********">
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-xs-12">
										<div class="form-group">
											<h6>Repeat Password <span class="text-danger">*</span></h6>
											<div class="controls">
												<input type="password" name="password2" data-validation-match-match="password" class="form-control" required placeholder="*********">
											</div>
										</div>
									</div>

									<!-- hidden input -->
									<input type="text" name="created_by" value="<?php echo $this->session->userdata('dispname');  ?>" hidden>

									<div class="d-flex justify-content-end">
										<button id="resetform1" type="button" class="btn btn-warning me-1">
											<i class="ti-trash"></i> Cancel
										</button>
										<button type="submit" class="btn btn-primary">
											<i class="ti-save-alt"></i> Save
										</button>
									</div>

								</div>
								<?php echo form_close() ?>
							</div>
							<!-- /.box-body -->
						</div>
					</div>
					<!-- batas -->
				</div>
			</section>
			<!-- /.content -->
		</div>
	</div>
	<!-- /.content-wrapper -->
	<!-- END : CONTENT -->
	<!-- ============ -->