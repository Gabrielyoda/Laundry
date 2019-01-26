<?php


if(isset($_POST['submit'])){
	include "../../config/connection.php";
	
    $id_user = $_POST['id_user'];
    
    $no_pesanan = $_POST['no_pesanan'];
    $tanggal = $_POST['tanggal'];

    $status = 'belum selesai'; 
    $query= "insert into daftar_pesanan values(null,'$id_user', '$no_pesanan', '$tanggal','$status')";
	$input = mysqli_query($connection,$query);

	if($input){
		echo'Data berhasil di tambahkan';
		header("location:daftar_pesanan.php");
	}
	else{
		echo'Gagal input data';
		header("location:daftar_pesanan.php");
}

}else{
	//echo'<script>window.history.back()</script>';
}

?>