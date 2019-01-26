<?php
include "../../config/connection.php";

session_start();
if($_SESSION['username'] ==null){
    header("location:../login/login.php");
}

//UBAH PROFIL
if(isset($_POST["edit"]))
{
    $nama_user          = $_POST['nama_user'];   
    $no_telp            = $_POST['no_telp'];
    $alamat             = $_POST['alamat'];
    

    $cek = mysqli_query($connection,"UPDATE user SET nama_user='$nama_user', no_telp='$no_telp', alamat='$alamat' WHERE username='".$_SESSION['username']."'");
    
    if($cek) 
    {
        echo '  <script type="text/javascript">
                alert("Berhasil mengubah Data.");
                document.location="profile_admin.php";</script>   ';
    }
    else
    {
        echo '  <script type="text/javascript">
                alert("Gagal mengubah Data.");
                document.location="profile_admin.php";</script>   ';
    }
}
// UBAH PASSWORD

$connection->close();
?>