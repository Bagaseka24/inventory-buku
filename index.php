<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <br>
        <h4>Inventory Perpustakaan </h4>
        <?php
        include("koneksi.php");

        //mengecek nilai dari method GET dengan nama id_buku
        if (isset($_GET['idbuku'])) {
            $idbuku = htmlspecialchars($_GET['idbuku']);

            $sql = "DELETE FROM `buku` WHERE idanggota = '$idbuku'";
            $result = mysqli_query($konn, $sql);

            if ($result) {
                header("Location:index.php");
            } else {
                echo"<div class='alert alert-danger'> Data gagal dihapus</div>";
            }
        }
        ?>

        <table class="table table-bordered table-hover">
            <br>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Buku</th>
                    <th>Jenis Buku</th>
                    <th>Tahun Terbit</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>ISBN</th>
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>
            <?php
            include("koneksi.php");
            $sql = "SELECT * FROM `buku` order by idbuku desc";

            $result = mysqli_query($kon, $sql);
            $no = 0;
            while ($data = mysqli_fetch_array($result)) {
                $no ++;

                ?>
                <tbody>
                    <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $data["namabuku"]; ?></td>
                        <td><?php echo $data["jenisbuku"]; ?></td>
                        <td><?php echo $data["tahunterbit"]; ?></td>
                        <td><?php echo $data["pengarang"]; ?></td>
                        <td><?php echo $data["penerbit"]; ?></td>
                        <td><?php echo $data["ISBN"]; ?></td>
                        <td>
                            <a href="update.php?idbuku=<?php echo htmlspecialchars($data['$idbuku']); ?>" clas="btn btn-warning" role="button">Update</a>
                            <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?idbuku=<?php echo $data['$idbuku']; ?>" class="btn btn-danger" role="button">Delete</a>
                        </td>
                    </tr>
                </tbody>
                <?php
            }
            ?>
        </table>
        <a href="create.php" class="btn btn-primary" role="button">Tambah Data</a>
    </div>
    
</body>
</html>