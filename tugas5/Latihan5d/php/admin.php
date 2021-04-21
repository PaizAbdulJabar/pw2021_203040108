<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$vga_card = query("SELECT * FROM vga");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan5d</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="add">
        <a href="tambah.php"><button class="tambah" id="tambah">Tambah Data</button></a>
    </div>
	<table border="1" cellpadding="13" cellspacing="0">
		<tr>
			<th>#</th>
			<th>Opsi</th>
			<th>Gambar</th>
			<th>Nama</th>
			<th>Description</th>
			<th>Price</th>
			<th>Category</th>
		</tr>
		<?php $i = 1 ?>
		<?php foreach ($vga_card as $vga) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td>
					<a href="ubah.php?id=<?= $vga['id']?>"><button class="ubah">Ubah</button></a>
					<a href="hapus.php?id=<?= $vga['id'] ?>" onclick="return confirm('Hapus Data?');"> <button class="hapus" id="hapus">Hapus</button></a>
				</td>
				<td class="kotak"><img src="../assets/img/<?= $vga['img'];?>" alt=""></td>
				<td><?= $vga['nama']; ?></td>
				<td><?= $vga['description']; ?></td>
				<td><?= $vga['price']; ?></td>
				<td><div class ="categori"><?= $vga["category"]; ?></div></td>
			</tr>
			<?php $i++ ?>
		<?php endforeach; ?>
	</table>
</body>
</html>