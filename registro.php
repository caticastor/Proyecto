<?php 

include("conexion.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['telefono']) >= 1) {
	    $name = trim($_POST['telefono']);
	    $consulta = "INSERT INTO datos VALUES ('$name')";
	    $resultado = mysqli_query($con,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h1>Guardado correctamente</h1>
           <?php
	    } else {
	    	?> 
	    	<h1>Intente de nuevo</h1>
           <?php
	    }
    }   else {
	    	?> 
	    	<h1>No pued dejar el campo vacio</h1>
           <?php
    }
}

?>