<?php

require 'conexion.php';


$nombre = $_POST['NombreE'];
$pass = $_POST['NumeroE'];

date_default_timezone_set('America/Mexico_City');
$fecha_actual=date("Y-m-d H:i:s");


	$insertar="INSERT INTO asistencia VALUES('$pass','$nombre','$fecha_actual')";

	$query = mysqli_query($conectar,$insertar);
	//$resultado = mysqli_query($conectar, $query) or die('Error al ejecutar la consulta');

	if($query){

		echo "Correcto";
		$resultado = mysqli_query($conectar, $query);
		header('Location: confirmacion.php'); //* Redirigir al login
		exit;

	}else{

		echo "Incorrecto";

	}

	/*$valido = false;
    if(isset($_POST['Ingresar'])){
        $nombre = $_POST['NombreE'];
		$pass = $_POST['NumeroE'];

		date_default_timezone_set('America/Mexico_City');
		$fecha_actual=date("Y-m-d H:i:s");

        if(!valida_usuario_bd($nombre, $pass, $conectar)){
            //echo 'Registra <br/>';
            $valido = false;
            $query = "INSERT INTO asistencia VALUES('$pass','$nombre','$fecha_actual');";
            $resultado = mysqli_query($conectar, $query) or die('Error al ejecutar la consulta');
			header('Location: index.php'); //* Redirigir al login
			exit;
        } else{
            echo 'Ya existe el usuario <br/>';
            #session_start();
            #$valido = true;
            #$_SESSION['usuario_reg'] = $usuario;
            #header('Location:../index.php');
        }
    }*/
?>