<?php 
include("konek.php");
?>

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
          <a class="nav-link active" aria-current="page" href="admin.php">Dasboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#menu">Jumlah Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Image">Jumlah Komentar</a>
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
				<i class="fas fa-tachometer-alt m-3">Jumlah Komentar</i>
			</h3><hr>
			<center>List Pelanggan</center>
	<table class="table caption-top">
  <caption>List of users</caption>
  <thead class="table-success">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Pesan</th>
       <th scope="col">Tindakan</th>
    </tr>
  </thead>
  <tbody>
  
    <?php
    $sql= "SELECT * FROM tabel_crud";
    $query= mysqli_query($db, $sql);
    $no=1;

    while ($list_cafe= mysqli_fetch_array($query)){
    	echo "<tr>";

    	echo "<td>".$no++. "</td>";
    	echo "<td>".$list_cafe['nama']."</td>";
    	echo "<td>".$list_cafe['email']."</td>";
    	echo "<td>".$list_cafe['pesan']."</td>";

    	echo "<td>";
    	echo "<a href='list_edit.php?id=".$list_cafe['id']. " '>edit</a> | ";
    	echo "<a href='hapus.php?id=".$list_cafe['id']. " '>hapus</a> | ";
    	echo "</td>";
    	echo "</tr>";

    }
    ?>
    </tbody>
   </table>

</div>
	<center><p>Total : <?php echo mysqli_num_rows($query) ?></p></center>
</div>

</div>

</body>
</html>

  </tbody>
</table>
		</div>
	</div>

	
</div>
</body>
</html>