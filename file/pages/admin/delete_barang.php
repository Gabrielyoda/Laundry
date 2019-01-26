<?php

if(isset($_GET['id_barang'])){
	
	include "../../config/connection.php";
	
	$id_barang = $_GET['id_barang'];
    
    $query = "SELECT id_barang FROM barang WHERE id_barang='$id_barang'";
    $result = mysqli_query($connection,$query);
    
	
	if(mysqli_num_rows($result) == 0){
		echo '<script>window.history.back()</script>';
	
	}else{
        $query2= "DELETE FROM barang WHERE id_barang='$id_barang'";
		$del = mysqli_query($connection,$query2);
		
		if($del){
			echo 'Data berhasil di hapus! ';		
            header("location:barang.php");
			
		}else{
			
			echo 'Gagal menghapus data! ';		
            echo '<a href="barang.php">Kembali</a>';	
            //header("location:pelanggan.php");	
		
		}
		
	}
	
}else{
	
	//redirect atau dikembalikan ke halaman beranda
	//echo '<script>window.history.back()</script>';
	
}
?>