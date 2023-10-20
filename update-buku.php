<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$idbuku         = $_POST['idsiswa'];
$namabuku       = $_POST['namabuku'];
$jenisbuku      = $_POST['jenisbuku'];
$tahunterbit    = $_POST['tahunterbit'];
$pengarang      = $_POST['pengarang'];
$penerbit      = $_POST['penerbit'];
$isbn      = $_POST['isbn'];


//query update data ke dalam database berdasarkan ID
$query = "UPDATE buku SET nisn = '$nisn', nama_lengkap = '$nama_lengkap', alamat = '$alamat' WHERE id_siswa = '$id_siswa'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>