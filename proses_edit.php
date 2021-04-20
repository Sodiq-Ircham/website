<?php

include("konek.php");
if(isset($_POST['simpan'])){

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$pesan = $_POST['pesan'];

	$sql = "UPDATE tabel_crud SET nama='$nama', email='$email', pesan='$pesan' WHERE id=$id ";
	$query = mysqli_query($db, $sql);

	if ($query) {
	     header('Location: index.php');
	} else {
		die ( 'gagal');

	}


}else{
	die("akses dilarang");
}
// hampir sama seperti daftar.php akan tetapi tedapat where id=$id untuk mengambil data yang ada di database//

?>