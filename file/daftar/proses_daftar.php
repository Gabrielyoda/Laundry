<?php
include '../config/connection.php';
 
if(isset($_POST['register'])){
    $username     = $_POST['username'];
    $nama         = $_POST['nm_pegawai'];
    $agama        = $_POST['agama'];
    $telp         = $_POST['no_telp'];
    $password     = $_POST['password'];
 
    // query insert data ke database dalam tabel anggota
    $query = "INSERT INTO pegawai (username, nm_pegawai, agama, no_telp, password, level) values('$username','$nama','$agama','$telp','$password','2')";
    if(mysqli_query($connection, $query)){
        header("Location: ../daftar/daftar_pegawai.php");
    }else{
        echo "Tambah data gagal";
    }
}
 
mysqli_close($connection); // menutup koneksi ke database
?>