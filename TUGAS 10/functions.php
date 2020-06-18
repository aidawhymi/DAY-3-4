<?php 

$conn= mysqli_connect("localhost", "root", "", "arkademy");


function query($query){ 
	global $conn;
	$result= mysqli_query($conn, $query);
	$rows= [];
	while ($row= mysqli_fetch_assoc($result) ) {
		$rows[]= $row;
	}
	return $rows;
}

function tambah($data){
	global $conn;
	
	$nama_produk= htmlspecialchars($data["nama_produk"]); 
	$keterangan= htmlspecialchars($data["keterangan"]);
	$harga= htmlspecialchars($data["harga"]);
	$jumlah= htmlspecialchars($data["jumlah"]);
	
	
	$query = "INSERT INTO produk
				VALUES
				('','$nama_produk', '$keterangan', '$harga', '$jumlah')

	";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}

function hapus ($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM produk WHERE id=$id");
	return mysqli_affected_rows($conn);
}

function ubah($data){
	global $conn;
	$id= $data["id"];

	$nama_produk= htmlspecialchars($data["nama_produk"]); 
	$keterangan= htmlspecialchars($data["keterangan"]);
	$harga= htmlspecialchars($data["harga"]);
	$jumlah= htmlspecialchars($data["jumlah"]);
	

	$query = "UPDATE produk SET
				nama_produk= '$nama_produk',
				keterangan= '$keterangan',
				jumlah = '$jumlah',
				harga = '$harga'
				WHERE id = $id
				";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
 }

 function cari($keyword){
 	$query =" SELECT * FROM produk
 				WHERE
 				-- like itu bisa buat ganti =. kalau pakai = nilainya harus sama persis
 				-- kalau LIKE nyari yg mirip2
 				-- pake % diakhir variable buat nampilin semua nilai/nama yg mirip2
 				-- %dibelakang variable buat nampilin nama apa aja dari depan
 				-- % di depan variable nampilin nama dari belakang
 				nama_produk LIKE '%$keyword%' OR
 				keterangan LIKE '%$keyword%' OR
 				jumlah LIKE '%$keyword%' OR
 				harga LIKE '%$keyword%'
 				" ;
 	return query($query);
 }
 ?>
