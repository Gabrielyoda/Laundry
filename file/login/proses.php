<?php
session_start();
   require_once ("../config/connection.php");
   if(isset($_POST['submit'])){

      $username   = $_POST['username'];   
      $password   = $_POST['password'];
      $level      = $_POST['level'];

      $query ="SELECT * FROM user WHERE username='$username' AND password='$password'";
      $result = mysqli_query($connection,$query);
      if(mysqli_num_rows($result) == 0){
   ?>
    <script type="text/javascript">
      alert("Data belum terdaftar, silahkan daftar ulang!");
       document.location="login.php";
    </script> 
<?php
      }else{
         $row = mysqli_fetch_array($result);
         if($row['level'] == 1 && $level == 1){
           session_start();
            $_SESSION['username']=$username;
            $_SESSION['level']='Admin';
            header("Location:../pages/admin/index.php");

         }else if($row['level'] == 2 && $level == 2){
            session_start();
            $_SESSION['username']=$username;
            $_SESSION['level']='Pelanggan';
            header("Location:../pages/pelanggan/index.php");

         }
         else if($row['level'] == 3 && $level == 3){
         session_start();
         $_SESSION['username']=$username;
         $_SESSION['level']='Owner';
         header("Location:../pages/owner/index.php");

      } else {
      ?>
       <script type="text/javascript">
         alert("Login Gagal");
         document.location="login.php";
       </script>
      <?php
         }
      }
   }
?>