<?php
session_destroy(); 
$_SESSION['user'];
header("location:index.html");
session_destroy(); 
 ?>