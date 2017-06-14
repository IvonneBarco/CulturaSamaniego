<title id="titulo">.:: Artesanos</title>
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
						<li class="active">Artesanos</li>
		
					</ol>
				</div> <!--Finaliza migas de pan-->	

				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

				<div id="divIndex">

					<article class="post clearfix">

						<h2 class="post-title">
								<h1 class="titulop">NUESTROS GESTORES CULTURALES<h1>
						</h2>
						<br><br>

							<?php require_once('./admin/conexiones/cnx_slider.php'); ?>
							<?php
								mysql_select_db($database_cnx_slider, $cnx_slider);
								$query_ms_slider = "SELECT * FROM conartesanos";
								$ms_slider = mysql_query($query_ms_slider, $cnx_slider) or die(mysql_error());
								$row_ms_slider = mysql_fetch_assoc($ms_slider);
								$totalRows_ms_slider = mysql_num_rows($ms_slider);
							?>
								<div id="wowslider-container1">
									<div class="ws_images">
										<table id="per" class="table">
											<tr>
												<td style="vertical-middle"><h3 class="myfont">
													<?php do { ?><br>
													<h3 class="myfont"><?php echo $row_ms_slider['descripcion']; ?></h3>
												</td>	
												<td>
													<img align="right"  width="100px" src="recursos/uploads/<?php echo $row_ms_slider['imagen']; ?>">
												</td>
											</tr>
											<tr id="columna1">
												<td id="fila1">
													<?php } while ($row_ms_slider = mysql_fetch_assoc($ms_slider)); ?>
												</td>
											</tr>
									</table>
									</div>
								    <?php
										mysql_free_result($ms_slider);
							 		?>
							 	</div>
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
