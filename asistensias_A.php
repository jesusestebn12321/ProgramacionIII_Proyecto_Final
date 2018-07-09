<?php 

	$entrada=$_POST['entrada'];
	$salida=$_POST['salida'];

	$fecha=date("Y/m/d");
	$hora=date("H:i:s");
    $status=$_POST['status'];
    $status='I';


	
	if (isset($salida) && !empty($salida)) {
		$con=mysql_connect("localhost","root","") or die ("problemas al conectar con el servidor");
		mysql_select_db("proyectoprogramcion3",$con);
         $status='A';

		mysql_query("UPDATE empleado SET hora_s='$hora',fecha_s='$fecha', status=TRUE WHERE cedula='$salida '");

		echo "El Empleado a salido de trabajo";
		
		header("location:asistensias.php");
	
			
	}else{

		$con=mysql_connect("localhost","root","") or die ("problemas al conectar con el servidor");
		mysql_select_db("proyectoprogramcion3",$con);

		mysql_query("UPDATE empleado SET CONasistensia++ hora_e='$hora',fecha_e='$fecha' WHERE cedula='$entrada'");				
		echo "El Empleado a llegado a su trabajo";
		
		header("location:asistensias.php");
		
		
	}
	
			
?>