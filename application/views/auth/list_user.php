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
	                                <div class="col-lg-6 col-xs-12 ">
	                                    <h3 class="box-title"><?= $titleapp; ?></h3>
	                                </div>
	                                <div class="col-lg-6 col-xs-12 ">
	                                    <ul class="box-controls pull-right">
	                                        <li><a class="box-btn-slide p-5" href="#"></a></li>
	                                        <li><a class="box-btn-fullscreen p-5" href="#"></a></li>
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="box-body ">
	                            <div class="row" style="padding:0.5rem;">
	                                <div class="table-responsive" id="divtable">
	                                    <table class="table table-striped no-border datatablefull" style="width: 100%">
	                                        <thead>
	                                            <tr>
	                                                <th class="text-center">No</th>
	                                                <th class="text-center">NPK</th>
	                                                <th>Name</th>
	                                                <th class="text-center">Role</th>
	                                                <th class="text-center">Status</th>
	                                                <th>Log_Browser</th>
	                                                <th>Log_Device</th>
	                                                <th class="text-center">Log_Login</th>
	                                                <th class="text-center">Created_Date</th>
	                                                <th class="text-center">Created_By</th>
	                                            </tr>
	                                        </thead>
	                                        <tbody id="tbody_shottype">
	                                            <?php $i = 1; ?>
	                                            <?php foreach ($user as $value) : ?>
	                                                <tr class="">
	                                                    <td class="text-center "><?= $i; ?></td>
	                                                    <td class="text-center"><?php echo $value['username'] ?></td>
	                                                    <td><?php echo $value['dispname'] ?></td>
	                                                    <td class="text-center"><?php echo $value['access'] ?></td>
	                                                    <td class="text-center"><?php if ($value['active'] == 1) {
                                                                                    echo "Aktif";
                                                                                } else {
                                                                                    echo "Non-Aktif";
                                                                                }
                                                                                ?></td>
	                                                    <td><?php echo $value['last_browser'] ?></td>
	                                                    <td><?php echo $value['last_device'] ?></td>
	                                                    <td class="text-center"><?php echo $value['last_login'] ?></td>
	                                                    <td class="text-center"><?php echo $value['sysdate'] ?></td>
	                                                    <td class="text-center"><?php echo $value['created_by'] ?></td>
	                                                </tr>
	                                                <?php $i++; ?>
	                                            <?php endforeach; ?>
	                                        </tbody>
	                                    </table>
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