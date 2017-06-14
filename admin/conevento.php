<?php #Rutina para que se verifique si esta iniciado sesión

        include './funciones.php'; //inclute el archivo de verificacion
        if (verificar()==1) { // si verificar retorna 1 muestra:
            $_SESSION["usuario"];
        }else{
            return 0;
        }

?>
<title id="titulo">.:: Listar Eventos</title>
<link rel="shortcut icon" href="../images/img_escudo.png"/>

    <a href="#" class="scrollup"><img src="../images/icon_top.png" alt=""></a>
    <!-- Inicia Head -->
    <?php include("adminavbar.html") ?>
    <!-- Finaliza Head -->

        <!-- Inicia Slider -->
        <!--<div id="divMiSlider"></div>-->
        <!-- Finaliza Slider -->
    
    
    <br>
    <section> <!-- Inicia Pagina Principal -->      

        <div class="row"> <!-- Inicia contenedor-->         

            <section class="posts col-md-12">               
                <div class="migas-de-pan"> <!--Inicia migas de pan-->               
                    <ol class="breadcrumb" id="miga">
                        <li class="active">Usted está aquí.::</li>
                        <li><a href="#">Inicio</a></li>
                        <li class="active">Listar</li>
                        <li class="active">Eventos</li>
                    </ol>
                </div> <!--Finaliza migas de pan--> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                <div id="divIndex"> 
                <div align= "right"><?php  echo "<b> BIENVENID@: <i class='verde';>" . $_SESSION["usuario"];"</i></b>" ?>
                <a href="cerrarSesion.php"><span class="glyphicon glyphicon-log-out btn-lg" title="Cerrar Sesión"></span></a></div>
                    <h2 class="post-title">
                        <p class="titulos"><u>LISTADO EVENTOS REGISTRADOS</u></p>
                    </h2>
                    <br><br>
                        <div class="row">
                            <div class="col-lg-12"> 
                            <?php
                                include("conecta.php");
                                $even;
                                $resultado = mysqli_query($conexion, "SELECT evento.codevento AS codeven, evento.codmodalidad AS codmoda,evento.estado, evento.version, evento.fecha, evento.valor, evento.descripcion, tipoevento.codigo AS codtipo,modalidad.nombremodalidad, tipoevento.nombre AS tipoevento FROM evento, modalidad,tipoevento WHERE evento.codmodalidad=modalidad.codigomodalidad AND modalidad.tipoevento_codigo=tipoevento.codigo");
                                echo "<div class='center-block'>";
                                echo "<div class='table-responsive'>";
                                echo "<center><table class='table table-hover table-bordered' align='center' id='tabla-2'>\n";
                                echo "<tr><th><center><b>Código evento</b></center></th><th><center><b>Tipo Evento</b></center></th><th><center><b>Modalidad</b></center></th><th><center><b>Versión</b></center></th><th><center><b>Fecha</b></center></th><th><center><b>Valor</b></center></th><th><center><b>Descripción</b></center></th><th><center><b>Estado</b></center></th></tr>\n";
                                $even = 100;
                                while ($registro = mysqli_fetch_assoc($resultado)) {
                                    echo "<tr><td>".$registro['codeven']."</td><td>" . utf8_encode($registro['tipoevento']) . "</td><td>" . utf8_encode($registro['nombremodalidad']) . "</td><td>" . $registro['version'] . "</td><td>" . $registro['fecha'] . "</td><td>" . "$" . $registro['valor'] . "</td><td>" . $registro['descripcion'] . "</td><td>" . $registro['estado'] . "</td></tr>\n";
                                    $even = $registro['codeven'];
                                }
                                $even+=1;
                                echo"</table></center>\n";
                            ?>
                            </table></center></div></div>
                            </div>
                        </div>
                            <br><br>
               
                </div>
                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
                
            </section>
            <!-- <?php #include("adminaside.html") ?> -->
        </div>
    </section>  <!-- Finaliza Pagina Principal -->

        
    <?php include("adminfooter.html") ?>
    <div class="col-xs-12" align="center">
        <ul class="list-inline text-right" id="pie">
            <li><a href="#">Inicio</a></li>
            <li class="active">Listar</li>
            <li class="active">Eventos</li>
        </ul>
    </div>
</div>      
</body>
</html>