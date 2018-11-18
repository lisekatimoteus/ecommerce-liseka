<?php 

	$ambil=$conn->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
	$d=$ambil->fetch_assoc();
	$fotoproduk=$d['foto_produk'];
	if(file_exists("../fotoproduk/$fotoproduk"))
	{
		unlink("../fotoproduk/$fotoproduk");
	}

	$conn->query("DELETE FROM produk WHERE id_produk='$_GET[id]'");

	echo "<script>alert('Produk Terhapus');</script>";
	echo "<script>location='index.php?halaman=produk'</script>";
 ?>