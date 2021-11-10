<<<<<<< HEAD
<?php
require 'conexion.php';

$numero = $_POST['NumeroE'];
$nombre = $_POST['NombreE'];


date_default_timezone_set('America/Mexico_City');
$fecha_actual=date("Y-m-d H:i:s");

$insertar = "INSERT INTO asistencia VALUES('$numero','$nombre','fecha_actual')";

$query = mysqli_query($conectar,$insertar);

if($query){

	echo "<script> alert ('correcto');<script>";

}else{

	echo "<script> alert('incorrecto');<script>";

}

=======
<?php
require 'conexion.php';

$numero = $_POST['NumeroE'];
$nombre = $_POST['NombreE'];


date_default_timezone_set('America/Mexico_City');
$fecha_actual=date("Y-m-d H:i:s");

$insertar = "INSERT INTO asistencia VALUES('$numero','$nombre','fecha_actual')";

$query = mysqli_query($conectar,$insertar);

if($query){

	echo "<script> alert ('correcto');<script>";

}else{

	echo "<script> alert('incorrecto');<script>";

}

>>>>>>> a909d36dd7ff28c219ee569e718aaafa4d369934
?>