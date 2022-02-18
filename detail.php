<?php require_once("koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
    } ?>
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
<form action="index.php">
<?php       
            include("koneksi.php");           
            $query = mysqli_query($koneksi, "SELECT * FROM tambah WHERE id='$_GET[id]'");
            $data  = mysqli_fetch_array($query);
            
          ?>
            <img src="admin/gambar/<?php echo $data['fileToUpload']; ?>" width="100%" height="80%">
          <div class="container"> 
              <div class="row">
              
                <h1><br><b><?php echo $data['judul']; ?></b></h1>        
              </div>
              <br>
              <div class="row"><h4><b> Jenjang :</b><?php echo $data['jenjang']; ?></h4> </div>
               <div class="row"><h4><b> kelas : </b><?php echo $data['kelas']; ?></h4> </div>
               <div class="row"><h4><b> Pelajaran :</b><?php echo $data['pelajaran']; ?></h4> </div>
               <br><br>
              <div class="row">
                  <h4><?php echo $data['deskripsi']; ?></h4>
               </div>
               <center><button type="submit" class="btn btn-dark">Kembali</button></center>
          </div>
</form>
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