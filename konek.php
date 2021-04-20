<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "project_uts";

$db = mysqli_connect($server, $user, $password, $database);

if(!$db){
	die("Gagal menyambungkan : ". mysqli_connect_error());
}
// untuk menghubungkan ke database//
?>