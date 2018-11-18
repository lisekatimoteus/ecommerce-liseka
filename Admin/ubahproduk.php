<h2>Ubah Produk</h2>
<?php 
	$ambil=$conn->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
	$d=$ambil->fetch_assoc();

	// echo "<pre>";
	// print_r($d);
	// echo "<pre>"; 
 ?>

 <form method="POST" enctype="multipart/form-data">
 	<div class="form-group">
 		<label>Nama Produk</label>
 		<input type="text" name="nama" class="form-control" value="<?php echo $d['nama_produk']; ?>">
 	</div>
 	<div class="form-group">
 		<label>Harga Rp</label>
 		<input type="number" name="harga" class="form-control" value="<?php echo $d['harga_produk']; ?>">
 	</div>
 	<div class="form-group">
 		<label>Deskripsi</label>
 		<textarea name="deskripsi" class="form-control" rows="10">
<?php echo $d['deskripsi_produk']; ?>
 		</textarea>
 	</div>
 	<div class="form-group">
 		<img src="../fotoproduk/<?php echo $d['foto_produk']; ?>" width="200">
 	</div>
 	<div class="form-group">
 		<label>Ganti Foto</label>
 		<input type="file" name="foto" class="form-control">
 	</div>
 	<button class="btn btn-primary" name="ubah">Ubah</button>
 </form>

 <?php 
 	if (isset($_POST['ubah'])) 
 	{
 		$namafoto=$_FILES['foto']['name'];
 		$lokasifoto=$_FILES['foto']['tmp_name'];
 		//jika foto dirubah
 		if(!empty($lokasifoto))
 		{
 			move_uploaded_file($lokasifoto,"../fotoproduk/$namafoto");

 			$conn->query("UPDATE produk SET nama_produk='$_POST[nama]',harga_produk='$_POST[harga]',deskripsi_produk='$_POST[deskripsi]',
 			foto_produk='$namafoto' WHERE id_produk='$_GET[id]'");
 		}
 		else
 		{
 			$conn->query("UPDATE produk SET nama_produk='$_POST[nama]',harga_produk='$_POST[harga]',deskripsi_produk='$_POST[deskripsi]'
 		    WHERE id_produk='$_GET[id]'");
 		}
 		echo "<script>alert('Update Berhasil')</script>";
 		echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'>";
 	}
  ?>