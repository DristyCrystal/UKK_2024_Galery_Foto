<?php

session_start();
include "koneksi.php";

$albumid = $_POST['albumid'];
$namaalbum = $_POST['namaalbum'];
$deskripsi = $_POST['deskripsi'];

$query = mysqli_query($koneksi, "UPDATE album SET namaalbum='$namaalbum',deskripsi='$deskripsi' WHERE albumid='$albumid'");

echo "<script>
alert('Album Anda Telah DiUbah');
window.location.assign('album.php');
</script>";
?>