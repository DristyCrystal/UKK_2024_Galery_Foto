<?php

include "koneksi.php";
session_start();

$namaalbum = $_POST['namaalbum'];
$deskripsi = $_POST['deskripsi'];
$tanggaldibuat = date('Y-m-d');
$userid = $_SESSION['userid'];

$sql = mysqli_query($koneksi,"INSERT INTO album VALUES('','$namaalbum','$deskripsi','$tanggaldibuat','$userid')");

echo "<script>
alert('Album Anda Telah Dibuat');
window.location.assign('album.php');
</script>";

?>