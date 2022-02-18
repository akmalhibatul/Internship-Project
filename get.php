<?php require_once("koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
    }
$get_jenjang = $_GET['jenjang'];
switch ($get_jenjang) {
  case 'SD':
    $get_jenjang_query = 'SD';
    break;
  case 'SMP':
    $get_jenjang_query = 'SMP';
    break;

  case 'SMA':
    $get_jenjang_query = 'SMA';
    break;

  case 'SMK':
    $get_jenjang_query = 'SMK';
    break;
  default:
    $get_jenjang_query = 'SD';
    break;
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Project | PKL</title>
  </head>
  <style type="text/css">
    .kotak .container{
      margin-top: 50px;
      font-family: arial;
    }
    .kotak{
      width: 100%;
      height: 250px;
      background-color: #343a40 ;
      color: white;
    }
    .col{
      margin-top: 25px;
    }
    footer {
      background-color: #2d3237;
      color: white;
      height: 50px;
    }
  </style>
  <body>

<section class="atas" id="atas">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Rumah Belajar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Jenjang
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         <a class="dropdown-item" href="get.php?jenjang=SD">SD</a>
          <a class="dropdown-item" href="get.php?jenjang=SMP">SMP</a>
          <a class="dropdown-item" href="get.php?jenjang=SMA">SMA</a>
           <a class="dropdown-item" href="get.php?jenjang=SMK">SMK</a>
        </div>
      </li>
      
      <li class="nav-item ">
        <a class="nav-link" href="contact.php">Kritik/Saran</a>
      </li>
    </ul>
     <?php 
                          if (isset($_SESSION['username'])) {
                            echo '<a href="Login/logout.php" class="navbar-brand mb-0 h1 inline">Logout</a>';
                          }else{
                            echo '<a href="Login/index.php" class="navbar-brand mb-0 h1 inline">Login</a>';
                          }
                           ?>
  </div>
</nav>

</section>
<img src="admin/gambar/banner.png" width="100%">
<section class="tengah" id="tengah">
  <div class="container">
    
    <br>
    <h1>
      jenjang
      <?php 
       echo $get_jenjang;
       ?>
  
</h1>


    <br>

    <div class="row justify-content-center">

      <div class="row justify-content-center">
         <?php
        include("koneksi.php");


        $sql = mysqli_query($koneksi, "SELECT * FROM tambah WHERE `jenjang` LIKE '$get_jenjang_query' ORDER BY id DESC limit 6");
        while($data = mysqli_fetch_array($sql)){
        ?>
        
    <div class="col-md  ">
      <div class="card" style="width: 18rem;">
        <img src="admin/gambar/<?php echo $data['fileToUpload']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <center><h5 class="card-title"><a href="detail.php?id=<?php echo $data['id']; ?>"><?php echo $data['judul']; ?></a></h5></center>
    <p class="card-text" id="text" ><?php 
                                $string = $data['deskripsi'];
                                if(strlen($string) > 128) $string = substr($string, 0, 128).'...';
                                echo strip_tags($string); ?></p>
    <p class="card-text" style="float: left"><large class="text-muted"><?php echo $data['pelajaran']; ?>&nbsp;&nbsp;-<?php echo $data['jenjang']; ?></large></p>
  </div>
  <div class="card-footer"><p class="tanggal" style="float: left; color : grey;"><?php echo $data['tanggal']; ?></p></div>
</div>
    </div>
    <?php   
              }
              
              
              ?>
    </div>


  </div>
      
    </div>
  </div>


</section>
<section id="paling bawah" class="paling bawah">
  <div class="kotak">
    <div class="container">
      
        <div class="row">
            <div class="col">
                <h5><b>Tentang Rumah belajar</b></h5>
                <p>Rumah belajar adalah website pembelajaran berdasarkan Jenjang pendidikan yang ada di  indonesia</p>
            </div>
            <div class="col">
                <h5><b>Kontak Kami</b></h5>
                <p>info@rumahbelajar.com<br> Telp : (021) 03082003 <br> WA : +62 82132496655</p>
                
            </div>
            <div class="col">
                <h5><b>Follow Us</b></h5>
                <a href=""><i class="fa fa-facebook-square" style="font-size:72px;color: #0d0d0d"></i></a>
                <a href=""><i class="fa fa-instagram" style="font-size:72px;color: #0d0d0d"></i></a>
                <a href=""><i class="fa fa-twitter-square" style="font-size:72px;color: #0d0d0d"></i></a>
            </div>

        </div>

      </div>
        
      
    </div>
    <footer>
      <center><p>Copyright 2020 &copy; Rumah Belajar. All Right Reserved.</p></center>
    </footer>
</section>





    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>