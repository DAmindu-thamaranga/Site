<?php
   include("dbcon.php");
   session_start();
   
   $user = $_SESSION['login_user'];
   
   /*$ses_sql = mysqli_query($conn,"select username from admin where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];*/
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>