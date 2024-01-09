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
									<div class="col-lg-6 col-md-6 col-sm-6 ">
										<h3 class="box-title"><?= $titleapp; ?></h3>
									</div>
									<div class="col-lg-6 col-md-6  col-sm-6 ">
										<ul class="box-controls pull-right">
											<li><a class="box-btn-slide p-5" href="#"></a></li>
											<li><a class="box-btn-fullscreen p-5" href="#"></a></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="box-body ">
								<div class="row" style="padding:0.5rem;">
									<!-- Nav tabs -->
									<ul class="nav nav-tabs customtab2" role="tablist">
										<li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#home7" role="tab"><span class="hidden-sm-up"><i class="ion-home"></i></span> <span class="hidden-xs-down">Spray Booth 2</span></a> </li>
										<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#profile7" role="tab"><span class="hidden-sm-up"><i class="ion-person"></i></span> <span class="hidden-xs-down">Spray Booth 3</span></a> </li>
										<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#messages7" role="tab"><span class="hidden-sm-up"><i class="ion-email"></i></span> <span class="hidden-xs-down">Data SB2</span></a> </li>
										<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#messages8" role="tab"><span class="hidden-sm-up"><i class="ion-email"></i></span> <span class="hidden-xs-down">Data SB3</span></a> </li>
									</ul>
									<!-- Tab panes -->
									<div class="tab-content">
										<div class="tab-pane active" id="home7" role="tabpanel">
											<div class="py-10">
												<?php echo form_open('Cvisco/sub_p1_spray2', array('id' => 'myForm')) ?>
												<hr>

												<?php
												foreach ($lim_p1 as $val) {
													echo "Data id = " . $val['id'] . ", ";
													echo "Limit Bottom = " . $val['lim_bott'] . ", ";
													echo "Limit Up = " . $val['lim_up'] . "&emsp; |&emsp;  ";
												}
												?>
												<!-- Kode Program 1: Data Limbahan -->
												<?php foreach ($lim_p1 as $val) { ?>
													<div class="limbahan" data-id="<?= $val['id']; ?>" data-lim-bott="<?= $val['lim_bott']; ?>" data-lim-up="<?= $val['lim_up']; ?>"></div>
												<?php } ?>
												<hr>
												<div class="row">
													<div class="col-6">
														<div class="form-group">
															<label class="form-label">Tanggal</label>
															<input name="tanggal" type="text" class="form-control" value="<?= $date; ?>" readonly>
														</div>
													</div>
													<div class="col-6">
														<div class="form-group">
															<label class="form-label">Waktu</label>
															<input name="jam" type="text" class="form-control" id="waktuSekarang" readonly>
														</div>
													</div>
													<div class="col-6">
														<div class="form-group">
															<label class="form-label">Shift</label>
															<select name="shift" class="form-select h-70" id="color" style="font-size: 40px;">
																<?php foreach ($shift as $val) : ?>
																	<option value="<?= $val['id']; ?>"><?= $val['shift']; ?></option>
																<?php endforeach; ?>
															</select>
														</div>
													</div>


													<!-- Kode Program 3: Select "warna" -->
													<div class="col-6">
														<div class="form-group">
															<label class="form-label">Color</label>
															<select id="warna" name="color" class="form-select h-70" style="font-size: 40px;">
																<?php foreach ($color as $val) : ?>
																	<option value="<?= $val['id']; ?>"><?= $val['name_as']; ?></option>
																<?php endforeach; ?>
															</select>
														</div>
													</div>



													<!-- Kode Program 2: Input "waktucek" dan "judgement" -->
													<div class="col-6">
														<div class="form-group">
															<label class="form-label">Time</label>
															<small class="sidetitle">hh:mm</small>
															<input id="waktucek" name="waktu_cek" type="number" class="form-control h-70" style="font-size: 40px;">
														</div>
													</div>
													<div class="col-6">
														<div class="form-group">
															<label class="form-label">Judge</label>
															<small class="sidetitle">NG / OK</small>
															<input id="judgement" name="judge" type="text" class="form-control h-70" style="font-size: 40px;" readonly>
														</div>
														<!-- Kotak Indikator Hijau -->


													</div>
													<!-- Kotak Indikator Hijau -->
													<div id="indikator-hijau" class="indikator" style="display: none; background-color: green;">&nbsp;</div>

													<!-- Kotak Indikator Merah -->
													<div id="indikator-merah" class="indikator" style="display: none; background-color: red;">&nbsp;</div>

													<!-- Modal -->
													<div class="modal center-modal fade" id="modal-center" tabindex="-1">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Modal title</h5>
																	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
																</div>
																<div class="modal-body">
																	<input type="text" name="perbaikan">
																</div>
																<div class="modal-footer modal-footer-uniform">
																	<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
																	<button type="submit" class="btn btn-social btn-dropbox "> <i class="ti-save-alt"></i>&emsp;Save</button>
																</div>
															</div>
														</div>
													</div>
													<!-- /.modal -->

													<!-- input hidden -->
													<input type="text" name="pic" id="pic" value="<?php echo $this->session->userdata('dispname');  ?>" hidden>
													<div class="col-lg-12">
														<div class="text-center pull-up">
															<button type="button" class="btn btn-primary container-fluid " data-bs-toggle="modal" data-bs-target="#modal-center">
																Submit
															</button>
														</div>


													</div>
												</div>
												<?php echo form_close() ?>

											</div>
										</div>
										<div class="tab-pane" id="profile7" role="tabpanel">
											<div class="py-10">
												<?php echo form_open('Cvisco/sub_p1_spray3', array('id' => 'myForm2')) ?>
												<div class="row">
													<p>form here</p>
												</div>
												<?php echo form_close() ?>

											</div>
										</div>
										<div class="tab-pane" id="messages7" role="tabpanel">
											<div class="py-10">
												<div class="table-responsive">
													<table id="example" class="table table-striped table-hover table-bordered datatablelimit" style="width:100%;">
														<thead>
															<tr>
																<th class="text-center" rowspan="4"><br><br>No</th>
																<th class="text-center" rowspan="4">Tanggal</th>
																<th class="text-center" rowspan="4">Jam</th>
																<th class="text-center" colspan="6">SPRAY BOOTH 2</th>
																<th class="text-center" rowspan="2">JUDGEMENT</th>
																<th class="text-center" rowspan="4">Corrective / Perbaikan</th>
																<th class="text-center" rowspan="4">Paraf PIC/MP Parameter</th>
															</tr>
															<tr>
																<th class="text-center">Alat ukur</th>
																<th class="text-center" colspan="5">NK 2 CUP</th>
															</tr>
															<tr>
																<th class="text-center">Std Viscositas</th>
																<th class="text-center" colspan="3">19".35 - 19".85</th>
																<th class="text-center">18".50 - 19".00</th>
																<th class="text-center">19".50 - 20".00</th>
																<th class="text-center" rowspan="2">OK/NG</th>
															</tr>
															<tr>
																<th class="text-center">Cat</th>
																<th class="text-center">Black</th>
																<th class="text-center">Silver</th>
																<th class="text-center">Gold</th>
																<th class="text-center">Brown</th>
																<th class="text-center">Deep black</th>
															</tr>
														</thead>
														<tbody id="table-body">
															<?php
															$no 	= 1;
															$jumlah = sizeof($data_p1);
															?>
															<?php foreach ($data_p1 as $value) { ?>

																<tr>
																	<td class="text-center"><?php echo $no ?></td>
																	<td><?php echo $value['tanggal'] ?></td>
																	<td class="text-center">
																		<?php
																		$jam 	= $value['jam'];
																		$j 		= substr($jam, 0, 5);
																		echo $j;
																		?>
																	</td>
																	<td>Aktual</td>
																	<td class="text-center">
																		<?php
																		if ($value['color'] == 1) {
																			$wkt = $value['waktu_cek'];
																			$huruf5 = substr($wkt, -5);
																			echo $huruf5;
																		} ?>
																	</td>
																	<td class="text-center">
																		<?php
																		if ($value['color'] == 2) {
																			$wkt = $value['waktu_cek'];
																			$huruf5 = substr($wkt, -5);
																			echo $huruf5;
																		} ?>
																	</td>
																	<td class="text-center">
																		<?php
																		if ($value['color'] == 3) {
																			$wkt = $value['waktu_cek'];
																			$huruf5 = substr($wkt, -5);
																			echo $huruf5;
																		} ?>
																	</td>
																	<td class="text-center">
																		<?php
																		if ($value['color'] == 4) {
																			$wkt = $value['waktu_cek'];
																			$huruf5 = substr($wkt, -5);
																			echo $huruf5;
																		} ?>
																	</td>
																	<td class="text-center">
																		<?php
																		if ($value['color'] == 5) {
																			$wkt = $value['waktu_cek'];
																			$huruf5 = substr($wkt, -5);
																			echo $huruf5;
																		} ?>
																	</td>
																	<td class="text-center"><?php echo $value['judge'] ?></td>
																	<td class="text-center"><?php echo $value['perbaikan'] ?></td>
																	<td class="text-center"><?php echo $value['pic'] ?></td>
																</tr>
																<?php $no++; ?>
															<?php } ?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="messages8" role="tabpanel">
											<div class="py-10">
												<div class="table-responsive">
													<table id="example2" class="table table-striped table-hover table-bordered datatablelimit" style="width:100%;">
														<thead>
															<tr>
																<th class="text-center" rowspan="4"><br><br>No</th>
																<th class="text-center" rowspan="4">Tanggal</th>
																<th class="text-center" rowspan="4">Jam</th>
																<th class="text-center" colspan="6">SPRAY BOOTH 2</th>
																<th class="text-center" rowspan="2">JUDGEMENT</th>
																<th class="text-center" rowspan="4">Corrective / Perbaikan</th>
																<th class="text-center" rowspan="4">Paraf PIC/MP Parameter</th>
															</tr>
															<tr>
																<th class="text-center">Alat ukur</th>
																<th class="text-center" colspan="5">NK 2 CUP</th>
															</tr>
															<tr>
																<th class="text-center">Std Viscositas</th>
																<th class="text-center" colspan="3">19".35 - 19".85</th>
																<th class="text-center">18".50 - 19".00</th>
																<th class="text-center">19".50 - 20".00</th>
																<th class="text-center" rowspan="2">OK/NG</th>
															</tr>
															<tr>
																<th class="text-center">Cat</th>
																<th class="text-center">Black</th>
																<th class="text-center">Silver</th>
																<th class="text-center">Gold</th>
																<th class="text-center">Brown</th>
																<th class="text-center">Deep black</th>
															</tr>
														</thead>
														<tbody id="tabel2">
															<?php
															$no 	= 1;
															$jumlah = sizeof($data_p1b3);
															?>
															<?php foreach ($data_p1b3 as $value) { ?>

																<tr>
																	<td class="text-center"><?php echo $no ?></td>
																	<td><?php echo $value['tanggal'] ?></td>
																	<td class="text-center">
																		<?php
																		$jam 	= $value['jam'];
																		$j 		= substr($jam, 0, 5);
																		echo $j;
																		?>
																	</td>
																	<td>Aktual</td>
																	<td class="text-center">
																		<?php
																		if ($value['color'] == 1) {
																			$wkt = $value['waktu_cek'];
																			$huruf5 = substr($wkt, -5);
																			echo $huruf5;
																		} ?>
																	</td>
																	<td class="text-center">
																		<?php
																		if ($value['color'] == 2) {
																			$wkt = $value['waktu_cek'];
																			$huruf5 = substr($wkt, -5);
																			echo $huruf5;
																		} ?>
																	</td>
																	<td class="text-center">
																		<?php
																		if ($value['color'] == 3) {
																			$wkt = $value['waktu_cek'];
																			$huruf5 = substr($wkt, -5);
																			echo $huruf5;
																		} ?>
																	</td>
																	<td class="text-center">
																		<?php
																		if ($value['color'] == 4) {
																			$wkt = $value['waktu_cek'];
																			$huruf5 = substr($wkt, -5);
																			echo $huruf5;
																		} ?>
																	</td>
																	<td class="text-center">
																		<?php
																		if ($value['color'] == 5) {
																			$wkt = $value['waktu_cek'];
																			$huruf5 = substr($wkt, -5);
																			echo $huruf5;
																		} ?>
																	</td>
																	<td class="text-center"><?php echo $value['judge'] ?></td>
																	<td class="text-center"><?php echo $value['perbaikan'] ?></td>
																	<td class="text-center"><?php echo $value['pic'] ?></td>
																</tr>
																<?php $no++; ?>
															<?php } ?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /.box-body -->
							</div>
						</div>
			</section>
			<!-- /.content -->
		</div>
	</div>
	<!-- /.content-wrapper -->
	<!-- END : CONTENT -->
	<!-- ============ -->