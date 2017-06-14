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
						<p class="titulos"><u>MODIFICAR EVENTOS</u></p>
					</h2><br><br>	

<?php
					$ideven= $_GET['ideven'];
					include("conecta.php");
					$sql1="select * from evento where evento.codevento = $ideven";
					$even=mysqli_query($conexion, $sql1);
					if($reven=mysqli_fetch_array($even)){

					echo "<form name = 'modeve' action='modevento03.php' method='POST'>";

					echo "<table  class='table table-hover tabla-22'>";
					echo "<tr><td>Codigo: <input type='text' class='form-control' name='ideven' value='".$reven['codevento']."' readonly='true'></td></tr>";


					echo "<tr><td>Tipo de evento: <select name = 'idemod' class='form-control'>"; 
					// se llena el primer registro en el combo con el tipo evento ya asignado a la modalidad
					// esto evita que se cambie involutanriamente la relación entre modalidad y tipo evento
					$codmoda=$reven['codmodalidad'];
					$sql2="select * from modalidad, tipoevento where modalidad.codigomodalidad = $codmoda and modalidad.tipoevento_codigo = tipoevento.codigo";
					$auxmoda=mysqli_query($conexion, $sql2);

					if($aux=mysqli_fetch_array($auxmoda)){
						echo "<option value =".$aux['codigomodalidad'].">".$aux['nombre']." - ".$aux['nombremodalidad']."</option>";
					}
					// se genera la lista de tipoevento

					$sql3="select * from tipoevento, modalidad where tipoevento.codigo = modalidad.tipoevento_codigo";
					$resmoda=mysqli_query($conexion, $sql3);

					while($rmoda=mysqli_fetch_array($resmoda)){
						echo "<option value =".$rmoda['codigomodalidad'].">".$rmoda['nombre']." - ".$rmoda['nombremodalidad']."</option>";
					}

					echo "</select></td></tr>";
					echo "<tr><td>version: <input type='text' class='form-control' name='version' value='".$reven['version']."'></td></tr>";
					echo "<tr><td>Descripcion: <input type='text' class='form-control' name='descrip' value='".$reven['descripcion']."'></td></tr>";
					echo "<tr><td>Fecha: <input type='text' class='form-control' name='fecha' value='".$reven['fecha']."'></td></tr>";
					echo "<tr><td>Valor: <input type='text' class='form-control' name='valor' value='".$reven['valor']."'></td></tr>";
					echo "<tr><td>Estado: <select name = 'estado' class='form-control'>"; 

					if($reven['estado'] == 'Activo'){

					   echo "<option value ='Activo'>Activo</option>";
					   echo "<option value ='Desactivo'>Desactivo</option>";

					}else{

						echo "<option value ='Desactivo'>Desactivo</option>";
					    echo "<option value ='Activo'>Activo</option>";

					}
					echo "</td></tr></table>";
						
						//echo "</table></form> <br>";
						//echo "<input type='submit' value='Actualizar datos'>";

						echo "<p><form action='modevento03.php'><br>";
						echo "<table class='tabla-22'><tr><td colspan='2'><center> <input type='submit' class='btn btn-warning' value='Actualizar datos'> </button>";
						echo "</form></td>";

						// se le da la oportunidad de volver sin cambiar nada
						echo "<form action='modevento01.php'><br>";
						echo "<td><input type='submit' class='btn btn-default' value='Limpiar'>";
						echo "</form></td>";

						echo "<form action='modevento01.php'><br>";
						echo "<td><input type='submit' class='btn btn-warning' id='regresar' value='Regresar'>";
						echo "</form></center></td></tr></table>";
					}
					else{
						echo"<p>No se encontraron registros para el codifo ".$idmod."</p>";
						echo "<form action='modevento01.php'>";
						echo "<input type='submit' value='Volver'>";
						echo "</form>";
					}	
?>
 </select>
																	</td>
																</tr>
																															
															</table>
														</center>
													</div>
												</div>
											</form>												
									</center>
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
            <li class="active">Evento</li>
		</ul>
	</div>
</div>		
</body>
</html>
