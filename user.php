<?php 
        include("database.php");
        $tampil =tampildata('user');
    ?>
    
<?php
session_start();
if($_SESSION['status']!="login"){
  header("location:login.php?pesan=belumlogin");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Peminjaman</title>
  </head>
  <body>
    
         <div id="layoutSidenav">
         <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <a class="nav-link" href="home.php">
                                home
                            </a>

                  <a class="nav-link" href="user.php">
                             user
                         </a>
                         <a class="nav-link" href="data_barang.php">
                             data barang
                         </a>
                         <a class="nav-link collapsed" href="data_peminjaman.php" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                             
                             Peminjaman
                         </a>
                         <form class="form-inline my-2 my-lg-0">
        
       <a href="logout.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">logout</button></a>
       </form>
                     </div>
                 </div>
             </nav>
         </div>

        
        <!-- $query = "SELECT * FROM user";
        $result = mysqli_query($dbconnect, $query); -->

<div class="container">
  <br>
<h1>List Pengguna</h1>
<br>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">Id_User</th>
      <th scope="col">no_identitas</th>
      <th scope="col">Nama</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Role</th>

    </tr>
  </thead>
  <tbody>
    <?php
      $i = 1;
      foreach($tampil as $row):?>
    <tr>
      <th scope="row"><?php echo $i++; ?></th>
      <td><?php echo $row['id_user']; ?></td>
      <td><?php echo $row['no_identitas']; ?></td>
      <td><?php echo $row['nama']; ?></td>
      <td><?php echo $row['username']; ?></td>
      <td><?php echo $row['password']; ?></td>
      <td><?php echo $row['role']; ?></td>

      <td><a href='edit.php?id=<?php echo $row['id']; ?>' class='btn btn-warning btn-sm'>Edit</a> <a href='delete.php?id=<?php echo $row['id']; ?>' class='btn btn-danger btn-sm'>Hapus</a></td>
    </tr>
    <?php 
    $i++;
      endforeach;
    ?>
  </tbody>
</table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>