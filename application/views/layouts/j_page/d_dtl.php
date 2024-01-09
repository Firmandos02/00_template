<!-- START : EXT HIGHCHART -->
<?php $this->load->view('layouts/ext/highchart');
?>
<!-- END : EXT HIGHCHART -->

<!-- buat select -->
<!-- <script>
	function updateDropdown(selectedValue, sourceArray, targetDropdownId) {
		var targetDropdown = document.getElementById(targetDropdownId);
		targetDropdown.innerHTML = ""; // Clear existing options

		// Add a default option
		var defaultOption = document.createElement("option");
		defaultOption.text = "Select";
		targetDropdown.add(defaultOption);

		var filteredOptions = sourceArray.filter(function(item) {
			return item[getDropdownDependency(targetDropdownId)] === selectedValue;
		});

		var uniqueValues = [...new Set(filteredOptions.map(item => item[targetDropdownId]))];

		uniqueValues.forEach(function(value) {
			var option = document.createElement("option");
			option.value = value;
			option.text = value;
			targetDropdown.add(option);
		});
	}

	function getDropdownDependency(dropdownId) {
		switch (dropdownId) {
			case "area":
				return "lini";
			case "mesin":
				return "area";
				// Add cases for other dropdown dependencies as needed
			case "item":
				return "mesin";
			case "point":
				return "item";
			case "metode":
				return "point";
			default:
				return "";
		}
	}

	function setupEventListeners() {
		var dropdowns = ["lini", "area", "mesin", "item", "point", "metode"];

		dropdowns.forEach(function(dropdownId, index, array) {
			var dropdown = document.getElementById(dropdownId);

			dropdown.addEventListener("change", function() {
				var selectedValue = this.value;
				var targetDropdownIndex = index + 1;

				while (targetDropdownIndex < array.length) {
					updateDropdown(selectedValue, csheet, array[targetDropdownIndex]);
					selectedValue = document.getElementById(array[targetDropdownIndex]).value;
					targetDropdownIndex++;
				}
			});
		});
	}

	// Setup event listeners once the DOM is loaded
	document.addEventListener("DOMContentLoaded", function() {
		setupEventListeners();
	});
</script> -->
<!-- Pastikan Anda sudah memasukkan jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
	$(document).ready(function() {
		// Menangani perubahan pada dropdown lini
		$('#lini').change(function() {
			var selectedLini = $(this).val();

			// Mengosongkan dropdown yang lebih tinggi pada hierarki
			$('#area').empty();
			$('#mesin').empty();
			$('#item').empty();
			$('#point').empty();
			$('#metode').empty();

			// Menampilkan area yang sesuai dengan lini yang dipilih
			$.each(<?php echo json_encode($csheet); ?>, function(index, value) {
				if (value.lini === selectedLini && $.inArray(value.area, $('#area option').map(function() {
						return $(this).val();
					}).get()) === -1) {
					$('#area').append('<option value="' + value.area + '">' + value.area + '</option>');
				}
			});
		});

		// Menangani perubahan pada dropdown area
		$('#area').change(function() {
			var selectedArea = $(this).val();
			var selectedLini = $('#lini').val();

			// Mengosongkan dropdown yang lebih tinggi pada hierarki
			$('#mesin').empty();
			$('#item').empty();
			$('#point').empty();
			$('#metode').empty();

			// Menampilkan mesin yang sesuai dengan area yang dipilih
			$.each(<?php echo json_encode($csheet); ?>, function(index, value) {
				if (value.lini === selectedLini && value.area === selectedArea && $.inArray(value.mesin, $('#mesin option').map(function() {
						return $(this).val();
					}).get()) === -1) {
					$('#mesin').append('<option value="' + value.mesin + '">' + value.mesin + '</option>');
				}
			});
		});

		// Menangani perubahan pada dropdown mesin
		$('#mesin').change(function() {
			var selectedMesin = $(this).val();
			var selectedLini = $('#lini').val();
			var selectedArea = $('#area').val();

			// Mengosongkan dropdown yang lebih tinggi pada hierarki
			$('#item').empty();
			$('#point').empty();
			$('#metode').empty();

			// Menampilkan item yang sesuai dengan mesin yang dipilih
			$.each(<?php echo json_encode($csheet); ?>, function(index, value) {
				if (value.lini === selectedLini && value.area === selectedArea && value.mesin === selectedMesin && $.inArray(value.item, $('#item option').map(function() {
						return $(this).val();
					}).get()) === -1) {
					$('#item').append('<option value="' + value.item + '">' + value.item + '</option>');
				}
			});
		});

		// Menangani perubahan pada dropdown item
		$('#item').change(function() {
			var selectedItem = $(this).val();
			var selectedLini = $('#lini').val();
			var selectedArea = $('#area').val();
			var selectedMesin = $('#mesin').val();

			// Mengosongkan dropdown yang lebih tinggi pada hierarki
			$('#point').empty();
			$('#metode').empty();

			// Menampilkan point yang sesuai dengan item yang dipilih
			$.each(<?php echo json_encode($csheet); ?>, function(index, value) {
				if (value.lini === selectedLini && value.area === selectedArea && value.mesin === selectedMesin && value.item === selectedItem && $.inArray(value.point, $('#point option').map(function() {
						return $(this).val();
					}).get()) === -1) {
					$('#point').append('<option value="' + value.point + '">' + value.point + '</option>');
				}
			});
		});

		// Menangani perubahan pada dropdown point
		$('#point').change(function() {
			var selectedPoint = $(this).val();
			var selectedLini = $('#lini').val();
			var selectedArea = $('#area').val();
			var selectedMesin = $('#mesin').val();
			var selectedItem = $('#item').val();

			// Mengosongkan dropdown yang lebih tinggi pada hierarki
			$('#metode').empty();

			// Menampilkan metode yang sesuai dengan point yang dipilih
			$.each(<?php echo json_encode($csheet); ?>, function(index, value) {
				if (value.lini === selectedLini && value.area === selectedArea && value.mesin === selectedMesin && value.item === selectedItem && value.point === selectedPoint && $.inArray(value.id, $('#metode option').map(function() {
						return $(this).val();
					}).get()) === -1) {
					$('#metode').append('<option value="' + value.id + '">' + value.metode + '</option>');
				}
			});
		});
	});
</script>









<!-- Buat chart -->
<script>
	var c_title = <?php
				foreach ($chart as $val) {
					echo " '" .  $val['lini'] . ' | ' . $val['area'] . ' | ' .  $val['mesin'] . "' ";
					break;
				}
				?>;
	var parameter = <?php
					foreach ($chart as $val) {
						echo " '" . $val['param'] . "' ";
						break;
					}
					?>;

	var metode = <?php
				foreach ($chart as $val) {
					echo " '" . $val['metode'] . "' ";
					break;
				}
				?>;
	var dataSeries = [<?php
					foreach ($chart as $val) {
						echo $val['aktual'] . ',';
					}
					?>];


	// Batas Atas dan Bawah
	var bottomLimit = <?php
					foreach ($chart as $val) {
						echo $val['std_min'];
						$bottomLimit = $val['std_min'];
						break;
					}
					?>;

	var topLimit = <?php
				foreach ($chart as $val) {
					echo $val['std_max'];
					$topLimit = $val['std_max'];
					break;
				}
				?>;

	var pad_min_top = <?php
					// Pengecekan karakter titik
					if (strpos($bottomLimit, '.') !== false || strpos($topLimit, '.') !== false) {
						$pad_mintop = 0.5;
					} else {
						$pad_mintop = 5;
					}
					echo $pad_mintop;
					?>;

	var cat = [<?php foreach ($chart as $val) {
					$tanggal = date('Y.m', strtotime($val['tanggal']));
					echo $tanggal . ',';
				}
				?>];



	// Konfigurasi Highcharts

	Highcharts.chart('chart1', {
		title: {
			text: c_title
		},
		xAxis: {
			title: {
				text: 'Tanggal'
			},
			// type: 'datetime',
			categories: cat,
			crosshair: true,
		},
		yAxis: {
			title: {
				text: parameter
			},
			minPadding: 0,
			maxPadding: 0,
			min: bottomLimit - pad_min_top,
			max: topLimit + pad_min_top,
			plotLines: [{
				color: 'red', // Warna garis
				dashStyle: 'dash', // Jenis garis (contoh: dash, dot, solid)
				width: 2, // Lebar garis
				value: topLimit, // Nilai batas atas
				zIndex: 5, // Z-Index (untuk menentukan tumpukan)
				label: {
					text: 'MAX = ' + topLimit + ' ' + parameter, // Teks label
					align: 'right',
					x: -10,
					y: 12
				}
			}, {
				color: 'green',
				dashStyle: 'dash',
				width: 2,
				value: bottomLimit,
				zIndex: 5,
				label: {
					text: 'MIN = ' + bottomLimit + ' ' + parameter,
					align: 'right',
					x: -10,
					y: 12
				}
			}]
		},

		series: [{
			name: metode,
			data: dataSeries
		}],
		credits: {
			enabled: false // Menonaktifkan label Highcharts.com
		}

	});
</script>
