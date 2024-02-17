<?php
    include "koneksi.php";
    session_start();

    if(!isset($_SESSION['userid'])){
        header("location:index.php");
    }else{
        $fotoid = $_GET['fotoid'];
        $userid = $_SESSION['userid'];

        $sql = mysqli_query($koneksi,"SELECT * FROM likefoto,user WHERE likefoto.fotoid='$fotoid' AND likefoto.userid='$userid'");

        if(mysqli_num_rows($sql)==1){
            
            header("location:index.php");
        }else{
            $tanggallike = date("Y-m-d");
            mysqli_query($koneksi,"INSERT INTO likefoto VALUES('','$fotoid','$userid','$namalengkap','$tanggallike')");
            header("location:index.php");
        }
    }

    
?>
