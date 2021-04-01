<?php
$vga_card = [
    [
        "gambar" => "rtx3090.jpg",
        "nama" => "RTX 3090",
        "deskripsi" => "GPU dengan performa kelas TITAN,didukung oleh Ampere, arsitektur ke-2 NVIDIA",
        "harga" => "Rp 35.000.000",
        "vram" => "24GB GDDR6X",
        "tahun keluar" => "2020",
    ],
    [
        "gambar" => "rx6900xt.jpg",
        "nama" => "RX 6900XT",
        "deskripsi" => "Menggunakan arsitektur baru RDNA2 dan fabrikasi 7nm",
        "harga" => "Rp 28.000.000",
        "vram" => "16GB GDDR6",
        "tahun keluar" => "2020",
    ],
    [
        "gambar" => "rtx3080.png",
        "nama" => "RTX 3080",
        "deskripsi" => "Didukung oleh ampere yaitu arsitektur ke-2 NVIDIA",
        "harga" => "Rp 28.000.000",
        "vram" => "10GB GDDR6X",
        "tahun keluar" => "2020",
    ],
    [
        "gambar" => "rx6800.png",
        "nama" => "RX 6800",
        "deskripsi" => "Menggunakan arsitektur baru RDNA2 dan fabrikasi 7nm",
        "harga" => "Rp 23.000.000",
        "vram" => "16GB GDDR6",
        "tahun keluar" => "2020",
    ],
    [
        "gambar" => "rtx3070.jpg",
        "nama" => "RTX 3070",
        "deskripsi" => "Didukung oleh ampere yaitu arsitektur ke-2 NVIDIA",
        "harga" => "Rp 21.000.000",
        "vram" => "8GB GDDR6",
        "tahun keluar" => "2020",
    ],
    [
        "gambar" => "rtx3060.jpg",
        "nama" => "RTX 3060",
        "deskripsi" => "Didukung oleh ampere yaitu arsitektur ke-2 NVIDIA",
        "harga" => "Rp 12.000.000",
        "vram" => "12GB GDDR6",
        "tahun keluar" => "2021",
    ],
    [
        "gambar" => "rtx2080ti.jpg",
        "nama" => "RTX 2080TI",
        "deskripsi" => "Menggunakan arsitektur turing dengan memori GDDR6 dan fitur ray tracing",
        "harga" => "Rp 22.000.000",
        "vram" => "11GB GDDR6",
        "tahun keluar" => "2018",
    ],
    [
        "gambar" => "rtx2080super.jpg",
        "nama" => "RTX 2080 SUPER",
        "dekripsi" => "Menggunakan arsitektur turing dengan memori GDDR6 dan fitur ray tracing",
        "harga" => "Rp 14.000.000",
        "vram" => "8GB GDDR6",
        "tahun keluar" => "2020",
    ],
    [
        "gambar" => "rtx2070.jpg",
        "nama" => "RTX 2070",
        "deskripsi" => "Menggunakan arsitektur turing dengan memori GDDR6 dan fitur ray tracing",
        "harga" => "Rp 10.600.000",
        "vram" => "8GB GDDR6",
        "tahun keluar" => "2018",
    ],
    [
        "gambar" => "rtx2060.jpg",
        "nama" => "RTX 2060",
        "deskripsi" => "Menggunakan arsitektur turing dengan memori GDDR6 dan fitur ray tracing",
        "harga" => "Rp 6.000.000",
        "vram" => "6GB GDDR6",
        "tahun keluar" => "2019",
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        html, body {
            display: flex;
            flex-direction: row;
            text-align: center;
        }
        li {
            list-style: none;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1.1rem; 
        }
        img{
            width: 450px;
            height: 450px;
        }
        h1 {
            margin-bottom: 285px;
            padding: 50px;
            border-right: 2px solid black;
        }
    </style>
</head>

<body>
<h1>the best vga</h1>
    <?php foreach ( $vga_card as $vga ) : ?>
            <ul>
                <li>
                    <img src="img/<?= $vga["gambar"]; ?>">
                </li>
                <li>Nama : <?= $vga["nama"]; ?></li>
                <li>Deskripsi : <?= $vga["deskripsi"]; ?></li>  
                <li>Harga : <?= $vga["harga"]; ?></li>
                <li>Vram : <?= $vga["vram"]; ?></li>
                <li>Tahun Keluar : <?= $vga["tahun keluar"]; ?></li>
            </ul>
<?php endforeach; ?>

</body>
</html>