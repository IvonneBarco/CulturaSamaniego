<!DOCTYPE HTML>
<HTML lang = "es">
<HEAD>
<title>.:: Informacion Institucional</title>
<link rel="shortcut icon" href="./images/img_escudo.png"/>
	<META charset = "utf-8">
	<META name = "description" content = "Descripción Instituto de cultura de Samaniego">
	<META name = "keyword" content = "Introduccion, Inicio, Noticias, Insitituto de Cultura Samaniego">
	<link rel="stylesheet" href= "fonts.css">
</HEAD>


<?php require_once('./admin/conexiones/cnx_slider.php'); include("funciones.php");  $f=fecha_actual();?>
<?php
mysql_select_db($database_cnx_slider, $cnx_slider);
$query_ms_slider = "SELECT * FROM info WHERE info.estado = 1 ORDER BY info.orden";
$ms_slider = mysql_query($query_ms_slider, $cnx_slider) or die(mysql_error());
$row_ms_slider = mysql_fetch_assoc($ms_slider);
$totalRows_ms_slider = mysql_num_rows($ms_slider);
?>
	

<?php do { ?><article class="post clearfix">
	<a href="#" class="thumb pull-left">
		
	</a>
		<center><h2 class="subtitulos"><span class="letter-s">
			<?php echo utf8_encode($row_ms_slider['titulo']); ?></span></h2><br>
		<p class="post-contenido text-justify">
		
			
		<p class="post-contenido text-justify font-cs myfont">
		<?php echo $row_ms_slider['descripcion']; ?>
		</p>
		
</article><?php } while ($row_ms_slider = mysql_fetch_assoc($ms_slider)); ?>

<?php
	   mysql_free_result($ms_slider);
  ?>





</BODY>
</HTML>
