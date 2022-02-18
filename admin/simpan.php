<?php

include 'koneksi.php';
  $id=$_POST['id'];
  $judul=$_POST['judul'];
  $deskripsi=$_POST['deskripsi'];
  $jenjang=$_POST['jenjang'];
  $kelasss=$_POST['kelasss'];
  $pelajaran=$_POST['pelajaran'];  
  $fileToUpload=$_FILES['fileToUpload']['name'];
  $tanggal=$_POST['tanggal'];

  if($fileToUpload != "") {
    $ekstensi_diperbolehkan = array('png','jpg','jpeg'); 
    $x = explode('.', $fileToUpload);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['fileToUpload']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$fileToUpload; 
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); 

                  $query  = mysqli_query($koneksi,"UPDATE `tambah` SET `judul`='$judul',`deskripsi`='$deskripsi',`jenjang`='$jenjang',`kelas`='$kelasss',`pelajaran`='$pelajaran',`fileToUpload`='$nama_gambar_baru',`tanggal`='$tanggal' WHERE id='$id'");
                   
                    if(!$query){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      
                      echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
                    }
              } else {     
              
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, png atau jpeg.');window.location='index.php';</script>";
              }
    } 
    else {
     
      $query  = mysqli_query($koneksi,"UPDATE `tambah` SET `judul`='$judul',`deskripsi`='$deskripsi',`jenjang`='$jenjang',`kelas`='$kelasss',`pelajaran`='$pelajaran',`tanggal`='$tanggal' WHERE id='$id'");
      
      if(!$query){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
        
          echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
      }
    }








?>



