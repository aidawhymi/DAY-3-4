<?php 
require 'functions.php';

if (isset($_POST["submit"])) {

	if (tambah($_POST)> 0) {
		echo "
		<script>
			alert('data berhasil ditambahkan');
			document.location.href='index.php'
		</script>";
	}else {
		echo "
		<script>
			alert('data gagal ditambahkan');
			document.location.href='index.php'
		</script>";
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Produk</title>
</head>
<body>
<h1>Tambah Produk</h1>
<form action=" " method="POST">
	<ul>
		<li>
			
			<label for="nama_produk">Nama Produk 			:</label>
			<input type="text" name="nama_produk" id="nama_produk" required> 
		</li> <br>
		<li>
			<label for="keterangan">Keterangan 	 		:</label>
			<input type="text" name="keterangan" id="keterangan" required> 
		</li><br>
		<li>
			<label for="harga">Harga  		:</label>
			<input type="text" name="harga" id="harga" required> 
		</li><br>
		<li>
			<label for="jumlah">Jumlah 	:</label>
			<input type="text" name="jumlah" id="jumlah" required> 
		</li><br>
		
		<button type="submit" name="submit">Tambah Data!</button>
	</ul>
	
<a href="index.php"> Kembali </a>
</form>
</body>
</html>
