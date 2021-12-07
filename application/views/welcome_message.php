<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<title>index</title>
</head>

<body>
	<!-- As a heading -->
	<nav class="navbar navbar-light bg-light pb-3">
		<div class="container">
			<div class="row">
				<div class="col">
					<img src="<?= base_url('assets/img/brand/pekanbaru.png') ?>" class="img img-responsive" width="42" height="55" alt="">
					<strong class="text-indigo ml-3">KELURAHAN KAMPUNG MELAYU</strong>
				</div>
			</div>
			<div class="row">
				<h6>
					<a class="text-secondary" href="<?= base_url('auth/') ?>">Login</a>
				</h6>
			</div>
		</div>
	</nav>

	<!-- body -->

	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<div class="row">
				<div class="container">
					<h6 class="mb-3">Infografis</h6>
					<img class="mb-3" src="<?= base_url('assets/img/brand/KEPENDUDUKAN.png') ?>" width="300" alt="">
					<br>
					<h6">KELURAHAN KAMPUNG MELAYU</h6>
				</div>
			</div>
		</div>
	</div>

	<div class="jumbotron jumbotron-fluid mt-3">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 pl-3 " data-aos="zoom-in-left">
					<div class="container">
						<div class="row d-flex justify-content-center">
							<img src="<?= base_url('assets/img/brand/geo.png') ?>" width="300px" alt="gambar tidak ditemukan" srcset="">
							<!-- <h3>RW : <?= $jumlahRw["jumlahRw"] ?></h3> -->
						</div>
					</div>

					Kelurahan Kampung Melayu dibentuk atas dasar pemekaran wilayah dari Kelurahan Jadirejo Kecamatan Sukajadi pada Tahun 1963 dan merupakan salah satu kelurahan yang ada di Kecamatan Sukajadi Kota Pekanbaru yang terletak ditengah-tengah Kota Pekanbaru dengan batas wilayah sebagai berikut :

					<ol>
						<li>Sebelah Utara berbatas dengan Kelurahan Wonorejo Kecamatan Marpoyan Damai</li>
						<li>Sebelah Selatan bebatas dengan Kelurahan Harjosari dan Kelurahan Kedung Sari Kecamatan Sukajadi</li>
						<li>Sebelah Timur berbatas dengan Kelurahan Kampung Tengah Kecamatan Sukajadi</li>
						<li>Sebelah Barat berbatas dengan Kelurahan Labuh Baru Timur Kecamatan Payung Sekaki</li>
					</ol>
					Bila dilihat dari luas wilayah kelurahan Kampung Melayu Kecamatan Sukajadi lebih kurang 0,99 KM², Jumlah penduduk menurut Data Penduduk per Desember 2016 adalah 9.454 Orang.
				</div>
				<div class="col-xl-4" data-aos="zoom-in-left">
					<h6 class="row ml-3">Jumlah Penduduk Kampung Melayu</h6>
					<div class="row ml-3">
						<h2 class="text-danger"><?= $jumlahSeluruhPenduduk['jumlahKeseluruhan'] ?></h2>
						<h5 class="mt-2 ml-2">Jiwa</h5>
					</div>

					<div class="container">
						<img src="<?= base_url('assets/img/brand/man_icon.png') ?>" alt="" srcset="">
						Laki-Laki <?= round($laki["jenkel"] / $jumlahSeluruhPenduduk['jumlahKeseluruhan'] * (100 / 100)) ?>%
					</div>
					<br>
					<div class="container">
						<img class="mt-0" src="<?= base_url('assets/img/brand/woman_icon.png') ?>" alt="" srcset="">
						Perempuan <?= round($perempuan["jenkel"] / $jumlahSeluruhPenduduk['jumlahKeseluruhan'] * (100 / 100)) ?>%
					</div>
					<br>
					<div class="container">
						<img class="mt-0" src="<?= base_url('assets/img/brand/woman_icon.png') ?>" alt="" srcset="">
						WNI <?= round($jumlahWni["wni"] / $jumlahSeluruhPenduduk['jumlahKeseluruhan'] * (100 / 100)) ?>%
					</div>
					<br>
					<div class="container">
						<img class="mt-0" src="<?= base_url('assets/img/brand/woman_icon.png') ?>" alt="" srcset="">
						WNA <?php if ($jumlahWna["wna"] < 0) : ?>
							0
						<?php else : ?>
							<?= round($jumlahWna["wna"] / $jumlahSeluruhPenduduk['jumlahKeseluruhan'] * (100 / 100)) ?>
						<?php endif; ?>
						%
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Optional JavaScript; choose one of the two! -->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script>
		AOS.init();
	</script>
	<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>