<?php
include("konek.php");
if(isset($_POST['kirim'])){
	//ambil data di database
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$pesan = $_POST['pesan'];

	$sql = "INSERT INTO  tabel_crud (nama, email, pesan) VALUE ('$nama', '$email', '$pesan')";
	$query = mysqli_query($db, $sql);

	if($query){
		header('Location: tampilan.php');
	}else{
		echo 'gagal';
	}
}else{
	die("Akses Ditolak");

}
// Ini untuk melakukan proses pendaftaran atau memasukan data ke database//
// mysqli query untuk mengconect kan/ mengambil query dari data base//

?>