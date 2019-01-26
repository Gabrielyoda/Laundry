<?php

   $host       = "localhost";
   $username   = "root";
   $password   = "";
   $database   = "laundry_web";
   $connection   = mysqli_connect($host, $username, $password, $database);

if(!$connection){
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>