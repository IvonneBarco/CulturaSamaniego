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
                        <li class="active">Inscripciones</li>
                    </ol>
                </div> <!--Finaliza migas de pan--> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                <div id="divIndex"> 
                <div align= "right"><?php  echo "<b> BIENVENID@: <i class='verde';>" . $_SESSION["usuario"];"</i></b>" ?>
                <a href="cerrarSesion.php"><span class="glyphicon glyphicon-log-out btn-lg" title="Cerrar Sesión"></span></a></div>
                    <h2 class="post-title">
                        <p class="titulos"><u>INSCRIPCIONES REGISTRADAS</u></p>
                    </h2>
                    <br><br>
                        <div class="row">
                            <div class="col-lg-12"> 
                            <?php
                                include("conecta.php");
                                $resultado = mysqli_query($conexion,"SELECT * FROM inscripciones");
                                echo "<center><table class='table table-hover table-bordered' align='center' id='tabla-22'>";
                                echo "<tr><th><center><b> NÚMERO INSCRIPCIÓN</b></center></th>
                                <th><center><b>CÓDIGO EVENTO</b></center></th>
                                <th><center><b>CÓDIGO MODALIDAD</b></center></th>
                                <th><center><b>IDENTIFICACIÓN ARTESANO</b></center></th>
                                <th><center><b>FECHA INSCRIPCIÓN</b></center></th>
                                <th><center><b>ORDEN EVENTO</b></center></th></tr>\n";
                                //$resultado = mysqli_query($conexion,$sql);
                                $registro;
                                while ($registro = mysqli_fetch_assoc($resultado)){ 
                                echo "<tr><td>".$registro['numeroinscripciones']."</td><td>".$registro['codigo']."</td><td>".$registro['codigomodalidad']."</td><td>".$registro['idartesano']."</td><td>".$registro['fechainscripcion']."</td><td>".$registro['ordenevento']."</td></tr>";
                                }
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
            <li class="active">Inscripciones</li>
        </ul>
    </div>
</div>      
</body>
</html>