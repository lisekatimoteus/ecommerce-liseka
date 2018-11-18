<?php 
session_start();
//koneksi ke database
$conn = new mysqli("localhost","root","","project");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1" >
	<title>OFF-WHITE HYPE BEAST</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/font-awesome/css/fontawesome-all.css">
	<link rel="stylesheet" type="text/css" href="assets/owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="assets/owlcarousel/assets/owl.theme.default.min.css">	
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/stylee.css">
</head>
<body>


<!-- topbar -->
	<div class="topbar">
		<div class="container">
			<div class="row">
			  <div class="col-md-6 col-md-offset-6">
					<div class="contact">
						<ul>
							<li><i class="fa fa-phone"></i> 00983874929</li>
							<li><i class="fa fa-envelope"></i> offhypeb@gmail.com</li>
							<li><i class="fa fa-map-marker"></i> Medan, Sumatera Utara</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- //topbar -->
	
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
		<img src="fotoproduk/logo.png" width="400" class="img-responsive">
        		</div><br>
				<div class="col-md-6">
					<div class="search">
						<form method="post">
							<div class="form-group">
								<div class="input-group">
									<input type="text" class="form-control">
									<select class="form-control">
										<option value="">Pilih Kategori</option>
										<option value="#">T-Shirt</option>
										<option value="#">Cap</option>
										<option value="#">Hoodie</option>
										<option value="#">Jacket</option>
										<option value="#">Bag</option>
									</select>
									<span class="input-group-btn">
										<button class="btn btn-default">
											<i class="fa fa-search"></i>
										</button>
									</span>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-3">
					<div class="keranjang">
						<div class="btn-group">
							<a href="" class="btn btn-default">
								<i class="fa fa-shopping-bag"></i>
							</a>
							<a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Keranjang </span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- //header -->
	<!-- navbar -->
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Keranjang Belanja</a></li>
					<li><a href="#">CheckOut</a></li>
					<li><a href="#">Produk</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Login</a></li>
					<li><a href="#">Daftar</a></li>
				</ul>	
				
			</div>
		</div>
	</nav>
	<!-- konten -->
	<main class="content">
		<div class="container">
				<div class="row">
					<div class="col-md-9 col-md-push-3">
						<img src="fotoproduk/backk.jpg" width="600" >
					</div>
				</div>
		</div>
	</main>
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-md-push-3">
				<h3 class="text-center">PROMO</h3><br>
				<?php $ambil= $conn->query("SELECT * FROM produk WHERE id_produk<9"); ?>
				<?php while($perproduk=$ambil->fetch_assoc()){ ?>
				<div class="col-md-3">
					<div class="thumbnail">
						<img src="fotoproduk/<?php echo $perproduk['foto_produk']; ?>" class="img-responsive">
							<div class="caption">
								<h4><?php echo $perproduk['nama_produk']?></h4>
								<h5>Rp. <?php echo number_format($perproduk['harga_produk'])?></h5>
								<a href="#?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">Buy</a>
								<a href="detail.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-default">Detail</a>
							</div>
					</div>
				</div>
				<?php } ?>
			</div>
			<br> <br> <br> <br>
			<div class="col-md-3 col-md-pull-9">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">
									<i class="fa fa-bars"></i> Kategori
								</h3>
							</div>
							<div class="list-group">
								<a href="#" class="list-group-item"><i class="fa fa-chevron-circle-right"></i> T-Shirt</a>
								<a href="#" class="list-group-item"><i class="fa fa-chevron-circle-right"></i> Cap</a>
								<a href="#" class="list-group-item"><i class="fa fa-chevron-circle-right"></i> Hoodie</a>
								<a href="#" class="list-group-item"><i class="fa fa-chevron-circle-right"></i> Jacket</a>
								<a href="#" class="list-group-item"><i class="fa fa-chevron-circle-right"></i> Bag</a>
							</div>
						</div>
					</div>
		</div>
	</div>

	<!-- beberapa produk -->
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-md-push-3">
				<?php $ambil= $conn->query("SELECT * FROM produk WHERE id_produk>8 && id_produk<13"); ?>
				<?php while($perproduk=$ambil->fetch_assoc()){ ?>
				<div class="col-md-3">
					<div class="thumbnail">
						<img src="fotoproduk/<?php echo $perproduk['foto_produk']; ?>">
							<div class="caption">
								<h4><?php echo $perproduk['nama_produk']?></h4>
								<h5>Rp. <?php echo number_format($perproduk['harga_produk'])?></h5>
								<a href="#?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">Buy</a>
								<a href="detail.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-default">Detail</a>
							</div>
					</div>
				</div>
				<?php } ?>	
			</div>

			<div class="col-md-3 col-md-pull-9">
					<div class="box-body text-center">
						<img src="fotoproduk/left.jpg" class="img-responsive">
					</div>	
			</div>

			<div class="col-md-9 col-md-push-3">
				<?php $ambil= $conn->query("SELECT * FROM produk WHERE id_produk>12 && id_produk<17"); ?>
				<?php while($perproduk=$ambil->fetch_assoc()){ ?>
				<div class="col-md-3">
					<div class="thumbnail">
						<img src="fotoproduk/<?php echo $perproduk['foto_produk']; ?>">
							<div class="caption">
								<h4><?php echo $perproduk['nama_produk']?></h4>
								<h5>Rp. <?php echo number_format($perproduk['harga_produk'])?></h5>
								<a href="#?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">Buy</a>
								<a href="detail.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-default">Detail</a>
							</div>
					</div>
				</div>
				<?php } ?>
			</div>

			<div class="col-md-3 col-md-pull-9">
					<div class="box-body text-center">
						<img src="fotoproduk/left2.jpg" class="img-responsive" width="235">
					</div>	
			</div>

			<div class="col-md-9 col-md-push-3">
				<?php $ambil= $conn->query("SELECT * FROM produk WHERE id_produk>16 && id_produk<21"); ?>
				<?php while($perproduk=$ambil->fetch_assoc()){ ?>
				<div class="col-md-3">
					<div class="thumbnail">
						<img src="fotoproduk/<?php echo $perproduk['foto_produk']; ?>">
							<div class="caption">
								<h4><?php echo $perproduk['nama_produk']?></h4>
								<h5>Rp. <?php echo number_format($perproduk['harga_produk'])?></h5>
								<a href="#?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">Buy</a>
								<a href="detail.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-default">Detail</a>
							</div>
					</div>
				</div>
				<?php } ?><a href="produk.php" class="btn btn-primary">Lihat Selengkapnya</a>
			</div>

			<div class="col-md-3 col-md-pull-9">
					<div class="box-body text-center">
						<img src="fotoproduk/left1.jpg" class="img-responsive" width="235">
					</div>	
			</div>

			<div class="col-md-3 col-md-pull-9">
				<!-- slider produk terlaris -->
				<div class="box">
					<div class="box-header">
						<!-- <h3 class="box-title text-center">Produk Terlaris</h3> -->
					</div>
					<div class="box-body">
						<div class="owl-carousel slider-produk">
							<div></div>
						</div>
					</div>
				</div>
				<!-- slider produk terlaris -->
			</div>
		</div>

	</div>

	<!-- //beberapa produk -->
<br>
<!-- footer -->
<footer class="footer">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h3 class="footer-title"></h3>
					<img src="fotoproduk/logo.png" width="200" >
				</div>
				<div class="col-md-3">
					<h3 class="footer-title">Pelanggan</h3>
					<ul>
						<li><a href="">Login</a></li>
						<li><a href="">Daftar</a></li>
						<li><a href="">Logout</a></li>
						<li><a href="">Riwayat Belanja</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<h3 class="footer-title">Kontak Kami</h3>
					<ul>
						<li>Telp :+0445034953</li>
						<li>Email: offhypeb.com</li>
						<li>Alamat: Jl.Jamin Ginting,Medan 28885</li>
					</ul>
				</div>
				<div class="col-md-3">
					<h3 class="footer-title">Panduan</h3>
					<ul>
						<li><a href="">Daftar Membership</a></li>
						<li><a href="">Cara Berbalanja</a></li>
						<li><a href="">Konfirmasi Pembayaran</a></li>
						<li><a href="">Syarat & Ketentuan</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			Copyright &copy; <strong>OFF-WHITE HYPEBEAST</strong> All Right Reserved
		</div>
	</div>
</footer>
<!-- //footer -->


<script type="assets/bootstrap/js/jqueryl.js"></script>
<script type="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="assets/owlcarousel/owl.carousel.min.js"></script>
<script type="assets/bootstrap/js/tanisubur.js"></script>
</body>
</html>
