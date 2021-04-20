<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	<!-- Goggle Font -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>

	<!-- Font Css -->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Animation Css -->
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.1-web/css/all.css">
</head>
<body>
	<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Selamat datang admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Dasboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#menu">Jumlah Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin1.php">Jumlah Komentar</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="tampilan.php">Tampilan Utama</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
	<div class="col-md-10 p-5 pt-4" >
			<h3>
				<i class="fas fa-tachometer-alt m-3">Dashboard</i>
			</h3><hr>
			<div class="row text-white">
				<div class="card bg-primary m-3" style="width: 18rem;">
			  <div class="card-body">
			    <h5 class="card-title">Jumlah Menu</h5>
			    <div class="display-4">25</div>
			</div>
			</div>
			<div class="card bg-danger m-3" style="width: 18rem;">
			  <div class="card-body">
			    <h5 class="card-title">Jumlah Pesanan</h5>
			    <div class="display-4">127</div>
			  </div>
			</div>
			<div class="card bg-warning text-dark m-3" style="width: 18rem;">
			  <div class="card-body">
			    <h5 class="card-title">List Komentar</h5>
			    <div class="display-4">25 </div>
			  </div>
			</div>
		</div>
		<div class="row mt-4">
			<div class="card m-3 text-white text-center"  style="width: 18rem;">
		  <div class="card-header bg-danger display-4 m-3 pt-4 pb-4">
		    	<i class="fab fa-instagram"></i>
		  </div>
		  <div class="card-body text-danger">
		    <h5 class="card-title">INSTAGRAM</h5>
		    <a href="#" class="btn btn-danger">Go Follow</a>
		  </div>
		</div>
		<div class="card m-3 text-white text-center"  style="width: 18rem;">
		  <div class="card-header bg-primary display-4 m-3 pt-4 pb-4">
		    	<i class="fab fa-facebook"></i>
		  </div>
		  <div class="card-body text-primary">
		    <h5 class="card-title">FACEBOOK</h5>
		    <a href="#" class="btn btn-primary">Go Follow</a>
		  </div>
		</div>
		<div class="card m-3 text-white text-center"  style="width: 18rem;">
		  <div class="card-header bg-success display-4 m-3 pt-4 pb-4">
		    	<i class="fab fa-line"></i>
		  </div>
		  <div class="card-body text-success">
		    <h5 class="card-title">LINE</h5>
		    <a href="#" class="btn btn-success">Go Follow</a>
		  </div>
		</div>
		</div>
		</div>
		</div>
	</div>

	
</div>
</body>
</html>