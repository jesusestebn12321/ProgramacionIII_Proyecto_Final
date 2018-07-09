<?php 
	
			$comentario=$_POST['comentario'];
			$boton=$_POST['boton'];
			
			if (isset($comentario) && !empty($comentario)){
			
				$con=mysql_connect("localhost","root","") or die ("problemas al conectar con el servidor");
			
				mysql_select_db("proyectoprogramcion3",$con);
			
				mysql_query("UPDATE empleado SET comentario='$comentario' WHERE cedula='$boton'",$con);
				echo "Añadido un comentario";
				
				header("location:comentario.php");	
			}
			else{
				echo "No has añadido un comentario";
			}

		?>