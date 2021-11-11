<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="prototipos";

$conectar=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$conectar) {
	echo die("No hay conexion: ".mysqli_connect_error());
}else{
	echo "Conexion exitosa";
}
?>