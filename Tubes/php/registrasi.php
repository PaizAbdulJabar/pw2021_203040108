<?php
require 'functions.php';

if (isset($_POST['register'])) {

if (registrasi($_POST) > 0) {
    echo "<script>
            alert('Registrasi Berhasil!');
            document.location.href = 'login.php';
        </script>";
} else {
    echo "<script>
            alert('Registrasi Gagal!');
        </script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registrasi</title>
<link rel="stylesheet" href="../css/login.css">
</head>

<body>
<div class="kotak">
    <h1>Registrasi</h1>
    <form action="" method="post">
    <table>
    <tr>
        <td><label class="label" for="username">Username</label></td>
        <td>:</td>
        <td><input type="text" name="username" class="b"></td>
        </tr>
        <tr>
        <td><label  class="label" for="password">Password</label></td>
        <td>:</td>
        <td><input type="password" name="password" class="b"></td>
        </tr>
    </table>
    <div class="inputBox">
    <button type="submit" name="register" class="c" >Registrasi</button>
    <button type="submit" class="link">
            <a href="../index.php">Back</a>
    </button>
    </div>
    </form>
    <div class="registrasi">
    <p>Sudah punya akun?? Login <a href="login.php">Disini</a></p>
    </div>
</div>
</body>

</html>