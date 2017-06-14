<?php #Rutina para que se verifique si esta iniciado sesión

		include './funciones.php'; //inclute el archivo de verificacion
		if (verificar()==1) { // si verificar retorna 1 muestra:
			$_SESSION["usuario"];
		}else{
			return 0;
		}

?>
<title id="titulo">.:: Lista Tipo de Eventos</title>
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
						<li class="active">Tipo de Eventos</li>
					</ol>
				</div> <!--Finaliza migas de pan-->	

				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

				<div id="divIndex">	
				<div align= "right"><?php  echo "<b> BIENVENID@: <i class='verde';>" . $_SESSION["usuario"];"</i></b>" ?>
				<a href="cerrarSesion.php"><span class="glyphicon glyphicon-log-out btn-lg" title="Cerrar Sesión"></span></a></div>
					<h2 class="post-title">
						<p class="titulos"><u>LISTADO TIPO DE EVENTOS REGISTRADOS</u></p>
					</h2>
					<br><br>
						<div class="row">
							<div class="col-lg-12">	
					  		<?php
								include("conecta.php");
								$ucod;
								$resultado = mysqli_query($conexion,"SELECT codigo,nombre FROM tipoevento order by codigo asc");
								echo "<div class='center-block'>";
								echo "<div class='table-responsive'>";
								echo "<center><table class='table table-hover table-bordered align='center' id='tabla-center'>\n";
								echo "<tr><th><center>CÓDIGO</center></th><th align='center'><center>NOMBRE</center></th></tr>\n";
								while ($registro = mysqli_fetch_assoc($resultado)){
									echo "<tr><td><b>".$registro['codigo']."</b></td><td>".utf8_encode($registro['nombre'])."</td></tr>\n";
									$ucod=$registro['codigo']+1;
								}
								echo"</table></center>\n";
								mysqli_close($conexion);
							?>
							</table></center></div></div>
							</div>
						</div>											
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
			<li class="active">Listar</li>
			<li class="active">Tipo de Eventos</li>
		</ul>
	</div>
</div>		
</body>
</html>