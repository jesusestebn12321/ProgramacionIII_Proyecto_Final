<?php
    $password=$_POST['password'];
    $user=$_POST['user'];
    $password_a=$_POST['password_a'];
    $user_a=$_POST['user_a'];
    
    
    if (isset($user) && !empty($user) &&
	isset($user_a) && !empty($user_a) &&
	isset($password) && !empty($password) && 
	isset($password_a) && !empty($password_a)){
        
        $con=mysql_connect("localhost","root","") or die ("problemas al conectar con el servidor");
        mysql_select_db("proyectoprogramcion3",$con);
    
        
        mysql_query("UPDATE jefe SET password='$password', user='$user'  ");	

        header("location:form.php");
   
    }else{
        header("location:vistacambiaPS.php");
        
    }



?>