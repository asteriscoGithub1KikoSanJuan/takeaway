<?php
echo "<h1>Hola, aquí llegará el form</h1>";
//Se comprueba que llegan datos por methodo POST
if($_POST) { 
	echo "Llegan variables por post:<br>";
	echo $_POST['nombreApellido'];
	echo "<br>";
	echo $_POST['email'];
	echo "<br>";
	echo $_POST['mensaje'];
	$mysqli = new mysqli('127.0.0.1', 'root', '', 'takeaway');
	if ($mysqli){
		$sql="INSERT INTO takeaway.contactform ( nombreApellido, email, mensaje) VALUES ( 'asensio', 'asensio@gdsk', 'me comprao 20 pavos');";
		$query=mysqli->query($sql);
		if ($$query) {
			echo "se ha grabado correctamente ls informscion"
		}
		{
			echo "ha habido un problema con el registro del formulario";
		}
	}
	$mysqli->close();
	}
	else { 
	echo "No llega nada por post";
	}
?>