<?php
include('config.php');

if (isset($_REQUEST["newreg"]))
{
  $rf=$_POST["reg_fullname"];
  $ru=$_POST["reg_username"];
  $rp=$_POST["reg_password"];

  $q="insert into user (regfullname,regusername,regpassword) values ('$rf','$ru','$rp')";
  $conexion->query($q);
  header('location:cs_chat.php');
}
?>