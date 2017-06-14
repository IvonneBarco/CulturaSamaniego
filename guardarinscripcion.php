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
					<?php
						$ins = $_POST['nins'];
						$evento=$_POST['codevento'];
						//$modalidad=$_POST['codigomodalidad'];
						//$version=$_POST['version'];
						$iden = $_POST['ide'];
						$fecha = $_POST['fechainscripcion'];
						$nmot = $_POST['nmotivo'];
						//$orden = $_POST['ordenevento'];
						//$ins=str_pad($ins, 2,"0",0);
						?>
						<center><h1 class="titulop">INSCRIPCIÓN A EVENTOS</h1></center><br>
						<br>
						<br>
						<table class="table guardado">
							<tr>
								<th class="myfont">Número Inscripción:</th>
								<td class="myfont"><?php echo $ins; ?></td>
							</tr>
							<tr>
								<th class="myfont">Evento:</th>
								<td class="myfont"><?php echo $evento; ?></td>
							</tr>
							<tr>
								<th class="myfont">Id Artesano:</th>
								<td class="myfont"><?php echo $iden; ?></td>
							</tr>
							<tr>
								<th class="myfont">Fecha:</th>
								<td class="myfont"><?php echo $fecha; ?></td>
							</tr>

								<?php
								//echo "Numero inscripcion: ".$ins."<br>Evento: ".$evento."<br>Id Artesano: ".$iden."<br>Fecha: ".$fecha;
								//$conexion= mysqli_connect("localhost","root","","correccion9");
								require_once("conecta.php");
								$sql = "INSERT INTO inscripciones (numeroinscripciones,codigo,idartesano,fechainscripcion, nmotivo)VALUES('$ins','$evento','$iden', '$fecha', '$nmot')";
								?>
							<tr>
								<td colspan="2"><?php
									$resultado = mysqli_query($conexion,$sql);
									if($resultado){
										echo"<center><p class= 'ok'><b>Registro guardado con exito</b></p></center>";
									}
									else{
										echo"<center><p class='bad'><b>No se guardaron los datos</b></p></center>";	
									}
									?>
								</td>
							<tr>
								<td>
									<button type="button" class="btn btn-warning" value="Regresar" id="regresar" onclick="location = 'consultaartesano.php'"> Regresar </button>	
								</td>
								<td>
									<form action="reciboinscripcion.php" method ='POST'>
									<?php echo "<input type='hidden' name='nins' value='".$ins."' >";?><input type="submit" class="btn btn-primary" value="Generar Recibo">
									</form>
								</td>
							</tr>
						</table>
								
					
				</div>
				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
				
			</section>

			<?php include("aside.html") ?>
		</div>
	</section>	<!-- Finaliza Pagina Principal -->

		
	<?php include("footer.html") ?>	
</body>
</html>
