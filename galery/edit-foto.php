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
    <title>Halaman Edit Foto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
        
            <a href="index.php">Dashboard</a>
            <a href="album.php">Album</a>
            <a href="foto.php">Foto</a>
            <a href="logout.php">LogOut</a>
        <br>
        </div>
        <br>
 <center><h1>Halaman Edit Foto</h1>
<form action="update-foto.php" method="post" enctype="multipart/form-data">
<?php 
    include 'koneksi.php'; 
	$fotoid = $_GET['fotoid'];
	$sql = mysqli_query($koneksi,"SELECT * FROM foto WHERE fotoid='$fotoid'");
	While($data = mysqli_fetch_array($sql)){
?>
<input type="text" name="fotoid" value="<?=$data['fotoid']?>" hidden>
        <table>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judulfoto" value="<?=$data['judulfoto']?>"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsifoto" value="<?=$data['deskripsifoto']?>"></td>
            </tr>
            <tr>
                <td>Foto Lama</td>
                <td><img src="gambar/<?=$data['lokasifile']?>" width="200px" height="50%"></td>
            </tr>
            <tr>
                <td>Lokasi File</td>
                <td><input type="file" id="lokasifile" name="lokasifile"></td>
            </tr>
            <tr>
                <td>Album</td>
                <td>
                    <select name="albumid">
                    <?php
                        include "koneksi.php";
                        $userid = $_SESSION['userid'];
                        $sql2 = mysqli_query($koneksi,"SELECT * FROM album WHERE userid='$userid'");
                        while($data2 = mysqli_fetch_array($sql2)){
                    ?>
                            <option value="<?=$data2['albumid']?>"<?php if($data2['albumid']==$data2['albumid']){echo 'selected';}?>><?=$data2['namaalbum']?></option>
                    <?php
                        }
                    ?>
                    </select>
                    
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input class="button3" type="submit" value="Ubah">  <button class="button3"><a href="foto.php">Kembali</a></button></td>
            </tr>
        </table>
	<?php
	}
	?>
    </form></center>

</body>
</html>
