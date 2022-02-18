<?php 
$host = "localhost";
$user = "root";
$password = "";

$koneksi = mysqli_connect($host,$user,$password);
if ($koneksi) {
	echo"Berhasil";
}else{
	mysqli_error($koneksi);
 }
 ?>
