<!DOCTYPE HTML>
<HTML lang = "es">
<HEAD>
<title>.:: Proyectos Institucionales</title>
<link rel="shortcut icon" href="./images/img_escudo.png"/>
	<META charset = "utf-8">
	<META name = "description" content = "Descripción Casa de Cultura Sandoná">
	<META name = "keyword" content = "Introduccion, Inicio, Noticias, Casa de Cultura Sandoná">
	<TITLE>Proyectos Institucionales</TITLE>
	<link rel="stylesheet" href= "fonts.css">
</HEAD>


<?php require_once('./admin/conexiones/cnx_slider.php'); include("funciones.php");  $f=fecha_actual();?>
<?php
mysql_select_db($database_cnx_slider, $cnx_slider);
$query_ms_slider = "SELECT * FROM eveninstitucionales WHERE eveninstitucionales.estado = 1 ORDER BY eveninstitucionales.orden";
$ms_slider = mysql_query($query_ms_slider, $cnx_slider) or die(mysql_error());
$row_ms_slider = mysql_fetch_assoc($ms_slider);
$totalRows_ms_slider = mysql_num_rows($ms_slider);
?>
	

<?php do { ?><article class="post clearfix">
	<a href="#" class="thumb pull-left">
		<img class="img-thumbnail" src="recursos/eveninstitucionales/<?php echo $row_ms_slider['imagen']; ?>" alt="<?php echo $row_ms_slider['titulo']; ?>" title="<?php echo $row_ms_slider['titulo']; ?>" id="img_not"  width="288px" height="200px">
	</a>
		<center><center><h3 class="titulos">
			<?php echo $row_ms_slider['titulo']; ?></h3></center><br>
		<p class="post-contenido text-justify font-cs">
		
			
		<p class="post-contenido text-justify font-cs myfont">
		<?php echo $row_ms_slider['descripcion']; ?>
		</p>
		
</article><?php } while ($row_ms_slider = mysql_fetch_assoc($ms_slider)); ?>

<?php
	   mysql_free_result($ms_slider);
  ?>





</BODY>
</HTML>
