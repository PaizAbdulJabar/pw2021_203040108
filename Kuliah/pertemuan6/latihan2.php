<?php
// $mahasiswa = [
//  ["Paiz Abdul Jabar", "203040108", "TIF", "alafifinuraziz057@gmail.com"],
//  ["Muhamad Rafliansyah", "203040105", "TIF", "rafliansyah@gmail.com"],
//  ["Yudha Permana ", "203040101", "TIF", "yudha12@gmail.com"]
//
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<?php foreach ( $mahasiswa as $mhs ) : ?>
<ul>
    <li>
        <img src="img/<?= $mhs["gambar"]; ?>">
    </li>
    <li>Nama : <?= $mhs["nama"]; ?></li>
    <li>NRP : <?= $mhs["nrp"]; ?></li>  
    <li>Jurusan : <?= $mhs["email"]; ?></li>
    <li>Email : <?= $mhs["jurusan"]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>