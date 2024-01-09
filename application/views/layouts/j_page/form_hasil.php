<script>
	function bg_hasil(selectElement) {
		// Mendapatkan nilai yang dipilih
		var selectedValue = selectElement.options[selectElement.selectedIndex].value;
		// Mengubah warna latar belakang sesuai dengan nilai yang dipilih
		if (selectedValue === '1') {
			selectElement.style.backgroundColor = '#28a745'; // Hijau untuk OK

		} else if (selectedValue === '2') {
			selectElement.style.backgroundColor = '#FFFF00'; // Merah untuk NG

		} else if (selectedValue === '3') {
			selectElement.style.backgroundColor = '#dc3545'; // Merah untuk NG

		} else {
			selectElement.style.backgroundColor = ''; // Menghapus warna latar belakang jika tidak ada yang dipilih
		}
	}
</script>