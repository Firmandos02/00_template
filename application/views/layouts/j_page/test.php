 <!-- START : EXT Datatable -->
 <?php $this->load->view('layouts/ext/datatable.php');
    ?>
 <!-- END : EXT Datatable -->



 <!-- 
// ==========================
// ---- START: EXT Page -----
// ========================== 
-->

 <script>
     // untuk time live di input type
     function updateWaktu() {
         var inputWaktu = document.getElementById('waktuSekarang');
         var sekarang = new Date();
         var jam = sekarang.getHours();
         var menit = sekarang.getMinutes();
         var detik = sekarang.getSeconds();

         // Format waktu sebagai HH:MM:SS
         var waktuFormatted = (jam < 10 ? '0' : '') + jam + ':' +
             (menit < 10 ? '0' : '') + menit + ':' +
             (detik < 10 ? '0' : '') + detik;

         inputWaktu.value = waktuFormatted;
     }

     // Panggil fungsi updateWaktu() setiap detik
     setInterval(updateWaktu, 1000);

     // Panggil updateWaktu() sekali untuk menampilkan waktu awal
     updateWaktu();
 </script>

 <!-- agar tanpa refreesh -->
 <script>
     $(document).ready(function() {
         // Menggunakan jQuery untuk menangani submission form
         $('#myForm').on('submit', function(e) {
             e.preventDefault(); // Mencegah form untuk mengirimkan data secara default

             // Mengambil data form
             var formData = $(this).serialize();

             // Melakukan request AJAX
             $.ajax({
                 type: 'POST', // Metode HTTP yang Anda inginkan (sesuaikan dengan kebutuhan Anda)
                 url: '<?= base_url('cvisco/sub_p1_spray2'); ?>', // URL tujuan form submission
                 data: formData,
                 success: function(response) {
                     // Menampilkan pesan sukses atau kesalahan
                     if (response === 'success') {
                         // Mengatur nilai default untuk input dan select
                         $('#stopwatch1').val('00:00.00'); // Ubah sesuai dengan nilai default yang diinginkan
                         $('#color option:first').prop('selected', true); // Atur nilai select ke nilai default kosong

                         Swal.fire({
                             icon: 'success',
                             title: 'Success!',
                             text: 'Data saved successfully!',
                         }).then(function() {
                             loadTableData();
                         });
                     } else {
                         alert('Terjadi kesalahan: ' + response);

                     }
                 }
             });
         });
     });
 </script>

 <script>
     $(document).ready(function() {
         // Menggunakan jQuery untuk menangani submission form
         $('#myForm2').on('submit', function(e) {
             e.preventDefault(); // Mencegah form untuk mengirimkan data secara default

             // Mengambil data form
             var formData = $(this).serialize();

             // Melakukan request AJAX
             $.ajax({
                 type: 'POST', // Metode HTTP yang Anda inginkan (sesuaikan dengan kebutuhan Anda)
                 url: '<?= base_url('cvisco/sub_p1_spray3'); ?>', // URL tujuan form submission
                 data: formData,
                 success: function(response) {
                     // Menampilkan pesan sukses atau kesalahan
                     if (response === 'success') {
                         // Mengatur nilai default untuk input dan select
                         $('#stopwatch2').val('00:00.00'); // Ubah sesuai dengan nilai default yang diinginkan
                         $('#color option:first').prop('selected', true); // Atur nilai select ke nilai default kosong

                         alert('Data berhasil disimpan!');
                         loadTableData2();
                     } else {
                         alert('Terjadi kesalahan: ' + response);

                     }
                 }
             });
         });
     });
 </script>

 <!-- untuk update table otomatis -->
 <script>
     // Fungsi untuk memuat data tabel secara dinamis
     function loadTableData() {
         $.ajax({
             url: '<?= base_url('cvisco/up_tablep1b2'); ?>', // Ganti dengan URL server yang sesuai
             method: 'GET', // Sesuaikan dengan metode yang sesuai
             dataType: 'json', // Sesuaikan dengan tipe data yang sesuai

             success: function(data) {
                 // Bersihkan isi tabel
                 $('#table-body').empty();

                 // Loop melalui data dan tambahkan baris baru ke tabel
                 $.each(data, function(index, value) {
                     var row = '<tr>';
                     row += '<td class="text-center">' + (index + 1) + '</td>';
                     row += '<td>' + value.tanggal + '</td>';
                     row += '<td class="text-center">' + value.jam.slice(0, 5) + '</td>';
                     row += '<td>Aktual</td>';
                     // cek warna
                     row += '<td class="text-center">' + (value.color === '1' ? value.waktu_cek.slice(-5) : '') + '</td>';
                     row += '<td class="text-center">' + (value.color === '2' ? value.waktu_cek.slice(-5) : '') + '</td>';
                     row += '<td class="text-center">' + (value.color === '3' ? value.waktu_cek.slice(-5) : '') + '</td>';
                     row += '<td class="text-center">' + (value.color === '4' ? value.waktu_cek.slice(-5) : '') + '</td>';
                     row += '<td class="text-center">' + (value.color === '5' ? value.waktu_cek.slice(-5) : '') + '</td>';
                     // akhir cek warna
                     row += '<td class="text-center">' + value.judge + '</td>';
                     row += '<td class="text-center">' + value.perbaikan + '</td>';
                     row += '<td class="text-center">' + value.pic + '</td>';
                     row += '</tr>';

                     // Tambahkan baris ke tabel
                     $('#table-body').append(row);
                 });
             },
             error: function(xhr, status, error) {
                 console.log('Gagal memuat data: ' + error);
             }
         });
     }
 </script>

 <script>
     // Fungsi untuk memuat data tabel secara dinamis
     function loadTableData2() {
         $.ajax({
             url: '<?= base_url('cvisco/up_tablep1b3'); ?>', // Ganti dengan URL server yang sesuai
             method: 'GET', // Sesuaikan dengan metode yang sesuai
             dataType: 'json', // Sesuaikan dengan tipe data yang sesuai

             success: function(data) {
                 // Bersihkan isi tabel
                 $('#tabel2').empty();

                 // Loop melalui data dan tambahkan baris baru ke tabel
                 $.each(data, function(index, value) {
                     var row = '<tr>';
                     row += '<td class="text-center">' + (index + 1) + '</td>';
                     row += '<td>' + value.tanggal + '</td>';
                     row += '<td class="text-center">' + value.jam.slice(0, 5) + '</td>';
                     row += '<td>Aktual</td>';
                     // cek warna
                     row += '<td class="text-center">' + (value.color === '1' ? value.waktu_cek.slice(-5) : '') + '</td>';
                     row += '<td class="text-center">' + (value.color === '2' ? value.waktu_cek.slice(-5) : '') + '</td>';
                     row += '<td class="text-center">' + (value.color === '3' ? value.waktu_cek.slice(-5) : '') + '</td>';
                     row += '<td class="text-center">' + (value.color === '4' ? value.waktu_cek.slice(-5) : '') + '</td>';
                     row += '<td class="text-center">' + (value.color === '5' ? value.waktu_cek.slice(-5) : '') + '</td>';
                     // akhir cek warna
                     row += '<td class="text-center">' + value.judge + '</td>';
                     row += '<td class="text-center">' + value.perbaikan + '</td>';
                     row += '<td class="text-center">' + value.pic + '</td>';
                     row += '</tr>';

                     // Tambahkan baris ke tabel
                     $('#tabel2').append(row);
                 });
             },
             error: function(xhr, status, error) {
                 console.log('Gagal memuat data: ' + error);
             }
         });
     }
 </script>


 <!-- validasi OK atau NG -->

 <script>
     const warnaSelect = document.getElementById('warna');
     const waktucekInput = document.getElementById('waktucek');
     const judgementInput = document.getElementById('judgement');
     const limbahanData = document.querySelectorAll('.limbahan');
     const indikatorHijau = document.getElementById('indikator-hijau');
     const indikatorMerah = document.getElementById('indikator-merah');

     warnaSelect.addEventListener('change', function() {
         const selectedColorId = this.value;
         const selectedLimbahan = [...limbahanData].find(data => data.getAttribute('data-id') === selectedColorId);

         if (selectedLimbahan) {
             const limBott = parseFloat(selectedLimbahan.getAttribute('data-lim-bott'));
             const limUp = parseFloat(selectedLimbahan.getAttribute('data-lim-up'));
             const waktuCek = parseFloat(waktucekInput.value);

             if (!isNaN(waktuCek) && !isNaN(limBott) && !isNaN(limUp)) {
                 if (waktuCek < limBott || waktuCek > limUp) {
                     judgementInput.value = 'NG';
                     indikatorHijau.style.display = 'none';
                     indikatorMerah.style.display = 'block';
                 } else {
                     judgementInput.value = 'OK';
                     indikatorHijau.style.display = 'block';
                     indikatorMerah.style.display = 'none';
                 }
             } else {
                 judgementInput.value = '';
                 indikatorHijau.style.display = 'none';
                 indikatorMerah.style.display = 'none';
             }
         } else {
             judgementInput.value = '';
             indikatorHijau.style.display = 'none';
             indikatorMerah.style.display = 'none';
         }
     });

     waktucekInput.addEventListener('input', function() {
         const selectedColorId = warnaSelect.value;
         const selectedLimbahan = [...limbahanData].find(data => data.getAttribute('data-id') === selectedColorId);

         if (selectedLimbahan) {
             const limBott = parseFloat(selectedLimbahan.getAttribute('data-lim-bott'));
             const limUp = parseFloat(selectedLimbahan.getAttribute('data-lim-up'));
             const waktuCek = parseFloat(this.value);

             if (!isNaN(waktuCek) && !isNaN(limBott) && !isNaN(limUp)) {
                 if (waktuCek < limBott || waktuCek > limUp) {
                     judgementInput.value = 'NG';
                     indikatorHijau.style.display = 'none';
                     indikatorMerah.style.display = 'block';
                 } else {
                     judgementInput.value = 'OK';
                     indikatorHijau.style.display = 'block';
                     indikatorMerah.style.display = 'none';
                 }
             } else {
                 judgementInput.value = '';
                 indikatorHijau.style.display = 'none';
                 indikatorMerah.style.display = 'none';
             }
         } else {
             judgementInput.value = '';
             indikatorHijau.style.display = 'none';
             indikatorMerah.style.display = 'none';
         }
     });
 </script>











 <!-- 
// ==========================
// ---- END: EXT Page -----
// ========================== 
-->