<!-- START : EXT template tindakan dan hasil -->
<?php $this->load->view('layouts/j_page/form_aktual');
?>
<?php $this->load->view('layouts/j_page/form_hasil');
?>
<?php $this->load->view('layouts/j_page/other_form');
?>
<!-- END : EXT template tindakan dan hasil -->

<!-- buat ok ng  -->
<script>
	// ===========================================
	// question 1
	// ===========================================
	document.addEventListener('DOMContentLoaded', function() {
		var aVbeltInput = document.getElementById('a_vbelt');
		var jVbeltInput = document.getElementById('j_vbelt');
		var tVbeltInput = document.getElementById('t_vbelt');
		var hVbeltInput = document.getElementById('h_vbelt');
		var hvVbeltInput = document.getElementById('hv_vbelt');
		var min_vbelt = 3.5;
		var max_vbelt = 4;

		function updateJvBeltValue() {
			var inputValue = parseFloat(aVbeltInput.value);

			if (isNaN(inputValue) || inputValue === null || inputValue === "") {
				// Jika input kosong, atur nilai jVbeltInput kosong dan hapus gaya latar belakang
				jVbeltInput.value = '';
				aVbeltInput.style.backgroundColor = '';
				aVbeltInput.style.color = '';
				aVbeltInput.style.fontWeight = '';
				tVbeltInput.removeAttribute('required');
				hVbeltInput.removeAttribute('required');
				tVbeltInput.setAttribute('hidden', true);
				hVbeltInput.setAttribute('hidden', true);
			} else if (inputValue < min_vbelt || inputValue > max_vbelt) {
				jVbeltInput.value = 'NG';
				// Atur gaya latar belakang menjadi merah
				aVbeltInput.style.backgroundColor = '#dc3545';
				aVbeltInput.style.color = 'white';
				aVbeltInput.style.fontWeight = 'bold';
				// Tampilkan input tindakan dan hasil jika input NG
				tVbeltInput.setAttribute('required', true);
				hVbeltInput.setAttribute('required', true);
				tVbeltInput.removeAttribute('hidden');
				hVbeltInput.removeAttribute('hidden');

			} else {
				jVbeltInput.value = 'OK';
				// Atur gaya latar belakang menjadi hijau
				aVbeltInput.style.backgroundColor = '#28a745';
				aVbeltInput.style.color = 'white';
				aVbeltInput.style.fontWeight = 'bold';
				// Sembunyikan input tindakan dan hasil jika input aVbelt kosong
				tVbeltInput.removeAttribute('required');
				hVbeltInput.removeAttribute('required');
				tVbeltInput.setAttribute('hidden', true);
				hVbeltInput.setAttribute('hidden', true);
				tVbeltInput.value = '';
				hVbeltInput.value = '';
				hvVbeltInput.value = '';
			}
		}

		function updateHvBeltValue() {
			var inputValue = parseFloat(hVbeltInput.value);

			if (isNaN(inputValue) || inputValue === null || inputValue === "") {
				hvVbeltInput.value = '';
				hVbeltInput.style.backgroundColor = '';
				hVbeltInput.style.color = '';
				hVbeltInput.style.fontWeight = '';

			} else if (inputValue < min_vbelt || inputValue > max_vbelt) {
				hvVbeltInput.value = 'NG';
				// Atur gaya latar belakang menjadi merah
				hVbeltInput.style.backgroundColor = '#dc3545';
				hVbeltInput.style.color = 'white';
				hVbeltInput.style.fontWeight = 'bold';

			} else {
				hvVbeltInput.value = 'OK';
				// Atur gaya latar belakang menjadi hijau
				hVbeltInput.style.backgroundColor = '#28a745';
				hVbeltInput.style.color = 'white';
				hVbeltInput.style.fontWeight = 'bold';
			}
		}

		// Panggil fungsi untuk menginisialisasi nilai saat halaman dimuat
		updateJvBeltValue();
		updateHvBeltValue();

		// Tambahkan event listener pada peristiwa input untuk nilai aVbeltInput
		aVbeltInput.addEventListener('input', updateJvBeltValue);
		hVbeltInput.addEventListener('input', updateHvBeltValue);

		// ===========================================
		// question 2
		// ===========================================
		var aBmtrInput = document.getElementById('a_bmtr');
		var jBmtrInput = document.getElementById('j_bmtr');
		var tBmtrInput = document.getElementById('t_bmtr');
		var hBmtrInput = document.getElementById('h_bmtr');
		var hvBmtrInput = document.getElementById('hv_bmtr');
		var min_bmtr = 0;
		var max_bmtr = 7;

		function updateJvbmtrValue() {
			var inputValue = parseFloat(aBmtrInput.value);

			if (isNaN(inputValue) || inputValue === null || inputValue === "") {
				// Jika input kosong, atur nilai jBmtrInput kosong dan hapus gaya latar belakang
				jBmtrInput.value = '';
				aBmtrInput.style.backgroundColor = '';
				aBmtrInput.style.color = '';
				aBmtrInput.style.fontWeight = '';
			} else if (inputValue < min_bmtr || inputValue >= max_bmtr) {
				jBmtrInput.value = 'NG';
				// Atur gaya latar belakang menjadi merah
				aBmtrInput.style.backgroundColor = '#dc3545';
				aBmtrInput.style.color = 'white';
				aBmtrInput.style.fontWeight = 'bold';
				tBmtrInput.removeAttribute('hidden');
				hBmtrInput.removeAttribute('hidden');
				tBmtrInput.setAttribute('required', true);
				hBmtrInput.setAttribute('required', true);
			} else {
				jBmtrInput.value = 'OK';
				// Atur gaya latar belakang menjadi hijau
				aBmtrInput.style.backgroundColor = '#28a745';
				aBmtrInput.style.color = 'white';
				aBmtrInput.style.fontWeight = 'bold';
				tBmtrInput.removeAttribute('required');
				hBmtrInput.removeAttribute('required');
				tBmtrInput.setAttribute('hidden', true);
				hBmtrInput.setAttribute('hidden', true);
				tBmtrInput.value = '';
				hBmtrInput.value = '';
				hvBmtrInput.value = '';
			}
		}

		function updateHvbmtrValue() {
			var inputValue = parseFloat(hBmtrInput.value);

			if (isNaN(inputValue) || inputValue === null || inputValue === "") {
				hvBmtrInput.value = '';
				hBmtrInput.style.backgroundColor = '';
				hBmtrInput.style.color = '';
				hBmtrInput.style.fontWeight = '';
			} else if (inputValue < min_bmtr || inputValue >= max_bmtr) {
				hvBmtrInput.value = 'NG';
				hBmtrInput.style.backgroundColor = '#dc3545';
				hBmtrInput.style.color = 'white';
				hBmtrInput.style.fontWeight = 'bold';

			} else {
				hvBmtrInput.value = 'OK';
				hBmtrInput.style.backgroundColor = '#28a745';
				hBmtrInput.style.color = 'white';
				hBmtrInput.style.fontWeight = 'bold';
			}
		}

		// Panggil fungsi untuk menginisialisasi nilai saat halaman dimuat
		updateJvbmtrValue();
		updateHvbmtrValue();

		// Tambahkan event listener pada peristiwa input untuk nilai aBmtrInput
		aBmtrInput.addEventListener('input', updateJvbmtrValue);
		hBmtrInput.addEventListener('input', updateHvbmtrValue);

		// ===========================================
		// question 3
		// ===========================================

		var aRntInput = document.getElementById('a_rnt');
		var jRntInput = document.getElementById('j_rnt');
		var tRntInput = document.getElementById('t_rnt');
		var hRntInput = document.getElementById('h_rnt');
		var hvRntInput = document.getElementById('hv_rnt');
		var min_rnt = 4;
		var max_rnt = 5;

		function updateJRntValue() {
			var inputValue = parseFloat(aRntInput.value);

			if (isNaN(inputValue) || inputValue === null || inputValue === "") {
				// Jika input kosong, atur nilai jRntInput kosong dan hapus gaya latar belakang
				jRntInput.value = '';
				aRntInput.style.backgroundColor = '';
				aRntInput.style.fontWeight = '';
				aRntInput.style.color = '';
				tRntInput.removeAttribute('required');
				hvRntInput.removeAttribute('required');
				tRntInput.setAttribute('hidden', true);
				hvRntInput.setAttribute('hidden', true);
			} else if (inputValue < min_rnt || inputValue > max_rnt) {
				jRntInput.value = 'NG';
				// Atur gaya latar belakang menjadi merah
				aRntInput.style.backgroundColor = '#dc3545';
				aRntInput.style.color = 'white';
				aRntInput.style.fontWeight = 'bold';
				tRntInput.removeAttribute('hidden');
				hRntInput.removeAttribute('hidden');
				tRntInput.setAttribute('required', true);
				hRntInput.setAttribute('required', true);
			} else {
				jRntInput.value = 'OK';
				// Atur gaya latar belakang menjadi hijau
				aRntInput.style.backgroundColor = '#28a745';
				aRntInput.style.color = 'white';
				aRntInput.style.fontWeight = 'bold';
				hRntInput.removeAttribute('required');
				tRntInput.removeAttribute('required');
				hRntInput.setAttribute('hidden', true);
				tRntInput.setAttribute('hidden', true);
				tRntInput.value = '';
				hRntInput.value = '';
				hvRntInput.value = '';
			}
		}

		function updateHRntValue() {
			var inputValue = parseFloat(hRntInput.value);

			if (isNaN(inputValue) || inputValue === null || inputValue === "") {
				hvRntInput.value = '';
				hRntInput.style.backgroundColor = '';
				hRntInput.style.color = '';
				hRntInput.style.fontWeight = '';
			} else if (inputValue < min_bmtr || inputValue > max_bmtr) {
				hvRntInput.value = 'NG';
				hRntInput.style.backgroundColor = '#dc3545';
				hRntInput.style.color = 'white';
				hRntInput.style.fontWeight = 'bold';

			} else {
				hvRntInput.value = 'OK';
				hRntInput.style.backgroundColor = '#28a745';
				hRntInput.style.color = 'white';
				hRntInput.style.fontWeight = 'bold';
			}
		}

		// Panggil fungsi untuk menginisialisasi nilai saat halaman dimuat
		updateJRntValue();
		updateHRntValue();

		// Tambahkan event listener pada peristiwa input untuk nilai aRntInput
		aRntInput.addEventListener('input', updateJRntValue);
		hRntInput.addEventListener('input', updateHRntValue);

		// ===========================================
		// question 4
		// ===========================================
		var aGbInput = document.getElementById('a_gb');
		var jGbInput = document.getElementById('j_gb');
		var tGbInput = document.getElementById('t_gb');
		var hGbInput = document.getElementById('h_gb');
		var hvGbInput = document.getElementById('hv_gb');

		var minGb = 0;
		var maxGb = 7;

		function updateJGbValue() {
			var inputValue = parseFloat(aGbInput.value);

			if (isNaN(inputValue) || inputValue === null || inputValue === "") {
				// Jika input kosong, atur nilai jGbInput kosong dan hapus gaya latar belakang
				jGbInput.value = '';
				aGbInput.style.backgroundColor = '';
				aGbInput.style.color = '';
				aGbInput.style.fontWeight = '';
				tGbInput.removeAttribute('required');
				hGbInput.removeAttribute('required');
				tGbInput.setAttribute('hidden', true);
				hGbInput.setAttribute('hidden', true);
			} else if (inputValue < minGb || inputValue >= maxGb) {
				jGbInput.value = 'NG';
				// Atur gaya latar belakang menjadi merah
				aGbInput.style.backgroundColor = '#dc3545';
				aGbInput.style.color = 'white';
				aGbInput.style.fontWeight = 'bold';
				tGbInput.removeAttribute('hidden');
				hGbInput.removeAttribute('hidden');
				tGbInput.setAttribute('required', true);
				hGbInput.setAttribute('required', true);
			} else {
				jGbInput.value = 'OK';
				// Atur gaya latar belakang menjadi hijau
				aGbInput.style.backgroundColor = '#28a745';
				aGbInput.style.color = 'white';
				aGbInput.style.fontWeight = 'bold';
				tGbInput.removeAttribute('required');
				hGbInput.removeAttribute('required');
				tGbInput.setAttribute('hidden', true);
				hGbInput.setAttribute('hidden', true);
				tGbInput.value = '';
				hGbInput.value = '';
				hvGbInput.value = '';
			}
		}

		function updateHGbValue() {
			var inputValue = parseFloat(hGbInput.value);

			if (isNaN(inputValue) || inputValue === null || inputValue === "") {
				hvGbInput.value = '';
				hGbInput.style.backgroundColor = '';
				hGbInput.style.color = '';
				hGbInput.style.fontWeight = '';
			} else if (inputValue < min_bmtr || inputValue >= max_bmtr) {
				hvGbInput.value = 'NG';
				hGbInput.style.backgroundColor = '#dc3545';
				hGbInput.style.color = 'white';
				hGbInput.style.fontWeight = 'bold';

			} else {
				hvGbInput.value = 'OK';
				hGbInput.style.backgroundColor = '#28a745';
				hGbInput.style.color = 'white';
				hGbInput.style.fontWeight = 'bold';
			}
		}

		// Panggil fungsi untuk menginisialisasi nilai saat halaman dimuat
		updateJGbValue();
		updateHGbValue();

		// Tambahkan event listener pada peristiwa input untuk nilai aGbInput
		aGbInput.addEventListener('input', updateJGbValue);
		hGbInput.addEventListener('input', updateHGbValue);


		// ===========================================
		// question 5
		// ===========================================

		var aRaInput = document.getElementById('a_ra');
		var jRaInput = document.getElementById('j_ra');
		var tRaInput = document.getElementById('t_ra');
		var hRaInput = document.getElementById('h_ra');
		var hvRaInput = document.getElementById('hv_ra');
		var minRaangin = 4;
		var maxRangin = 5;

		function updateJRaValue() {
			var inputValue = parseFloat(aRaInput.value);

			if (isNaN(inputValue) || inputValue === null || inputValue === "") {
				// Jika input kosong, atur nilai jRaInput kosong dan hapus gaya latar belakang
				jRaInput.value = '';
				aRaInput.style.backgroundColor = '';
				aRaInput.style.color = '';
				aRaInput.style.fontWeight = '';
				tRaInput.removeAttribute('required');
				hRaInput.removeAttribute('required');
				tRaInput.setAttribute('hidden', true);
				hRaInput.setAttribute('hidden', true);
			} else if (inputValue < minRaangin || inputValue > maxRangin) {
				jRaInput.value = 'NG';
				// Atur gaya latar belakang menjadi merah
				aRaInput.style.backgroundColor = '#dc3545';
				aRaInput.style.color = 'white';
				aRaInput.style.fontWeight = 'bold';
				tRaInput.removeAttribute('hidden');
				hRaInput.removeAttribute('hidden');
				tRaInput.setAttribute('required', true);
				hRaInput.setAttribute('required', true);
			} else {
				jRaInput.value = 'OK';
				// Atur gaya latar belakang menjadi hijau
				aRaInput.style.backgroundColor = '#28a745';
				aRaInput.style.color = 'white';
				aRaInput.style.fontWeight = 'bold';
				tRaInput.removeAttribute('required');
				hRaInput.removeAttribute('required');
				tRaInput.setAttribute('hidden', true);
				hRaInput.setAttribute('hidden', true);
				tRaInput.value = '';
				hRaInput.value = '';
				hvRaInput.value = '';
			}
		}

		function updateHRaValue() {
			var inputValue = parseFloat(hRaInput.value);

			if (isNaN(inputValue) || inputValue === null || inputValue === "") {
				hvRaInput.value = '';
				hRaInput.style.backgroundColor = '';
				hRaInput.style.color = '';
				hRaInput.style.fontWeight = '';
			} else if (inputValue < minRaangin || inputValue > maxRangin) {
				hvRaInput.value = 'NG';
				hRaInput.style.backgroundColor = '#dc3545';
				hRaInput.style.color = 'white';
				hRaInput.style.fontWeight = 'bold';

			} else {
				hvRaInput.value = 'OK';
				hRaInput.style.backgroundColor = '#28a745';
				hRaInput.style.color = 'white';
				hRaInput.style.fontWeight = 'bold';
			}
		}

		// Panggil fungsi untuk menginisialisasi nilai saat halaman dimuat
		updateJRaValue();
		updateHRaValue();

		// Tambahkan event listener pada peristiwa input untuk nilai aRaInput
		aRaInput.addEventListener('input', updateJRaValue);
		hRaInput.addEventListener('input', updateHRaValue);
	});
</script>