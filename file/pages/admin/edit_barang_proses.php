<?php
if(isset($_POST['submit'])){
	
	
	include "../../config/connection.php";
	
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $harga_laundry = $_POST['harga_laundry'];

	
	$queryupdate = "UPDATE barang SET nama_barang='$nama_barang', jenis_barang='$jenis_barang', harga_laundry='$harga_laundry' WHERE id_barang='$id_barang'";
	$update = mysqli_query($connection,$queryupdate);
	
	if($update){
		echo'Data berhasil di rubah';
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