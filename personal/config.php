<?php
/* Esta ejecutando MySQL
servidor con configuración predeterminada (usuario 'root' sin contraseña) */
define('DB_SERVER', 'brqtsrvrusqj5uu64yea-mysql.services.clever-cloud.com');
define('DB_USERNAME', 'uo18mggzks4harva');
define('DB_PASSWORD', 'rZ6Mem73aHqENmuqLYxn');
define('DB_NAME', 'brqtsrvrusqj5uu64yea');
 
 
/* Intento de conexión a la base de datos MySQL */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Verifica la conexión
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>