<?php

if(isset($_GET['id_user'])){
	
	include "../../config/connection.php";
	
	$id_user = $_GET['id_user'];
    
    $query = "SELECT id_user FROM user WHERE id_user='$id_user'";
	$result = mysqli_query($connection,$query);
	
	if(mysqli_num_rows($result) == 0){
		echo '<script>window.history.back()</script>';
	
	}else{
        $query2= "DELETE FROM user WHERE id_user='$id_user'";
		$del = mysqli_query($connection,$query2);
		
		if($del){
			echo 'Data berhasil di hapus! ';		
            header("location:pelanggan.php");
			
		}else{
			
			echo 'Gagal menghapus data! ';		
            echo '<a href="pelanggan.php">Kembali</a>';	
            //header("location:pelanggan.php");	
		
		}
		
	}
	
}else{
	
	//redirect atau dikembalikan ke halaman beranda
	echo '<script>window.history.back()</script>';
	
}
?>