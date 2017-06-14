<title id="titulo">.:: Proyectos Institucionales </title>
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
						<li class="active">Proyectos Institucionales</li>
					</ol>
				</div> <!--Finaliza migas de pan-->	

				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

				<div id="divIndex">					
					<h1 class="titulop">PROYECTOS INSTITUCIONALES</h1>
					<br><br><br>


				<?php 
					include("slidereventos.php"); // Incluimos nuestro archivo de conexión con la base de datos 
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
