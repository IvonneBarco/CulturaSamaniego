	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta name="description" content="ienvenidos al sitio web de la casa de la cultura de Sandoná - Nariño, en el encontraremos información relacionada conos eventos culturales de nuestro municipio">
		<meta name="keywords" content="casa-de-cultura, sandoná, nariño, danza, fiestas, colombia, corregimientos">	
		<link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>	
		<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="../css/jquery-ui.css">
		<link rel="stylesheet" href="../css/fonts.css">


		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/jquery-ui.js"></script>
		<script src="../js/jquery.slides.js"></script>
		<script src="../js/jquery.ui.datepicker-es.js"></script>
		<script src="../codigo.js"></script>
		<title id="titulo">.:: Zona Administrativa</title>
		<link rel="shortcut icon" href="../images/img_escudo.png"/>

		<script>
		  $(function() {
		    $( "#dialog" ).dialog({
		      autoOpen: false,
		      show: {
		        effect: "clip",
		        duration: 1000
		      },
		      hide: {
		        effect: "clip",
		        duration: 1000
		      }
		    });
		 
		    $( "#opener" ).click(function() {
		      $( "#dialog" ).dialog( "open" );
		    });
		  });
  		</script>

	</head>
	<body>		
		

	<a href="#" class="scrollup"><img src="images/icon_top.png" alt=""></a>

	<!-- Inicia Head -->

	<!-- Finaliza Head -->
			<!-- Inicia Navbar-->
			<label class="verde"><h2 align="center">Instituto de Cultura ♥ Samaníego - Nariño</h2><label>
			<center><img src="../images/img_escudo.png" class="img-responsive" alt="admin" width="100px" height="200px"></center>
					<!-- Finaliza Navbar-->
	<section> <!-- Inicia Pagina Principal -->		

		<div class="row"> <!-- Inicia contenedor-->			

			<section class="posts col-md-12">

				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
					<div id="dialog" title="Iniciar Sesión">
					<!--<?php
					  #  if(empty($_SESSION['usuario_nombre'])) { // comprobamos que las variables de sesión estén vacías        
					
					?>-->
					<p>
				        <form action="verificar.php" method="POST" frm="frmSesion">
				            <div class="input-group input-group-xs">
				                <span class="input-group-addon" id="sizing-addon1"><label class="glyphicon glyphicon-user"></label></span>
				                <input type="text" class="form-control" name="usuario_nombre" required placeholder="USUARIO" aria-describedby="sizing-addon1">
				            </div>
				            <br>

				            <div class="input-group input-group-xs">
				                <span class="input-group-addon" id="sizing-addon1"><label class="glyphicon glyphicon-th"></label></span>
				                <input type="password" class="form-control" name="usuario_clave" required placeholder="*******" aria-describedby="sizing-addon1">
				            </div>
				            <br>
				            <input type="submit" class="btn btn-warning" name="acceder" id="acceder" value="Acceder">
				            <br>
				        </form>
				    </p>
				    <!--<?php
					    #}else {
					?>
					      
					<?php
					   # }
					?>  -->
				</div>

						<h1 class="post-title titulop">SISTEMA DE ADMINISTRACIÓN</h1>

						<h1 class="post-title titulos">
								<h1 class="titulos" align="center">Bienvenid@, al Sistema de Administración.</h1>								
						</h1>
						
						<table id="mitabla">
							<tr>
								<td><p  class="post-contenido text-center font-cs">  
									Desde aquí podrá ingresar a la administración del sitio web del Instituto de Cultura de Samaniego- Nariño
									Para acceder, usted debe tener un <b>usuario</b> y <b>contraseña</b> previamente suministrados.</p>
								</td>
							</tr>							
						</table>
						<section class="img-responsive">
							<center><img src="../images/admin.png" class="img-responsive" alt="admin" id="admin" width="300px" height="300px"></center>
								<center><a class="btn btn-warning btn-lg" href="#" role="button" id="opener">Acceder</a></center>
						</section>
						<br>

						



				
				 

					
				<!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
				
			</section>
			<!-- <?php #include("adminaside.html") ?> -->
		</div>
	</section>	<!-- Finaliza Pagina Principal -->
	<footer>
		<div class="col-xs-12" align="center" id="datos">
					<br>
					<span class="glyphicon glyphicon-screenshot datos"></span> <span id="contac">Dirección:Casa de la Cultura.Carrera 7 No 6-13 Barrio Schumacher</span><br>
					<span class="glyphicon glyphicon-phone-alt datos"></span> <span id="contac">Celular:3136838356 </span><br>
					<span class="glyphicon glyphicon-envelope datos"></span> <span id="contac">Email:oficinadecultura@gmail.com</span><br>
					<span class="glyphicon glyphicon-envelope datos"></span> <span id="contac">Código Postal: 526040</span><br>
					<span class="glyphicon glyphicon-envelope datos"></span> <span id="contac">Horario de Atencion: 7-12 y 2-5pm</span>	<br>				
				</div>
	</footer>
</body>
</html>
