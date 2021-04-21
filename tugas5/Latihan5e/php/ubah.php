<?php
require 'functions.php';
$id = $_GET['id'];
$vga = query("SELECT * FROM vga WHERE id = $id")[0];
if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah!');
            document.location.href = 'admin.php';
            </script>";
    } else {
    echo "<script> 
            alert('data gagal diubah!');
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
    <h1>Form Ubah Data VGA card</h1>
    <form action="" method="post">
    <input type="hidden" name="id" id="id" value="<?= $vga['id'];?>">
	<ul>
		<li>
			<label for="nama">Nama :</label><br>
			<input type="text" name="nama" id="nama" required value="<?= $vga['nama'];?>"><br><br>
		</li>
		<li>
			<label for="description">Description :</label><br>
			<input type="text" name="description" id="description" required value="<?= $vga['description'];?>"><br><br>
		</li>
		<li>
			<label for="price">Price :</label><br>
			<input type="text" name="price" id="price" required value="<?= $vga['price'];?>"><br><br>
		</li>
		<li>
			<label for="category">Category :</label><br>
			<input type="text" name="category" id="category" required value="<?= $vga['category'];?>"><br><br>
		</li>
        <li>
            <label for="gambar">Gambar :</label><br>
            <input type="text" name="gambar" id="gambar" required value="<?= $vga['img'];?>"><br><br>
        </li>
<br>
<button class="submit" type="submit" name="ubah">Ubah Data!</button>
<button class="back" type="submit">
	<a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
</button>
	</ul>

    </form>
    </div>

</body>

</html>