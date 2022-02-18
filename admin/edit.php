<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:../LOGIN/index.php'); 
} else { 
   $username = $_SESSION['username']; 
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet" />

    <link href="assets/css/font-awesome.css" rel="stylesheet" />

    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />

    <link href="assets/css/custom.css" rel="stylesheet" />

   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">Selamat Datang <b><?php echo $username; ?>  </b><a href="../login/logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>
                
                    
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-qrcode fa-3x"></i> Daftar Materi<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                           <li>
                                <a href="materi2.php">Semua Jenjang</a>
                            </li>
                            <li>
                                <a href="materi.php?jenjang=1">SD</a>
                            </li>
                            <li>
                                <a href="materi.php?jenjang=3">SMP</a>
                            </li>
                            <li>
                                <a href="materi.php?jenjang=5">SMA</a>
                            </li>
                            <li>
                                <a href="materi.php?jenjang=7">SMK</a>
                            </li>
                        </ul>
                      </li>  
                    
                    <li  >
                        <a href="form.php"><i class="fa fa-edit fa-3x"></i> Upload Materi </a>
                    </li>               
                    
                    <li  >
                        <a  href="table.php"><i class="fa fa-table fa-3x"></i> Pesan</a>
                    </li>             
                    
                  
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Upload</h2>   
                        <h5>Welcome Admi , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">

                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Upload
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                
                                    <form method="post" action="simpan.php" enctype="multipart/form-data">
                                        <?php 
                                        include("koneksi.php");
                                        $id=$_GET['id'];
                                        $query=mysqli_query($koneksi,"SELECT * FROM tambah WHERE id='$id'");
                                        while($row=mysqli_fetch_array($query)){
                                         ?>
                                        <input type="hidden"  name="id" value="<?php echo $row['id'];?>"/>

                                        <div class="form-group">
                                            <label>Judul :</label>
                                            <input class="form-control" name="judul" id="judul" value="<?php echo $row['judul']; ?>" />
                                        </div>
                                         <div class="form-group">
                                            <label>Deskripsi :</label>
                                            <textarea class="ckeditor" id="ckedtor" name="deskripsi"><?php echo $row['deskripsi']; ?></textarea>
                                        </div>
                                         <div class="form-group">
                                            <label>Select Jenjang :</label>
                                            <?php $jenjang= $row['jenjang']; ?>
                                            <select class="form-control" name="jenjang" id="jenjang" >
                                                <option <?php echo ($jenjang == 'SD') ? "selected": "" ?>>SD</option>
                                                <option <?php echo ($jenjang == 'SMP') ? "selected": "" ?>>SMP</option>
                                                <option <?php echo ($jenjang == 'SMA') ? "selected": "" ?>>SMA</option>
                                                <option <?php echo ($jenjang == 'SMK') ? "selected": "" ?>>SMK</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Select Kelas :</label>
                                            <?php $kelas= $row['kelas']; ?>
                                            <select class="form-control" name="kelasss" id="kelasss" >

                                                <option disabled>SD</option>
                                                <option <?php echo  ($kelas == 'value="10" ') ? "selected": "" ?>>Kelas 2</option>
                                                <option <?php echo  ($kelas == 'value="11" ') ? "selected": "" ?>>Kelas 2</option>
                                                <option <?php echo  ($kelas == 'value="12" ') ? "selected": "" ?>>Kelas 3</option>
                                                <option <?php echo  ($kelas == 'value="13" ') ? "selected": "" ?>>Kelas 4</option>
                                                <option <?php echo  ($kelas == 'value="14" ') ? "selected": "" ?>>Kelas 5</option>
                                                <option <?php echo  ($kelas == 'value="15" ') ? "selected": "" ?>>Kelas 6</option>
                                                 <option disabled>SMP</option>
                                                <option <?php echo  ($kelas == 'value="16" ') ? "selected": "" ?>>Kelas 7</option>
                                                <option <?php echo  ($kelas == 'value="17" ') ? "selected": "" ?>>Kelas 8</option>
                                                <option <?php echo  ($kelas == 'value="18" ') ? "selected": "" ?>>Kelas 9</option>
                                                 <option disabled>SMA/SMK</option>
                                                <option <?php echo  ($kelas == 'value="19" ') ? "selected": "" ?>>Kelas 10</option>
                                                <option <?php echo  ($kelas == 'value="20" ') ? "selected": "" ?>>Kelas 11</option>
                                                <option <?php echo  ($kelas == 'value="21" ') ? "selected": "" ?>>Kelas 12</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Select Pelajaran :</label>
                                            <?php $pelajaran= $row['pelajaran']; ?>
                                            <select class="form-control" name="pelajaran" id="pelajaran">
                                                 <option selected >Choose...</option>
                                                    <option <?php echo ($pelajaran == 'Bahasa Indonesia') ? "selected": "" ?>>Bahasa Indonesia</option>
                                                    <option <?php echo ($pelajaran == 'Matematika') ? "selected": "" ?>>Matematika</option>
                                                    <option <?php echo ($pelajaran == 'Bahasa Inggris') ? "selected": "" ?>>Bahasa Inggris</option>
                                                    <option <?php echo ($pelajaran == 'IPA') ? "selected": "" ?>>IPA</option>
                                            </select>
                                        </div>

                                         <div class="form-group">
                                            <label>Tanggal :</label>
                                            <input class="form-control" name="tanggal" id="tanggal" value="<?php echo $row['tanggal']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Gambar :</label>
                                            <img src="gambar/<?php echo $row['fileToUpload']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
                                            <input type="file" name="fileToUpload" id="fileToUpload">
                                            <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk</i>
                                        </div>
                                        <?php 
                                    }
                                         ?>
                                       
                                        <center>
                                            <input type="submit" name="Upadate" class="btn btn-primary">
                                            <input type="reset" name="reset" class="btn btn-default">
                                        
                                        </center>

                                    </form>
                                    <br />
                                    <form>

                                 
    </div>
                                
                
    </div>
 
            </div>
  
        </div>
    
    <script src="assets/js/jquery-1.10.2.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>
   
    <script src="assets/js/jquery.metisMenu.js"></script>

    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
