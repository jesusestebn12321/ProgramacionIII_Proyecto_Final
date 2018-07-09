<?php 
$con=mysql_connect("localhost","root","") or die ("problemas al conectar con el servidor");
mysql_select_db("proyectoprogramcion3",$con);
$regi=mysql_query("SELECT * FROM empleado");

$fi=fopen("archivo.txt", "a")or die ("problemas hacer el archivo txt");

fwrite($fi, "Empleados de K4ing");
fwrite($fi, "\n");
fwrite($fi, "Nombre---------Apellido-----------Cedula-------------Correo----------Telefono");

while ($reg=mysql_fetch_array($regi)) {
	fwrite($fi, $reg['name'],"---------",$reg['last'],"-----------",$reg['cedula'],"-------------",$reg['email'],"----------",$reg['phone']);

	fwrite($fi, "\n");

fclose($fi);

}

echo "archivo txt guardado con exito";
 ?>