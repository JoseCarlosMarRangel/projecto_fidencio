<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="prototipo";

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$conn) {
	die("No hay conexion: ".mysqli_connect_error());
}


  	$conexion=mysqli_connect('localhost','root','','prototipo');
	$sql="SELECT numero_empleado,nombre_empleado from asistencia_empleado";
	$result=mysqli_query($conexion,$sql);

?>



<style >
	
	input[type=submit]{
		border: none;
			 background: #755d45;
    		cursor: pointer;
    		border-radius: 3px;
    		padding: 6px;
    		width: 200px;
    		color: white;
    		margin-left: 0;
    		box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.2);
    		margin-top: 10px;
    		margin-bottom: 10px;
    		margin-left: 490px;
	}
</style>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="select2/select2.min.css">
	<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
	
	<script src="select2/select2.min.js"></script>
	
	<meta charset="utf-8">
	
	<title>Registro de asistencia </title>
	
	<link rel="stylesheet" type="text/css" href="estilo2.css">
	
	<link rel="stylesheet" type="text/css" href="estilo.css">

</head>
<body>

	<h1 id="titulo">Registro de asistencia general</h1>





		
	





	<div id="resultado-q">
	
	</div>


	
		
	<div id="main-container">
	<table border="2">





		<thead>
		<tr>
			<td>Numero de empleado </td>
			<td>Nombre del empleado </td>
			<td>Hora de registro</td>
			<td>Hora oficial</td>
		</tr>
        </thead>
        <?php 

        $sql="SELECT * FROM asisten";
        $result=mysqli_query($conn,$sql);

        while ($mostrar=mysqli_fetch_array($result)) {
        
        ?>

		<tr >
			<td width="100px" height="50px"><?php echo $mostrar['numero_empleado']?></td>
			<td width="550px;"><?php echo $mostrar['nombre_empleado']?></td>
			<td><?php echo $mostrar['hora_registro']?></td>
			<td><?php echo $mostrar['hora_oficial']?></td>
		</tr>

		<?php 

		  }

		 ?>

	</table>

	
	</table>
	</div>

	<form action="index.html" method="POST" >
		<input type="hidden" name="Mostrar" >
		<input type="submit" value="Salir" style="margin-left: 500px; background-color:#EE5341; margin-bottom: 40px; margin-top: 50px; margin-right: 10px; text-align: 50px;">



		<form action="index.html" method="POST" id="myForm" >
		<input type="hidden" name="Mostrar" >
		<input type="submit" value="Descargar" >
		</form>

	


	

</body>
</html>

