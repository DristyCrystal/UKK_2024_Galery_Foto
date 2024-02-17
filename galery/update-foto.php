<?php
session_start();
include "koneksi.php";

$fotoid = $_POST['fotoid'];
$judulfoto = $_POST['judulfoto'];
$deskripsifoto = $_POST['deskripsifoto'];

$query = mysqli_query($koneksi, "UPDATE foto SET judulfoto='$judulfoto',deskripsifoto='$deskripsifoto' WHERE fotoid='$fotoid'");
header("location:foto.php");

?>