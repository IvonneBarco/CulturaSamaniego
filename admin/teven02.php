<?php #Rutina para que se verifique si esta iniciado sesión

		include './funciones.php'; //inclute el archivo de verificacion
		if (verificar()==1) { // si verificar retorna 1 muestra:
			$_SESSION["usuario"];
		}else{
			return 0;
		}

?>
<title id="titulo">.:: Registro Tipo de Eventos</title>
<link rel="shortcut icon" href="../images/img_escudo.png"/>
<a href="#" class="scrollup"><img src="../images/icon_top.png" alt=""></a>
	<!-- Inicia Head -->
	<?php include("adminavbar.html") ?>
	<!-- Finaliza Head -->

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
						<li class="active">Registrar Tipo Eventos</li>
					</ol>
				</div> <!--Finaliza migas de pan-->	

				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

				<div id="divIndex">	
				<div align= "right"><?php  echo "<b> BIENVENID@: <i class='verde';>" . $_SESSION["usuario"];"</i></b>" ?>
				<a href="cerrarSesion.php"><span class="glyphicon glyphicon-log-out btn-lg" title="Cerrar Sesión"></span></a></div>
					<h2 class="post-title">
						<p class="titulos"><u>REGISTRO DE TIPO DE EVENTOS</u></p>
					</h2><br><br>						
								

								<div class="row">
									<div class="col-lg-12">
										<table class="table table-bordered guardado">
										    <tr>
										    <td>
										    <center>
										    	<?php
													$codigo=$_POST['ncod'];
													$nombre=$_POST['ntip'];
													$codigo=str_pad($codigo, 2,"0",0); echo $codigo." - ".$nombre;
													//conexion a base de datos
													include("conecta.php");
													//construccion de la clausula sql
													$sql = "INSERT INTO tipoevento (codigo,nombre)VALUES('$codigo','$nombre')";
													//ejecucion de la instruccion
													$resultado = mysqli_query($conexion,$sql);
													if($resultado){
														echo"<p class= 'ok'><b>Registro guardado con exito</b></p>";
													}
													else{
														echo"<p class='bad'><b>No se guardaron los datos</b></p>";	
													}
												?>
												<button type="button" class="btn btn-warning" value="Regresar" id="regresar" onclick="location = 'teven01.php'"> Regresar </button>
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
			<li class="active">Registro</li>
			<li class="active">Registrar Tipo Eventos</li>
		</ul>
	</div>
</div>		
</body>
</html>
