<?php
/*
//Paiz Abdul Jabar
//203040108
//SHIFT Kamis 08:00 - 09:00
*/
?>

<?php 
//Menghubungkan dengan file phplainnya
require 'php/functions.php';
//Melakukan query dari database
$vga_card = query("SELECT * FROM vga");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan4b_203040108</title>
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
            <?php foreach ($vga_card as $row) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><img src="assets/img/<?= $row["img"]; ?>"></td>
                    <td><?= $row["nama"] ?></td>
                    <td><?= $row["description"] ?></td>
                    <td><?= $row["price"] ?></td>
                    <td><div class ="categori"><?= $row["category"]; ?></div></td>
                    </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

        </table>
    </div>
</body>
</html>