<?php
// Paiz Abdul Jabar
// 203040108
// shif Kamis 08.00 - 09.00
?>

<?php
    $jawabanIsset = "Isset adalah = untuk menyatakan variabel sudah diset atau tidak. Jika variabel sudah diset makan variavel akan mengembalikan nilai true, sebaliknya akan bernilai false. <br><br>";
    $jawabanEmpty = "Empty adalah = untuk memerikasa apakah variabel form tidak dikirim atau tidak berisi data alias kosong. berbeda denagn isset(), yang mengembalikan nilai false pada variabel yang di-unset, empty() akan mengembalikan nilai true.";
    
    function soal($style){
        echo $GLOBALS['jawabanIsset'];
        echo $GLOBALS['jawabanEmpty'];
    }
    
    
    echo soal( 
        "font-family: Arial; font-size:28px; color:#8c782d; font-style:italic; font-weight: bold;"
    );

?>
