<h2>Data Produk</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Harga</th>
			<th>Foto</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $x=1; ?>
		<?php $ambil=$conn->query("SELECT * FROM produk"); ?>
		<?php while($d=$ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $x;$x++; ?></td>
			<td><?php echo $d['nama_produk']; ?></td>
			<td>Rp. <?php echo number_format($d['harga_produk']); ?></td>
			<td>
				<img src="../fotoproduk/<?php echo $d['foto_produk']; ?>" width="100">
			</td>
			<td>
				<a href="index.php?halaman=hapusproduk&id=<?php echo $d['id_produk']; ?>" class="btn-danger btn">Hapus</a>
				<a href="index.php?halaman=ubahproduk&id=<?php echo $d['id_produk']; ?>" class="btn btn-warning">Ubah</a>
			</td>
		</tr>
		<?php } ?>

	</tbody>
</table>
<a href="index.php?halaman=tambahproduk" class="btn btn-primary">Tambah Data</a>