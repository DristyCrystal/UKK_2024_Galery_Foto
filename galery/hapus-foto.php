<?php
    include "koneksi.php";
    session_start();

    $fotoid = $_GET['fotoid'];

    $sql = mysqli_query($koneksi,"DELETE FROM foto WHERE fotoid='$fotoid'");

    header("location:foto.php");
?>
