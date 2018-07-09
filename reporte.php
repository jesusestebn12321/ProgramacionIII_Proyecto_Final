<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Reporte</title>
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
                    <div class="col-xs-12 col-sm-8">
                      <button class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                        <span class="icon-bar app-icon"></span>
                        <span class="icon-bar app-icon"></span>
                        <span class="icon-bar app-icon"></span>
                        <span class="icon-bar app-icon"></span>                                      
                        </button>
                        <a href="#" class="navbar-brand app-link">Reporte</a>
                      </div>
                      <div class="col-xs-12 col-sm-4">
                      <img src="img/logo.png" class="img-responsive app-logo" alt="logo">
                    </div>
                
                </div>
              </div>
              
              <div class="collapse navbar-collapse" id="menu">
                  <ul class="nav navbar-nav navbar-right app-nav">
                      <li class="app-enlaces">
                          <a href="form.php">Inicio</a>
                      </li>
                  </ul>
              </div>

            </div>
          </nav>
          <?php 
				$con=mysql_connect("localhost","root","") 
				  or die ("problemas al conectar con el servidor");
				 mysql_select_db("proyectoprogramcion3",$con);
				 $regi= mysql_query("SELECT * FROM empleado")
				  or die ("Problemas en la consulta".mysql_error());
				  	echo "<h2><span class='app-resaltar'>Empleados</span></h2>
				  	<table class='table table-bordered app-tabla'>
				  		           		<thead>
				  			           		<tr>
				                        <th>#</th>                    	           			
				  			           			<th>Nombre Apellido</th>
				  			           			<th>Cedula</th>
				  			           			<th>Correo</th>
				                        <th>Telefono</th> 	
				  			           		</tr>
				  		           		</thead>
				  		           		<tbody>";
				            $con=1;

				  				while ($reg=mysql_fetch_array($regi)) {
				  					echo "
				  							  <tr>
				                    <td>",$con++,"</td>                       
				  			           	<td>",$reg['name']," ",$reg['last'],"</td>
				  			            <td>",$reg['cedula'],"</td>
				  			            <td>",$reg['email'],"</td>
				  			         	  <td>",$reg['phone'],"</td>
				  			         	 
				  			          </tr>";
				  				}
				  				echo "</tbody>
				  				</table>";
echo "<section class='app-section1'>
<h2><span class='app-resaltar'>INACTIVOS</span></h2>";

                $regis= mysql_query("SELECT * FROM empleado WHERE hora='0'");
          echo " 
            <table class='table table-bordered app-tabla'>
                    <thead>
                      <tr>    
                        <th>#</th>         
                        <th>Nombre</th>        
                        <th>Cedula</th>
                        <th>Asistencias</th>
                      </tr>
                    </thead>
                    <tbody>";
            $con=1;

          while ($reg2=mysql_fetch_array($regis)) {
            echo "
                  <tr>  
                    <td>",$con++,"</td>
                    <td>",$reg2['name'],"</td>
                    <td>",$reg2['cedula'],"</td>
                    <td>","INACTIVO","</td>
                  </tr>";

          }
          echo "</tbody>
          </table>

          </section>";


echo "<section class='app-section1'>
<h2><span class='app-resaltar'> Activos</span></h2>";
				

                $regis= mysql_query("SELECT * FROM empleado WHERE hora<24 AND hora>0");
          echo " 
            <table class='table table-bordered app-tabla'>
                    <thead>
                      <tr>    
                        <th>#</th>         
                        <th>Nombre</th>        
                        <th>Cedula</th>
                        <th>Asistencias</th>
                      </tr>
                    </thead>
                    <tbody>";
            $con=1;

          while ($reg2=mysql_fetch_array($regis)) {
            echo "
                  <tr> 

                    <td>",$con++,"</td>
                    <td>",$reg2['name'],"</td>
                    <td>",$reg2['cedula'],"</td>
                    <td>","(",$reg2['hora'],")",$reg2['fecha'],"</td>
                  </tr>";

          }
          echo "</tbody>
          </table>

          </section>";




				 ?>

          

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




