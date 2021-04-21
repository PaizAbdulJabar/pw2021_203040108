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
$vga = query("SELECT * FROM vga");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan5a_203040108</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
</head>
<body>
    <div class="container mt-3">
        <h1>DAFTAR VGA</h1>
        <div class="card" style="width: 45rem">
            <div class="card-body">
                <div class="row">
                    <div class="col md-6">
                    <?php foreach ($vga as $row) : ?>
                        <p class="nama">
                            <a href="php/detail.php?id=<?= $row['id'] ?>">
                                
                                <?= $row["nama"] ?>
                            </a>
                        </p>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>