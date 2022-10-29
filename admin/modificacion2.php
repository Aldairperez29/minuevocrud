<?php
$id=(isset($_POST['id']))?$_POST['id']:"";
$username=(isset($_POST['username']))?$_POST['username']:"";
$email=(isset($_POST['email']))?$_POST['email']:"";
$password=(isset($_POST['password']))?$_POST['password']:"";
$role=(isset($_POST['role']))?$_POST['role']:"";

$conexion = mysqli_connect("brqtsrvrusqj5uu64yea-mysql.services.clever-cloud.com", "uo18mggzks4harva", "rZ6Mem73aHqENmuqLYxn", "brqtsrvrusqj5uu64yea") or
die("Problemas con la conexión");
 
    $respuesta =mysqli_query($conexion," UPDATE mainlogin SET `username`='$username',`email`='$email',`password`='$password',`role`='$role'
     WHERE id=$id");   

header ("location:admin_portada.php");

?>