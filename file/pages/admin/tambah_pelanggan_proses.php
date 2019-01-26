<?php

if(isset($_POST['submit'])){
	include "../../config/connection.php";
	
    $username = $_POST['username'];
    
	$password = $_POST['password'];
	$nama_user = $_POST['nama_user'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $level = '2';
   
    
    $query= "insert into user values(null,'$username', '$password', '$nama_user', '$alamat', '$no_telp','$level')";
	$input = mysqli_query($connection,$query);

	if($input){
		echo'Data berhasil di tambahkan';
		header("location:pelanggan.php");
	}
	else{
		echo'Gagal input data';
		header("location:tambah_pelanggan.php");
}

}else{
	echo'<script>window.history.back()</script>';
}

?>