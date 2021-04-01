<?php
// Paiz Abdul Jabar
// 203040108
// shif Kamis 08.00 - 09.00
?>

<?php
    function tumpukanBola($tumpukan){
        for ($x = 1; $x <= $tumpukan; $x++) {
            for ($j = 1; $j <= $x; $j++) {
                echo "<div class='bola'>  $x  </div>";
            }
            
            echo "<br>";
        } 
    }
?>
    
    <!doctype html>

    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Latihan2b_203040108</title>
        <style>
        .bola{
            width: 55px;
            height: 55px;
            margin: 2px;
            display: table-cell;
            text-align: center;
            vertical-align: middle;
            border:2px solid black;
            border-radius: 50%; 
            background: salmon;
            line-height: 50px;
        }

        .line {
            border: 2px solid black;
            padding: 13px;
            width: 320px;
        }
        </style>
    </head>
    
    <body>
        <div class="line">
            <?php tumpukanBola(5) ?>
        </div>
    </body>
    </html>