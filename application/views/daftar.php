<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- SEO Meta Tags -->
	<meta name="description" content="Landing page template built with HTML and Bootstrap 4 for presenting training courses, classes, workshops and for convincing visitors to register using the form.">
	<meta name="author" content="Inovatik">

	<!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" />
	<!-- website name -->
	<meta property="og:site" content="" />
	<!-- website link -->
	<meta property="og:title" content="" />
	<!-- title shown in the actual shared post -->
	<meta property="og:description" content="" />
	<!-- description shown in the actual shared post -->
	<meta property="og:image" content="" />
	<!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" />
	<!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

	<!-- Website Title -->
	<title>Daftar Kelas</title>

	<!-- Styles -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700,700i&display=swap" rel="stylesheet">
	<link href="<?= base_url("assets/daftar/") ?>css/bootstrap.css" rel="stylesheet">
	<link href="<?= base_url("assets/daftar/") ?>css/fontawesome-all.css" rel="stylesheet">
	<link href="<?= base_url("assets/daftar/") ?>css/swiper.css" rel="stylesheet">
	<link href="<?= base_url("assets/daftar/") ?>css/magnific-popup.css" rel="stylesheet">
	<link href="<?= base_url("assets/daftar/") ?>css/styles.css" rel="stylesheet">
	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>


	<!-- Favicon  -->
	<!-- <link rel="icon" href="<?= base_url("assets/home/") ?>images/favicon.png"> -->
</head>

<body data-spy="scroll" data-target=".fixed-top">

	

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">

		<!-- Text Logo - Use this if you don't have a graphic logo -->
		<!-- <a class="navbar-brand logo-text page-scroll" href="<?= base_url("assets/home/") ?>index.html">Corso</a> -->

		<!-- Image Logo -->
		<!-- <a class="navbar-brand logo-image" href="<?= base_url("assets/home/") ?>index.html"><img src="<?= base_url("assets/home/") ?>images/logo.svg" alt="alternative"></a> -->

		<!-- Mobile Menu Toggle Button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-awesome fas fa-bars"></span>
			<span class="navbar-toggler-awesome fas fa-times"></span>
		</button>
		<!-- end of mobile menu toggle button -->

		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<span class="nav-item social-icons">
				<span class="fa-stack">
					<a href="#your-link">
						<i class="fas fa-circle fa-stack-2x"></i>
						<i class="fab fa-facebook-f fa-stack-1x"></i>
					</a>
				</span>
				<span class="fa-stack">
					<a href="#your-link">
						<i class="fas fa-circle fa-stack-2x"></i>
						<i class="fab fa-twitter fa-stack-1x"></i>
					</a>
				</span>
			</span>
		</div>
	</nav>
	<!-- end of navbar -->
	<!-- end of navigation -->


	<!-- Header -->
	<header id="header" class="ex-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="white">Silahkan Isi Data</h1>
					<h1 class="white">Dengan Benar</h1>
				</div>
				<!-- end of col -->
			</div>
			<!-- end of row -->
		</div>
		<!-- end of container -->
	</header>



	<!-- Breadcrumbs -->
	<div class="ex-basic-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<!-- form Daftar -->
					<form class="text-center border border-light p-5" method="post" action="<?php echo base_url() . 'Daftar/tambah_pendaftar'; ?>">
					
					
						<p class="h4 mb-4">Daftar Kelas</p>
						<div class="form-row mb-4">
							<br>
							<small>Nama Anda</small>
							<input type="text" placeholder="Inputkan Nama Lengkap Anda" class="form-control
							form-control-line form-user-input" name="nama_pendaftar" id="nama_pendaftar" required>
							<br><br>
							
						</div>

                        <div class="form-row mb-4">
							<br>
							<small>Email</small>
							<input type="email" placeholder="Inputkan Email Anda" class="form-control
							form-control-line form-user-input" name="email_pendaftar" id="email_pendaftar" required>
							<br><br>
							
						</div>

                        <div class="form-row mb-4">
							<br>
							<small>No WA</small>
							<input type="number" placeholder="Inputkan Nomor Whatsapp Anda" class="form-control
							form-control-line form-user-input" name="no_wa" id="no_wa" required>
							<br><br>
							
						</div>

                        <div class="form-row mb-4">
							<br>
							<small>Alamat</small>
							<input type="textarea" placeholder="Inputkan Alamat Anda" class="form-control
							form-control-line form-user-input" name="alamat_pendaftar" id="alamat_pendaftar" required>
							<br><br>
							
						</div>

                        <div class="form-row mb-4">
							<br>
							<small>Asal Sekolah</small>
							<input type="text" placeholder="Inputkan Asal Sekolah Anda" class="form-control
							form-control-line form-user-input" name="asal_sekolah" id="asal_sekolah" required>
							<br><br>
							
						</div>
                        <div class="form-row mb-4">
							<br>
							<small>Paket Bimbel</small>
							<select name="paket_bimbel" id="paket_bimbel" class="form-control" >
                                <option value="" selected disabled>Pilih Paket</option>
								<?php foreach($kelas as $kls) : ?>
									<option value="<?= $kls->id_kelas ?>"><?= $kls->nama_kelas ?></option>
								<?php endforeach; ?>
                            </select>
							
                            <select hidden name="pembayaran" id="pembayaran" class="form-control" >
                                <option value="SUDAH">SUDAH</option>
                                <option value="BELUM" selected>BELUM</option>
                            </select>
							
						</div>
										<!-- onClick="alert('Daftar Berhasil') -->
						<button class="btn btn-success my-4 btn-block" type="submit">Daftar</button>
						

						
						
				
					</form>
					<!-- form Daftar-->

				</div>
				<!--<div class="col-md-6">-->
				<!--	<div class="jumbotron jumbotron-fluid">-->
				<!--		<div class="container">-->
				<!--			<h3>Pembayaran Maksimal 3 Jam setelah anda melakukan pendaftaran</h3>-->
				<!--			<p class="lead md-4">Apabila dalam 3 jam Pembayaran tidak di lakukan maka data akan kami anggap hangus.</p>-->
				<!--			<strong>Konfirmasi pembayaran dengan mengirimkan foto resi ke admin coding jogja. silahkan klik tombol di bawah <br></strong>-->
				<!--			<a href=" https://api.whatsapp.com/send?phone=085799932124" class="btn btn-success" style="text-decoration: none;">Konfirmasi Pembayaran</a>-->
				<!--		</div>-->
				<!--	</div>-->
				<!--</div>-->
			</div>

		</div>
		<!-- end of container -->
	</div>
	<!-- end of ex-basic-1 -->
	<!-- end of breadcrumbs -->









	<!-- Copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="p-small">copyright © 2020 coding jogja
					</p>
				</div>
				<!-- end of col -->
			</div>
			<!-- enf of row -->
		</div>
		<!-- end of container -->
	</div>
	<!-- end of copyright -->
	<!-- end of copyright -->


	<!-- Scripts -->
	<script src="<?= base_url("assets/home/") ?>js/jquery.min.js"></script>
	<!-- jQuery for Bootstrap's JavaScript plugins -->
	<script src="<?= base_url("assets/home/") ?>js/popper.min.js"></script>
	<!-- Popper tooltip library for Bootstrap -->
	<script src="<?= base_url("assets/home/") ?>js/bootstrap.min.js"></script>
	<!-- Bootstrap framework -->
	<script src="<?= base_url("assets/home/") ?>js/jquery.easing.min.js"></script>
	<!-- jQuery Easing for smooth scrolling between anchors -->
	<script src="<?= base_url("assets/home/") ?>js/jquery.countdown.min.js"></script>
	<!-- The Final Countdown plugin for jQuery -->
	<script src="<?= base_url("assets/home/") ?>js/swiper.min.js"></script>
	<!-- Swiper for image and text sliders -->
	<script src="<?= base_url("assets/home/") ?>js/jquery.magnific-popup.js"></script>
	<!-- Magnific Popup for lightboxes -->
	<script src="<?= base_url("assets/home/") ?>js/validator.min.js"></script>
	<!-- Validator.js - Bootstrap plugin that validates forms -->
	<script src="<?= base_url("assets/home/") ?>js/scripts.js"></script>
	<!-- Custom scripts -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

</body>

</html>
