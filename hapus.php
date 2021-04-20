<?php

include("konek.php");

if(isset($_GET['id'])){

	$id=$_GET['id'];

	$sql="DELETE FROM tabel_crud WHERE id=$id";
	$query=mysqli_query($db, $sql);

	if($query){

		header('Location: admin.php');

	}else{
		die("Data tidak ada");
	}
}else{
	echo 'data tidak ada';
}



?>