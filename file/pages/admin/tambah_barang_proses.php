<?php

if(isset($_POST['submit'])){
	include "../../config/connection.php";
	
    $nama_barang = $_POST['nama_barang']; 
	$jenis_barang = $_POST['jenis_barang'];
	$harga_laundry = $_POST['harga_laundry'];
   
    $query= "insert into barang values(null,'$nama_barang', '$jenis_barang', '$harga_laundry')";
	$input = mysqli_query($connection,$query);

	if($input){
		echo'Data berhasil di tambahkan';
		header("location:barang.php");
	}
	else{
		echo'Gagal input data';
		header("location:barang.php");
}

}else{
	echo'<script>window.history.back()</script>';
}

?>