 <script>
 	function showConfirmation() {
 		Swal.fire({
 			title: 'Konfirmasi',
 			text: 'Pastikan Anda sudah menekan tombol save pada ITEM yang di edit.',
 			icon: 'success',
 			showCancelButton: true,
 			confirmButtonColor: '#3085d6',
 			cancelButtonColor: '#d33',
 			confirmButtonText: 'Ya, lanjutkan!'
 		}).then((result) => {
 			if (result.isConfirmed) {
 				// Redirect ke halaman yang diinginkan jika konfirmasi diterima
 				window.location.href = '<?= base_url('Ctrans/data_ch_cek/' . $id_head) ?>';
 			}
 		});
 	}
 </script>

 <script>
 	function validateDecimal(input) {
 		// // Ambil nilai input
 		// var inputValue = input.value;

 		// // Validasi angka decimal
 		// var regex = /^-?\d+(\.\d{0,2})?$/;
 		// if (!regex.test(inputValue)) {
 		// 	// Jika bukan angka decimal, hapus karakter terakhir
 		// 	input.value = inputValue.slice(0, -1);
 		// }
 	}
 </script>