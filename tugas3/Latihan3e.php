<?php
/*
//Paiz Abdul Jabar
//203040108
//SHIFT Kamis 08:00 - 09:00
*/
?>
<?php
    $vga_card = [
    [
        "picture" => "rtx3090.jpg",
        "nama" => "RTX 3090",
        "description" => "GPU dengan performa kelas TITAN,didukung oleh Ampere, arsitektur ke-2 NVIDIA",
        "price" => "Rp 35.000.000",
        "category" => "VGA CARD",
    ],
    [
        "picture" => "rx6900xt.jpg",
        "nama" => "RX 6900XT",
        "description" => "Menggunakan arsitektur baru RDNA2 dan fabrikasi 7nm",
        "price" => "Rp 28.000.000",
        "category" => "VGA CARD",
    ],
    [
        "picture" => "rtx3080.png",
        "nama" => "RTX 3080",
        "description" => "Didukung oleh ampere yaitu arsitektur ke-2 NVIDIA",
        "price" => "Rp 28.000.000",
        "category" => "VGA CARD",
    ],
    [
        "picture" => "rx6800.png",
        "nama" => "RX 6800",
        "description" => "Menggunakan arsitektur baru RDNA2 dan fabrikasi 7nm",
        "price" => "Rp 23.000.000",
        "category" => "VGA CARD",
    ],
    [
        "picture" => "rtx3070.jpg",
        "nama" => "RTX 3070",
        "description" => "Didukung oleh ampere yaitu arsitektur ke-2 NVIDIA",
        "price" => "Rp 21.000.000",
        "category" => "VGA CARD",
    ],
    [
        "picture" => "rtx3060.jpg",
        "nama" => "RTX 3060",
        "description" => "Didukung oleh ampere yaitu arsitektur ke-2 NVIDIA",
        "price" => "Rp 12.000.000",
        "category" => "VGA CARD",
    ],
    [
        "picture" => "rtx2080ti.jpg",
        "nama" => "RTX 2080TI",
        "description" => "Menggunakan arsitektur turing dengan memori GDDR6 dan fitur ray tracing",
        "price" => "Rp 22.000.000",
        "category" => "VGA CARD",
    ],
    [
        "picture" => "rtx2080super.jpg",
        "nama" => "RTX 2080 SUPER",
        "description" => "Menggunakan arsitektur turing dengan memori GDDR6 dan fitur ray tracing",
        "price" => "Rp 14.000.000",
        "category" => "VGA CARD",
    ],
    [
        "picture" => "rtx2070.jpg",
        "nama" => "RTX 2070",
        "description" => "Menggunakan arsitektur turing dengan memori GDDR6 dan fitur ray tracing",
        "price" => "Rp 10.600.000",
        "category" => "VGA CARD",
    ],
    [
        "picture" => "rtx2060.jpg",
        "nama" => "RTX 2060",
        "description" => "Menggunakan arsitektur turing dengan memori GDDR6 dan fitur ray tracing",
        "price" => "Rp 6.000.000",
        "category" => "VGA CARD",
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan3e_203040108</title>
    <style>

        .table {
            width: 100%;
            padding: 10px;
            font-family: arial;
            text-align: left;
        }
        th {
            background-color: lightblue;
        }
        img {
            max-width: 40px;
        }
        .categori {
            border: 1px solid black;
            font-size: 14px;
            padding: 12px 12px;
            text-align: center;
            display: inline-block;
            margin: 4px 2px;
            background-color: darkgreen;
            border-radius: 20px;
            color: white;
        }
    </style>
</head>
<body>
    <div class="table">
        <table border="1" cellspacing="0" cellpadding="10">
            <th>No</th>
            <th>Picture</th>
            <th>Nama</th>
            <th>Description</th>
            <th>Price</th>
            <th>Category</th>
            <tr></tr>
            <?php $nomor = 1;?>
            <?php foreach ($vga_card as $vc) : ?>
                <td><?= $nomor; ?></td> 
                <td><img src="img/<?= $vc["picture"]; ?>"></td>
                <td><?= $vc["nama"] ?></td>
                <td><?= $vc["description"] ?></td>
                <td><?= $vc["price"] ?></td>
                <td><div class ="categori"><?= $vc["category"]; ?></div></td>
                <tr></tr>
                <?php $nomor++; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>