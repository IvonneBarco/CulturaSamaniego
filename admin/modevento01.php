<?php #Rutina para que se verifique si esta iniciado sesión

        include './funciones.php'; //inclute el archivo de verificacion
        if (verificar()==1) { // si verificar retorna 1 muestra:
            $_SESSION["usuario"];
        }else{
            return 0;
        }

?>
<title id="titulo">.:: Modificar Evento</title>
<link rel="shortcut icon" href="../images/img_escudo.png"/>

    <a href="#" class="scrollup"><img src="../images/icon_top.png" alt=""></a>
    <!-- Inicia Head -->
    <?php include("adminavbar.html");
    include("conecta.php"); ?>
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
                        <li class="active">Editar</li>
                        <li class="active">Eventos </li>
                    </ol>
                </div> <!--Finaliza migas de pan--> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                <div id="divIndex"> 
                <div align= "right"><?php  echo "<b> BIENVENID@: <i class='verde';>" . $_SESSION["usuario"];"</i></b>" ?>
                <a href="cerrarSesion.php"><span class="glyphicon glyphicon-log-out btn-lg" title="Cerrar Sesión"></span></a></div>
                    <h2 class="post-title">
                        <p class="titulos"><u>MODIFICACIÓN DE EVENTOS</u></p><br>                        
                    </h2>

<?php

// A partir de aquí, copiar a un esquema de página que funcione bien el estilo
include("conecta.php");
$sql="select evento.*, modalidad.nombremodalidad, tipoevento.nombre from evento, modalidad, tipoevento where evento.codmodalidad = modalidad.codigomodalidad and modalidad.tipoevento_codigo = tipoevento.codigo";
echo "<center><table id='mi-Tabla' class='table table-hover'><tr><th>Codigo Evento</th><th>Tipo Evento</th><th>Modalidad</th><th>Version</th><th>Fecha</th><th>Valor</th><th>Descripción</th><th>estado</th><td></td></tr>";
		$cs=mysqli_query($conexion, $sql);
		while($resul=mysqli_fetch_array($cs)){
			echo "<tr><td>".$resul['codevento']."</td>";
			echo "<td>".$resul['nombre']."</td>";
			echo "<td> ".$resul['nombremodalidad']."</td>";
			echo "<td> ".$resul['version']."</td> ";
			echo "<td> ".$resul['fecha']."</td> ";
			echo "<td> ".$resul['valor']."</td> ";
			echo "<td> ".$resul['descripcion']."</td> ";
			echo "<td> ".$resul['estado']."</td> ";
			echo "<td><a href = 'modevento02.php?ideven=".$resul["codevento"]."'>Modif</a></td> </tr>";
			}
		echo "</table> </center>";
	// Hasta aqui. Esto es todo lo que se necesita para listar las modalidades y seleccionar una para modificarla
?>
 <tr>
                            <td colspan="2">
                                <center><button type="button" class="btn btn-warning" value="Regresar" id="regresar" onclick="location = 'administracion.php'"> Regresar </button></center>
                            </td>
                        </tr> 
                                              
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
            <li class="active">Editar</li>
            <li class="active">Evento</li>
        </ul>
    </div>
</div>      
</body>
</html>
