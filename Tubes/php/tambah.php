<?php
session_start();

if (!isset($_SESSION['username'])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';
if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'admin.php';
            </script>";
    } else {
    echo "<script> 
            alert('data gagal ditambahkan!');
            document.location.href = 'admin.php';
            </script> ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="../css/tambah.css">
</head>

<body>

<div class="container">
    <h1>Form Tambah Data VGA card</h1>
    <form action="" method="post">
	<ul>
		<li>
			<label for="nama">Nama :</label><br>
			<input type="text" name="nama" id="nama" required><br><br>
		</li>
		<li>
			<label for="description">Description :</label><br>
			<input type="text" name="description" id="description" required><br><br>
		</li>
		<li>
			<label for="price">Price :</label><br>
			<input type="text" name="price" id="price" required><br><br>
		</li>
		<li>
			<label for="category">Category :</label><br>
			<input type="text" name="category" id="category" required><br><br>
		</li>
        <li>
            <label for="gambar">Gambar :</label><br>
            <input type="text" name="gambar" id="gambar" autofocus required>
        </li>
<br>
<button class="submit" type="submit" name="tambah">Tambah Data!</button>
<button class="back" type="submit">
	<a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
</button>
	</ul>

    </form>
    </div>

</body>

</html>