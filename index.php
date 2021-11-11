<!DOCTYPE html>
<html>
<head>
	
</head>
<style>
	
	table{
		border: 2px solid #353A46;
		background-color: #D1DBEC;
		}

		input[type=text],input[type=password]{

			 margin: 20px 0;
  			width: 200px;
  			display: block;
  			border: none;
  			padding: 10px 0;
 			 border-bottom: solid 1px #159098;
  			-webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
 			 transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
 			 background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #159098 4%);
 			 background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #159098 4%);
  			background-position: -200px 0;
  			background-size: 200px 100%;
  			background-repeat: no-repeat;
  			color: #159098;
		}


		input:focus, input:valid {
 			box-shadow: none;
 			outline: none;
 			background-position: 0 0;
		}


		
		input::-webkit-input-placeholder {
 			font-family: 'roboto', sans-serif;
 			-webkit-transition: all 0.3s ease-in-out;
 			transition: all 0.3s ease-in-out;
		}

		input:focus::-webkit-input-placeholder, input:valid::-webkit-input-placeholder {
 			color: #159098;
			 font-size: 11px;
 			-webkit-transform: translateY(-20px);
 			transform: translateY(-20px);
 			visibility: visible !important;
		}




		img{

			width: 100px;
			height: 100px;
		}
		
		label{

			font-size: 20px;
			font-weight: bold;
			font-family: arial;
		}

		input[type=submit]{

			border: none;
			 background: #159098;
    		cursor: pointer;
    		border-radius: 3px;
    		padding: 6px;
    		width: 200px;
    		color: white;
    		margin-left: 0;
    		box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.2);
    		margin-top: 10px;
    		margin-bottom: 10px;
		}

		form{
			margin: 50px auto;
			width: 500px;

		}

	

	

		#direccion{
			background-color: #D1DBEC;
			border:none;
			border-radius: 30px;
			font-size: 1.7em;
			padding: 10px 25px;
			outline: none;
			width: 500px;
		}

		#Nombre{
			background-color: #D1DBEC;
			border:none;
			border-radius: 30px;
			font-size: 1.7em;
			padding: 10px 25px;
			outline: none;
			width: 500px;
			margin-top: 20px;
		}

		img{
			padding: center;
			width: 100px;
			height: 150px;
		}


		button:hover{
			width: 250px;
			height: 50px;
			background-color: #5AF568;
			 -webkit-transform: translateY(-3px);
    		-ms-transform: translateY(-3px);
   			 transform: translateY(-3px);
    		box-shadow: 0 6px 6px 0 rgba(0, 0, 0, 0.2);
    		font-family: cursive;
    		color: black;
		}

		button{
			width: 200px;
			height: 50px;
			background-color: #1256C4;
			font-family: arial;
			color: white;
		}

    


		

</style>


   
	<form method="post" action="login2.php">
		
			<label style="margin-left: 130px; align-content:center; color: white; font-style: italic; font:italic 150% segoe ui; background-color: #755d45
			; padding-bottom: 2px;padding-top: 2px; padding-left:4px; padding-right:4px; ">REGISTRO DE ASISTENCIA</label>
		
	</form>

<body >
	<title>Asistencia</title>
	<form action="login5.php"  method="POST">

	    <input type="text" name="NumeroE" id="direccion" placeholder="Numero del empleado" required >
			<input type="text" name="NombreE" id="Nombre" placeholder="Inserte su nombre" required >
			<input type="submit" name="Ingresar" value="Registrar asistencia" style="margin-left: 350px; background-color: #755d45; margin-bottom: 0px; margin-top: 0px; color: white; font: italic 120% Segoe UI;" >
	</form>

	<form action="justificante.php" method="POST">
		<input type="hidden" name="Mostrar">
		<input type="submit" value="Justificante Empleado" style="margin-left: 0px; margin-right:100px; background-color: #755d45; margin-bottom: 0px; margin-top: 0xx; color: white;font: italic 120% Segoe UI" >	
	</form>

	<form action="confirmacion_admin.php" method="POST"   >
		<input type="hidden" name="Mostrar"  >
		<input type="submit" value="Administrador" style="margin-left: 1px; background-color: #755d45; margin-bottom: 0px; margin-top: 0px; color: white;font: italic 120% Segoe UI" >
	</form>



</body>
</html>