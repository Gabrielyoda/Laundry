<?php
if(isset($_POST['submit'])){
	
	
	include "../../config/connection.php";
	
    $id_jenis = $_POST['id_jenis'];
    $jenis_barang = $_POST['jenis_barang'];
		
	
	$queryupdate = "UPDATE jenis_barang SET jenis_barang='$jenis_barang' WHERE id_jenis='$id_jenis'";
	$update = mysqli_query($connection,$queryupdate);
	
	if($update){
		echo'Data berhasil di rubah';
		header("location:jenis.php");
	}
	else{
		echo'Gagal input data';
		header("location:jenis.php");
}

}else{
	echo'<script>window.history.back()</script>';
}

?>