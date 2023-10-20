<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$idbuku         = $_POST['idsiswa'];
$namabuku       = $_POST['namabuku'];
$jenisbuku      = $_POST['jenisbuku'];
$tahunterbit    = $_POST['tahunterbit'];
$pengarang      = $_POST['pengarang'];
$penerbit       = $_POST['penerbit'];
$isbn           = $_POST['isbn'];

//query insert data ke dalam database
$query = "INSERT INTO `buku`(`namabuku`, `jenisbuku`, `tahunterbit`, `pengarang`, `penerbit`, `isbn`) VALUES ('$namabuku','$jenisbuku','$tahunterbit','$pengarang','$penerbit','$isbn')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($kon->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>