<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Galery</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container2"><center>
        <h1><b>Form Registrasi</b></h1>
        <form action="proses-register.php" method="post">
            <table>
                <tr>
                    <td><label for="username">Username</label></td>
                    <td><input type="text" name="username" placeholder="Username Anda" required></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td><input type="password" name="password" placeholder="Password Anda" required></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input type="text" name="email" placeholder="Email Anda" required></td>
                </tr>
                <tr>
                    <td><label for="namalengkap">Nama Lengkap</label></td>
                    <td><input type="text" name="namalengkap" placeholder="Nama Lengkap Anda" required></td>
                </tr>
                <tr>
                    <td><label for="alamat">Alamat</label></td>
                    <td><input type="text" name="alamat" placeholder="Alamat Anda" required></td>
                </tr>
                <tr>
                    <td><br><input class="button1" type="submit" value="Register"></td>
                    <td><br><button class="button2"><a href="login.php">Login</a></button></td>
                </tr>
            </table>
        </form>
        </center></div>
</body>
</html>