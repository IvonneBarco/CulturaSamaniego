<?php #Rutina para que se verifique si esta iniciado sesión

        include './funciones.php'; //inclute el archivo de verificacion
        if (verificar()==1) { // si verificar retorna 1 muestra:
            $_SESSION["usuario"];
        }else{
            return 0;
        }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="ienvenidos al sitio web de la casa de la cultura de Sandoná - Nariño, en el encontraremos información relacionada conos eventos culturales de nuestro municipio">
    <meta name="keywords" content="casa-de-cultura, sandoná, nariño, danza, fiestas, colombia, corregimientos"> 
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>   
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>


    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <script src="../js/jquery.slides.js"></script>
    <script src="../js/jquery.ui.datepicker-es.js"></script>
    <script src="../js/codigo.js"></script>

    <title id="titulo">.:: Listar Empleados</title>
    <link rel="shortcut icon" href="../images/img_escudo.png"/>
    <a href="#" class="scrollup"><img src="../images/icon_top.png" alt=""></a>

</head>
<body>
<div class="container">
    <header>
        <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">

        <!-- cabecera -->
        <section class="img-responsive">
            <img src="../images/bg_header.png" class="img-responsive" alt="cabecera" id="cabecera">
        </section>

        <!-- fin cabecera -->

        <!-- Inicia Navbar-->
        <nav class="navbar navbar-inverse navbar-static-top navbar-cs myfont" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-cs">
                        <span class="sr-only">Desplegar/Ocultar menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="administracion.php" class="navbar-brand" id="titulo"><span class="glyphicon glyphicon-heart-empty"></span> Casa de la Cultura Sandoná - Nariño</a>
                </div>
                <!-- Inicia Menú-->
                    <div class="collapse navbar-collapse" id="navegacion-cs">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="administracion.php"><span class="glyphicon glyphicon-home" id="icono"></span> Inicio</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="glyphicon glyphicon-list-alt" id="icono"></span> Registro <span class="caret"></span></a> 
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="teven01.php" id="">Tipo de Evento</a></li>
                                    <li class="divider"></li>
                                    <li><a href="regmodalidad1.php" id="">Modalidad</a></li>
                                    <li class="divider"></li>
                                    <li><a href="regevento1.php" id="">Evento</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="glyphicon glyphicon-book" id="icono"></span> Consultar <span class="caret"></span></a> 
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="consultartipo.php" id="">Tipo de Evento</a></li>
                                    <li class="divider"></li>
                                    <li><a href="consultarmodalidad.php" id="">Modalidad</a></li>
                                    <li class="divider"></li>
                                    <li><a href="consultarevento.php" id="">Evento</a></li>
                                    <li class="divider"></li>
                                    <li><a href="conartesano.php" id="">Artesano</a></li>
                                    <li class="divider"></li>
                                    <li><a href="coninsevento01.php" id="">Inscritos por Evento</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="glyphicon glyphicon-edit" id="icono"></span> Editar <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="modtipoeven.php" id="">Tipo de Evento</a></li>
                                    <li class="divider"></li>
                                    <li><a href="modevento01.php" id="">Evento</a></li>
                                    <li class="divider"></li>
                                    <li><a href="modmodalidad01.php" id="">Modalidad</a></li>
                                    <li class="divider"></li>
                                    <li><a href="modartesano.php" id="">Artesano</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="glyphicon glyphicon-list" id="icono"></span> Listar <span class="caret"></span></a> 
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="consultatipoeven.php" id="">Tipo de Evento</a></li>
                                    <li class="divider"></li>
                                    <li><a href="conmodalidad.php" id="">Modalidad</a></li>
                                    <li class="divider"></li>
                                    <li><a href="conevento.php" id="">Evento</a></li>
                                    <li class="divider"></li>
                                    <li><a href="listarinscripciones.php" id="">Inscripciones</a></li>
                                </ul>
                            </li>
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="glyphicon glyphicon-user" id="icono"></span>Institucional<span class="caret"></span></a> 
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="registro_sliderinfo.php" id="">Registrar Información</a></li>
                                    <li class="divider"></li>
                                    <li><a href="lista_sliderinfo.php" id="">Listar Información Institucional</a></li>
                                </ul>
                            </li>
                            
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="glyphicon glyphicon-user" id="icono"></span>Proyectos<span class="caret"></span></a> 
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="registro_slidereventos.php" id="">Registrar Proyectos</a></li>
                                    <li class="divider"></li>
                                    <li><a href="lista_slidereventos.php" id="">Listar Proyectos</a></li>
                                </ul>
                            </li>
                            
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="glyphicon glyphicon-user" id="icono"></span> Personal <span class="caret"></span></a> 
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="registro_slider.php" id="">Registrar Empleado</a></li>
                                    <li class="divider"></li>
                                    <li><a href="lista_slider.php" id="">Listar Empleado</a></li>
                                </ul>
                            </li>
                            
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="glyphicon glyphicon-user" id="icono"></span> Artesanos <span class="caret"></span></a> 
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="registro_slidera.php" id="">Registrar Artesanos</a></li>
                                    <li class="divider"></li>
                                    <li><a href="lista_slidera.php" id="">Listar Artesano</a></li>
                                </ul>
                            </li>
                            
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="glyphicon glyphicon-calendar" id="icono"></span> Calendario <span class="caret"></span></a> 
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="../calendario/index1.php" target="_black" id="">Publicar Eventos</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="glyphicon glyphicon-bullhorn" id="icono"></span> Noticias <span class="caret"></span></a> 
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="registro_slidern.php" id="">Crear Noticias</a></li>
                                    <li class="divider"></li>
                                    <li><a href="lista_slidern.php" id="">Listar Noticias</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="glyphicon glyphicon-th" id="icono"></span> Usuarios <span class="caret"></span></a> 
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="registro.php" id="">Nuevo Usuario</a></li>
                                    <li class="divider"></li>
                                    <li><a href="modusuarios.php" id="">Modificar Usuario</a></li>
                                    <li class="divider"></li>
                                    <li><a href="consultarusuario.php" id="">Consultar Usuario</a></li>
                                </ul>
                            </li>
                            <li><a href="cerrarSesion.php"><span class="glyphicon glyphicon-log-out" id="icono"></span> Salir</a></li>
                        </ul>
                    </div>
                <!-- Finaliza Menú-->
            </div>          
        </nav>
        <!-- Finaliza Navbar--> 
    </header>
    <br>

   <div class="row">
      <section class="posts col-md-12">       
        <div class="migas-de-pan"> <!--Inicia migas de pan-->       
          <ol class="breadcrumb" id="miga">
            <li class="active">Usted está aquí.::</li>
            <li><a href="#">Inicio</a></li>
            <li class="active">Personal</li>
            <li class="active">Listar Empleados</li>
          </ol>
        </div> <!--Finaliza migas de pan--> 
      </section>
    </div>
    <div align= "right"><?php  echo "<b> BIENVENID@: <i class='verde';>" . $_SESSION["usuario"];"</i></b>" ?>
                <a href="cerrarSesion.php"><span class="glyphicon glyphicon-log-out btn-lg" title="Cerrar Sesión"></span></a></div>


                    <h2 class="post-title">
                        <p class="titulop"><u>LISTADO DE EMPLEADOS</u></p><br>
                    </h2>

    
<?php require_once('./conexiones/cnx_slider.php'); ?>
<?php
mysql_select_db($database_cnx_slider, $cnx_slider);
$query_ms_slider = "SELECT * FROM personal";
$ms_slider = mysql_query($query_ms_slider, $cnx_slider) or die(mysql_error());
$row_ms_slider = mysql_fetch_assoc($ms_slider);
$totalRows_ms_slider = mysql_num_rows($ms_slider);
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listar Noticia</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  </head>

    <div class="container">
        <div class="row">
        <div class="col-md-12" >
        </div>
        <div class="col-md-12">
          <p><a class="btn btn btn-warning" href="registro_slider.php" role="button">Registrar Personal</a></p>
        </div>
        <div class="col-md-12">
            
            <table class="table table-bordered table-hover tabla-center" >
                <tbody>
                  <tr>
                    <th><center>NOMBRES </center></th>
                    <th><center>DIRECCIÓN </center></th>
                    <th><center>TELEFONO</center></th>
                    <th><center>FECHA NACIMIENTO</center></th>
                    <th><center>GENERO</center></th>
                    <th><center>ESTRATO</center></th>
                    <th><center>ESTADO CIVIL</center></th>
                    <th><center>PROFESIÓN</center></th>
                    <th><center>CARGO</center></th>
                    <th><center>FUNCIONES</center></th>
                    <th><center>FECHA INGRESO</center></th>
                    <th><center>EMAIL</center></th>
                    <th><center>IMAGEN</center></th>
                    <th><center>ESTADO</center></th>
                   
                  </tr>
             
                  <?php do { ?>
                  <tr>
                    <td style="vertical-middle"><h4 class="font-csc-"><?php echo $row_ms_slider['nombres']; ?></h4></td>
                    <td style="vertical-middle"><h4 class="font-csc-"><?php echo $row_ms_slider['direccion']; ?></h4></td>
                    <td style="vertical-middle"><h4 class="font-csc-"><?php echo $row_ms_slider['telefono']; ?></h4></td>
                    <td style="vertical-middle"><h4 class="font-csc-"><?php echo $row_ms_slider['fechana']; ?></h4></td>
                    <td style="vertical-middle"><h4 class="font-csc-"><?php echo $row_ms_slider['genero']; ?></h4></td>
                    <td style="vertical-middle"><h4 class="font-csc-"><?php echo $row_ms_slider['estrato']; ?></h4></td>
                    <td style="vertical-middle"><h4 class="font-csc-"><?php echo $row_ms_slider['estadocivil']; ?></h4></td>
                    <td style="vertical-middle"><h4 class="font-csc-"><?php echo $row_ms_slider['profesion']; ?></h4></td>
                    <td style="vertical-middle"><h4 class="font-csc-"><?php echo $row_ms_slider['cargo']; ?></h4></td>
                    <td style="vertical-middle"><h4 class="font-csc-"><?php echo $row_ms_slider['funciones']; ?></h4></td>
                    <td style="vertical-middle"><h4 class="font-csc-"><?php echo $row_ms_slider['fechaingreso']; ?></h4></td>
                    <td style="vertical-middle"><h4 class="font-csc-"><?php echo $row_ms_slider['email']; ?></h4></td>
                    <td><img src="../recursos/personal/<?php echo $row_ms_slider['imagen']; ?>" width="140" height="160"></td>
                    <td style="vertical-middle"><h4 class="font-csc-"><?php echo $row_ms_slider['estado']; ?></h4></td>
                   
                    <td><a class="btn btn btn-success btn-sm" href="editar_slider.php?recordID=<?php echo $row_ms_slider['identificacion']; ?>" role="button">Editar</a>
                      <a class="btn btn btn-danger btn-sm" href="eliminar_slider.php?recordID=<?php echo $row_ms_slider['identificacion']; ?>" role="button">Eliminar</a>                   </td>
                  </tr>
                    <?php } while ($row_ms_slider = mysql_fetch_assoc($ms_slider)); ?>
                </tbody>
            </table>
              
        </div>
      </div>
    </div>
<?php
mysql_free_result($ms_slider);
?>
<footer>
           
            <div class="panel-body" id="divFooter">
                <hr class="linea">
                <img src="../images/footer.png" class="img-responsive" alt="footer">    
                <hr>

                <div class="row">
                <div class="col-xs-3" align="center">
                    <a href="http://www.mintic.gov.co"><img src="../images/logo_mintic.png" class="img-responsive" alt="minTic" id="logos"></a>
                </div>
                <div class="col-xs-3" align="center">
                    <a href="http://www.talentodigital.gov.co"><img src="../images/talento-digital.png" class="img-responsive" alt="talentoDigital" id="logos"></a>
                </div>
                <div class="col-xs-3" align="center">
                    <a href="https://www.icetex.gov.co"><img src="../images/logo-icetex.png" class="img-responsive" alt="Icetex" id="logos"></a>
                </div>
                <div class="col-xs-3" align="center">
                    <a href="#"><img src="../images/compunet.png" class="img-responsive" alt="CompuNet" id="logos"></a>
                </div>
            </div> 
            <hr>

                <div class="col-xs-12" align="center" id="datos">
                    <br>
                    <span class="glyphicon glyphicon-screenshot datos"></span> <span id="contac">Dirección: Cra 5 N° 04-10 Barrio San Carlos</span><br>
                    <span class="glyphicon glyphicon-phone-alt datos"></span> <span id="contac">Fax: (092) 7288086</span><br>
                    <span class="glyphicon glyphicon-envelope datos"></span> <span id="contac">coordinacioncultura@sandona-narino.gov.co</span>             
                </div>
            </div>          

    </footer>   
</body>
</html>
