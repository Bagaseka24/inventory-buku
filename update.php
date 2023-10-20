<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Tambah Data Buku</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php
        //koneksi ke database
        include("koneksi.php");

        function input( $data ) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        // mengecek nilai yang dikirim menggunakan method GET dengan nama idbuku
        if (isset($_GET['idbuku'])) {
            $idbuku = input($_GET["idbuku"]);

            $sql = "SELECT * FROM `buku` WHERE idbuku=$idbuku";
            $result = mysql_query($kon, $sql);
            $data = mysql_fetch_array($result);
        }

        //mengecek apakah ada kiriman dari method POST
        if ($_SERVER["REQUST_METHOD"] == "POST") {
            $idbuku = htmlspecialchars($_POST["idbuku"]);
            $namabuku = htmlspecialchars($_POST["namabuku"]);
            $jenisbuku = htmlspecialchars($_POST["jenisbuku"]);
            $tahuterbit = htmlspecialchars($_POST["tahunterbit"]);
            $pengarang = htmlspecialchars($_POST["pengarang"]);
            $penerbit = htmlspecialchars($_POST["penerbit"]);
            $ISBN = htmlspecialchars($_POST["ISBN"]);
        }

        ?>
    </div>
</body>
</html>