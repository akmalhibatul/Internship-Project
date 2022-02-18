<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:../LOGIN/index.php'); 
} else { 
   $username = $_SESSION['username']; 
}
$get_jenjang = $_GET['jenjang'];
switch ($get_jenjang) {
  case 'SD':
    $get_jenjang_query = 1;
    break;
  case 'SMP':
    $get_jenjang_query = 3;
    break;

  case 'SMA':
    $get_jenjang_query = 5;
    break;

  case 'SMK':
    $get_jenjang_query = 7;
    break;
  default:
    $get_jenjang_query = 1;
    break;
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
font-size: 16px;">Selamat Datang <b><?php echo $username; ?></b>  <a href="../login/logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
         
            <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>
                
                    
                    <li>
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a  class="active-menu" href="#"><i class="fa fa-qrcode fa-3x"></i> Daftar Materi<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="materi2.php">Semua Jenjang</a>
                            </li>
                            <li>
                                <a href="materi.php?jenjang=SD">SD</a>
                            </li>
                            <li>
                                <a href="materi.php?jenjang=SMP">SMP</a>
                            </li>
                            <li>
                                <a href="materi.php?jenjang=SMA">SMA</a>
                            </li>
                            <li>
                                <a href="materi.php?jenjang=SMK">SMK</a>
                            </li>
                        </ul>
                      </li>  
                    
                    <li  >
                        <a  href="form.php"><i class="fa fa-edit fa-3x"></i> Upload Materi </a>
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
                     <h2>Daftar Materi</h2>   
                        <h4>jenjang
      <?php 
       echo $get_jenjang;
       ?></h4>
                       
                    </div>
                </div>
              
                 <hr />
                                 
            <div class="row">
                <?php 
                include("koneksi.php");
               $sql = mysqli_query($koneksi, "SELECT * FROM tambah WHERE `jenjang` LIKE '$get_jenjang' ORDER BY id");
                while($data=mysqli_fetch_array($sql)){
                    switch ($data['jenjang']) {
              case '1':
                $jenjang = "SD";
                break;
              case '3':
                $jenjang = "SMP";
                break;
              case '5':
                $jenjang = "SMA";
                break;
              
              case '7':
                $jenjang = "SMK";
                break;

              default:
                $jenjang = "Belum Ada Jenjang";
                break;
            }
                 ?>
                
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <img src="gambar/<?php echo $data['fileToUpload']; ?>" width="100%">
                        </div>
                        <div class="panel-body">
                            <h3><?php echo $data['judul']; ?></h3>
                            <p><?php 
                                $string = $data['deskripsi'];
                                if(strlen($string) > 128) $string = substr($string, 0, 128).'...';
                                echo strip_tags($string); ?></p>
                                <p class="card-text"><large class="text-muted"><?php echo $data['pelajaran']; ?>&nbsp;&nbsp;-<?php echo $jenjang; ?></large></p>
                        </div>
                        <div class="panel-footer">
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger" align="right">Hapus</a>
                        </div>
                    </div>
                </div>
                <?php 
            }
                 ?>
                  

    </div>
           
            </div>
         
        </div>
    
    <script src="assets/js/jquery-1.10.2.js"></script>
 
    <script src="assets/js/bootstrap.min.js"></script>
    
    <script src="assets/js/jquery.metisMenu.js"></script>
   
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
