<?php
include("database.php");
?>
<?php
session_start();
if($_SESSION['status']!="login"){
  header("location:login.php?pesan=belum_login");
}else{

}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
    <title>Hello, world!</title>
  </head>
  <body>
  <?php
    session_start();
    if($_SESSION['status']!="login"){
        header("location:log.php?msg=belum_login");
    }
    ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Data barang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Daftar peminjam</a>
            </li>
          <form class="form-inline my-2 my-lg-0">
           
          <a href="logout.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">logout</button></a>
          </form>
        </div>
      </nav>


      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <center><h1 class="display-4 ">Selamat datang</h1></center>
         <center><p class="lead">Tersedia peminjaman barang</p></center> 
         <center><p class="lead">pakaian dengan berkualiatas bagus</p></center> 
            <center><button type="button" class="btn btn-secondary">Documentation</button></center>
        </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>