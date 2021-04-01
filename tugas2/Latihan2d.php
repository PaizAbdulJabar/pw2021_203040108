<?php
// Paiz Abdul Jabar
// 203040108
// shif Kamis 08.00 - 09.00
?>

<?php
    function hitungDeterminant($a, $b, $c, $d){
        $hasil = (($a * $d) - ($b * $c));
        echo "<table style='border-left:2px solid black; border-right:2px  solid black;' cellspacing='5' cellpadding='5'>
            <tr>
                <td> $a </td>
                <td> $b </td>
            </tr>
            <tr>
                <td> $c </td>
                <td> $d </td>
            </tr>
        </table>";
        
        echo "Determinan dari matriks tersebut adalah $hasil";
    }
?>
    
    <!doctype html>

    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Latihan2d_203040108</title>
        <style>
        .teks {
            font-weight: bold;
        }
        .line {
            border: 2px solid black;
            padding: 8px;
            width: 300px;
        }
        </style>
    </head>
    
    <body>
    <div class="line">
        <div class="teks">
                <?php hitungDeterminant(1,2,3,4) ?>
        </div>
    </div>
    </body>
    </html>