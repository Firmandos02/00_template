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

								<div class="row">
									<style>
										.tablecsheet>thead>tr>td,
										.tablecsheet>thead>tr>th {
											padding: 6px;
											vertical-align: middle;
										}

										.tablecsheet>tbody>tr>td,
										.tablecsheet>tbody>tr>th {
											padding: 6px;
											vertical-align: middle;
										}
									</style>
									<div class="col-xl-5 col-lg-5 col-md-5 col-sm-7 col-xs-12">
										<div class="table-responsive mt-5">
											<table class="no-border tablecsheet">
												<thead>
													<tr>
														<td>No Form</td>
														<td>: <?= $d_head_ganjil['no_form']; ?></td>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Pemilik Doc</td>
														<td>: <?= $d_head_ganjil['pemilik_doc']; ?></td>
													</tr>
													<tr>
														<td>No Doc</td>
														<td>: <?= $d_head_ganjil['no_doc']; ?></td>
													</tr>
													<tr>
														<td>Area Painting</td>
														<td>: <?= $d_head_ganjil['painting']; ?></td>
													</tr>
													<tr>
														<td>Tanggal</td>
														<td>: <?= $d_head_ganjil['created']; ?></td>
													</tr>
													<tr>
														<td>Shift</td>
														<td>: <?= $d_head_ganjil['shift']; ?></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="col-xl-2  col-lg-2 col-md-2 col-sm-1 d-xs-none"></div>
									<div class="col-xl-5  col-lg-5 col-md-5 col-sm-4 col-xs-12">
										<div class="table-responsive mt-5">
											<table class="table table-bordered display" style="width:100%">
												<thead>
													<tr>
														<th class="text-center" colspan="3">Diverifikasi oleh System</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="text-center">Prepared By</td>
														<td class="text-center">Checked By</td>
														<td class="text-center">Approved By</td>
													</tr>
													<tr>
														<td class="text-center"><?= $d_head_ganjil['pic_done']; ?></td>
														<td class="text-center"><?= $d_head_ganjil['c_gl']; ?></td>
														<td class="text-center"><?= $d_head_ganjil['c_fr']; ?></td>
													</tr>
													<tr>
														<td class="text-center"><?= $d_head_ganjil['tanggal']; ?></td>
														<td class="text-center"><?= substr($d_head_ganjil['c_gl_date'], 0, 10); ?>
														</td>
														<td class="text-center"><?= substr($d_head_ganjil['c_fr_date'], 0, 10); ?>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
										<div class="table-responsive mt-5">
											<?php
											$text1	= $d_head_ganjil['spray'];
											$booth = substr($text1,  -1);
											?>
											<table id="example1" class="table table-striped table-bordered display" style="width:100%">
												<thead>
													<tr>
														<th class="text-center" rowspan="4"><br><br><br><br><br>No</th>
														<th class="text-center" rowspan="4"><br><br><br><br><br>Tanggal</th>
														<th class="text-center" rowspan="4"><br><br><br><br><br>Jam</th>
														<th class="text-center" colspan="10">SPRAY BOOTH 1</th>
														<th class="text-center" rowspan="2"><br>JUDGEMENT</th>
														<th class="text-center" rowspan="4"><br><br><br><br>Corrective<br> / <br>Perbaikan</th>
														<th class="text-center" rowspan="4"><br><br><br><br>Paraf <br>PIC/MP <br>Parameter</th>
														<?php if ($this->session->userdata('role') == 2) : ?>
															<?php if ($d_head_ganjil['c_gl_stat'] === null || $d_head_genap['c_gl_stat'] === null) : ?>
																<th class="text-center" rowspan="4">Action</th>
															<?php endif; ?>
														<?php endif; ?>
													</tr>
													<tr>
														<th class="text-center">Alat Ukur</th>
														<th class="text-center" colspan="9">NK 2 Cup</th>
													</tr>
													<tr>
														<th class="text-center">Sth <br>Viscositas</th>
														<th class="text-center">18".35 -18".85</th>
														<th class="text-center" colspan="2">19".35 -19".85</th>
														<th class="text-center">18".50. - 19".00</th>
														<th class="text-center" colspan="2">18".00 - 18".60</th>
														<th class="text-center" colspan="2">19".00 - 19".60</th>
														<th class="text-center">19".50 -20".00</th>
														<th class="text-center" rowspan="2"><br><br>OK/NG</th>
													</tr>
													<tr>
														<th class="text-center">Cat</th>
														<th class="text-center">Axis Grey</th>
														<th class="text-center">Shimmer Silver<br></th>
														<th class="text-center">Supergold</th>
														<th class="text-center">Grizzly Brown</th>
														<th class="text-center">U/C Winning Red (Pink)</th>
														<th class="text-center">U/C Nitric Orange (Peach)</th>
														<th class="text-center">T/C Winning Red (Red)</th>
														<th class="text-center">T/C Nitric Orange(Orange)</th>
														<th class="text-center">Deep Black</th>
													</tr>
												</thead>
												<tbody id="table-body">
													<?php
													$total_ganjil = sizeof($d_head_ganjil);
													$no     = 1;
													usort($data_ganjil_spray, function ($a, $b) {
														return $a['id'] - $b['id'];
													});
													?>
													<?php foreach ($data_ganjil_spray as $value) : ?>
														<tr>
															<td class="text-center"><?php echo $no ?></td>
															<td><?php echo $value['tanggal'] ?></td>
															<td class="text-center">
																<?php
																$jam     = $value['jam'];
																$j         = substr($jam, 0, 5);
																echo $j;
																?>
															</td>
															<?php if ($no == 1) : ?>
																<td rowspan="<?= $total_ganjil; ?>" class="text-center">Aktual</td>
															<?php endif; ?>
															<?php for ($i = 1; $i <= 9; $i++) : ?>
																<td class="text-center">
																	<?php
																	if ($value['color'] == $i) {
																		echo substr($value['waktu_cek'], -5);
																	}
																	?>
																</td>
															<?php endfor; ?>
															<?php if ($value['judge'] == 'OK') : ?>
																<td class="text-center" style="background-color: green; color: white;"><b><?php echo $value['judge']; ?></b></td>
															<?php elseif ($value['judge'] == 'NG') : ?>
																<td class="text-center" style="background-color: red; color: white;"><b><?php echo $value['judge']; ?></b></td>
															<?php else : ?>
																<td class="text-center"><b><?php echo $value['judge']; ?></b></td>
															<?php endif; ?>
															<td class="text-center"><?php echo $value['perbaikan'] ?></td>
															<td class="text-center"><?php echo $value['dispname'] ?></td>
															<?php if ($this->session->userdata('role') == 2) : ?>
																<?php if ($d_head_ganjil['c_gl_stat'] === null || $d_head_genap['c_gl_stat'] === null) : ?>
																	<td class="text-center">
																		<button id="editcek" type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modal-center1" data-modal-id="<?php echo $value['id'] ?>" data-modal-tanggal="<?php echo $value['tanggal'] ?>" data-modal-jam="<?php echo $value['jam'] ?>" data-modal-warna="<?php echo $value['color'] ?>" data-modal-waktucek="<?php echo $value['waktu_cek'] ?>" data-modal-perbaikan="<?php echo $value['perbaikan'] ?>" data-modal-idhead="<?php echo $d_head_ganjil['id_head']; ?>"><i class="mdi mdi-pencil"></i></button>
																	</td>
																<?php endif; ?>
															<?php endif; ?>
														</tr>
														<?php $no++; ?>
													<?php endforeach; ?>
												</tbody>
											</table>
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
										<div class="table-responsive mt-5">
											<?php
											$text1	= $d_head_genap['spray'];
											$booth = substr($text1,  -1);
											?>
											<table id="example1" class="table table-striped table-bordered display" style="width:100%">
												<thead>
													<tr>
														<th class="text-center" rowspan="4"><br><br><br><br><br>No</th>
														<th class="text-center" rowspan="4"><br><br><br><br><br>Tanggal</th>
														<th class="text-center" rowspan="4"><br><br><br><br><br>Jam</th>
														<th class="text-center" colspan="10">SPRAY BOOTH 1</th>
														<th class="text-center" rowspan="2"><br>JUDGEMENT</th>
														<th class="text-center" rowspan="4"><br><br><br><br>Corrective<br> / <br>Perbaikan</th>
														<th class="text-center" rowspan="4"><br><br><br><br>Paraf <br>PIC/MP <br>Parameter</th>
														<?php if ($this->session->userdata('role') == 2) : ?>
															<?php if ($d_head_ganjil['c_gl_stat'] === null || $d_head_genap['c_gl_stat'] === null) : ?>
																<th class="text-center" rowspan="4">Action</th>
															<?php endif; ?>
														<?php endif; ?>
													</tr>
													<tr>
														<th class="text-center">Alat Ukur</th>
														<th class="text-center" colspan="9">NK 2 Cup</th>
													</tr>
													<tr>
														<th class="text-center">Sth <br>Viscositas</th>
														<th class="text-center">18".35 -18".85</th>
														<th class="text-center" colspan="2">19".35 -19".85</th>
														<th class="text-center">18".50. - 19".00</th>
														<th class="text-center" colspan="2">18".00 - 18".60</th>
														<th class="text-center" colspan="2">19".00 - 19".60</th>
														<th class="text-center">19".50 -20".00</th>
														<th class="text-center" rowspan="2"><br><br>OK/NG</th>
													</tr>
													<tr>
														<th class="text-center">Cat</th>
														<th class="text-center">Axis Grey</th>
														<th class="text-center">Shimmer Silver<br></th>
														<th class="text-center">Supergold</th>
														<th class="text-center">Grizzly Brown</th>
														<th class="text-center">U/C Winning Red (Pink)</th>
														<th class="text-center">U/C Nitric Orange (Peach)</th>
														<th class="text-center">T/C Winning Red (Red)</th>
														<th class="text-center">T/C Nitric Orange(Orange)</th>
														<th class="text-center">Deep Black</th>
													</tr>
												</thead>
												<tbody id="table-body">
													<?php
													$no     = 1;
													$total_genap = sizeof($data_genap_spray);
													usort($data_genap_spray, function ($a, $b) {
														return $a['id'] - $b['id'];
													});
													?>
													<?php foreach ($data_genap_spray as $value) : ?>
														<tr>
															<td class="text-center"><?php echo $no ?></td>
															<td><?php echo $value['tanggal'] ?></td>
															<td class="text-center">
																<?php
																$jam     = $value['jam'];
																$j         = substr($jam, 0, 5);
																echo $j;
																?>
															</td>
															<?php if ($no == 1) : ?>
																<td rowspan="<?= $total_genap; ?>" class="text-center">Aktual</td>
															<?php endif; ?>
															<?php for ($i = 1; $i <= 9; $i++) : ?>
																<td class="text-center">
																	<?php
																	if ($value['color'] == $i) {
																		echo substr($value['waktu_cek'], -5);
																	}
																	?>
																</td>
															<?php endfor; ?>
															<?php if ($value['judge'] == 'OK') : ?>
																<td class="text-center" style="background-color: green; color: white;"><b><?php echo $value['judge']; ?></b></td>
															<?php elseif ($value['judge'] == 'NG') : ?>
																<td class="text-center" style="background-color: red; color: white;"><b><?php echo $value['judge']; ?></b></td>
															<?php else : ?>
																<td class="text-center"><b><?php echo $value['judge']; ?></b></td>
															<?php endif; ?>
															<td><?php echo $value['perbaikan'] ?></td>
															<td class="text-center"><?php echo $value['dispname'] ?></td>
															<?php if ($this->session->userdata('role') == 2) : ?>
																<?php if ($d_head_ganjil['c_gl_stat'] === null || $d_head_genap['c_gl_stat'] === null) : ?>
																	<td class="text-center">
																		<button id="editcek" type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modal-center2" data-modal-id2="<?php echo $value['id'] ?>" data-modal-tanggal2="<?php echo $value['tanggal'] ?>" data-modal-jam2="<?php echo $value['jam'] ?>" data-modal-warna2="<?php echo $value['color'] ?>" data-modal-waktucek2="<?php echo $value['waktu_cek'] ?>" data-modal-perbaikan2="<?php echo $value['perbaikan'] ?>" data-modal-idhead2="<?php echo $d_head_ganjil['id_head']; ?>"><i class="mdi mdi-pencil"></i></button>
																	</td>
																<?php endif; ?>
															<?php endif; ?>
														</tr>
														<?php $no++; ?>
													<?php endforeach; ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!-- Kode Program 1: Data color-->
								<?php foreach ($lim_p as $val) { ?>
									<div class="limbahan" data-id="<?= $val['id']; ?>" data-lim-bott="<?= $val['lim_bott']; ?>" data-lim-up="<?= $val['lim_up']; ?>"></div>
								<?php } ?>
								<?php foreach ($lim_p as $val) { ?>
									<div class="limbahan2" data-id="<?= $val['id']; ?>" data-lim-bott="<?= $val['lim_bott']; ?>" data-lim-up="<?= $val['lim_up']; ?>"></div>
								<?php } ?>
								<!--START:  Modal 1 -->
								<div class="modal center-modal fade" id="modal-center1" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">Edit Data </h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<?php echo form_open('Cvisco/edit_transct') ?>
												<div class="row">
													<div class="col-6">
														<div class="form-group">
															<label class="form-label">Tanggal</label><span class="text-danger">*</span>
															<input id="tanggal" type="text" name="tanggal" class="form-control" readonly required>
														</div>
													</div>
													<div class="col-6">
														<div class="form-group">
															<label class="form-label">Jam</label><span class="text-danger">*</span>
															<input id="jam" type="text" name="jam" class="form-control" readonly required>
														</div>
													</div>
													<div class="col-6">
														<div class="form-group">
															<label class="form-label">CAT</label><span class="text-danger">*</span>
															<select id="warna" name="color" class="form-select" required>
																<?php foreach ($lim_p as $val) : ?>
																	<option value="<?= $val['id']; ?>"><?= $val['name']; ?></option>
																<?php endforeach; ?>
															</select>
														</div>
													</div>
													<div class="col-6">
														<div class="form-group">
															<label class="form-label">Perbaikan / Corrective</label>
															<input id="perbaikan" type="text" name="perbaikan" class="form-control">
														</div>
													</div>
													<div class="col-6">
														<div class="form-group">
															<label class="form-label">Waktu Ukur</label><span class="text-danger">*</span>
															<input id="waktucek" type="text" name="waktu_cek" oninput="formatInput2(this)" class="form-control" required autocomplete="off">
														</div>
													</div>
													<div class="col-6">
														<div class="form-group">
															<label class="form-label">Judge</label><span class="text-danger">*</span>
															<input id="judgement" name="judge" type="text" class="form-control" style=" color: white; text-align: center;" readonly required>
														</div>
													</div>
													<input id="id" type="text" name="id" class="form-control" hidden>
													<input id="idhead" type="text" name="idhead2" class="form-control" hidden>
												</div>
											</div>
											<div class="modal-footer modal-footer-uniform">
												<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary float-end">Save changes</button>
											</div>
											<?php echo form_close() ?>
										</div>
									</div>
								</div>
								<!-- END: modal 1 -->
								<!--START:  Modal 2 -->
								<div class="modal center-modal fade" id="modal-center2" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">Edit Data </h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<?php echo form_open('Cvisco/edit_transct') ?>
												<div class="row">
													<div class="col-6">
														<div class="form-group">
															<label class="form-label">Tanggal</label><span class="text-danger">*</span>
															<input id="tanggal2" type="text" name="tanggal" class="form-control" readonly required>
														</div>
													</div>
													<div class="col-6">
														<div class="form-group">
															<label class="form-label">Jam</label><span class="text-danger">*</span>
															<input id="jam2" type="text" name="jam" class="form-control" readonly required>
														</div>
													</div>
													<div class="col-6">
														<div class="form-group">
															<label class="form-label">CAT</label><span class="text-danger">*</span>
															<select id="warna2" name="color" class="form-select" required>
																<?php foreach ($lim_p as $val) : ?>
																	<option value="<?= $val['id']; ?>"><?= $val['name']; ?></option>
																<?php endforeach; ?>
															</select>
														</div>
													</div>
													<div class="col-6">
														<div class="form-group">
															<label class="form-label">Perbaikan / Corrective</label>
															<input id="perbaikan2" type="text" name="perbaikan" class="form-control">
														</div>
													</div>
													<div class="col-6">
														<div class="form-group">
															<label class="form-label">Waktu Ukur</label><span class="text-danger">*</span>
															<input id="waktucek2" type="text" name="waktu_cek" oninput="formatInput2(this)" class="form-control" required autocomplete="off">
														</div>
													</div>
													<div class="col-6">
														<div class="form-group">
															<label class="form-label">Judge</label><span class="text-danger">*</span>
															<input id="judgement2" name="judge" type="text" class="form-control" style=" color: white; text-align: center;" readonly required>
														</div>
													</div>
													<input id="id2" type="text" name="id" class="form-control" hidden>
													<input id="idhead2" type="text" name="idhead2" class="form-control" hidden>
												</div>
											</div>
											<div class="modal-footer modal-footer-uniform">
												<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary float-end">Save changes</button>
											</div>
											<?php echo form_close() ?>
										</div>
									</div>
								</div>
								<!-- END: modal 2 -->

								<?php if ($this->session->userdata('role') == 2) : ?>
									<?php if ($d_head_ganjil['c_gl_stat'] === null || $d_head_genap['c_gl_stat'] === null) : ?>
										<div class="col-12 mt-15">
											<div class=" d-flex justify-content-end">
												<?php echo form_open('Cvisco/approve_reject') ?>
												<input type="hidden" name="id_head" value="<?= $d_head_ganjil['id_head']; ?>">
												<input type="hidden" name="status" value="0">
												<button type="submit" class="btn  btn-danger pull-up mx-5">
													<i class="mdi mdi-file-excel-box"></i>
													Reject
												</button>
												<?php echo form_close() ?>
												<?php echo form_open('Cvisco/approve_reject') ?>
												<input type="hidden" name="id_head" value="<?= $d_head_ganjil['id_head']; ?>">
												<input type="hidden" name="status" value="1">
												<button type="submit" class="btn  btn-success pull-up">
													<i class="mdi mdi-file-check"></i>
													Approve
												</button>
												<?php echo form_close() ?>
											</div>
										</div>
									<?php endif; ?>
								<?php elseif ($this->session->userdata('role') == 3) : ?>
									<?php if ($d_head_ganjil['c_gl_stat'] != null || $d_head_genap['c_gl_stat'] != null) : ?>
										<?php if ($d_head_ganjil['c_fr_stat'] === null || $d_head_genap['c_fr_stat'] === null) : ?>
											<div class="col-12 mt-15">
												<div class=" d-flex justify-content-end">
													<?php echo form_open('Cvisco/approve_reject') ?>
													<input type="hidden" name="id_head" value="<?= $d_head_ganjil['id_head']; ?>">
													<input type="hidden" name="status" value="0">
													<button type="submit" class="btn  btn-danger pull-up mx-5">
														<i class="mdi mdi-file-check"></i>
														Reject
													</button>
													<?php echo form_close() ?>
													<?php echo form_open('Cvisco/approve_reject') ?>
													<input type="hidden" name="id_head" value="<?= $d_head_ganjil['id_head']; ?>">
													<input type="hidden" name="status" value="1">
													<button type="submit" class="btn  btn-success pull-up">
														<i class="mdi mdi-file-check"></i>
														Approve
													</button>
													<?php echo form_close() ?>
												</div>
											</div>
										<?php endif; ?>
									<?php endif; ?>
								<?php endif; ?>
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