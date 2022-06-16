<?php

$sname      = "localhost";
$uname      = "root";
$password   = "";
$dbname     = "galeri";//nama database yang dipakai

$IMD = new mysqli($sname, $uname, $password);

if ($IMD->connect_error){
    die("Nggak konek". $IMD->connect_error);
}   else{
    echo "CONNECTED  <br>";
}


?>