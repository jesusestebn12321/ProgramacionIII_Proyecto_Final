<?php
$cedula=$_POST['cedula'];

if (empty($cedula) ){
    header("location:index.html");
    exit();
}
$con=mysql_connect("localhost","root","")or die ("problemas al conectar con el servidor");
$result=mysql_select_db("proyectoprogramcion3",$con)or die ("problemas al conectar con al base de datos");
$sel=mysql_query("SELECT cedula FROM empleado WHERE cedula='$cedula'",$con);
if ($seccion=mysql_fetch_array($sel)){
    if ($seccion['cedula']==$cedula){
        session_start();
        $_SESSION['name']=$name;
        header("location:empleado.php");
    }else{
        header("location:index.html");
        exit();
    }
}else{
    header("location:index.html");
    exit();
}
?>