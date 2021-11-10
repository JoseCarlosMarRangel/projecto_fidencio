<<<<<<< HEAD
<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="prototipo";

$conectar=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$conectar) {
	die("No hay conexion: ".mysqli_connect_error());
}


=======
<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="prototipo";

$conectar=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$conectar) {
	echo die("No hay conexion: ".mysqli_connect_error());
}else{
	echo "Conexion exitosa";
}

>>>>>>> a909d36dd7ff28c219ee569e718aaafa4d369934
?>