<?php
require_once "connection2.php"; //refering to connection2.php 

//membuat query untuk menampilkan data dari tabel database "portrait_gallery" . Dalam hal ini tabel "album"

$sql    = "SELECCT * FROM album";
$result = $DMS->query($sql);//menjalankan query $sql

//menampilkan data
if($result->num_rows > 0){
    echo "<table border=1>";
    echo "<tr>";
    echo "<th>ID</th> <th>Name</th>";
    echo "</tr>";
    while($row = $result->fetch_assoc()){
        echo "<tr><td>". $row['ID'] . "</td><td>" . $row['Title'] ."</td><td>". $row['Description']. "</td><td>". $row['view'] ."</td></tr>";


      
    }  
    echo "</table>";
} else {
    echo "No Result";
}

$DMS->close();

?>