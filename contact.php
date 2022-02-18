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
  body{
    font-family: arial;
  }
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc; 
  border-radius: 4px; 
  box-sizing: border-box;
  margin-top: 6px; 
  margin-bottom: 16px; 
  resize: vertical 
}
input[type=email], select, textarea {
  width: 100%; 
  padding: 12px; 
  border: 1px solid #ccc; 
  border-radius: 4px;
  box-sizing: border-box; 
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical 
}


input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  
}


input[type=submit]:hover {
  background-color: #45a049;
}



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
      <li class="nav-item ">
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

      <li class="nav-item active">
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

<img src="admin/gambar/banner.png" width="100%">

  <div class="container">
    <br>
    <h1>Kritik/Saran</h1>
    <br>
  <form action="prosespesan.php" method="post">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="lname">Email</label>
    <input type="email" id="lname" name="email" placeholder="Your Email..">

    <label for="pesann">Pesan</label>
    <textarea id="pesann" name="pesann" placeholder="Tulis Pesan.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
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

<?php 
$conn = 
 ?>