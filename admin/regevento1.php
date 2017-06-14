<?php #Rutina para que se verifique si esta iniciado sesión

        include './funciones.php'; //inclute el archivo de verificacion
        if (verificar()==1) { // si verificar retorna 1 muestra:
            $_SESSION["usuario"];
        }else{
            return 0;
        }

?>

<title id="titulo">.:: Registar Eventos</title>
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
                        <li class="active">Registro</li>
                        <li class="active">Registrar Eventos</li>
                    </ol>
                </div> <!--Finaliza migas de pan--> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                <div id="divIndex"> 
                <div align= "right"><?php  echo "<b> BIENVENID@: <i class='verde';>" . $_SESSION["usuario"];"</i></b>" ?>
                <a href="cerrarSesion.php"><span class="glyphicon glyphicon-log-out btn-lg" title="Cerrar Sesión"></span></a></div>
                    <h2 class="post-title">
                        <p class="titulos"><u>FORMULARIO PARA REGISTRO DE EVENTOS</u></p>
                    </h2>
                    <br><br>
                        <center><span class="letter-cs">EVENTOS REGISTRADOS</span></center><br>
                        <div class="row">
                            <div class="col-lg-12"> 
                            <?php
                                include("conecta.php");
                                $even;
                                $resultado = mysqli_query($conexion, "SELECT evento.codevento AS codeven, evento.codmodalidad AS codmoda,evento.estado, evento.version, evento.fecha, evento.valor, evento.descripcion, tipoevento.codigo AS codtipo,modalidad.nombremodalidad, tipoevento.nombre AS tipoevento FROM evento, modalidad,tipoevento WHERE evento.codmodalidad=modalidad.codigomodalidad AND modalidad.tipoevento_codigo=tipoevento.codigo");
                                echo "<div class='center-block'>";
                                echo "<div class='table-responsive'>";
                                echo "<center><table class='table table-hover table-bordered' align='center' id='tabla-2'>\n";
                                echo "<tr><th>Código evento</th><th>Tipo Evento</th><th>Modalidad</th><th>Versión</th><th>Fecha</th><th>Valor</th><th>Descripción</th><th>Estado</th></tr>\n";
                                $even = 1000;
                                while ($registro = mysqli_fetch_assoc($resultado)) {
									
                                    echo "<tr><td>".$registro['codeven']."</td><td>" . utf8_encode($registro['tipoevento']) . "</td><td>" . utf8_encode($registro['nombremodalidad']) . "</td><td>" . $registro['version'] . "</td><td>" . $registro['fecha'] . "</td><td>" . "$" . $registro['valor'] . "</td><td>" . $registro['descripcion'] . "</td><td>" . $registro['estado'] . "</td></tr>\n";
                                    $even = $registro['codeven']+1;
									}
								
                               //$even+=1;
                                echo"</table></center>\n";
                            ?>
                            </table></center></div></div>
                            </div>
                        </div>
                            <br><br>

                            <center><span class="letter-cs">AGREGAR NUEVO EVENTO</span></center><br>
        
                            <form  action="regevento2.php" method="POST">                            
                                

                                <div class="row">
                                    <div class="col-lg-12">
                                        <table class="table table-bordered mostrar">
                                        <table align="center" class="tabla-22">
                                        <tr>
                                            <td><b>Código Evento </b></td>
                                            <td><b><input type='text' class='form-control' name='even' id='even' value="<?php echo $even; ?>" readonly placeholder='' aria-describedby='sizing-addon1'></b><br></td>
                                        </tr>    
                                        <tr>
                                            <td><b>Evento </b></td>
                                            <td>
                                                <select name="codigomodalidad" id="codigomodalidad" class="form-control" required>
                                                    <option>-- Seleccionar ---</option>
                                                    <?php
                                                        $sql="SELECT tipoevento.nombre as tipo, modalidad.nombremodalidad as moda, modalidad.codigomodalidad FROM tipoevento, modalidad where tipoevento.codigo=modalidad.tipoevento_codigo";
                                                        $rs=mysqli_query($conexion, $sql);
                                                        while($row=mysqli_fetch_array($rs)){
                                                            //echo "<option >".$row['tipo']."</option>";
                                                            echo "<option value='".$row['codigomodalidad']."'>".utf8_encode($row['tipo']." - ".$row['moda'])."</option>";
                                                        }
                                                    ?>                               
                                                </select><br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Estado </b></td>
                                            <td>
                                                <select name="estado" id="estado" class="form-control" required>
                                                    <option>-- Seleccionar ---</option>
                                                    <option value="Activo">Activo</option>                                                           
                                                    <option value="Desactivo">Desactivo</option>                                                                  
                                                </select><br>
                                            </td>
                                        </tr>  
                                        <tr>
                                            <td><b>Versión </b></td>
                                            <td><input type='text' class='form-control' name='version' id='version' required placeholder='Versión' aria-describedby='sizing-addon1'><br></td>
                                        </tr>
                                        <tr>
                                            <td><b>Fecha de Cierre</b></td>
                                            <td><input type='date' class='form-control' name='fecha' id='fecha' required aria-describedby='sizing-addon1' id="datepicker"><br></td>
                                        </tr>
                                        <tr>
                                            <td><b>Valor </b></td>
                                            <td><input type='number' min='0' class='form-control' name='valor' id='valor' required placeholder='$0.00' aria-describedby='sizing-addon1'><br></td>
                                        </tr>
                                        <tr>
                                            <td><b>Descripción </b></td>
                                            <td><textarea class='form-control' name='descripcion' id='descripcion' required placeholder='Descripcion Evento' aria-describedby='sizing-addon1'></textarea><br></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <center><button type="submit" class="btn btn-warning">Guardar</button>  
                                                <button type="reset" class="btn btn-default">Limpiar</button></center>
                                            </td>
                                        </tr>

                        
                                        </table>
                                    </div>
                                </div>                      
                                
                            </form>
                            
                            <br>                    
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
            <li class="active">Registro</li>
            <li class="active">Registrar Eventos</li>
        </ul>
    </div>
</div>      
</body>
</html>
