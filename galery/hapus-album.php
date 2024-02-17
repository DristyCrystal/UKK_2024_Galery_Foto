<?php
    include "koneksi.php";
    session_start();

    $albumid = $_GET['albumid'];

    $sql = mysqli_query($koneksi,"DELETE FROM album WHERE albumid='$albumid'");

    header("location:album.php");
?>