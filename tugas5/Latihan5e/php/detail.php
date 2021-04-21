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
                    max-width: 250px;
                }
                .card-body {
                    background-color: #40E0D0;
                }
                .categori {
                border: 1px solid white;
                font-size: 14px;
                padding: 12px 12px;
                text-align: center;
                display: inline-block;
                margin: 4px 2px;
                background-color: #0C2340;
                color: white;
                }
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <body>
        <div class="container">
            <div class="card border border-primary" style="max-width: 80%;">
            <div class="row no-gutters">
            <div class="col-md-4 mt-3 pl-2">
                <img src="../assets/img/<?= $vga["img"]; ?>">
            </div>
            <div class="col-md-8">
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
    </div>
    </body>
    </html>