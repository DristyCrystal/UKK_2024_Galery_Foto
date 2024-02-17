<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Galery</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container"><center>
        <h1><b>Form Login</b></h1>
        <form action="proses-login.php" method="post">
            <table>
                <tr>
                    <td><label for="username">Username :</label></td>
                    <td><input type="text" name="username" placeholder="Username Anda" required></td>
                </tr>
                <tr>
                    <td><label for="password">Password :</label></td>
                    <td><input type="password" name="password" placeholder="Password Anda" required></td>
                </tr>
                <tr>
                    <td><br><input class="button1" type="submit" value="Login"></td>
                    <td><br><button class="button2"><a href="register.php">Register</a></button></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>