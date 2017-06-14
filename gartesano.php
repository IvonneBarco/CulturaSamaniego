<title id="titulo">.:: Registrarse</title>
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
						<li class="active">Registrarse</li>
					</ol>
				</div> <!--Finaliza migas de pan-->	

				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

				<div id="divIndex">
					<article class="post clearfix">

						<h2 class="post-title">
								<p class="titulos">REGISTRARSE COMO GESTOR CULTURAL</p>
						</h2>
				<div class="col-lg-12">
				<table class="table table-bordered guardado">
					<tr>
					    <td>
					<center>


						<?php
							$identificacion = $_POST['identificacion'];
							$expedicion = $_POST['expedicion'];
							$nombres = $_POST['nombres'];
							$apellidos = $_POST['apellidos'];
							$fechanacimiento = $_POST['fechanacimiento'];
							$lugarnacimiento = $_POST['lugarnacimiento'];
							$edad = $_POST['edad'];
							$genero = $_POST['genero'];
							$estadocivil = $_POST['estadocivil'];
							$direccion = $_POST['direccion'];
							$telefono = $_POST['telefono'];
							$correo = $_POST['correo'];
							$estrato = $_POST['estrato'];
							$niveleducativo = $_POST['niveleducativo'];
							$inicioactividadesl = $_POST['inicioactividadesl'];
							$tipodeformacionartistica = $_POST['tipodeformacionartistica'];
							$principalactividad = $_POST['principalactividad'];
							$areacultural = $_POST['areacultural'];
							$actividadquedesarrolla = $_POST['actividadquedesarrolla'];
							$numeropernucleo = $_POST['numeropernucleo'];
							$actividaddiferente = $_POST['actividaddiferente'];
							$ingresosartisticos = $_POST['ingresosartisticos'];
							$ingresosmensuales = $_POST['ingresosmensuales'];
							$cabezadefamilia = $_POST['cabezadefamilia'];
							$discapacidad = $_POST['discapacidad'];
							$comunidadetnica = $_POST['comunidadetnica'];
							$sisben = $_POST['sisben'];
							$nivelsisben = $_POST['nivelsisben'];
							$sistemasalud = $_POST['sistemasalud'];
							$pensiones = $_POST['pensiones'];
							$riesgos = $_POST['riesgos'];

							//conexion a base de datos
							include("conecta.php");
							//construccion de la clausula sql
							$sql = "INSERT INTO artesano (identificacion,expedicion,nombres,apellidos,fechanacimiento,lugarnacimiento,edad,genero,estadocivil,direccion,telefono,correo,estrato,niveleducativo,inicioactividadesl,tipodeformacionartistica,principalactividad,areacultural,actividadquedesarrolla,numeropernucleo,actividaddiferente,ingresosartisticos,ingresosmensuales,cabezadefamilia,discapacidad,comunidadetnica,sisben,nivelsisben,sistemasalud,pensiones,riesgos)VALUES('$identificacion','$expedicion','$nombres','$apellidos','$fechanacimiento','$lugarnacimiento','$edad','$genero','$estadocivil','$direccion','$telefono','$correo','$estrato','$niveleducativo','$inicioactividadesl','$tipodeformacionartistica','$principalactividad','$areacultural','$actividadquedesarrolla','$numeropernucleo','$actividaddiferente','$ingresosartisticos','$ingresosmensuales','$cabezadefamilia','$discapacidad','$comunidadetnica','$sisben','$nivelsisben','$sistemasalud','$pensiones','$riesgos')";
							//ejecucion de la instruccion
							$resultado = mysqli_query($conexion,$sql);
							if($resultado){
								echo"<p class= 'ok'><b>Registro guardado con exito</b></p>";
							}
							else{
								echo"<p class='bad'><b>No se guardaron los datos</b></p>";	
							}
							?>
							<button type="button" class="btn btn-success" value="Regresar" id="regresar" onclick="location = 'index.php'"> Regresar </button>
							 </center>
						</td>
					</tr>
				</table>
			</div>
		</div>	
	?>

				</article>
	
					
				</div>
				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
				
			</section>

			<?php include("aside.html") ?>
		</div>
	</section>	<!-- Finaliza Pagina Principal -->

		
	<?php include("footer.html") ?>
	<div class="col-xs-12" align="center">
		<ul class="list-inline text-right" id="pie">
			<li class="active">Inicio</li>
			<li class="active">Registro</li>
			<li class="active">Registrarse</li>
		</ul>
	</div>		
</body>
</html>
