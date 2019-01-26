<?php

if(isset($_GET['id_daftar_pesanan'])){
	
	include "../../config/connection.php";
	
	$id_daftar_pesanan = $_GET['id_daftar_pesanan'];
    
    $query = "SELECT*FROM daftar_pesanan WHERE id_daftar_pesanan='$id_daftar_pesanan'";
	$result = mysqli_query($connection,$query);
	
	if(mysqli_num_rows($result) == 0){
		//echo '<script>window.history.back()</script>';
	
	}else{
        $query2= "UPDATE daftar_pesanan SET status='selesai' where id_daftar_pesanan='$id_daftar_pesanan'";
		$del = mysqli_query($connection,$query2);
		
		if($del){
			echo 'Data berhasil di hapus! ';		
            header("location:daftar_pesanan.php");
			
		}else{
			
			echo 'Gagal menghapus data! ';		
            echo '<a href="daftar_pesanan.php">Kembali</a>';	
            //header("location:pelanggan.php");	
		
		}
		
	}
	
}else{
	
	//redirect atau dikembalikan ke halaman beranda
	echo '<script>window.history.back()</script>';
	
}
?>