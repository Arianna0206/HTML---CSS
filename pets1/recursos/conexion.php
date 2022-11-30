<?php
include("config.php");
$conexion= new mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
if(!$conexion){
	echo"hay un error de conexion en la db";
}
/*
$conexion = new mysqli("127.0.0.1", "root","","81","petsdb");
echo "hola";
if (!$conexion) {
echo "hay un error de conexion a la db";
}else{
	echo "si se conecto :)";
}*/

?>