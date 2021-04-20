<?php
include("konek.php");

if ( !isset($_GET['id'])){
	header('location: index.php');
}

$id = $_GET['id'];
// id dari database//

$sql= "SELECT * FROM tabel_crud WHERE id=$id";
$query= mysqli_query($db, $sql);
$list_cafe= mysqli_fetch_assoc($query);


if (mysqli_num_rows($query) < 1) {
die("Data Tidak ada");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form koment</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container" >
		<form class="row g-3" method="POST" action="proses_edit.php">
			<input type="hidden" name="id" value="<?php echo $list_cafe['id']?>"/>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nama</label>
    <input  name="nama" type="text" class="form-control" id="inputEmail4" value="<?php echo $list_cafe['nama']?>"/>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Email</label>
    <input name="email" type="Email" class="form-control" id="inputPassword4" value="<?php echo $list_cafe['email']?>"/>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Pesan</label>
    <input name="pesan" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" value="<?php echo $list_cafe['pesan']?>"/>
  </div>
     
  <div class="col-12">
    <button name="simpan" type="submit" class="btn btn-primary">Kirim</button>
  </div>
</form>
	</div>
</body>
</html>

