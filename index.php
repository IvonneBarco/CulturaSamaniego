<title id="titulo">.:: Instituto de Cultura de Samaniego</title>
<link rel="shortcut icon" href="./images/img_escudo.png"/>
	<!--<script src="js/wowslider.js"></script>
	<script src="js/script.js"></script>-->
	<!--<link rel="stylesheet" href="slider/css/estilomenu.css">-->
	<link rel="stylesheet" href="slider/css/estiloslider.css">
	<link rel="stylesheet" href="slider/css/style.css">
	<link rel="stylesheet" href="slider/css/stylefont.css">
	<link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>	
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
	<script src="js/jquery.js"></script>
	
	<a href="#" class="scrollup"><img src="images/icon_top.png" alt=""></a>
	<!-- Inicia Head -->
	<?php include("navbar.html") ?>
	<!-- Finaliza Head -->

		<!-- Inicia Slider -->
		<section class="container hidden-xs hidden-sm">
			<a href="noticia.php"><?php include("slider1.php");?><h5><span class="glyphicon glyphicon-eye-open btn-lg"></span>Ver noticia</h5></a>
			<script src="slider/js/wowslider.js"></script>
			<script src="slider/js/script.js"></script>
		</section>
		<!-- Finaliza Slider -->
	
	<section class="main container"> <!-- Inicia Pagina Principal -->		

		<div class="row"> <!-- Inicia contenedor-->			

			<section class="posts col-md-9">				
				<div class="migas-de-pan"> <!--Inicia migas de pan-->				
					<ol class="breadcrumb" id="miga">
						<li class="active">Usted está aquí.::</li>
						<li><a href="index.php">Inicio</a></li>
					</ol>
				</div> <!--Finaliza migas de pan-->	

				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

				<div id="divIndex">					

					<article class="post clearfix">

						<h1 class="post-title titulop">
								<p class="titulos">BIENVENIDOS AL SITIO WEB DEL</p>
								<p class="titulos">INSTITUTO DE CULTURA </p>
								<p class="titulos">Samaniego - Nariño.</p>
						</h1>
						
						 <section class="img-responsive">
							<center><img src="./imgsamaniego/samaniego2.jpg" class="img-responsive img-thumbnail img-cs" align="center" width="404" height="336" alt="bandera-sandoná" id="bandera-sandoná"><center>
							<div class="desc">Fuente.: Samaniego Stereo</div>
						</section>

												<br>
						<p class="post-contenido text-justify font-cs myfont"> 
							Bienvenidos al sitios web del instituto de cultura del municipio de Samaniego 
                     Nariño, en el encontraremos todo lo relacionado a los  
                     diferentes eventos culturales y recreativos que se llevaran a cabo en nuestro municipio, cuyo objetivo es incentivar
                     la participacion en las diferentes actividades relacionadas con la musica,
                     el arte, danza, deporte, turismo, con el fin de brindarle a nuestra comunidad 
                     samanieguense mayor accesibilidad a los procesos que se desarrollan en esta institución.
						</p>
						<br>
						
						<div class="embed-responsive embed-responsive-16by9">
							<!--<iframe class="embed-responsive-item" src="recursos/Carnaval2016.mp4"></iframe>-->
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/li72V5t2UA4"></iframe>
						</div>
						<div class="desc">Fuente.: Adminsamaniego</div>

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
