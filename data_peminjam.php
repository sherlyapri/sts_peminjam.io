<?php
require_once ('database.php');
$tampil =tampildata('peminjam');
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
           
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!-- <div class="sb-sidenav-menu-heading">Interface</div> -->
                            <a class="nav-link" href="home.php">
                                home
                            </a>
                            <a class="nav-link" href="user.php">
                                user
                            </a>
                            <a class="nav-link" href="data_barang.php">
                                data barang
                            </a>
                            <a class="nav-link collapsed" href="data_peminjam.php" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                
                                Peminjaman
                            </a>
                    
           
          <a href="logout.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">logout</button></a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">peminjam</h1>
                        <br>
                        <div class="row">
        
                        <div class="card mb-4 w-100">
                            <div class="card-header">
                                <!-- Button trigger modal -->
                                <a href="tambahbarang.php" class="btn btn-primary">Tambah</a>
                            </div>
                            <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>id_peminjam</th>
                                            <th>tgl_peminjam</th>
                                            <th>tgl_kembali</th>
                                            <th>no_identitas</th>
                                            <th>nama</th><
                                            <th>kode_barang</th>
                                            <th>nama_barang</th>
                                            <th>jumlah</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no =1;
                                        foreach ($tampil as $data):?>
                                        <tr>
                                            <td><?php echo $no;?></td>
                                            <td><?php echo "$data[tgl_peminjam]";?></td>
                                            <td><?php echo "$data[tgl_kembali]";?></td>
                                            <td><?php echo "$data[no_identitas]";?></td>
                                            <td><?php echo "$data[nama]";?></td>
                                            <td><?php echo "$data[kode_barang]";?></td>
                                            <td><?php echo "$data[nama_barang]";?></td>
                                            <td><?php echo "$data[jumlah]";?></td>
                                            <td><?php echo "<a href='edit_pinjam.php?id=$data[id_peminjam]'><button class='btn btn-warning'>Edit</button></a> <a href='javascript:hapusData(".$data['id_peminjam'].")'><button class='btn btn-danger'>Hapus</button></a>"; ?></td>
                                          </tr>
                                        <?php
                                        $no++;
                                        endforeach; 
                                        ?>
                                    </tbody>
                                </table>
                        </div>
                        
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Peminjaman Barang &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </body>
        <!-- Modal Header -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah barang</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- Modal Body -->
        <form method="post">
            <div class="modal-body">
                <Input type="text" name="kode_brg" placeholder="Kode Barang" class="form-control" required>
                <br>
                <Input type="text" name="nama_brg" placeholder="Nama Barang" class="form-control" required>
                <br>
                <Input type="text" name="kategori" placeholder="Kategori" class="form-control" required>
                <br>
                <Input type="text" name="merk" placeholder="Merk" class="form-control"  required>
                <br>
                <Input type="number" name="jumlah" placeholder="jumlah" class="form-control" required>
                <br>
                <button type="submit" class="btn btn-primary" name="addnewbarang">submit</button>
            </div>
        </form>
        </div>
    </div>
    </div>        
</html>