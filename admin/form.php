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
                        <a class="active-menu" href="form.php"><i class="fa fa-edit fa-3x"></i> Upload Materi </a>
                    </li>               
                    
                    <li  >
                        <a  href="table.php"><i class="fa fa-table fa-3x"></i> Pesan</a>
                    </li>             
                    
                  
                </ul>
               
            </div>
            
        </nav>  
        
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Upload</h2>   
                        <h5>Welcome Admi , Love to see you back. </h5>
                       
                    </div>
                </div>
                
                 <hr />
               <div class="row">

                <div class="col-md-12">
                   
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Upload
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                
                                    <form method="post" action="prosesupload.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Judul :</label>
                                            <input class="form-control" name="judul" />
                                        </div>
                                         <div class="form-group">
                                            <label>Deskripsi :</label>
                                            <textarea class="ckeditor" id="ckedtor" name="deskripsi"></textarea>
                                        </div>
                                         <div class="form-group">
                                            <label>Select Jenjang :</label>
                                            <select class="form-control" name="jenjang" id="jenjang">
                                                <option value="1">SD</option>
                                                <option value="3">SMP</option>
                                                <option value="5">SMA</option>
                                                <option value="7">SMK</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Select Kelas :</label>
                                            <select class="form-control" name="kelasss" id="kelasss" >

                                                <option disabled>SD</option>
                                                <option value="10">Kelas 1</option>
                                                <option value="11">Kelas 2</option>
                                                <option value="12">Kelas 3</option>
                                                <option value="13">Kelas 4</option>
                                                <option value="14">Kelas 5</option>
                                                <option value="15">Kelas 6</option>
                                                 <option disabled>SMP</option>
                                                <option value="16">Kelas 7</option>
                                                <option value="17">Kelas 8</option>
                                                <option value="18">Kelas 9</option>
                                                 <option disabled>SMA/SMK</option>
                                                <option value="19">Kelas 10</option>
                                                <option value="20">Kelas 11</option>
                                                <option value="21">Kelas 12</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Select Pelajaran :</label>
                                            <select class="form-control" name="pelajaran">
                                                 <option selected>Choose...</option>
                                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                                    <option value="Matematika">Matematika</option>
                                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                                    <option value="IPA">IPA</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>File input</label>
                                            <input type="file" name="fileToUpload" id="fileToUpload">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal :</label>
                                            <input class="form-control" name="tanggal" value="<?php echo date('l, d-m-Y');?>" />
                                        </div>
                                       
                                        <center>
                                            <input type="submit" name="submit" class="btn btn-default">
                                            <input type="reset" name="reset" class="btn btn-primary">
                                        
                                        </center>

                                    </form>
                                    <br />
                                    <form>

                                 
    </div>
                                
                            
                
    </div>
         
            </div>
         <
        </div>
   
    <script src="assets/js/jquery-1.10.2.js"></script>
      
    <script src="assets/js/bootstrap.min.js"></script>
    
    <script src="assets/js/jquery.metisMenu.js"></script>
      
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
