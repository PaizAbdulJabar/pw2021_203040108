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
<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!-- my CSS -->
    <link rel="stylesheet" href="css/style2.css">
    <title>203040108</title>
    <style>
        .button {
            background-color: #a7dbd8;
        }
        .nama {
            width: 120px;
        }
        body {
            background: cyan;
        }
        .h1 {
            text-align: center;
        }
        .card{
            border: 1px solid black;
            display: block;

        }
    </style>
</head>
<body>
    <!-- navbar -->
    <div class="navbar-fixed">
            <nav class="cyan">
                <div class="container">
                <div class="nav-wrapper">
                <a href="#home" class="brand-logo">DUNIA KOMPUTER</a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#about us">About Us</a></li>
                    <li><a href="#produk">Produk</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                    <li><a href="php/login.php" a class="waves-effect blue btn">Login</a></a></li>
                    <li><a href="php/registrasi.php" a class="waves-effect blue btn">Daftar</a></a></li>
                </ul>
                </div>
            </div>
            </nav>
            </div>

    <!-- sidenav -->
    <ul class="sidenav" id="mobile-nav">
        <li><a href="#about us">About Us</a></li>
        <li><a href="#produk">Produk</a></li>
        <li><a href="#contact">Contact Us</a></li>
    </ul>

    <!-- slider -->
    <div class="slider">
    <ul class="slides">
        <li>
            <img src="assets/img/slider/1.jpg"> <!-- random image -->
            <div class="caption center-align">
            <h3>Welcome to Dunia Komputer</h3>
            <i class="medium material-icons">star star star star star</i>
            </div>
        </li>
        <li>
            <img src="assets/img/slider/2.jpg"> <!-- random image -->
            <div class="caption right-align">
            <h3>Mari Upgrade vga mu</h3>
            </div>
        </li>
        <li>
            <img src="assets/img/slider/3.jpg"> <!-- random image -->
            <div class="caption left-align">
            <h3>Bersama Kami</h3>
            </div>
        </li>

        </ul>
    </div>

    <!-- About Us -->
    <section id="about us" class="about scrollspy">
        <div class="container">
            <div class="row">
                <h3 class="center light grey-text text-darken-3">About Us</h3>
                <div class="col m6 light">
                    <h5>Dunia Komputer</h5>
                    <p>Dunia Komputer menghadirkan produk-produk dari brand-brand terkenal seperti Asus, Gigabyte, Zotac.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- produk -->
    <section id="produk" class="produk grey lighten-3 scroollspy">
    <div class="container mt-3">
        <h3 class="center light grey-text">Daftar Produk Vga</h3>
            <?php foreach ($vga as $row) : ?>
            <div class="cards">
                <div class="card"></div>
                    <br>
                    <img src="assets/img/<?= $row['img']; ?>" alt="" width="80px">
                    <br>
                    <p class="nama">
                            <a href="php/detail.php?id=<?= $row['id'] ?>">
                                <?= $row["nama"] ?>
                            </a>
                        </p>
            <?php endforeach; ?>
            </div>
            </div>
    </div>
    </section>

    <!-- contact us -->
    <section id="contact" class="contact grey lighten-3 scrollspy">
        <div class="container">
            <h3 class="light grey-text text-darken-3 center">Contact Us</h3>
            <div class="row">
                <div class="col m5 s12">
                    <div class="card-panel cyan center white-text">
                        <i class="material-icons">email</i>
                        <h5>Contact</h5>
                        <p>Bila Anda ingin langsung membeli ke toko kami pergilah ke alamat dibawah ini.</p>
                    </div>
                    <ul class="collection with-header">
                        <li class="collection-header"><h4>Toko Kami</h4></li>
                        <li class="collection-item">DUNIA KOMPUTER</li>
                        <li class="collection-item">Mangga Dua Mall Lt.3 No. 31-32 Jakarta Pusat 10730</li>
                        <li class="collection-item">Dki Jakarta, Indonesia</li>
                    </ul>
                </div>

                <div class="col m7 s12">
                    <form>
                        <div class="card-panel">
                            <h5>Tolong isi formulir ini</h5>
                            <div class="input-field">
                                <input type="text" name="name" id="name" required class="validate">
                                <label for="name">Name</label>
                            </div>
                            <div class="input-field">
                                <input type="email" name="email" id="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field">
                                <input type="text" name="phone" id="phone">
                                <label for="phone">Phone Number</label>
                            </div>
                            <div class="input-field">
                                <textarea name="message" id="message" class="materialize-textarea"></textarea>
                                <label for="message">Message</label>
                            </div>
                            <button type="submit" class="btn cyan">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- footer -->
    <footer class="black-text center">
        <P class="flow-text">Copyright 2020 © CV. Sahabat Baik(DuniaKomputer)</P>
    </footer>



    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script>
        const sidenav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sidenav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
            indicators: false,
            height: 500,
            transition: 600,
            interval: 3000
        });

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
            scrollOffset: 50
        });

    </script>

</body>
</html>
