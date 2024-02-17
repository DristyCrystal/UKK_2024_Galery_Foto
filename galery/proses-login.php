<?php

include "koneksi.php";
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($sql);

if($cek==1){
    while($data = mysqli_fetch_array($sql)){
        $_SESSION['userid'] = $data['userid'];
        $_SESSION['namalengkap'] = $data['namalengkap'];
    }
    echo "<script>
alert('Selamat Datang');
window.location.assign('index.php');
</script>";

}else{

echo "<script>
alert('Username Atau password Anda Salah');
window.location.assign('login.php');
</script>";
}
?>