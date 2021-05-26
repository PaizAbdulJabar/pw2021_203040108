<?php 
if (!isset($_GET['id'])) {
	header("location: ../index.php");
	exit;
}

require 'functions.php';

$id = $_GET['id'];

$vga = query("SELECT * FROM vga WHERE id = $id")[0];
?>	
<!DOCTYPE html>
<html>
<head>
        <title>Detail</title>
        <style>
                img {
                    max-width: 300px;
                }
                .card-body {
                    background-color: #a7dbd8;
                    max-width: 413px;
                }
                .categori {
                border: 3px solid black;
                font-size: 14px;
                padding: 12px 12px;
                text-align: center;
                display: inline-block;
                margin: 4px 2px;
                background-color: #0C2340;
                color: white;
                }
                .body {
                    background: blue;
                }
                
                
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <body>
        
        <div class="card" style="width: 413px; border: 3px solid black; margin-left: 600px ">
        <img class="card-img-top" src="../assets/img/<?= $vga["img"]; ?>">
        <div class="card-body">
        <div class="keterangan">
                    <p><?= $vga["nama"]; ?></p>
                    <p><?= $vga["description"]; ?></p>
                    <p><?= $vga["price"]; ?></p>
                    <p><div class ="categori"><?= $vga["category"]; ?></div></p>
                </div>
            <button class="point ke-kembali btn btn-garis-utama"><a href="../index.php">kembali</a></button>
                </div>
    </div>
        </div>
    </body>
    </html>
