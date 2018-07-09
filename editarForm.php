<?php 

	$boton=$_POST['boton'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];

	$con=mysql_connect("localhost","root","") or die ("problemas al conectar con el servidor");
	mysql_select_db("proyectoprogramcion3",$con);
	
	if (isset($nombre) && !empty($nombre) &&
	isset($apellido) && !empty($apellido) &&
	isset($correo) && !empty($correo) && 
	isset($telefono) && !empty($telefono)) {
	
		
		mysql_query("UPDATE empleado SET name='$nombre', last='$apellido',email='$correo',phone='$telefono' WHERE cedula='$boton'");				
		header("location:editar.php");
	}else{
		header("location:editar.php");
		echo "problemas al registrar datos";
			 
	}
			
?>