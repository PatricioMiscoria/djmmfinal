<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['instagram']) >= 1 && strlen($_POST['email']) >= 1  && strlen($_POST['celular']) >= 1) {
	    $name = trim($_POST['name']);
		$instagram = trim($_POST['instagram']);
	    $email = trim($_POST['email']);
		$celular = trim($_POST['celular']);
	    $fechareg = date("d/m/y");
	    
		$consulta = "INSERT INTO contactos(Nombre_Apellido, Fecha_inscripcion, Instagram, EMAIL, CEL) VALUES ('$name','$fechareg','$instagram','$email','$celular')";

	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="error">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="error">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>