<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inventory Buku Perpustakaan</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php
        //mencegah input yang tidak sesuai
        include("koneksi.php");

        function input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        //Mengecek apakah ada kiriman dari form method POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $namabuku = input($_POST["namabuku"]);
            $jenisbuku = input($_POST["jenisbuku"]);
            $tahunterbit = input($_POST["tahunterbit"]);
            $pengarang = input($_POST["pengarang"]);
            $penerbit = input($_POST["penerbit"]);
            $ISBN = input($_POST["ISBN"]);

            //input data kedalam tabel buku
            $sql = "INSERT INTO `buku`(`namabuku`, `jenisbuku`, `tahunterbit`, `pengarang`, `penerbit`, `ISBN`) VALUES ('$namabuku','$jenisbuku','$tahunterbit','$pengarang','$penerbit','$ISBN')";

            //eksekusi query sql diatas
            $result = mysql_query($kon, $sql);

            //mengecek apakah query diatas berhasil dieksekusi
            if ($result) {
                header(Location:index.php);
            } else {
                echo"<div class='alert alert-danger'> Data Gagal disimpan.</div>"; 
            }
        }

        ?>
        <h2>Input Data</h2>

        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <div class="form-group">
                <label>Nama Buku:</label>
                <input type="text" name="namabuku" class="form-control" placeholder="Masukan nama buku" required>
            </div>
            <div class="form-group">
                <label>Jenis Buku:</label>
                <textarea name="jenisbuku" class="form-control" placeholder="Masukan jenis buku" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label>Tahun Terbit:</label>
                <input type="text" name="tahunterbit" class="form-control" placeholder="Masukan tahun terbit" required>
            </div>
            <div class="form-group">
                <label>Pengarang:</label>
                <input type="text" name="pengarang" class="form-control" placeholder="Masukan pengarang buku" required>
            </div>
            <div class="form-group">
                <label>Penerbit:</label>
                <input type="text" name="penerbit" class="form-control" placeholder="Masukan penerbit buku" required>
            </div>
            <div class="form-group">
                <label>ISBN:</label>
                <input type="text" name="ISBN" class="form-control" placeholder="Masukan ISBN buku" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
            
        
    </div>
</body>
</html>