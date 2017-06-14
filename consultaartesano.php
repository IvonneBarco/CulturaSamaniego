<title id="titulo">.:: Registrarse </title>
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
				<br>

						<h2 class="post-title">
								<h1 class="titulop">SISTEMA DE REGISTRO A CONCURSOS</h1>
						</h2>
						<br>
						<section class="img-responsive">
							<center><img src="./images/registrar.png" class="img-responsive" alt="registrar" id="registrar"></center>
						</section><br>

						<p class="post-contenido text-center font-cs myfont"> 
							Por favor Ingrese su número de identificación, Posteriormente haga click en el bóton "Buscar"
						</p>
						<br>

						<?php 				
							$ide = $_POST['ide'];
						?>

						<form name ="f" action ="consultaartesano.php" method ="POST">
							<div class="row">
	                            <div class="col-lg-12">
	                                <table align="center">
	                                	<tr><a href="ayuda.php" target="_blank" class="glyphicon glyphicon-question-sign btn-lg"><label>Ayuda</label></a>	
	                                		<th>Buscar:</th>
	                                	</tr> 
	                                    <tr>
	                                        <td>
	                                        <div class="input-group">                                                        
	                                        	<input type="text" class="form-control" name="ide"  placeholder="Identificación">
	                                        	<span class="input-group-btn">
	                                            	<input type="submit" class="btn btn-warning" value="Buscar"/>
	                                        	</span>
	                                        </div><br>
	                                        </td>
	                                    </tr>
	                                </table>
	                            </div>
	                        </div>
                        </form>

                        <?php 
								//$ide = $_GET['ide'];
							
							if($ide>0){
								//conexión a la base de datos
								//$conexion = mysqli_connect("localhost","root","","correccion9"); 
								require_once("conecta.php");
								// construcción de la clausula SQL
								$sql = "SELECT * FROM artesano WHERE identificacion = ".$ide;
								// ejecución de la instrucción
								$resultado = mysqli_query($conexion,$sql); 
								$registro = mysqli_fetch_assoc($resultado);
								
								if($registro['identificacion']!=""){
									$ced=$registro['identificacion'];
									$nom=$registro['nombres']." ".$registro['apellidos'];					
									echo "<form name = 'fins' action='inscripcion.php' method='POST' class='col-lg-12'>";
									echo "<h3 class='post-contenido text-center font-cs myfont'>Bienvenido, usted ya esta registrado en nuestro sistema, puede inscribirse a los concursos</h3>";
									echo "<table class='myfont' align='center'><tr><td>";
									echo "<b>Cedula:</b><br> <input class='form-control' type='text' name='ide' value='".$ced."' readonly='true'></td></tr><br>";
									echo "<tr><td><b>Nombre:</b><br> <input type='text' class='form-control' name='nomape' value='".$nom."' readonly='true'></td></tr>";
									echo "<tr><td>                      </td></tr><br>";
									echo "<tr><td><br><input type='submit' class='btn btn-warning' value='Inscripción a Concurso'></td></tr>";
									echo "</table> <br></form><br>";
									}
								else{
									echo "<p class='letter-sam'> No se encontró la	 identificación <b> ".$ide."</b></p>";
							
									echo "<form name = 'fins' action='regartesano.php' method='POST'>";
										echo "<table><tr><td>";
										
											echo "<center><p class='post-contenido text-center font-cs myfont'>Para Inscribirse a los concursos necesita estar registrado como Gestor cultural. <br>Haga clic en registrarse</p></center>";
											echo "<tr><td align='center'><input type='submit' class='btn btn-warning' value='Registrarse'></td></tr>";
										echo "</table></form>";
									}
							}
							?> 
					
				</div>
				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
				
			</section>

			<?php include("aside.html") ?>
		</div>
	</section>	<!-- Finaliza Pagina Principal -->

		
	<?php include("footer.html") ?>		
</body>
</html>
