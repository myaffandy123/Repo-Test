<?php
$host = "localhost"; // atau "localhost"
$dbname = "dosen"; // atau "mahasiswa"
$username = "dosen";
$password = "55552222";

try{
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //echo "Koneksi sukses";
}
catch(PDOException $e){
    die('Error : '.$e->getMessage());
}

?>