<?php
if(isset($_POST['submit'])){
	
	
	include "../../config/connection.php";
	
	$id_user = $_POST['id_user'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$nama_user = $_POST['nama_user'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];	
	
	$queryupdate = "UPDATE user SET username='$username', password='$password', nama_user='$nama_user' , alamat='$alamat', no_telp='$no_telp' WHERE id_user='$id_user'";
	$update = mysqli_query($connection,$queryupdate);
	
	if($update){
		echo'Data berhasil di rubah';
		header("location:pelanggan.php");
	}
	else{
		echo'Gagal input data';
		//header("location:tambah_pelanggan.php");
}

}else{
	echo'<script>window.history.back()</script>';
}

?>