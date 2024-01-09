	<!-- ============ -->
	<!-- START : CONTENT -->
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<div class="container-full">

			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-sm-12 col-xs-12 ">
						<div class="box">
							<div class="box-header with-border">
								<div class="row" style="margin: -10px;">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<h3 class="box-title"><?= $titleapp . '&nbsp;' . $disp_area; ?></h3>
									</div>
									<div class="col-lg-6 col-md-6  col-sm-6 col-xs-12">
										<ul class="box-controls pull-right">

											<li><a class="box-btn-slide p-5" href="#"></a></li>
											<li><a class="box-btn-fullscreen p-5" href="#"></a></li>
											<li>
												<a class="p-5 d-xl-none d-lg-none d-sm-none">
													<span><i class="mdi mdi-timelapse"></i> <span id="current-time"></span>&emsp;</span>
												</a>
											</li>

										</ul>
									</div>
								</div>
							</div>

							<div class="box-body ">
								<div class="row" style="padding:0.5rem;">
									<!-- Nav tabs -->
									<ul class="nav nav-tabs customtab2" role="tablist">
										<li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#form1" role="tab"><span class="hidden-sm-up"><i class="mdi mdi-clipboard-text"></i></span> <span class="hidden-xs-down">Form</span></a> </li>
										<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#data1" role="tab"><span class="hidden-sm-up"><i class="mdi mdi-table">
														<?php
														$string = $disp_1_spray;
														$last = substr($string, -1);
														echo $last; ?>
													</i></span> <span class="hidden-xs-down">Data <?= $disp_1_spray; ?></span></a> </li>
										<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#data2" role="tab"><span class="hidden-sm-up"><i class="mdi mdi-table">
														<?php
														$string = $disp_2_spray;
														$last = substr($string, -1);
														echo $last; ?>
													</i></span> <span class="hidden-xs-down">Data <?= $disp_2_spray; ?></span></a>
										</li>
										<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#data_color" role="tab"><span class="hidden-sm-up"><i class="mdi mdi-format-color-fill"></i></span> <span class="hidden-xs-down">Data Warna</span></a>
										</li>
									</ul>
									<!-- Tab panes -->
									<div class="tab-content">
										<div class="tab-pane active" id="form1" role="tabpanel">
											<div class="py-10">
												<?php echo form_open('Cvisco/submit_spray', array('id' => 'myForm')) ?>
												<!-- Kode Program 1: Data Limbahan -->
												<?php foreach ($lim_p as $val) { ?>
													<div class="limbahan" data-id="<?= $val['id']; ?>" data-lim-bott="<?= $val['lim_bott']; ?>" data-lim-up="<?= $val['lim_up']; ?>"></div>
												<?php } ?>

												<!-- END: Kode Program 1: Data Limbahan -->
												<div class="row">
													<div class="col-xl-6 col-lg-6 col-sm-6 col-xs-12">
														<div class="form-group">
															<label class="form-label">Shift</label><span class="text-danger">*</span>
															<input id="shift" type="text" class="form-control h-70 h-xs-40 " style="text-align: center;" value="<?= $shift['shift']; ?>" readonly required>
														</div>
													</div>
													<!-- Kode Program 3: Select "warna" -->
													<div class="col-xl-6 col-lg-6 col-sm-6 col-xs-12">
														<div id="color_switch1">
															<div class="form-group">
																<label class="form-label">Cat</label><span class="text-danger">*</span>
																<select id="warna" name="color" class="form-select h-70 h-xs-40" required>
																	<?php foreach ($lim_p as $val) : ?>
																		<option value="<?= $val['id']; ?>" <?= ($val['id'] == $his_color) ? 'selected' : ''; ?>>
																			<?= $val['name']; ?>
																		</option>
																	<?php endforeach; ?>
																</select>
															</div>
														</div>
													</div>

													<!-- Kode Program 2: Input "waktucek" dan "judgement" -->
													<div class="col-xl-6 col-lg-6 col-sm-6 col-xs-12 ">
														<div class="form-group">
															<label class="form-label">Waktu Ukur</label><span class="text-danger">*</span>

															<input id="waktucek" name="waktu_cek" type="text" class="form-control h-70 h-xs-40" oninput="formatInput(this)" placeholder="Masukan Nomor" autocomplete="off">
															<span class="help-block"><small class="">Format: Detik.MiliDetik</small></span>
														</div>
													</div>
													<div class="col-xl-6 col-lg-6 col-sm-6 col-xs-12 ">
														<div class="form-group">
															<label class="form-label">Judge</label><span class="text-danger">*</span>
															<input id="judgement" name="judge" type="text" class="form-control h-70 h-xs-40" style=" color: white; text-align: center;" readonly>
															<span class="help-block"><small class="">Auto OK/NG</small></span>
														</div>
													</div>
													<!-- Modal -->
													<div class="modal center-modal fade" id="modal-center" tabindex="-1">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Corrective / Perbaikan <?= $disp_1_spray; ?></h5>
																	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
																</div>
																<div class="modal-body">
																	<input id="note" type="text" class="form-control" name="perbaikan" placeholder="Input Text" maxlength="99">
																	<div class="form-control-feedback text-warning"><small>&nbsp;(optional)</small></div>
																</div>
																<div class="modal-footer modal-footer-uniform">
																	<button id="cancel" type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
																	<button type="submit" class="btn btn-social btn-dropbox "> <i class="ti-save-alt"></i>&emsp;Save</button>
																</div>
															</div>
														</div>
													</div>
													<!-- /.modal -->

													<!-- input hidden -->

													<input type="hidden" name="tanggal" value="<?= $date; ?>">
													<input type="hidden" name="id_area_paint" value="<?= $id_disp_1_spray; ?>">
													<input type="hidden" name="spray" value="<?= $disp_1_spray; ?>">
													<input type="hidden" name="id_head" value="<?= $id_head; ?>">
													<!-- akhir input hidden -->
													<div class="col-12">
														<div class="text-center pull-up">
															<button type="button" class="btn btn-primary container-fluid " data-bs-toggle="modal" data-bs-target="#modal-center">
																Save <?= $disp_1_spray; ?>
															</button>
														</div>
													</div>
												</div>
												<?php echo form_close() ?>
												<br>
												<?php echo form_open('Cvisco/submit_spray', array('id' => 'myForm2')) ?>

												<!-- Kode Program 1: Data Limbahan -->
												<?php foreach ($lim_p as $val) { ?>
													<div class="limbahan2" data-id="<?= $val['id']; ?>" data-lim-bott="<?= $val['lim_bott']; ?>" data-lim-up="<?= $val['lim_up']; ?>"></div>
												<?php } ?>

												<!-- END: Kode Program 1: Data Limbahan -->
												<div class="row">
													<input id="shift2" type="text" class="form-control h-70 h-xs-40 " style="text-align: center;" value="<?= $shift['shift']; ?>" readonly required hidden>
													<div id="color_switch2">
														<select id="warna2" name="color" class="form-select h-70 h-xs-40" required hidden>
															<?php foreach ($lim_p as $val) : ?>
																<option value="<?= $val['id']; ?>" <?= ($val['id'] == $his_color) ? 'selected' : ''; ?>>
																	<?= $val['name']; ?>
																</option>
															<?php endforeach; ?>
														</select>
													</div>

													<!-- Kode Program 2: Input "waktucek" dan "judgement" -->
													<div class="col-xl-6 col-lg-6 col-sm-6 col-xs-12 ">
														<div class="form-group">
															<label class="form-label">Waktu Ukur</label><span class="text-danger">*</span>

															<input id="waktucek2" name="waktu_cek" type="text" class="form-control h-70 h-xs-40" oninput="formatInput2(this)" placeholder="Masukan Nomor" autocomplete="off">
															<span class="help-block"><small class="">Format: Detik.MiliDetik</small></span>
														</div>
													</div>
													<div class="col-xl-6 col-lg-6 col-sm-6 col-xs-12 ">
														<div class="form-group">
															<label class="form-label">Judge</label><span class="text-danger">*</span>
															<input id="judgement2" name="judge" type="text" class="form-control h-70 h-xs-40" style=" color: white; text-align: center;" readonly>
															<span class="help-block"><small class="">Auto OK/NG</small></span>
														</div>
													</div>
													<!-- Modal -->
													<div class="modal center-modal fade" id="modal-center2" tabindex="-1">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Corrective / Perbaikan <?= $disp_2_spray; ?></h5>
																	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
																</div>
																<div class="modal-body">
																	<input id="note2" type="text" class="form-control" name="perbaikan" placeholder="Input Text" maxlength="99">
																	<div class="form-control-feedback text-warning"><small>&nbsp;(optional)</small></div>
																</div>
																<div class="modal-footer modal-footer-uniform">
																	<button id="cancel2" type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
																	<button type="submit" class="btn btn-social btn-dropbox "> <i class="ti-save-alt"></i>&emsp;Save</button>
																</div>
															</div>
														</div>
													</div>
													<!-- /.modal -->

													<!-- input hidden -->

													<input type="hidden" name="tanggal" value="<?= $date; ?>">
													<input type="hidden" name="id_area_paint" value="<?= $id_disp_2_spray; ?>">
													<input type="hidden" name="spray" value="<?= $disp_2_spray; ?>">
													<input type="hidden" name="id_head" value="<?= $id_head; ?>">
													<!-- akhir input hidden -->
													<div class="col-12">
														<div class="text-center pull-up">
															<button type="button" class="btn btn-primary container-fluid " data-bs-toggle="modal" data-bs-target="#modal-center2">
																Save <?= $disp_2_spray; ?>
															</button>
														</div>
													</div>
												</div>
												<?php echo form_close() ?>
											</div>
										</div>
										<div class="tab-pane" id="form2" role="tabpanel">
											<div class="py-10">
											</div>
										</div>
										<div class="tab-pane" id="data1" role="tabpanel">
											<div class="py-10">
												<div class="table-responsive" id="switchtable">
													<table id="example" class="table table-striped table-hover table-bordered datatablelimit" style="width:100%;">
														<thead>
															<tr>
																<th class="text-center">No</th>
																<th>Tanggal</th>
																<th class="text-center">Jam</th>
																<th class="text-center">Shift</th>
																<th class="text-center">Cat</th>
																<th class="text-center">Waktu Ukur</th>
																<th class="text-center">Judge</th>
																<th>Perbaikan</th>
																<th class="text-center">PIC</th>
															</tr>
														</thead>
														<tbody id="table-body">
															<?php
															$no 	= 1;
															?>
															<?php foreach ($table_spray_1 as $value) { ?>

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
																	<td class="text-center">
																		<?= $value['shift']; ?>
																	</td>
																	<td class="text-center">
																		<?= $value['cat']; ?>
																	</td>
																	<td class="text-center">
																		<?= $value['waktu_cek']; ?>
																	</td>
																	<?php if ($value['judge'] == 'OK') : ?>
																		<td class="text-center" style="background-color: green; color: white;"><b><?php echo $value['judge']; ?></b></td>
																	<?php elseif ($value['judge'] == 'NG') : ?>
																		<td class="text-center" style="background-color: red; color: white;"><b><?php echo $value['judge']; ?></b></td>
																	<?php else : ?>
																		<td class="text-center"><b><?php echo $value['judge']; ?></b></td>
																	<?php endif; ?>
																	<td><?php echo $value['perbaikan']; ?></td>
																	<td class="text-center"><?php echo $value['dispname']; ?></td>
																</tr>
																<?php $no++; ?>
															<?php } ?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="data2" role="tabpanel">
											<div class="py-10">
												<div class="table-responsive" id="switchtable2">
													<table id="example1" class="table table-striped table-hover table-bordered datatablelimit" style="width:100%;">
														<thead>
															<tr>
																<th class="text-center">No</th>
																<th>Tanggal</th>
																<th class="text-center">Jam</th>
																<th class="text-center">Shift</th>
																<th class="text-center">Cat</th>
																<th class="text-center">Waktu Ukur</th>
																<th class="text-center">Judge</th>
																<th>Perbaikan</th>
																<th class="text-center">PIC</th>
															</tr>

														</thead>
														<tbody id="table-body2">
															<?php
															$no 	= 1;
															?>
															<?php foreach ($table_spray_2 as $value) { ?>

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
																	<td class="text-center">
																		<?= $value['shift']; ?>
																	</td>
																	<td class="text-center">
																		<?= $value['cat']; ?>
																	</td>
																	<td class="text-center">
																		<?= $value['waktu_cek']; ?>
																	</td>
																	<?php if ($value['judge'] == 'OK') : ?>
																		<td class="text-center" style="background-color: green; color: white;"><b><?php echo $value['judge']; ?></b></td>
																	<?php elseif ($value['judge'] == 'NG') : ?>
																		<td class="text-center" style="background-color: red; color: white;"><b><?php echo $value['judge']; ?></b></td>
																	<?php else : ?>
																		<td class="text-center"><b><?php echo $value['judge']; ?></b></td>
																	<?php endif; ?>
																	<td><?php echo $value['perbaikan']; ?></td>
																	<td class="text-center"><?php echo $value['dispname']; ?></td>
																</tr>
																<?php $no++; ?>
															<?php } ?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="data_color" role="tabpanel">
											<div class="py-10">
												<div class="table-responsive">
													<table class="table table-striped table-hover table-bordered datatablelimit" style="width:100%;">
														<thead>
															<tr>
																<th class="text-center">No</th>
																<th class="text-center">Warna</th>
																<th class="text-center">Warna as</th>
																<th class="text-center">Limit Bottom</th>
																<th class="text-center">Limit Top</th>
															</tr>

														</thead>
														<tbody>
															<?php
															$no 	= 1;
															?>
															<?php foreach ($lim_p as $value) { ?>

																<tr>
																	<td class="text-center"><?php echo $no ?></td>
																	<td class="text-center">
																		<?= $value['name']; ?>
																	</td>
																	<td class="text-center">
																		<?= $value['name_as']; ?>
																	</td>
																	<td class="text-center">
																		<?= $value['lim_bott']; ?>
																	</td>
																	<td class="text-center">
																		<?= $value['lim_up']; ?>
																	</td>
																</tr>
																<?php $no++; ?>
															<?php } ?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="text-center float-end">
											<?php echo form_open('Cvisco/done_entry') ?>
											<input type="hidden" name="id_head" value="<?= $id_head; ?>">
											<button type="submit" class="btn  btn-success pull-up">
												<i class="mdi mdi-checkbox-marked-outline"></i>
												Finish
											</button>
											<?php echo form_close() ?>
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