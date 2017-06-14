<?php #Rutina para que se verifique si esta iniciado sesión

		include './funciones.php'; //inclute el archivo de verificacion
		if (verificar()==1) { // si verificar retorna 1 muestra:
			$_SESSION["usuario"];
		}else{
			return 0;
		}

?>

<title id="titulo">.:: Zona Administrativa</title>
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
					</ol>
				</div> <!--Finaliza migas de pan-->	

				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

				<div id="divIndex">
				<div align= "right"><?php  echo "<b> BIENVENID@: <i class='verde';>" . $_SESSION["usuario"];"</i></b>" ?>
				<a href="cerrarSesion.php"><span class="glyphicon glyphicon-log-out btn-lg" title="Cerrar Sesión"></span></a></div>

					<article class="post clearfix">

						<h1 class="post-title titulop">
								<h1 class="titulop">BIENVENIDOS A LA ZONA ADMINISTRATIVA DEL</h1>
								<h1 class="titulop">INSTITUTO DE CULTURA</h1>
								<h1 class="titulop">Samaníego - Nariño</h1>
						</h1>
						
						<br>
							<br><h2 align="center" class="verde">Presentación.</h2> <br>
						<table id="miitabla">
							<tr>
								<td>
									<p class="post-contenido text-center font-cs">  
										Este espacio esta creado para que el administrador registre los 
										diferentes procesos y actividades que realiza el Instituto de Cultura 
										de Samaníego.<br><br>
										Las opciones se muestran en el menú superior de esta pagina.<br>
										Recuerde que al terminar los procesos debe dar clic en <b class="verde">Salir</b>.
									</p>
								</td>
							</tr>
						</table>
						<br>
					</article>
					
					
				</div>
				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
				
			</section>
			<!-- <?php #include("adminaside.html") ?> -->
		</div>
	</section>	<!-- Finaliza Pagina Principal -->

		
	<?php include("adminfooter.html") ?>
	<div class="col-xs-12" align="center">
		<ul class="list-inline text-right" id="pie">
			<li><a href="index.php">Inicio</a></li>
		</ul>
	</div>
</div>		
</body>
</html>
