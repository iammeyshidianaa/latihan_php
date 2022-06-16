<?php

//connection parameter
$sname      = "localhost";
$uname      = "root";
$password   = "";

//Koneksi
$KMS  = new mysqli($sname, $uname, $password);
//Connection Check
if($KMS->connect_error) {
    die("Resonance Cascade Imminent". $XEN->connect_error);   
}   else{
    echo "Connected";
}
//kode di atas digunakan untuk memeriksa koneksi antara php dan mysql
 


?>