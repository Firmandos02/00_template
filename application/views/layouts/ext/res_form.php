<script>
    // Fungsi untuk mereset input
    function resetForm() {
        document.getElementById("myForm").reset(); // Reset form dengan id "myForm2"
    }

    // Tambahkan event listener untuk tombol "Cancel"
    document.querySelector('#resetform1').addEventListener('click', function() {
        resetForm();
    });
</script>