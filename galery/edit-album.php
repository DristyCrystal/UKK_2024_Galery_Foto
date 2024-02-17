<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        echo "<script>
alert('Anda Belum Login');
window.location.assign('login.php');
</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Album</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="navbar">
        
            <a href="index.php">Dashboard</a>
            <a href="album.php">Album</a>
            <a href="foto.php">Foto</a>
            <a href="logout.php">LogOut</a>
        <br>
        </div><br>
   <center> <h1>Halaman Edit Album</h1>
    <form action="update-album.php" method="post">
        <?php
            include "koneksi.php";
            $albumid = $_GET['albumid'];
            $sql = mysqli_query($koneksi,"SELECT * FROM album WHERE albumid='$albumid'");
            while($data = mysqli_fetch_array($sql)){
        ?>
        <input type="text" name="albumid" value="<?=$data['albumid']?>" hidden>
        <table>
            <tr>
                <td>Nama Album</td>
                <td><input type="text" name="namaalbum" value="<?=$data['namaalbum']?>" required></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi" value="<?=$data['deskripsi']?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><br><input class="button3" type="submit" value="Ubah">  <button class="button3"><a href="album.php">Kembali</a></button></td>
            </tr>
        </table>
        <?php
            }
        ?>
    </form></center>
    

    
</body>
</html>
