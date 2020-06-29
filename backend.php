<?php 
	if(isset($_GET)) {
		$nombre = $_GET["nombre"];
		$apellido = $_GET["apellido"];

		echo "BIENVENIDO" . "\t";
		echo "$nombre \t $apellido";
	}
?>