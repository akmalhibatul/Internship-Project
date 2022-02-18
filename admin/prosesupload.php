<?php
include("koneksi.php");
$target_dir = "gambar/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
	$judul=$_POST['judul'];
	$deskripsi=$_POST['deskripsi'];
	$jenjang=$_POST['jenjang'];
	$kelasss=$_POST['kelasss'];
	$pelajaran=$_POST['pelajaran'];
    $fileToUpload=$_FILES['fileToUpload'];
    $tanggal=$_POST['tanggal'];


    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

if ($_FILES["fileToUpload"]["size"] > 1000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $namafile = basename( $_FILES["fileToUpload"]["name"]);
        echo "The file ". $namafile . " has been uploaded.";

        $query = "insert into tambah value(NULL, '$judul','$deskripsi', '$jenjang', '$kelasss',
        '$pelajaran', '$namafile', '$tanggal')";
        echo $query;
        $query=mysqli_query($koneksi, $query);
		if($query){
				echo "<script>alert('!--Anda Berhasil upload--!');window.location='materi2.php'</script>";
		}else{
		 		echo "Gagal input data";
		 		echo mysqli_error($koneksi);
		}
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
