<?php
/*
//Paiz Abdul Jabar
//203040108
//SHIFT Kamis 08:00 - 09:00
*/
?>

<?php
// Menghubungkan ke Database Server
$conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");
// Memilih Database
$check = mysqli_select_db($conn, "pw_tubes_203040108") or die ("database salah");
// Melakukan query dari database
$result = mysqli_query($conn, "SELECT * FROM vga");
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan4a_203040108</title>
</head>
    <link rel = "stylesheet" href = "css/style.css">
<body>
    <div class="table">
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
            <th>No</th>
            <th>Img</th>
            <th>Nama</th>
            <th>Description</th>
            <th>Price</th>
            <th>Category</th>
            </tr>
            <?php $i = 1 ?>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><img src="assets/img/<?= $row["img"]; ?>"></td>
                    <td><?= $row["nama"] ?></td>
                    <td><?= $row["description"] ?></td>
                    <td><?= $row["price"] ?></td>
                    <td><div class ="categori"><?= $row["category"]; ?></div></td>
                    </tr>
                <?php $i++; ?>
            <?php endwhile; ?>

        </table>
    </div>
</body>
</html>