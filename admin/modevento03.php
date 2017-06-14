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
						<li class="active">Editar</li>
                        <li class="active">Eventos </li>
					</ol>
				</div> <!--Finaliza migas de pan-->	

				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

				<div id="divIndex">	
				<div align= "right"><?php  echo "<b> BIENVENID@: <i class='verde';>" . $_SESSION["usuario"];"</i></b>" ?>
				<a href="cerrarSesion.php"><span class="glyphicon glyphicon-log-out btn-lg" title="Cerrar Sesión"></span></a></div>
					<h2 class="post-title">
						<p class="titulos"><u>MODIFICACIÓN DE EVENTO</u></p>
					</h2><br><br>	
<?php
$codeven = $_POST['ideven'];
$codmoda = $_POST['idemod'];
$estado = $_POST['estado'];
$version = $_POST['version'];
$fecha = $_POST['fecha'];
$valor = $_POST['valor'];
$descrip = $_POST['descrip'];

//echo "Codigo Evento: ".$even."<br>Codigo Modalidad: ".$codigomodalidad."<br>Estado: ".$estado."<br>Version: ".$version."<br>Fecha: ".$fecha."<br>Valor: ".$valor."<br>Descripcion: ".$descripcion;


//conexion a base de datos
//$conexion= mysqli_connect("localhost","root","","correccion9");
require_once("conecta.php"); //llama al archivo encargado de establecer la conexión, a partir de este momento ya existe la variable $conexion

//construccion de la clausula sql
$sql = "update evento set codmodalidad='$codmoda',estado='$estado',version='$version',fecha='$fecha',valor='$valor',descripcion='$descrip' where codevento = '$codeven'";
//ejecucion de la instruccion
$resultado = mysqli_query($conexion,$sql);
if($resultado){
echo"<p align='center' class='ok'>Registro actualizado con exito</p>";
}
else{
echo"<p align='center' class='bad'>No se actualizaron los datos</p>";
}	
?>
<center>
<button type="button" class="btn btn-warning" value="Regresar" id="regresar" onclick="location = 'modevento01.php'"> Regresar </button></center>
										    </center>
										    </td>
										    </tr>
										</table>
									</div>
								</div>	
	                        <br>					
				</div>
				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
				
			</section>
			<!-- <?php #include("adminaside.html") ?> -->
		</div>
	</section>	<!-- Finaliza Pagina Principal -->

		
	<?php include("adminfooter.html") ?>
	<div class="col-xs-12" align="center">
		<ul class="list-inline text-right" id="pie">
			<li><a href="#">Inicio</a></li>
			<li class="active">Editar</li>
            <li class="active">Eventos </li>
		</ul>
	</div>
</div>		
</body>
</html>
