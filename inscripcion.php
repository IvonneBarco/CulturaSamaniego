<title id="titulo">.:: Inscripciones</title>
<link rel="shortcut icon" href="./images/img_escudo.png"/>

	<a href="#" class="scrollup"><img src="images/icon_top.png" alt=""></a>
	<!-- Inicia Head -->
	<?php include("navbar.html") ?>
	<!-- Finaliza Head -->

		<!-- Inicia Slider -->
		<!--<div id="divMiSlider"></div>-->
		<!-- Finaliza Slider -->
	
	
	<section class="main container"> <!-- Inicia Pagina Principal -->		

		<div class="row"> <!-- Inicia contenedor-->			

			<section class="posts col-md-9">				
				<div class="migas-de-pan"> <!--Inicia migas de pan-->				
					<ol class="breadcrumb" id="miga">
						<li class="active">Usted está aquí.::</li>
						<li class="active">Inicio</li>
						<li class="active">Registro</li>
						<li class="active">Inscripciones</li>
					</ol>
				</div> <!--Finaliza migas de pan-->	

				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

				<div id="divIndex">

					<article class="post clearfix">

						<h1 class="post-title">
								<h1 class="titulop">Bienvenid@, sus datos ingresados son:</h1>
						</h1><br><br>

						<?php
							$ced= $_POST['ide'];
							$nom= $_POST['nomape'];
							//$codigo= $_POST['codigo'];
							$codigomodalidad = "";
							$estado = "";
							$fechainscripcion ='now()' ;
							$ordenevento = "";


							//$conexion = mysqli_connect("localhost","root","","correccion9");
							require_once("conecta.php");
							$sql = "SELECT * from inscripciones order by numeroinscripciones desc";
							$resultado = mysqli_query($conexion,$sql);
							if($registro=mysqli_fetch_assoc($resultado))
							         $ninscripcion=$registro['numeroinscripciones']+1;
							       else
							         $ninscripcion = 101;
								?>
									<form name = 'fins2' action='guardarinscripcion.php' method='POST'>	
			
									<table width='70%'>
											<tr>
												<th class="myfont">Identificación</th>
												<td><input type='text' class='form-control' name='ide' value='<?php echo $ced;?>' readonly='true'><br></td>
											</tr>
											<tr>
												<th class="myfont">Nombre</th>
												<td><input type='text' class='form-control' name='nomape' value='<?php echo $nom;?>' readonly='true'><br></td>
											</tr>
											<tr>
												<th class="myfont">Numero Inscripción</th>
												<td><input type = 'text' class='form-control' name = 'nins' value='<?php echo $ninscripcion;?>' readonly='true'><br></td>
											</tr>
									</table>

									<br><br>
									<h2 class="titulo">Seleccione el Evento a Inscribirse</h2><br>

									<!--<form name = 'fins2' action='guardarinscripcion.php' method='POST'>	-->									
										<table width='70%'>
											<tr>
												<th class="myfont">Evento</th>
												<td>
													<?php
													$hoy = date("Y-m-d");
													?>
													<select name='codevento' class='form-control'>	
														<?php
															$sql="SELECT  tipoevento.nombre as tipo, modalidad.nombremodalidad as moda, evento.codevento as evento, evento.fecha as fecha, evento.version as version FROM tipoevento, modalidad, evento where tipoevento.codigo=modalidad.tipoevento_codigo and modalidad.codigomodalidad=evento.codmodalidad and estado='Activo'";
															$rs=mysqli_query($conexion, $sql);
															while($row=mysqli_fetch_array($rs)){
																	if ($hoy<=$row['fecha'])
																echo utf8_encode("<option value=".$row['evento'].">".$row['tipo']." - ".$row['moda']." - ".$row['version']."</option>");
															}
														?>
													</select><br>
												</td>
											</tr>
											<tr>
												<th class="myfont">Fecha Inscripción</th>
												<td><input readonly="true" class='form-control' type="date" name="fechainscripcion" value="<?php echo date ("Y-m-d");?>"><br></td>
											</tr>
											<tr>
												<td><input type="hidden" name="ordenevento"><br></td>
											</tr>
											<tr>
												<th class="myfont">Nombre Motivo</th>
												<td><input type="text" class='form-control' name="nmotivo"><br></td>
											</tr>
											<tr>
												<td colspan="2">
													<center>
														<input type="hidden" name="ordenevento">
														<input id="guardar" class="btn btn-warning" type="submit" value="Guardar">
														<input id="guardar" class="btn btn-default" type="reset" value="Limpiar"> <a href="ayuda.php" class="glyphicon glyphicon-question-sign btn-lg"><label>Ayuda</label></a>	
													</center>
												</td>
											</tr>	
										</table>
									</form>

					</article>
					
				</div>
				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
				
			</section>

			<?php include("aside.html") ?>
		</div>
	</section>	<!-- Finaliza Pagina Principal -->

		
	<?php include("footer.html") ?>	
</body>
</html>
