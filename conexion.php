<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="prototipo";

$conectar=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$conectar) {
	die("No hay conexion: ".mysqli_connect_error());
}


?>