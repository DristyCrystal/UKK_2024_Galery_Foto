<?php

include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$namalengkap = $_POST['namalengkap'];
$alamat = $_POST['alamat'];

$sql = mysqli_query($koneksi,"INSERT INTO user VALUES('','$username','$password','$email','$namalengkap','$alamat')");

echo "<script>
alert('Data Anda Sudah Tersimpan');
window.location.assign('login.php');
</script>";

?>