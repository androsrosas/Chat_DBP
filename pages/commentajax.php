<?php
$servidor='localhost';
$usuario='root';
$password='';
$base_datos='mychat';

$conexion = new mysqli($servidor, $usuario, $password, $base_datos);

$db=mysqli_select_db($databasename);

if(isset($_POST['user_comm']) && isset($_POST['user_name']))
{
  $comment=$_POST['user_comm'];
  $name=$_POST['user_name'];
  $insert=$conexion->query("insert into comments (name,comment,post_time) values('$name','$comment',CURRENT_TIMESTAMP)");
}

?>