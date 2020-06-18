<?php 
require 'functions.php';

$id=$_GET["id"];


$prod= query("SELECT * FROM produk WHERE id= $id")[0];	

if (isset($_POST["submit"])) {

	if (ubah($_POST)> 0) {
		echo "
		<script>
			alert('data berhasil diubah');
			document.location.href='index.php'
		</script>";
	}else {
		echo "
		<script>
			alert('data gagal diubah');
			document.location.href='index.php'
		</script>";
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Produk</title>
</head>
<body>
<h1>Ubah Data Produk</h1>
<form action=" " method="POST">
	<input type="hidden" name="id" value="<?= $prod["id"];?>">
	<ul>
		<li>
			
			<label for="nama_produk">Nama Produk 			:</label>
			<input type="text" name="nama_produk" id="nama_produk" required value="<?= $prod["nama_produk"];  ?>"> 
		</li> <br>
		<li>
			<label for="keterangan">Keterangan 	 		:</label>
			<input type="text" name="keterangan" id="keterangan" required value="<?= $prod["keterangan"];  ?>"> 
		</li><br>
		<li>
			<label for="harga">Harga  		:</label>
			<input type="text" name="harga" id="harga" required value="<?= $prod["harga"];  ?>"> 
		</li><br>
		<li>
			<label for="jumlah">Jumlah 	:</label>
			<input type="text" name="jumlah" id="jumlah" required value="<?= $prod["jumlah"];  ?>"> 
		</li><br>
		
		<button type="submit" name="submit">Ubah Data!</button>
	</ul>
	
<a href="index.php"> Kembali </a>
</form>
</body>
</html>
