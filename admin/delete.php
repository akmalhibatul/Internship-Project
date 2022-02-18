<?php 
	include("koneksi.php");
	$id=$_GET['id'];
	$query=mysqli_query($koneksi,"DELETE FROM tambah WHERE id='$id'");
	if ($query) {
		?><script language="javascript">document.location.href="index.php";</script><?php
	}else{
		echo "Gagal input";
		echo mysqli_error($koneksi);
	}
 ?>
 