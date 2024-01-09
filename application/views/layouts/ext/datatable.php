<!-- 
// ==========================
// ----- START: DATATABLE -----
// ========================== 
-->
<!-- datatable -->
<script src="<?php echo base_url('assets/edulearn/') ?>assets/vendor_components/datatable/datatables.min.js"></script>

<!-- 
// ==========================
// ----- END: DATATABLE -----
// ========================== 
-->

<script>
	// =====================================
	//  -- START: DataTable Konfiguration --
	// =====================================
	$(document).ready(function() {
		$('.datatablefull').DataTable({
			dom: "<'row px-2 '<'pt-2 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 'l><'pt-2 col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12 text-center 'B><'pt-2 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 'f>>" +
				"<'row'<'col-md-12'tr>>" +
				"<'row px-2 py-3'<'col-md-5'i><'col-md-7'p>>",
			"order": [],
			pageLength: 20,
			lengthMenu: [5, 10, 20, 50, 100],
			"order": [],
		});
	});

	$(document).ready(function() {
		var table = $('.datatablelimit20').DataTable({
			pageLength: 20,
			lengthMenu: [5, 10, 20, 50, 100],
			// fixedHeader: true,
			"order": [],
		})
	});

	$(document).ready(function() {
		var table = $('.datatablelimit20v2').DataTable({
			pageLength: 20,
			lengthMenu: [5, 10, 20, 50, 100],
			// fixedHeader: true,
			"order": [],
		})
	});

	$(document).ready(function() {
		var table = $('.datatablelimit5').DataTable({
			pageLength: 5,
			lengthMenu: [5, 10, 20, 50, 100],
			// fixedHeader: true,
			"order": [],
		})
	});

	$(document).ready(function() {
		var table = $('.datatablelimit10').DataTable({
			pageLength: 10,
			lengthMenu: [5, 10, 20, 50, 100],
			// fixedHeader: true,
			"order": [],
		})
	});

	// $(".tablebongkar").rowspanizer();
	$(".tablebongkar").rowspanizer({
		vertical_align: 'middle',
		columns: [0]
	});
	// =====================================
	//  --- END: DataTable Konfiguration ---
	// =====================================
</script>