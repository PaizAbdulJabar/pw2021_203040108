<?php

session_start();
require 'functions.php';
//melakukan pengecekan apakah sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}
//login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  //mencocokan USERNAME dan PASSWORD
if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['hash'] = hash('sha256', $row['id'], false);
    }
    if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
    }
    header("Location: ../index.php");
    die;
}
    $error = true;
}

?>


<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
<?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic; text-align: center; font-size: 30px; margin: auto;">Username atau Password Anda Salah</p>
    <?php endif; ?>
    <div class="kotak">
    <h1>Login</h1>

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
    <div class="remember">
        <input type="checkbox" name="remember">
        <label for="remember">Remember Me</label>
    </div>
    <div class="inputBox">
    <button type="submit" name="submit" class="c" >LOGIN</button>
    <button type="submit" class="link">
            <a href="../index.php">Back</a>
    </button>
    </div>
    </form>
    <div class="registrasi">
    <p>Belum punya akun?? Registrasi <a href="registrasi.php">Disini</a></p>
    </div>
    </div>
</body>
</html>