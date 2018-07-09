<?php 
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$cedula=$_POST['cedula'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];
	if (isset($nombre) && !empty($nombre) &&
isset($apellido) && !empty($apellido) &&
isset($cedula) && !empty($cedula) &&
isset($correo) && !empty($correo) && 
isset($telefono) && !empty($telefono)){
	$con=mysql_connect("localhost","root","") or die ("problemas al conectar con el servidor");
	mysql_select_db("proyectoprogramcion3",$con);
	mysql_query("INSERT INTO empleado (name,last,cedula,email,phone) VALUES ('$nombre','$apellido','$cedula','$correo','$telefono')",$con);
	header("location:form.php");
	echo "Registro exitoso";		
	}else{
		header("location:form.php");
	}
	
 ?>