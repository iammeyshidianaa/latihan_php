<?php

//Array => 1 Dimensi dengan indeks (Indexed Array)
echo "<h2>Indexed Array</h2>";

echo "<br>";

$platform = array("PlayStation", "Xbox", "Nintendo", "PC");

echo "I use ". $platform[0] ." to play games many years ago, now I use ". $platform[3] ." to play games.";

echo "<br>";

//Mencetak seluruh element Array / Menghitung panjang arrray
$LAR = count($platform);
echo "<br> Panjang array Platform adalah $LAR elemen";

echo "<br>Anggota / element array platform adalah : ";

for($i = 0; $i < $LAR; $i++){
    echo "<br>" . $platform[$i] . "<br>";
}

echo "<br>";

//Associative Array
echo "<h2><br>Associative Array<br></h2>";

$pos = array("S" => "100", "A" => "90", "C" => "85", "D" => "70");

echo "Saya mendapatkan nilai " . $pos['A'] . "<br>";

foreach($pos as $i => $val){
    echo "Key= ".$i. ", Value=".$val;
    echo "<br>";
}

//Multidimension Array
echo "<h2><br>Array MultiDimensi<br></h2>";

$m = array(
    array("A++", 70, 22),
    array("A+", 221, 24),
    array("A", 55, 23)
);

echo "Produk ini berkualitas ".$m[1][0]. " dibanding produk dengan kualitas ". $m[1][1] . " dan ". $m[1][2];

for($B = 0; $B < 3; $B++){
    echo "<ul>";
    for($K = 0; $K < 3;$K++){
        echo "<li>". $m[$B][$K] . "</li>";
    }
    echo "</ul>";
}

?>