<title id="titulo">.:: Generar Recibo </title>
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
						<li class="active">Registrarse</li>
						<li class="active">Recibo</li>
					</ol>
				</div> <!--Finaliza migas de pan-->	

				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

				<div id="divIndex">
				<br>

						<h2 class="post-title">
								<h1 class="titulop">SISTEMA DE REGISTRO</h1>
						</h2>
						<br>
						<section class="img-responsive">
							<center><img src="./images/registrar.png" class="img-responsive" alt="registrar" id="registrar"></center>
						</section><br>

						<p class="post-contenido text-justify font-cs myfont"> 
							Para volver a generar el Recibo, debe ingresar el codigo de inscripcion que fue generado al momento de inscribirse:
						</p>
						<br>

						<form name ="f" action ="reciboinscripcion.php" method = "POST">
							<div class="row">
	                            <div class="col-lg-12">
	                                <table align="center">
	                                	<tr><a href="ayuda.php" class="glyphicon glyphicon-question-sign btn-lg"><label>Ayuda</label></a>	
	                                		<th class="myfont">Número de Inscripción:</th>
	                                	</tr> 
	                                    <tr>
	                                        <td>
	                                        <div class="input-group">                                                        
	                                        	<input type="text" class="form-control" name="nins" id="nins" placeholder="Número Inscripción...">
	                                        	<span class="input-group-btn">
	                                            	<input type="submit" class="btn btn-warning" name="Generar Recibo"  value="Generar Recibo"/>
	                                            	<input type="reset" class="btn btn-default" name="Limpiar"  value="Limpiar"/>
	                                        	</span>
	                                        </div><br>
	                                        </td>
	                                    </tr>
	                                </table>
	                            </div>
	                        </div>
                        </form>

                        <?php 
							$ide = $_POST['ide'];
							
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
									echo "<form name = 'fins' action='inscripcion.php' method='POST'>";
									echo "<span class='letter-cs'>Bienvenido, usted ya esta registrado en nuestro sistema, puede inscribirse a los evento</span>";
									echo "<table align='center'><tr><td>";
									echo "<b>Cedula:</b> <input class='form-control' type='text' name='ide' value='".$ced."' readonly='true'></td></tr><br>";
									echo "<tr><td><b>Nombre:</b> <input type='text' class='form-control' name='nomape' value='".$nom."' readonly='true'></td></tr>";
									echo "<tr><td>                      </td></tr><br>";
									echo "<tr><td><input type='submit' class='btn btn-success' value='Inscripcion a evento'></td></tr>";
									echo "</table> <br></form>";
									}
								else{
									echo "<p class='letter-cs'> No se encontró identificación <b> ".$ide."</b></p>";
							
									echo "<form name = 'fins' action='regartesano.php' method='POST'>";
										echo "<table><tr><td>";
										
											echo "<center><p class='letter-cs'>Para Inscribirse a los eventos necesita estar registrado como artesano. Haga clic en registrarse</p></center>";
											echo "<tr><td align='center'><input type='submit' class='btn btn-success' value='Registrarse'></td></tr>";
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
	<div class="col-xs-12" align="center">
		<ul class="list-inline text-right" id="pie">
			<li><a href="index.php">Inicio</a></li>
			<li class="active">Registrarse</li>
			<li class="active">Recibo</li>
		</ul>
	</div>		
</body>
</html>
