<?php
$password=$_POST['password'];
$user=$_POST['user'];
if (empty($user) || empty($password)){
    header("location:index.html");
    exit();
}
$con=mysql_connect("localhost","root","")or die ("problemas al conectar con el servidor");
$result=mysql_select_db("proyectoprogramcion3",$con)or die ("problemas al conectar con al base de datos");
$sel=mysql_query("SELECT user,password FROM jefe WHERE user='$user'",$con);
if ($seccion=mysql_fetch_array($sel)){
    if ($seccion['password']==$password){
        session_start();
        $_SESSION['user']=$user;
        header("location:form.php");
    }else{
        header("location:index.html");
        exit();
    }
}else{
    header("location:index.html");
    exit();
}
?>
