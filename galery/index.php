<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
    <?php
    session_start();
    if(!isset($_SESSION['userid'])){
        ?>
        
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
        
    <?php
    }else{
    ?>
        
            <a href="index.php">Dashboard</a>
            <a href="album.php">Album</a>
            <a href="foto.php">Foto</a>
            <a href="logout.php">LogOut</a>
        
        </div><br>
        <marquee behavior="" direction="right">Halo, <?=$_SESSION['namalengkap']?></marquee>
   <br><br>
    <table border="0" width="100%" cellspacing="2" cellpadding="10">
                <tr>
                    <th class="satu">ID</th>
                    <th class="satu">Nama Foto</th>
                    <th class="satu">Deskripsi Foto</th>
                    <th class="satu">Tanggal DiUnggah</th>
                    <th class="satu">Gambar</th>
                    <th class="satu">Nama Album</th>
                    <th class="satu">Milik</th>
                    <th class="satu">Disukai</th>
                    <th class="satu">Aksi</th>
                </tr>
            <?php 
            include "koneksi.php";
            $userid = $_SESSION['userid'];

            $sql2 = mysqli_query($koneksi,"SELECT * FROM foto,album WHERE foto.userid='$userid' AND album.albumid=album.albumid");
            while($data = mysqli_fetch_array($sql2)){
                ?>
                <tr>
                    <td class="dua"><center><?=$data['fotoid']?></td>
                    <td class="dua"<center><?=$data['judulfoto']?></td>
                    <td class="dua"><center><?=$data['deskripsifoto']?></td>
                    <td class="dua"><center><?=$data['tanggalunggah']?></td>
                    <td class="dua"><center><img src="gambar/<?=$data['lokasifile']?>" width="200px"></td>
                    <td class="dua"><center><?=$data['namaalbum']?></td>
                    <td class="dua"><center><?=$_SESSION['namalengkap']?></td>
                    <td class="dua"><center><?php 
                       $fotoid = $data['fotoid'];
                       $sql3 = mysqli_query($koneksi, "SELECT * FROM likefoto WHERE fotoid='$fotoid'");
                       echo mysqli_num_rows($sql3);
                    ?></td>
                    <td class="dua"><center>
                        <a href="like.php?fotoid=<?=$data['fotoid']?>">Like</a>
                        <a href="komentar-foto.php?fotoid=<?=$data['fotoid']?>">Komentar</a>
                    </td>
                </tr>

            <?php
            }
            ?>
            <?php
        }
        ?>

            
            </table>
</body>
</html>
