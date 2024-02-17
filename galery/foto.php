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
        <title>Foto | Galery</title>
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
        <div class=""><center>
            <h1><b>Foto</b></h1>
            <form action="tambah-foto.php" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label for="judulfoto">Judul Foto</label></td>
                        <td><input type="text" name="judulfoto" placeholder="Judul Foto Anda" required></td>
                    </tr>
                    <tr>
                        <td><label for="deskripsifoto">Deskripsi Foto</label></td>
                        <td><input type="text" name="deskripsifoto" placeholder="Deskripsi Foto Anda" required></td>
                    </tr>
                    <tr>
                        <td><label for="lokasifile">Gambar</label></td>
                        <td><input type="file" name="lokasifile" accept="image/png"></td>
                    </tr>
                    <tr>
                        <td><label for="albumid">Nama Album</label></td>
                        <td><select name="albumid">
                            <?php 
                            include "koneksi.php";
                            $userid = $_SESSION['userid'];
                            $sql = mysqli_query($koneksi,"SELECT * FROM album WHERE userid='$userid'");
                            while($data = mysqli_fetch_array($sql)){
                                ?>
                                <option value="<?=$data['albumid']?>"><?=$data['namaalbum']?></option>
                                <?php
                                }
                            ?>
                        </select></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Simpan"></td>
                    </tr>
                </table>
            </form>
            </center></div>
<br><hr><br>
            <table border="1" width="100%">
                <tr>
                    <th class="satu">ID</th>
                    <th class="satu">Nama Foto</th>
                    <th class="satu">Deskripsi Foto</th>
                    <th class="satu">Tanggal DiUnggah</th>
                    <th class="satu">Gambar</th>
                    <th class="satu">Nama Album</th>
                    <th class="satu">Milik</th>
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
                    <td class="dua"><center><?=$data['judulfoto']?></td>
                    <td class="dua"><center><?=$data['deskripsifoto']?></td>
                    <td class="dua"><center><?=$data['tanggalunggah']?></td>
                    <td class="dua"><center><img src="gambar/<?=$data['lokasifile']?>" width="200px"></td>
                    <td class="dua"><center><?=$data['namaalbum']?></td>
                    <td class="dua"><center><?=$_SESSION['namalengkap']?></td>
                   <!-- <td><?php 
                       // $fotoid = $data['fotoid'];
                       // $sql3 = mysqli_query($koneksi, "SELECT * FROM likefoto WHERE fotoid='$fotoid'");
                       //echo mysqli_num_rows($sql3);
                    ?></td>-->
                    <td class="dua"><center>
                        <a href="edit-foto.php?fotoid=<?=$data['fotoid']?>">Edit</a>
                        <a href="hapus-foto.php?fotoid=<?=$data['fotoid']?>">Hapus</a>
                    </td>
                </tr>

            <?php
            }


            ?>
            </table>
    </body>
    </html>