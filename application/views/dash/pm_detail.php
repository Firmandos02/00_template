<!-- ============ -->
<!-- START : CONTENT -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<div class="container-full">

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-sm-12 col-xs-6 ">
					<div class="box">
						<div class="box-header with-border">
							<div class="row" style="margin: -10px;">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<h3 class="box-title"><?= $titleapp; ?></h3>
								</div>
								<div class="col-lg-6 col-md-6  col-sm-6 col-xs-12">
									<ul class="box-controls pull-right">
										<li><a class="box-btn-slide p-5" href="#"></a></li>
										<li><a class="box-btn-fullscreen p-5" href="#"></a></li>
										<li>
											<a class="p-5 d-xl-none d-lg-none d-sm-none">
												<span><i class="ti-time"></i> <span id="current-time"></span>&emsp;</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="box-body ">
							<?php echo form_open('Cdash/pm_dtl_sub') ?>
							<div class="row" style="padding:0.5rem;">
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="form-group">
										<label class="form-label">Lini : </label>
										<select id="lini" name="lini" class="form-select " required>
											<?php
											$lini_arr = array();
											foreach ($csheet as $val) :
												if (!in_array($val['lini'], $lini_arr)) {
													$lini_arr[] = $val['lini'];
											?>
													<option value="<?= $val['lini']; ?>"><?= $val['lini']; ?></option>
											<?php
												}
											endforeach;
											?>
										</select>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="form-group">
										<label class="form-label">Area: </label>
										<select id="area" name="area" class="form-select " required>
											<?php
											$area_arr = array();
											foreach ($csheet as $val) :
												if (!in_array($val['area'], $area_arr)) {
													$area_arr[] = $val['area'];
											?>
													<option value="<?= $val['area']; ?>"><?= $val['area']; ?></option>
											<?php
												}
											endforeach;
											?>
										</select>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="form-group">
										<label class="form-label">Mesin : </label>
										<select id="mesin" name="mesin" class="form-select " required>
											<?php
											$mesin_arr = array();
											foreach ($csheet as $val) :
												if (!in_array($val['mesin'], $mesin_arr)) {
													$mesin_arr[] = $val['mesin'];
											?>
													<option value="<?= $val['mesin']; ?>"><?= $val['mesin']; ?></option>
											<?php
												}
											endforeach;
											?>
										</select>
									</div>
								</div>
								<!-- =============== -->
								<div class="col-4">
									<div class="form-group">
										<label class="form-label">Item Check:</label>
										<select id="item" class="form-select">
											<?php
											$item_arr = array();
											foreach ($csheet as $val) :
												if (!in_array($val['item'], $item_arr)) {
													$item_arr[] = $val['item'];
											?>
													<option value="<?= $val['item']; ?>"><?= $val['item']; ?></option>
											<?php
												}
											endforeach;
											?>
										</select>
									</div>
								</div>
								<div class="col-4">
									<div class="form-group">
										<label class="form-label">Point Check:</label>
										<select id="point" class="form-select">
											<?php
											$point_arr = array();
											foreach ($csheet as $val) :
												if (!in_array($val['point'], $point_arr)) {
													$point_arr[] = $val['point'];
											?>
													<option value="<?= $val['point']; ?>"><?= $val['point']; ?></option>
											<?php
												}
											endforeach;
											?>
										</select>
									</div>
								</div>
								<div class="col-4">
									<div class="form-group">
										<label class="form-label">Metode Check:</label>
										<select id="metode" name="id_csheet" class="form-select">
											<?php
											$metode_arr = array();
											foreach ($csheet as $val) :
												if (!in_array($val['metode'], $metode_arr)) {
													$metode_arr[] = $val['metode'];
											?>
													<option value="<?= $val['id']; ?>"><?= $val['metode']; ?></option>
											<?php
												}
											endforeach;
											?>
										</select>
									</div>
								</div>
								<div class="col-12 d-flex justify-content-end">
									<button type="submit" class="btn  btn-sm btn-primary "><i class="mdi mdi-filter"></i>&ensp;Cari</button>
								</div>

								<div class="col-12">
									<div id="chart1" style="height: 400px;"></div>
								</div>
							</div>
							<?php echo form_close() ?>
							<!-- /.box-body -->
							<div class="table-responsive">
								<style type="text/css">
									.chcek>thead>tr>td,
									.chcek>thead>tr>th {
										padding: 7px;
										vertical-align: middle;
									}

									.chcek>tbody>tr>td,
									.chcek>tbody>tr>th {
										padding: 7px;
										vertical-align: middle;
									}
								</style>
								<table class="table table-bordered table-striped chcek">
									<thead class="fw-bold text-decoration-underline text-center">
										<tr>
											<th>No</th>
											<th>LINI</th>
											<th>AREA</th>
											<th>MESIN</th>
											<th>ITEM CHECK</th>
											<th>POINT CHECK</th>
											<th>METODE CHECK</th>
											<th>STANDARD</th>
											<th>AKTUAL</th>
											<th>JUDGE</th>
											<th>TEKNISI</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										foreach ($chart as $val) :
										?>
											<tr>
												<td class="text-center"><?= $no; ?></td>
												<td><?= $val['lini']; ?>
												<td><?= $val['area']; ?>
												<td><?= $val['mesin']; ?>
												<td><?= $val['item']; ?>
												</td>
												<td><?= $val['point']; ?>
												</td>
												<td><?= $val['metode']; ?>
												</td>
												<td><?= $val['standard']; ?>
												</td>
												<td><?= $val['aktual'] . ' ' . $val['param']; ?></td>
												<td><?= $val['judge']; ?></td>
												<td><?= $val['pic']; ?></td>

											</tr>
										<?php
											$no++;
										endforeach;
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
		</section>
		<!-- /.content -->
	</div>
</div>
<!-- /.content-wrapper -->
<!-- END : CONTENT -->
<!-- ============ -->
