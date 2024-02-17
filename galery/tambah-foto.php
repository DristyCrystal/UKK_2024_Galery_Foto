<?php

include "koneksi.php";
session_start();

$judulfoto = $_POST['judulfoto'];
$deskripsifoto = $_POST['deskripsifoto'];
$tanggalunggah = date('Y-m-d');
$albumid = $_POST['albumid'];
$userid = $_SESSION['userid'];

$lokasifile = $_FILES['lokasifile']['tmp_name'];
$namafoto = $_FILES['lokasifile']['name'];
$folder = "gambar";

if(move_uploaded_file($lokasifile, $folder.'/'.$namafoto)){
$sql = mysqli_query($koneksi,"INSERT INTO foto VALUES('','$judulfoto','$deskripsifoto','$tanggalunggah','$namafoto','$albumid','$userid')");

echo "<script>
alert('Foto Anda Sudah Tersimpan');
window.location.assign('foto.php');
</script>";
}else{
    echo "<script>
alert('Foto Gagal Tersimpan');
window.location.assign('foto.php');
</script>";
}
?>