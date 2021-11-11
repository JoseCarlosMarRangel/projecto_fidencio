<?php

require 'conexion.php';


$nombre = $_POST['NombreE'];
$pass = $_POST['NumeroE'];

date_default_timezone_set('America/Mexico_City');
$fecha_actual=date("Y-m-d H:i:s");


	$insertar="INSERT INTO asistencia VALUES('$pass','$nombre','$fecha_actual')";

	$query = mysqli_query($conectar,$insertar);

	if($query){

		echo "Correcto";

	}else{

		echo "Incorrecto";

	}





