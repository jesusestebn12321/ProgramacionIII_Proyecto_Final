

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Comentarios</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    	

		<header class="app-header">
          <nav class="navbar app-navbar">
            <div class="container">

              <div class="navbar-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                      <button class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                        <span class="icon-bar app-icon"></span>
                        <span class="icon-bar app-icon"></span>
                        <span class="icon-bar app-icon"></span>
                        <span class="icon-bar app-icon"></span>                                      
                        </button>
                        <a href="#" class="navbar-brand app-link">Comentario</a>
                      </div>
                      <div class="col-xs-12 col-sm-6">
                      <img src="img/logo.png" class="img-responsive app-logo" alt="logo">
                    </div>
                
                </div>
              </div>
              <div class="collapse navbar-collapse" id="menu">
                  <ul class="nav navbar-nav navbar-right app-nav">
                      <li class="app-enlaces"><a href="form.php">Inicio</a></li>
                  </ul>
                </div>
              </div>
            </nav>



          <section class="app-section1">
            <h2 class="app-titulo"><span class="app-resaltar">Empleados</span> Amonestados</h2>
           </section>
		
  		<section class="app-section2">
  			<div class="container">
  	    		<p class="app-descripcion">Lista de los Empleados Que No Asistieneron <span class="app-resaltar">HOY!!!</span></p>
                   
  	           	<?php 

  				$con=mysql_connect("localhost","root","") 
  				or die ("problemas al conectar con el servidor");
  				mysql_select_db("proyectoprogramcion3",$con);
  				$regi= mysql_query("SELECT * FROM empleado WHERE hora='0'");
  				echo "
  					<table class='table table-bordered app-tabla'>
  		           		<thead>
  			           		<tr>		
  			           			<th>#</th>         
                        <th>Nombre</th>  			 
  			           			<th>Cedula</th>
  			           			<th>Asistencias</th>
  			           			<th>Comentarios</th>
                        <th></th>
  			           		</tr>
  		           		</thead>
  		           		<tbody>";
            $con=1;

  				while ($reg=mysql_fetch_array($regi)) {
  					echo "
  						    <tr>
                    <form action='Aggcomentario.php' name='comentario' method='POST'>	
    			           	<td>",$con++,"</td>
                      <td>",$reg['name'],"</td>
    			       			<td>",$reg['cedula'],"</td>
    			       			<td>","INACTIVO","</td>
    		        			<td>",$reg['comentario'],"</td>
                      <td>","
                      <input type='text' name='comentario' placeholder='Comentarios' class='app-input form-control'>
  
                      <button type='submit' name='boton' value=",$reg['cedula']," class='btn btn-primary app-btn1 btn-block'>
                      <span class='glyphicon glyphicon-bookmark'></span>Añadir</button> 
                       
                    </form> </td>
 		           		</tr>";

  				}
  				echo "</tbody>
  				</table>";
  	           	?>
  	           	
             </div>
  		</section> 
         
    </header>
    
	<footer class="app-footer">
            <div class="app-empresa">
                <h4>K4ing</h4>
                <p class="app-descripcion2">Contactanos por <br> <span class="app-resaltar">Jesus Villalta <br>CI: 25.237.118</span></p>

            </div>
            <a href="#"><img src="img/png/facebook-logo.png" class=" app-icon1"></a>
            <a href="#"><img src="img/png/instagram-symbol.png" class=" app-icon1"></a>
            <a href="#"><img src="img/png/twitter-black-shape.png" class=" app-icon1"></a>
  	</footer>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>