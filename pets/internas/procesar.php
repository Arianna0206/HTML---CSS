<?php

/*
$var1=10;
$var2="2";
@$res=$var1+$var2;
echo "<strong>hola mundo<br> :)</strong>" .$res;*/

// extract($_POST);

//Tips de seguridad
$nombres=$_POST["nombres"];
$apellidos=$_POST["apellidos"];
$correo=$_POST["correo"];
$cedula=$_POST["cedula"];
$telefono=$_POST["telefono"];
$fechaNacimiento=$_POST["fechaNacimiento"];
$direccion=$_POST["direccion"];

echo "Bienvenido" .$nombres." ".$apellidos."<br>";

?>