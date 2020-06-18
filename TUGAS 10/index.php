<?php 

require 'functions.php';
$produk=query("SELECT * FROM produk ORDER BY id ASC");


// ketika tombol cari ditekan
if (isset($_POST["cari"])) {
	$produk= cari($_POST["keyword"]);
}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Daftar Produk</title>
</head>
<body>
	<h1>DAFTAR PRODUK</h1>

	<a href="tambah.php">Tambah Produk</a>
	<br><br>
	<form action="", method="POST">
		<input type="text" name="keyword" autofocus size="30" placeholder="Masukkan Keyword Pencarian" autocomplete="off">
		<button type="submit" name="cari"> Cari! </button>
	</form>
	<br>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Nama Produk</th>
			<th>Keterangan</th>
			<th>Harga</th>
			<th>Jumlah</th>
			
		</tr>
		<?php $i=1 ?>
		<?php foreach ($produk as $row): ?>
			<tr> 
				<td><?= $i; ?></td>
				<td>
					<a href="ubah.php?id=<?= $row["id"];  ?>"> Ubah </a> |
					<a href="hapus.php?id=<?= $row["id"];  ?>"onclick="return confirm('yakin?');"> Hapus</a>
				</td>
				<td><?= $row["nama_produk"]; ?></td>
				<td><?= $row["keterangan"]; ?></td>
				<td><?= $row["harga"]; ?></td>
				<td><?= $row["jumlah"]; ?></td>
				
			</tr>
			<?php $i++ ?>
		<?php endforeach; ?>
		
	</table>
</body>
</html>