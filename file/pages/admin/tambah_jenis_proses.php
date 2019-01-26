<?php

if(isset($_POST['submit'])){
	include "../../config/connection.php";
	
    $jenis_barang = $_POST['jenis_barang'];
   
   
    
    $query= "insert into jenis_barang values(null,'$jenis_barang')";
	$input = mysqli_query($connection,$query);

	if($input){
		echo'Data berhasil di tambahkan';
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