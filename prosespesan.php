<?php 
include("koneksi.php");
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$pesann=$_POST['pesann'];

$query=mysqli_query($koneksi, "INSERT INTO pesan value(NULL, '$firstname','$lastname', '$email','$pesann')");
if($query){
		echo "<script>alert('!--Terima Kasih Pesannya ^_^ --!');window.location='contact.php'</script>";
}else{
 		echo "Gagal input data";
 		echo mysqli_error($koneksi);
}

?> 