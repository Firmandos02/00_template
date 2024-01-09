<script>
	function changeBackgroundColor(selectElement) {
		// Mendapatkan nilai yang dipilih
		var selectedValue = selectElement.options[selectElement.selectedIndex].value;
		var tindakanInput = selectElement.closest('tr').querySelector('[name="tindakan[]"]');
		var hasilInput = selectElement.closest('tr').querySelector('[name="hasil[]"]');
		// Mengubah warna latar belakang sesuai dengan nilai yang dipilih
		if (selectedValue === 'OK') {
			selectElement.style.backgroundColor = '#28a745'; // Hijau untuk OK
			tindakanInput.setAttribute('hidden', true);
			hasilInput.setAttribute('hidden', true);
			tindakanInput.removeAttribute('required');
			hasilInput.removeAttribute('required');
			tindakanInput.value = '';
			hasilInput.value = '';

		} else if (selectedValue === 'NG') {
			selectElement.style.backgroundColor = '#dc3545'; // Merah untuk NG
			tindakanInput.removeAttribute('hidden', true);
			hasilInput.removeAttribute('hidden', true);
			tindakanInput.setAttribute('required', true);
			hasilInput.setAttribute('required', true);
		} else {
			selectElement.style.backgroundColor = ''; // Menghapus warna latar belakang jika tidak ada yang dipilih
			tindakanInput.setAttribute('hidden', true);
			hasilInput.setAttribute('hidden', true);
			tindakanInput.removeAttribute('required');
			hasilInput.removeAttribute('required');
			tindakanInput.value = '';
			hasilInput.value = '';
		}

		// Mengatur properti teks menjadi putih dan bold
		selectElement.style.color = 'white';
		selectElement.style.fontWeight = 'bold';
	}
</script>