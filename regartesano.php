<title id="titulo">.:: Instituto de Cultura de Samaniego</title>
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

                    <a href="ayuda.php" class="glyphicon glyphicon-question-sign btn-lg"><label>Ayuda</label></a>

						<h2 class="post-title">
								<p class="titulos">REGISTRARSE COMO GESTOR CULTURAL</p>
						</h2>

						<?php
							$identificacion = "";
							$expedicion = "";
							$nombres = "";
							$apellidos = "";
							$fechanacimiento = "";
							$lugarnacimiento = "";
							$edad = "";
							$genero = "";
							$estadocivil = "";
							$direccion = "";
							$telefono = "";
							$correo = "";
							$estrato = "";
							$niveleducativo = "";
							$inicioactividadesl = "";
							$tipodeformacionartistica = "";
							$principalactividad = "";
							$areacultural = "";
							$actividadquedesarrolla = "";
							$numeropernucleo = "";
							$actividaddiferente = "";
							$ingresosartisticos = "";
							$ingresosmensuales = "";
							$cabezadefamilia = "";
							$discapacidad = "";
							$comunidadetnica = "";
							$sisben = "";
							$nivelsisben = "";
							$sistemasalud = "";
							$pensiones = "";
							$riesgos = "";

							include("conecta.php");
							$sql = "SELECT expedicion from artesano where identificacion='$identificacion'";
							$resultado = mysqli_query($conexion,$sql);
							while ($registro = mysqli_fetch_assoc($resultado)){ 
							$expedicion = $registro['expedicion'];
							}
						?>
							<form name="artesano" action="gartesano.php" method="POST">							
							<table align="center" class="table table-hover"> 
                                        <tr>                                        
                                            <td><b>Identificación </b></td>
                                            <td><input type='text' class='form-control' name='identificacion' id='identificacion' value = '<?php echo $identificacion?>' placeholder="" aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Expedición</b></td>
                                            <td><input type='text' class='form-control' name='expedicion' id='expedicion'  placeholder="" value = '<?php echo $expedicion?>'   aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Nombres </b></td>
                                            <td><input type='text' class='form-control' name='nombres' id='nombres'  placeholder=""  aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Apellidos </b></td>
                                            <td><input type='text' class='form-control' name='apellidos' id='apellidos'  placeholder=""  aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Fecha de Nacimiento </b></td>
                                            <td><input type='text' class='form-control' step="1" min="1915-01-01" max="2005-12-31" name='fechanacimiento' id='fechanacimiento'  placeholder=""  aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Lugar de Nacimiento </b></td>
                                            <td><input type='text' class='form-control' name='lugarnacimiento' id='lugarnacimiento'  placeholder=""  aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Edad </b></td>
                                            <td><input type='text' class='form-control' name='edad' id='edad'  placeholder=""  aria-describedby='sizing-addon1'></td>
                                        </tr>  
                                        <tr>
                                            <td><b>Género </b></td>
                                            <td>
                                                <select class='form-control' name="genero" >
                                                    <option  selected="selected">--- Seleccionar ---</option>
                                                    <option value="Masculino">Masculino</option>
                                                    <option value="Femenino">Femenino</option>
                                                    <option value="Otro">Otro</option>
                                                </select>
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td><b>Estado Civíl </b></td>
                                            <td>
                                                <select class='form-control' name="estadocivil" >
                                                    <option  selected="selected">--- Seleccionar ---</option>
                                                    <option value="Soltero">Soltero(a)</option>
                                                    <option value="Casado">Casado(a)</option>
                                                    <option value="Unionlibre">Union Libre</option>
                                                    <option value="Separado">Separado(a)</option>
                                                    <option value="Viudo">Viudo(a)</option>
                                                </select>
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td><b>Dirección Residencia </b></td>
                                            <td><input type='text' class='form-control' name='direccion' id='direccion'  placeholder=""  aria-describedby='sizing-addon1'></td>
                                        </tr> 
                                        <tr>
                                            <td><b>Telefono (s) </b></td>
                                            <td><input type='text' class='form-control' name='telefono' id='telefono'  placeholder=""  aria-describedby='sizing-addon1'></td>
                                        </tr>  
                                        <tr>
                                            <td><b>Correo Electrónico </b></td>
                                            <td><input type='text' class='form-control' name='correo' id='correo' placeholder=""  aria-describedby='sizing-addon1'></td>
                                        </tr> 
                                        <tr>
                                            <td><b>Estrato Residencia </b></td>
                                            <td>
                                                <select class='form-control' name="estrato">
                                                    <option selected="selected">--- Seleccionar ---</option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">6</option>
                                                </select>
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td><b>Nivel Educatívo Alcanzado</b></td>
                                            <td>
                                                <select class='form-control' name="niveleducativo">
                                                    <option selected="selected">--- Seleccionar ---</option>
                                                    <option value="primariaincompleta">Primaria Incompleta</option>
                                                    <option value="primariacompleta">Primaria Completa</option>
                                                    <option value="secundariaincompleta">Secundaria Incompleta</option>
                                                    <option value="secundariacompleta">Secundaria Completa</option>
                                                    <option value="tecnicootecnologico">Técnico o Tecnológico</option>
                                                    <option value="universitariasintitulo">Universitaria sin Título</option>
                                                    <option value="universitariacontitulo">Universitaria con Título</option>
                                                    <option value="postgrado">Postgrado</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Año de Inicio Actividades Artísticas y Culturales </b></td>
                                            <td><input type='text' class='form-control' name='inicioactividadesl' id='inicioactividadesl' placeholder=""  aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Tipo de Formación Artística y Cultural </b></td>
                                            <td>
                                                <select class='form-control' name='tipodeformacionartistica'>
                                                    <option selected="selected">--- Seleccionar ---</option>
                                                    <option value="autodidacta">Autodidacta</option>
                                                    <option value="transmision">Transmisión Local o Familiar</option>
                                                    <option value="talleres">Talleres o Cursos</option>
                                                    <option value="estudios">Estudios con Maestro</option>
                                                    <option value="estudiosinc">Estudios Universitarios Incompletos</option>
                                                    <option value="estudioscom">Estudios Universitarios Completos</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>¿Es la Actividad Artística y Cultural su Principal Actividad? </b></td>
                                            <td>
                                                <select class='form-control' name='principalactividad'>
                                                    <option selected='selected'></option>
                                                    <option value="si">Si</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Determine en qué Area Cultural se Desempeña </b></td>
                                            <td>
                                                <select class='form-control' name='areacultural'>
                                                    <option selected='selected'></option>
                                                    <option value="danza">Danza</option>
                                                    <option value="literatura">Literatura</option>
                                                    <option value="musica">Música</option>
                                                    <option value="artedramatico">Arte Dramático</option>
                                                    <option value="artesplasticas">Artes Plásticas</option>
                                                    <option value="artesaudiovisuales">Artes Audiovisuales</option>
                                                    <option value="gestioncultural">Gestión Cultural</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Principal Actividad Artística que Desarrolla  </b></td>
                                            <td><input type='text' class='form-control' name='actividadquedesarrolla' id='actividadquedesarrolla' placeholder=""  aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Número de Personas del Núcleo Familiar  </b></td>
                                            <td><input type='text' class='form-control' name='numeropernucleo' id='numeropernucleo' placeholder=""  aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>¿Qué Otras Actividades Laborales Diferentes a la Artística Desarrolla?  </b></td>
                                            <td><input type='text' class='form-control' name='actividaddiferente' id='actividaddiferente' placeholder=""  aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Ingresos Mensuales Derivados de la Actividad Artística  </b></td>
                                            <td><input type='text' class='form-control' name='ingresosartisticos' id='ingresosartisticos' placeholder=""  aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Ingresos Totales Mensuales  </b></td>
                                            <td><input type='text' class='form-control' name='ingresosmensuales' id='ingresosmensuales'  placeholder=""  aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Cabeza de Familia  </b></td>
                                            <td>
                                                <select class='form-control' name="cabezadefamilia">
                                                    <option selected="selected">--- Seleccionar ---</option>
                                                    <option value="si">Si</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Posee Alguna Discapacidad Física  </b></td>
                                            <td>
                                                <select class='form-control' name="discapacidad">
                                                    <option selected="selected">--- Seleccionar ---</option>
                                                    <option value="si">Si</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>¿Hace Parte de una Minoria Etnica?  </b></td>
                                            <td>
                                                <select class='form-control' name="comunidadetnica">
                                                    <option selected="selected">--- Seleccionar ---</option>
                                                    <option value="negritudes">Negritudes</option>
                                                    <option value="indigenas">Indigenas</option>
                                                    <option value="gitanos">Gitanos</option>
                                                    <option value="otro">Otro</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>¿Está Clasificado por el SISBEN?  </b></td>
                                            <td>
                                                <select class='form-control' name="sisben">
                                                    <option selected="selected">--- Seleccionar ---</option>
                                                    <option value="si">Si</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Nivel del SISBEN  </b></td>
                                            <td><input type='text' class='form-control' name='nivelsisben' id='nivelsisben' placeholder=""  aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Sistema de Salud  </b></td>
                                            <td>
                                                <select class='form-control' name="sistemasalud">
                                                    <option selected="selected">--- Seleccionar ---</option>
                                                    <option value="ninguno">Ninguno</option>
                                                    <option value="ars">ARS</option>
                                                    <option value="eps">EPS</option>
                                                    <option value="otra">Otra</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>¿Está Afiliado a Pensiones?  </b></td>
                                            <td>
                                                <select class='form-control' name="pensiones">
                                                    <option selected='selected'></option>
                                                    <option value="si">Si</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>¿Está Afiliado a Riesgos Profesionales?  </b></td>
                                            <td>
                                                <select class='form-control' name="riesgos">
                                                    <option selected="selected">--- Seleccionar ---</option>
                                                    <option value="si">Si</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </td>
                                        </tr>                               
                                        <tr>
                                            <td colspan="2">
                                                <center>
                                                    <input type="submit" class="btn btn-success" name="btn1" value="Registrarse"/>
                                                    <button type="button" class="btn btn-success" value="Regresar" id="regresar" onclick="location = 'index.php'"> Regresar </button>
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
	<div class="col-xs-12" align="center">
		<ul class="list-inline text-right" id="pie">
			<li class="active">Inicio</li>
			<li class="active">Registro</li>
            <li class="active">Registrarse</li>
		</ul>
	</div>		
</body>
</html>
