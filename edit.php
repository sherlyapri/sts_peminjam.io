<?php
require_once('database.php');

if (isset($_GET['id_barang'])) {
    $id = $_GET['id_barang'];

    $data = editdata('barang', $id);

    if ($data) {
        ?>
        <!doctype html>
        <html lang="en">

        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
                integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
            <title>Edit Barang</title>
        </head>
        <body>
            <?php
            session_start();
            if ($_SESSION['status'] <> "edit") {
                header("location:edit.php");
            } else {
                require('data_barang.php');
            }
            ?>

            <script language="JavaScript" type="text/javascript">
                function kornfirmasiUpdate(id) {
                    if (confirm("Apakah yakin akan merubah data barang ini")) {
                        window.location.href = 'update.php?id=' + id;
                    }
                }
            </script>

            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                    <div class="col-md-4">
                        <form action="update.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $barang['id']; ?>">
                            <div class="form-group">
                                <label for="mnama">Nama Barang</label>
                                <input class="form-control" id="mnama" name="nama_brg"
                                    value="<?php echo $barang['nama_brg']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="kategori">Kategori</label>
                                <input class="form-control" id="kategori" name="kategori"
                                    value="<?php echo $barang['kategori']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="merk">Merk</label>
                                <input class="form-control" id="merk" name="merk" value="<?php echo $barang['merk']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Jumlah</label>
                                <input type="number" class="form-control" id="jumlah" name="jumlah"
                                    value="<?php echo $barang['jumlah']; ?>">
                            </div>
                            <button type="submit" class="btn btn-primary" name="update" value="update">Update Barang</button>
                            <a type="button" class="btn btn-primary" href="barang.php" name="kembali"
                                value="kembali">Kembali</a>
                        </form>
            </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap JS and jQuery -->
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous"></script>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        </body>

        </html>
        <?php
    } else {
        echo "Barang tidak ditemukan.";
    }
} else {
    echo "ID Barang tidak diberikan.";
}
?>