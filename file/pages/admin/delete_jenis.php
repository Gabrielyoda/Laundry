<?php

if(isset($_GET['id_jenis'])){
	
	include "../../config/connection.php";
	
	$id_jenis = $_GET['id_jenis'];
    
    $query = "SELECT id_jenis FROM jenis_barang WHERE id_jenis='$id_jenis'";
    $result = mysqli_query($connection,$query);
    
	
	if(mysqli_num_rows($result) == 0){
		echo '<script>window.history.back()</script>';
	
	}else{
        $query2= "DELETE FROM jenis_barang WHERE id_jenis='$id_jenis'";
		$del = mysqli_query($connection,$query2);
		
		if($del){
			echo 'Data berhasil di hapus! ';		
            header("location:jenis.php");
			
		}else{
			
			echo 'Gagal menghapus data! ';		
            echo '<a href="jenis.php">Kembali</a>';	
            //header("location:pelanggan.php");	
		
		}
		
	}
	
}else{
	
	//redirect atau dikembalikan ke halaman beranda
	//echo '<script>window.history.back()</script>';
	
}
?>