<!DOCTYPE HTML>
<HTML lang = "es">
<HEAD>
<title>.:: Noticias</title>
<link rel="shortcut icon" href="./images/img_escudo.png"/>
	<META charset = "utf-8">
	<META name = "description" content = "Descripción Casa de Cultura Sandoná">
	<META name = "keyword" content = "Introduccion, Inicio, Noticias, Casa de Cultura Sandoná">
	<TITLE>Inicio</TITLE>
	<link rel="stylesheet" href= "fonts.css">
	<script src="js/script1.js"></script>
</HEAD>




<?php require_once('./admin/conexiones/cnx_slider.php'); include("funciones.php");  $f=fecha_actual();?>
<?php
/*$TAMANO_PAGINA = 5; 

//examino la página a mostrar y el inicio del registro a mostrar 
$pagina = $_GET["pagina"]; 
if (!$pagina) { 
   	$inicio = 0; 
   	$pagina=1; 
} 
else { 
   	$inicio = ($pagina - 1) * $TAMANO_PAGINA; 
}

//miro a ver el número total de campos que hay en la tabla con esa búsqueda 
$ssql = "select * from slider " . $criterio; 
$rs = mysql_query($ssql,$conn); 
$num_total_registros = mysql_num_rows($rs); 
//calculo el total de páginas 
$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA); 

//pongo el número de registros total, el tamaño de página y la página que se muestra 
echo "Número de registros encontrados: " . $num_total_registros . "<br>"; 
echo "Se muestran páginas de " . $TAMANO_PAGINA . " registros cada una<br>"; 
echo "Mostrando la página " . $pagina . " de " . $total_paginas . "<p>";


//construyo la sentencia SQL 
$ssql = "select * from slider " . $criterio . " limit " . $inicio . "," . $TAMANO_PAGINA; 
$rs = mysql_query($ssql); 
while ($fila = mysql_fetch_object($rs)){ 
   	echo $fila->nombre_pais . "<br>"; 
} 
//cerramos el conjunto de resultado y la conexión con la base de datos 
mysql_free_result($rs); 
mysql_close($conn);


//muestro los distintos índices de las páginas, si es que hay varias páginas 
if ($total_paginas > 1){ 
   	for ($i=1;$i<=$total_paginas;$i++){ 
      	if ($pagina == $i) 
         	//si muestro el índice de la página actual, no coloco enlace 
         	echo $pagina . " "; 
      	else 
         	//si el índice no corresponde con la página mostrada actualmente, coloco el enlace para ir a esa página 
         	echo "<a href='index.php?pagina=" . $i . "&criterio=" . $txt_criterio . "'>" . $i . "</a> "; 
   	} 
}*/





mysql_select_db($database_cnx_slider, $cnx_slider);
$query_ms_slider = "SELECT * FROM slider WHERE slider.estado = 1 ORDER BY slider.orden  ";
$ms_slider = mysql_query($query_ms_slider, $cnx_slider) or die(mysql_error());
$row_ms_slider = mysql_fetch_assoc($ms_slider);
$totalRows_ms_slider = mysql_num_rows($ms_slider);
?>
<?php
// ezSQL
/*require_once 'libs/ez_sql_core.php';
require_once 'libs/ez_sql_mysql.php';
// Zebra Pagination
require_once 'libs/Zebra_Pagination.php';

$conn = new ezSQL_mysql('root', '', 'a5927512_cultura');

$total_paises = $conn->get_var('SELECT count(*) FROM slider');
$resultados=2;

$paginacion = new Zebra_Pagination();
$paginacion->records($total_paises);
$paginacion->records_per_page($resultados);
// Quitar ceros en numeros con 1 digito en paginacion
$paginacion->padding(false);

$paises = $conn->get_results('SELECT * FROM slider LIMIT ' . (($paginacion->get_page() - 1) * $resultados) . ', ' . $resultados);*/
?>

	

<?php do { ?><article class="post clearfix">
	<a href="#" class="thumb pull-left">
		<img class="img-thumbnail" src="recursos/uploads/<?php echo $row_ms_slider['imagen']; ?>" alt="<?php echo $row_ms_slider['titulo']; ?>" title="<?php echo $row_ms_slider['titulo']; ?>" id="img_not"  width="288px" height="200px">
	</a>
		<h2 class="post-title">
			<a href="#"><?php echo $row_ms_slider['titulo']; ?></a>
		</h2>
		<p><span class="post-fecha"><?php echo $row_ms_slider['fecha']; ?></span> por <span class="post-autor"><a href="#">Casa de Cultura</a></span></p>
		<!--<p class="post-contenido text-justify">
			<?php #echo $row_ms_slider['noticia']; ?>
		</p>-->
		<p class="post-contenido text-justify">
			<?php echo $row_ms_slider['noticia']; ?>
		</p>

		<div class="contenedor-botones">
			<a href="<?php echo $row_ms_slider['link']; ?>" class="btn btn-primary">Leer Más</a>
			
		</div>
		
		
</article><?php } while ($row_ms_slider = mysql_fetch_assoc($ms_slider)); ?>
<?php
	   mysql_free_result($ms_slider);
  ?>

<nav> <!-- INICIO PAGINACIÓN -->
					<div class="center-block">
						<ul class="pagination">
							<li class="disabled"><a href="#">&laquo;<span>Anterior</span></a></li>
							<li><a href="#" id="btn1">1</a></li>
							<li><a href="#" id="btn2">2</a></li>
							<li><a href="#" id="btn3">3</a></li>
							<li><a href="#" id="btn4">4</a></li>
							<li><a href="#" id="btn5">5</a></li>
							<li><a href="#">&raquo;<span class="sr-only">Siguiente</span></a></li>
						</ul>
					</div>
				</nav> <!-- FIN PAGINACIÓN -->



</BODY>
</HTML>
