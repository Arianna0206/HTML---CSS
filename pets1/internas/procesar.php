<?php

/*
$var1=10;
$var2="2";
@$res=$var1+$var2;
echo "<strong>hola mundo<br> :)</strong>" .$res;*/
<?php
// se llama primero a la conexion

/*
$var1=10;
$var2="2";
@$res=$var1+$var2;
echo "<strong>hola mundo<br> :)</strong>" .$res;*/

// extract($_POST);

//Tips de seguridad

include("../recursos/conexion.php");
include("../recursos/config.php");
include("../recursos/class_mysqli.php");
$miconexion= new class_mysqli();
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
/*
$nombres=$_POST["nombres"];
$apellidos=$_POST["apellidos"];
$correo=$_POST["correo"];
$cedula=$_POST["cedula"];
$telefono=$_POST["telefono"];
$fechaNacimiento=$_POST["fechaNacimiento"];
$direccion=$_POST["direccion"];


//echo "Bienvenido" .$nombres." ".$apellidos."<br>";

$sql = "insert into personal values('','$nombres','$apellidos', '$correo','$direccion',$fechaNacimiento','$telefono','$cedula')";

//$sql = "delete from personal where id=5";

//$sql = "update personal set nombres='Daniela', apellidos='Pardo' where id=7";

$resSQL=$miconexion->consulta($sql);
if($resSQL==""){
	echo "Problemas de ejecución del SQL";
} else{
	echo '<script>alert("Sentencia ejecutada.."); </script>';
	echo "<script>location.href='../'</script>";
}*/

 	include("../recursos/config.php");
 	include("../recursos/class_mysqli.php");
 	$miconexion= new class_mysqli();
 	$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$cedula=$_POST['cedula'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	$fechaNacimiento=$_POST['fechaNacimiento'];
	$correo=$_POST['correo'];

	$sql="insert into personal values('','$nombres','$apellidos','$correo','$telefono','$direccion','$fechaNacimiento')";
	//$sql="delete from personal where id=5";
	//$sql="update personal set nombres='Daniela', apellidos='Pardo' where id=7";

	$resSQL=$miconexion->consulta($sql);
	if ($resSQL=="") {
		echo "Problemas de ejecución del SQL";
	}else{
		echo '<script>alert("Sentencia ejecutada..");</script>';
		echo "<script>location.href='../'</script>";
	}

?>