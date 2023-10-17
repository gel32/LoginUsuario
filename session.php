<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select NOMBRE, APELLIDO from PERSONAS where CORREO = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $nombre = $row['NOMBRE'];
   $apellido = $row['APELLIDO'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>

