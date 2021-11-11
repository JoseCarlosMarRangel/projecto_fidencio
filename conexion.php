<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="prototipo";

$conectar=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$conectar) {
	die("No hay conexion: ".mysqli_connect_error());
}

//echo "Conectado a la base de datos $bd <br/>";

function validar_asistencia_bd($dbuser,$dbpass,$conectar){
	$query = "select 1 as user_Valido from asistencia where usuario='$usuario' and contrasena=MD5('$contrasena')";
    //echo $query . '<br/>';
    $resultado = mysqli_query($conectar, $query) or die('Error al ejecutar la consulta');
    if(mysqli_num_rows($resultado)==0){
        return false;
    } else{
        return true;
    }
}

?>