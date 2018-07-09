<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Administrador K4ing</title>
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
                      <button class="navbar-toggle" data-toggle="collapse" data-target="#menu_Form">
                        <span class="icon-bar app-icon"></span>
                        <span class="icon-bar app-icon"></span>
                        <span class="icon-bar app-icon"></span>
                        <span class="icon-bar app-icon"></span>                                      
                        </button>
                        <a href="#" class="navbar-brand app-link">J4FE</a>
                      </div>
                      <div class="col-xs-12 col-sm-6">
                      <img src="img/logo.png" class="img-responsive app-logo" alt="logo">
                    </div>
                
                </div>
              </div>
              
              <div class="collapse navbar-collapse" id="menu_Form">
                  
                  <ul class="nav navbar-nav navbar-right app-nav">
                    <!--li class="dropdown mega-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="user">
                              <span class="app-user glyphicon glyphicon-user"></span>
                        </a>
                            <ul class="dropdown-menu user row">
                            <li class="app-enlaces">
                                <a href="cambiarPS.php">Cambiar Password</a>
                            </li>
                            <li class="app-enlaces">
                                <a href="logout.php">Salir</a>
                            </li>
                            <li class="app-enlaces">
                               
                                <a href="#" disabled data-container="body" data-toggle="tooltip" data-placement="left" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum nisi at ad perspiciatis. Aspernatur laudantium facere impedit laboriosam quisquam officiis, enim totam perspiciatis, saepe sed, ipsa recusandae autem blanditiis doloribus." >Help</a>
                                
                            </li>
                           
                        
                            </ul>
                    </li!-->
                    <li class="app-enlaces">
                        <a href="vistacambiaPS.php">Cambiar Password</a>
                      </li>
                    <li class="app-enlaces">
                        <a href="logout.php">Salir</a>
                    </li>
                    <li class="app-enlaces">
                        <a href="#" disabled data-container="body" data-toggle="tooltip" data-placement="left" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum nisi at ad perspiciatis. Aspernatur laudantium facere impedit laboriosam quisquam officiis, enim totam perspiciatis, saepe sed, ipsa recusandae autem blanditiis doloribus." >Help</a>
                      </li>
                                

                  
                  </ul>

              </div>

            </div>
        </nav> 

        <section class="section1">
          <div class="container">
            <div>
              <h2 class="app-titulo">Administrador del Sistema <span class="king">K4ing</span>!!!</h2>
              
              <div class="row">
                
                <div class="col-xs-12 col-sm-6"> 
                  <form action="registrar.php" name="registro" method="POST">
                    <ul class="list-group">
                      <il class="list-group-item app-lista1">
                      <h2 class="app-reporte">Registrar <span class="glyphicon glyphicon-user"></span></h2>
                      </il>
                    
                      <il class="list-group-item"><input type="text" name="nombre" placeholder="Nombre" class="app-input form-control"></il>
                          
                      <il class="list-group-item"><input type="text" name="apellido" placeholder="Apellido" class="app-input form-control"></il>
                          
                      <il class="list-group-item"><input type="number" name="cedula" placeholder="Cedula" class="app-input form-control"></il>
                          
                      <il class="list-group-item"><input type="email" name="correo" placeholder="Correo" class="app-input form-control"></il>
                          
                      <il class="list-group-item"><input type="number" name="telefono" placeholder="Telefono" class="app-input form-control"></il>

                      <li class="list-group-item">
                         <div class="row">
                            <div class="col-xs-12 col-sm-4"></div>
                            <div class="col-xs-12 col-sm-4 form-group">
                              <button class="btn btn-primary app-btn1 btn-block"><span class="glyphicon glyphicon-log-in "></span> Registrar</button>
                            </div>
                            <div class="col-xs-12 col-sm-4"></div>
                          </div>
                        </il>
                      </ul>
                  </form>
                </div>

                <div class="col-xs-12 col-sm-6">
                      <ul class="list-group">
                          <il class="list-group-item app-lista2">
                            <h2 class="app-reporte">Editar <span class="glyphicon glyphicon-edit"></span></h2>
                          </il>
                          <il class="list-group-item">Edita Nombre <span class="glyphicon glyphicon-ok pull-right"></span></il>  
                          <il class="list-group-item">Edita Apellido <span class="glyphicon glyphicon-ok pull-right"></span></il>
                          <il class="list-group-item">Edita Correo <span class="glyphicon glyphicon-ok pull-right"></span></il>                     
                          <il class="list-group-item">Edita Telefono <span class="glyphicon glyphicon-ok pull-right"></span></il>                        
                          <il class="list-group-item">Edita Cedula <span class="glyphicon glyphicon-ok pull-right "></span></il>

                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-xs-12 col-sm-4"></div>
                                <div class="col-xs-12 col-sm-4 form-group">
                                  <a href="editar.php"><button class="btn btn-primary app-btn1 btn-block"><span class="glyphicon glyphicon-pencil "></span> Editar</button></a>
                                </div>
                                <div class="col-xs-12 col-sm-4"></div>
                            </div>
                          </il>
                      </ul>
                </div>
              </div>

              <div class="row">
              	<div class="col-xs-12 col-sm-3"></div>
              	<div class=" col-xs-12 col-sm-6">
                	<ul class="list-group ">
                        <il class="list-group-item app-lista2 ">
                          <h2 class="app-reporte">Control de Asistensias <span class="glyphicon glyphicon-book"></span></h2>
                        </il>
                        
                        <il class="list-group-item">Agg Asistencias<sapn class="glyphicon glyphicon-ok pull-right"></sapn></il>
                        
                        <il class="list-group-item">Puedes ver las asistencias <sapn class="glyphicon glyphicon-ok pull-right"></sapn></il>

                        
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-xs-12 col-sm-4"></div>
                              <div class="col-xs-12 col-sm-4 form-group">
                                <a href="asistensias.php"><button class="btn btn-primary app-btn1 btn-block"><span class="glyphicon glyphicon-book "></span>IR</button></a>
                              </div>
                              <div class="col-xs-12 col-sm-4"></div>
                          </div>
                        </il>
                    </ul>
                </div>
              	<div class="col-xs-12 col-sm-3"></div>
              </div>

              <div class="row">
               
                <div class="col-xs-12 col-sm-6 ">
                  <form action="comentario.php" method="POST" name="comentario"> 
                  
                    <ul class="list-group ">
                        <il class="list-group-item app-lista2 ">
                          <h2 class="app-reporte">Comentario <span class="glyphicon glyphicon-bookmark"></span></h2>
                        </il>
                        
                        <il class="list-group-item">Agg comentario <sapn class="glyphicon glyphicon-ok pull-right"></sapn></il>
                        
                        <il class="list-group-item">Amonestaciones <sapn class="glyphicon glyphicon-ok pull-right"></sapn></il>

                        <il class="list-group-item">Comenta inasistencias <sapn class="glyphicon glyphicon-ok pull-right"></sapn></il>
                        
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-xs-12 col-sm-4"></div>
                              <div class="col-xs-12 col-sm-4 form-group">
                                <a href="comentario.php"><button class="btn btn-primary app-btn1 btn-block"><span class="glyphicon glyphicon-bookmark "></span> Comentar</button></a>
                              </div>
                              <div class="col-xs-12 col-sm-4"></div>
                          </div>
                        </il>

                    </ul>
                  </form>
                </div>
  
                <div class="col-xs-12 col-sm-6">
                  
                    <ul class="list-group">
                      <il class="list-group-item app-lista1">
                      <h2 class="app-reporte">Reporte<span class="glyphicon glyphicon-cloud-download"></span></h2>
                      </il>
                      
                      <il class="list-group-item">Reporte Diario, Mensual y Anual <span class="pull-right glyphicon glyphicon-ok app-letra-plantillas"></span></il>

                      <il class="list-group-item"><span class="pull-right glyphicon glyphicon-ok app-letra-plantillas"></span>Todos los Empleados</il>
                       
                      <il class="list-group-item"><span class="pull-right glyphicon glyphicon-ok app-letra-plantillas"></span>Mejor y Peor asistensia</il>
                      
                      <il class="list-group-item">
                        <div class="row">
                          <div class="col-xs-12 col-sm-4"></div>
                          <div class="col-xs-12 col-sm-5 form-group">
                            <a href="reporte.php"><button class="btn btn-primary app-btn1 btn-block"><span class=" glyphicon glyphicon-save"></span>Descargar</button></a>
                          </div>
                          <div class="col-xs-12 col-sm-3"></div>
                        </div>
                      </il>

                    </ul>                  
                </div>
              </div>
            </div>
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
