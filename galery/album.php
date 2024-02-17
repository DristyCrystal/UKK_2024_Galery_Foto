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
        <title>Album | Galery</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="navbar">   
                <a href="index.php">Dashboard</a>
                <a href="album.php">Album</a>
                <a href="foto.php">Foto</a>
                <a href="logout.php">LogOut</a>
        </div>
        <br><br>
        <div class=""><center>
            <h1><b>Album</b></h1>
            <form action="tambah-album.php" method="post">
                <table>
                    <tr>
                        <td><label for="namaalbum">Nama Album</label></td>
                        <td><input type="text" name="namaalbum" placeholder="Nama Album Anda" required></td>
                    </tr>
                    <tr>
                        <td><label for="deskripsi">Deskripsi</label></td>
                        <td><input type="text" name="deskripsi" placeholder="deskripsi Anda" required></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Buat"></td>
                    </tr>
                </table>
            </form>
            </center></div>
<br><hr><br>
            <table border="0" width="100%" cellspacing="2" cellpadding="10">
                <tr>
                    <th class="satu">ID</th>
                    <th class="satu">Nama Album</th>
                    <th class="satu">Deskripsi</th>
                    <th class="satu">Tanggal Dibuat</th>
                    <th class="satu">Milik</th>
                    <th class="satu">Aksi</th>
                </tr>
            <?php 
            include "koneksi.php";
            $userid = $_SESSION['userid'];

            $sql = mysqli_query($koneksi,"SELECT * FROM album WHERE userid='$userid'");
            while($data = mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td class="dua"><center><?=$data['albumid']?></td>
                    <td class="dua"><center><?=$data['namaalbum']?></td>
                    <td class="dua"><center><?=$data['deskripsi']?></td>
                    <td class="dua"><center><?=$data['tanggaldibuat']?></td>
                    <td class="dua"><center><?=$_SESSION['namalengkap']?></td>
                    <td class="dua"><center>
                        <a href="edit-album.php?albumid=<?=$data['albumid']?>">Edit</a>
                        <a href="hapus-album.php?albumid=<?=$data['albumid']?>">Hapus</a>
                    </td>
                </tr>

            <?php
            }


            ?>
            </table>
    </body>
    </html>
