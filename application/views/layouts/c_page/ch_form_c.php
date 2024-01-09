<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> -->

<link href="<?= base_url('assets/css/bootstrap-icons.css'); ?>" rel="stylesheet" crossorigin="anonymous">

<style>
	/* Menetapkan warna teks dan latar belakang untuk opsi yang dinonaktifkan */
	select[name="tindakan[]"] option:disabled {
		color: #a9a9a9;
		/* Warna abu-abu untuk teks */
		background-color: #f5f5f5;
		/* Warna abu-abu untuk latar belakang */
	}

	/* Menetapkan warna teks dan latar belakang untuk opsi yang dinonaktifkan */
	select[name="judge[]"] option:disabled {
		color: #a9a9a9;
		/* Warna abu-abu untuk teks */
		background-color: #f5f5f5;
		/* Warna abu-abu untuk latar belakang */
	}

	/* Menetapkan outline warna kuning untuk elemen select yang belum dipilih */
	select[name="judge[]"]:required:invalid {
		border-color: #ffc107;
		/* Warna kuning untuk outline */
	}

	select[name="tindakan[]"]:required:invalid {
		border-color: #ffc107;
		/* Warna kuning untuk outline */
	}

	select[name="hasil[]"]:required:invalid {
		border-color: #ffc107;
		/* Warna kuning untuk outline */

	}

	input[name="hasil[]"]:required:invalid {
		border-color: #ffc107;
		/* Warna kuning untuk outline */
	}

	input[type="number"]:required:invalid {
		border-color: #ffc107;
		/* Warna kuning untuk outline */
	}

	.chform>thead>tr>td,
	.chform>thead>tr>th {
		padding: 6px;
		vertical-align: middle;
	}

	.chform>tbody>tr>td,
	.chform>tbody>tr>th {
		padding: 6px;
		vertical-align: middle;
	}
</style>