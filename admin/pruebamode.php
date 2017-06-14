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
					<div align= "right">
						<?php  echo "<b> BIENVENID@: <i class='verde';>" . $_SESSION["usuario"];"</i></b>" ?>
						<a href="cerrarSesion.php"><span class="glyphicon glyphicon-log-out btn-lg" title="Cerrar Sesión"></span></a>
					</div>

					<h2 class="post-title">
						<p class="titulos"><u>MODIFICAR EVENTOS</u></p>
					</h2><br><br>

					<?php 
						$ideven= $_GET['ideven'];
					include("conecta.php");
					$sql1="select * from evento where evento.codevento = $ideven";
					$even=mysqli_query($conexion, $sql1);
					if($reven=mysqli_fetch_array($even)){

						?>
						<form name = 'modeve' action='modevento03.php' method='POST'>
							<table  class='table table-hover'>
								<tr>
									<td>
										Codigo: <input type='text' name='ideven' value='".$reven['codevento']."' readonly='true'>
									</td>
								</tr>
								<tr>
									<td>Tipo de evento: 
										<select name = 'idemod'>
											<?php 
												// se llena el primer registro en el combo con el tipo evento ya asignado a la modalidad
												// esto evita que se cambie involutanriamente la relación entre modalidad y tipo evento
												$codmoda=$reven['codmodalidad'];
												$sql2="SELECT * FROM modalidad, tipoevento WHERE modalidad.codigomodalidad = $codmoda AND modalidad.tipoevento_codigo = tipoevento.codigo";
												$auxmoda=mysqli_query($conexion, $sql2);

												if($aux=mysqli_fetch_array($auxmoda)){
													echo "<option value =".$aux['codigomodalidad'].">".$aux['nombre']." - ".$aux['nombremodalidad']."</option>";
												}
												// se genera la lista de tipoevento
												$sql3="SELECT * FROM tipoevento, modalidad WHERE tipoevento.codigo = modalidad.tipoevento_codigo";
												$resmoda=mysqli_query($conexion, $sql3);

												while($rmoda=mysqli_fetch_array($resmoda)){
													echo "<option value =".$rmoda['codigomodalidad'].">".$rmoda['nombre']." - ".$rmoda['nombremodalidad']."</option>";
												}

											 ?>
										</select>
									</td>
								</tr>
								<tr>
									<td>version: <input type='text' name='version' value='<?php ".$reven['version']."?>'></td>
								</tr>;
								<tr>
									<td>Descripcion: <input type='text' name='descrip' value='<?php ".$reven['descripcion']."?>'></td>
								</tr>;
								<tr>
									<td>Fecha: <input type='text' name='fecha' value='<?php ".$reven['fecha']."?>'></td>
								</tr>;
								<tr>
									<td>Valor: <input type='text' name='valor' value='<?php ".$reven['valor']."?>'></td>
								</tr>;
								<tr>
									<td>Estado: <select name = 'estado'>"; 
								</tr>

								<?php
								if($reven['estado'] == 'Activo'){

								   echo "<option value ='Activo'>Activo</option>";
								   echo "<option value ='Desactivo'>Desactivo</option>";

								}else{

									echo "<option value ='Desactivo'>Desactivo</option>";
								    echo "<option value ='Activo'>Activo</option>";

								}?>								
							</table>
						</form>

						<form action='modevento03.php'><br>";
							<table>
								<tr>
									<td colspan='2'><input type='submit' class='btn btn-warning' value='Actualizar datos'></td>
								</tr>
							</table>
						</form>

						<form action='modevento01.php'><br>";
							<td><input type='submit' class='btn btn-default' value='Limpiar'>
						</form>
					<?php


					 ?>
				</div>
			</section>
		</div>
	</section>