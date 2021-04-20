<?php 
include('konek.php');
?>
<!DOCTYPE html>
<!--
	Rocket Internet by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html>
<head>
	<style type="text/css">
		
		.menu{
			width: 100px;
			height: 175px;

		}
	</style>
	<title>Liep's Cofee</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	<!-- Goggle Font -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>

	<!-- Font Css -->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Animation Css -->
	<link rel="stylesheet" href="css/animate.css">

</head>
<body>

</div>
<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#menu">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Image">Image</a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="#Komentar">Komentar</a>
        <li class="nav-item">
          <a class="nav-link" href="admin.php">Admin</a>  
        </li>
      </ul>
    </div>
  </div>
</nav>
	<div id="homeFullScreen" style="background-image: url('1.jpg');">
		<div class="header-text">
			<h1 style="color: yellow;">Liep'S</h1>
			<div class="vertical-line"></div>
			<p style="color: yellow;">
				We put a taste and quality 
				<br />
			</p>
		</div><!-- End HeaderText -->
	</div><!-- End homeFullScreen -->
</header><!-- End Header -->

<!-- Feature -->

<section id="menu" class="feature">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="feature-box">
					<h1 style="color: red;">Menu Drink</h1>
					<p  style="color: black;">There are some drink menu we provideS</p>
				</div>
			</div><!-- End col-md-6 -->
			<div class="col-md-6 col-sm-6 nopadding">
				<img src="5.png">
			</div><!-- End col-md-6 -->

			<div class="clearfix"></div><!-- End clearfix -->

			<div class="col-md-6 col-sm-6 nopadding">
				<img src="11.jpg">
			</div><!-- End col-md-6 -->
			<div class="col-md-6 col-sm-6">
				<div class="feature-box">
					<h1 style="color: navy;">Menu Food</h1>
					<p style="color: black;">There are some Food menu we provide</p>
				</div>
			</div><!-- End col-md-6 -->
		</div>
	</div>
</section>

<!-- portfolio -->

<section id="Image" class="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="heading">Image Menu Food & Drink</h1>
			</div><!-- End col-md-12 -->

			<div class="col-md-4 col-sm-4">
				<img class="menu" src="3.jpg">
			</div><!-- End col-md-4 -->
			<div class="col-md-4 col-sm-4">
				<img class="menu" src="6.jpg">
			</div><!-- End col-md-4 -->
			<div class="col-md-4 col-sm-4 last-img">
				<img class="menu" src="7.jpg">
			</div><!-- End col-md-4 -->

			<div class="clearfix"></div><!-- End clearfix -->

			<div class="col-md-4 col-sm-4">
				<img class="menu" src="12.jpg">
			</div><!-- End col-md-4 -->
			<div class="col-md-4 col-sm-4">
				<img class="menu" src="2.jpg">
			</div><!-- End col-md-4 -->
			<div class="col-md-4 col-sm-4 last-img">
				<img class="menu" src="4.jpg">
			</div><!-- End col-md-4 -->
		</div><!-- End row -->
	</div><!-- End container -->
</section>

<!-- CCRUD FORM -->
<section id="Komentar" class="call-top-action text-center">
	<div class="container">
			<div class="col-md-12">
				<h1 class="heading">Komentar Anda</h1>
			</div>
		<form class="row g-3" method="POST" action="daftar.php">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nama</label>
    <input  name="nama" type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Email</label>
    <input name="email" type="Email" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Pesan</label>
    <input name="pesan" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
     
  <div class="col-12">
    <button name="kirim" type="submit" class="btn btn-primary">Kirim</button>
  </div>
</form>
</section>

<!-- Footer -->
<footer>
	<ul class="in-line">
		<li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
		<li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
		<li><a href="#"><span><i class="fa fa-youtube"></i></span></a></li>
	</ul>
	<span class="copyright">&#169; Untitled . All rights reserved. Design By <a href="http://templatestock.co">Sodiq ircham</a></span>
</footer>
	



<!-- Main JS -->
<script type="text/javascript" src="js/jquery-main.js"></script>

<!-- Bootstrap JS -->
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

<!-- Animation JS -->

<!-- Custom JS -->
<script type="text/javascript" src="js/custom.js"></script>


</body>
</html>