<!-- START : EXT Datatable -->
<?php $this->load->view('layouts/ext/datatable.php');
?>
<!-- END : EXT Datatable -->


<script>
	// kektika halman di muat langsung jalankan funfgsi
	updateMesinOptions();

	// membaca berdasarkan select
	document.getElementById('area').addEventListener('change', function() {
		updateMesinOptions();
	});

	document.getElementById('lini').addEventListener('change', function() {
		updateMesinOptions();
	});

	// jalankan fungsi berdasaarkan select yang dipilih
	function updateMesinOptions() {
		var selectedAreaId = document.getElementById('area').value;
		var selectedLini = document.getElementById('lini').value;

		var mesinSelect = document.getElementById('mesin');
		mesinSelect.innerHTML = ''; // Clear existing options

		<?php foreach ($ch_area as $val) : ?>
			if ("<?= $val['area']; ?>" == selectedAreaId && "<?= $val['lini']; ?>" == selectedLini) {
				var option = document.createElement('option');
				option.value = "<?= $val['id']; ?>";
				option.text = "<?= $val['mesin']; ?>";
				mesinSelect.add(option);
			}
		<?php endforeach; ?>
	}

	// buat edit
	$(document).ready(function() {
		$('#modal-center3').on('show.bs.modal', function(event) {
			var button = $(event.relatedTarget);
			var id = button.data('modal-id');
			var tanggal = button.data('modal-tanggal');

			// Mengisikan data ke formulir input
			$('#id').val(id);
			$('#tanggal').val(tanggal);
		});
	});
</script>
