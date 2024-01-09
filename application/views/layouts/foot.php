	<!-- ============ -->
	<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
	<div class="control-sidebar-bg"></div>
	</div>
	<!-- ./wrapper -->

	<!-- Vendor JS -->
	<script src="<?php echo base_url('assets/edulearn/main-mini-sidebar/'); ?>js/vendors.min.js"></script>
	<script src="<?php echo base_url('assets/edulearn/main-mini-sidebar/'); ?>js/pages/chat-popup.js"></script>
	<script src="<?php echo base_url('assets/edulearn/'); ?>assets/icons/feather-icons/feather.min.js"></script>

	<!-- EduAdmin App -->
	<script src="<?php echo base_url('assets/edulearn/main-mini-sidebar/'); ?>js/template.js"></script>


	<!-- JS untuk kebutuhan interaksi user -->
	<script>
		//  ========================================
		// Start : TIME
		//  ========================================
		// Mendapatkan elemen input dengan ID "search-input"
		var searchInput = document.querySelector('#timenow');

		// Fungsi untuk menampilkan waktu saat ini di placeholder input
		function updatePlaceholder() {
			var now = new Date();
			var hours = now.getHours();
			var minutes = now.getMinutes();
			var seconds = now.getSeconds();
			var formattedTime = hours + ":" + minutes + ":" + seconds;

			searchInput.setAttribute('placeholder', '' + formattedTime);
		}

		// Memanggil fungsi untuk pertama kali
		updatePlaceholder();

		// Memperbarui placeholder setiap detik
		setInterval(updatePlaceholder, 1000); // 1000 milidetik = 1 detik

		function updateCurrentTime() {
			const currentTimeElement = document.getElementById("current-time");
			const currentTime = new Date();
			const hours = currentTime.getHours().toString().padStart(2, "0");
			const minutes = currentTime.getMinutes().toString().padStart(2, "0");
			const seconds = currentTime.getSeconds().toString().padStart(2, "0");
			const newTime = `${hours}:${minutes}:${seconds}`;
			currentTimeElement.textContent = newTime;
		}

		// Panggil fungsi pertama kali untuk memastikan tampilan awal yang benar
		updateCurrentTime();

		// Perbarui waktu setiap detik
		setInterval(updateCurrentTime, 1000);
		//  ========================================
		// END:  TIME
		//  ========================================

		// =====================================
		//  ----- START: JS sweet alert -----
		// =====================================
		<?php if ($this->session->flashdata('success') != null) { ?>
			// Swal.fire({
			// 	icon: 'success',
			// 	title: 'Great!',
			// 	text: '<?php  //echo $this->session->flashdata("success") 
						?>'
			// })
			Swal.fire({
				icon: 'success',
				title: 'Great!',
				text: '<?php echo $this->session->flashdata("success") ?>',
				showConfirmButton: false,
				timer: 1700
			})
		<?php } else if ($this->session->flashdata('error') != null) { ?>
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: '<?= $this->session->flashdata("error") ?>'
			})
		<?php } else if ($this->session->flashdata('warning') != null) { ?>
			Swal.fire({
				icon: 'warning',
				title: 'Great!',
				text: '<?= $this->session->flashdata("warning") ?>'
			})
		<?php } else if ($this->session->flashdata('info') != null) { ?>
			Swal.fire({
				icon: 'info',
				title: 'Hi!',
				text: '<?= $this->session->flashdata("info") ?>'
			})
		<?php } ?>
		// =====================================
		//  ----- END: JS sweet alert -----
		// =====================================
	</script>

	<!-- extend javascript -->
	<?php $this->load->view('layouts/extend_js'); ?>


	<!-- END: BODY -->
	<!-- ============ -->
	</body>

	</html>
