<?php
// Paiz Abdul Jabar
// 203040108
?>


<?php 
// Superglobals 
// Variable global milik php
// Termasuk array associative
// $_GET 
// bisa di tambahkan melalui URL
// jika lebih dari 1 variable tambah &
// var_dump($_GET);
$mahasiswa = [
    [
        "nama" => "Paiz Abdul Jabar", 
        "nrp" => "203040108",
        "email" => "alafifinuraziz057@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "1.png"
    ],
    [
        "nama" => "Muhamad Rafliansyah", 
        "nrp" => "203040105",
        "email" => "rafliansyah@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "2.png"
    ]
];

// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER .....
// $_ENV
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?=$mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>