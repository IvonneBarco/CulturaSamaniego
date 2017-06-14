<?php
header("Content-Type: text/html;charset=utf-8");
require_once('fpdf.php');
//header("Content-Type: text/html;charset=utf-8");

 $ins=$_POST['nins'];
 //echo "numero de inscripcion recibido: ".$ins;
 class PDF extends FPDF{
// Cabecera de página
function Header()
{
    // Logo
    $this->Cell(5);
	$this->Image('logo_sinfondo.gif',50,10,100,20);
    $this->Ln(10);
     
    // Arial bold 15
    $this->SetFont('Arial','B',10);
    // Movernos a la derecha
    $this->Cell(1);
     $this->SetDrawColor(0,80,180);
    $this->SetFillColor(230,230,0);
    $this->SetTextColor(220,50,50);
    $txt=utf8_decode("Byron Zambrano  \n   Alcalde 2016-2019 \n");
    $this->MultiCell(0,3,$txt, 'c');
    $this->Ln(1);
}
	 
// Pie de página
function Footer()
{
	 $this->Cell(5);
	$this->Image('usted.jpg',8,330,20,15);
	
	$this->Image('cana.jpg',180,330,15,15);
     $this->Ln(2);
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',12);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}

//funcion tabla

	 
 }
 //declarar hoja
 $pdf= new PDF('P', 'mm', 'Legal');
 $pdf->SetMargins(20,18);
 $pdf->AliasNbPages();
 $pdf->AddPage();
//$pdf->FancyTable($header,$data);
  mysql_connect("localhost", "root", "");
 mysql_select_db("a5927512_cultura");
 //http://www.fpdf.org/   dato del título
  $pdf->SetFont("Arial","b",12);
 $pdf->SetFillColor(232,232,232);//este
 $pdf->SetTextColor(0x00, 0x00, 0x00);
 $pdf->Ln(10);//salto de linea
$pdf->Image('logo_sinfondo.gif', 50 ,160, 100 ,20,4);
$pdf->Image('nombre.gif',25 ,180,35,10);

 //datos de conección

 //mostrar la tabla
 $pdf->Ln(1);//salto de linea
 
//mysql_set_charset('utf8');
 
 // Se consulta los datos de inscripcion
 $sql1="SELECT codigo, idartesano, fechainscripcion, nmotivo  FROM inscripciones where numeroinscripciones=$ins";
 $rec1=mysql_query($sql1);
 $ced="";
 $nom="";
if($row1=mysql_fetch_array($rec1)){
 $ced=$row1['idartesano'];
 $cod=$row1['codigo'];
 $fechins=$row1['fechainscripcion'];
 $mot=$row1['nmotivo'];
}
else{
	echo"Inscripcion no encontrada";
}
$pdf->Cell(0,8,utf8_decode('RECIBO DE INSCRIPCIÓN'),0,1,'C');//el uno hace un salto de linea y c para centrar
$pdf->Cell(0,8,utf8_decode('Inscripción: ').$ins,0,1);


// Se consulta los datos del artesano
 $sql2="SELECT nombres,apellidos  FROM artesano where identificacion=$ced";
 $rec2=mysql_query($sql2);
if($row2=mysql_fetch_array($rec2)){
 $nom=$row2['nombres'];
 $ape=$row2['apellidos'];
 $nomape=$nom." ".$ape;
}
else{
	echo"Identificacion no encontrada";
}

// Se consulta datos de evento
 $sql3="SELECT codmodalidad,version,fecha,valor FROM evento where codevento=$cod";
 $rec3=mysql_query($sql3);
if($row3=mysql_fetch_array($rec3)){
 $codmod=$row3['codmodalidad'];
 $ver=$row3['version'];
 $fech=$row3['fecha'];
 $valor=$row3['valor'];

}
else{
	echo "No se encontro el de evento";
}


//Se consulta datos de tipo evento
 $sql4=" SELECT nombremodalidad, nombre FROM modalidad, tipoevento where modalidad.codigomodalidad=$codmod and tipoevento.codigo=modalidad.tipoevento_codigo";
 $rec4=mysql_query($sql4);
if($row4=mysql_fetch_array($rec4)){
 $nommod=$row4['nombremodalidad'];
 $nomtipo=$row4['nombre'];
}
else{
	echo "No se encontraron datos";
}

$pdf->SetFont("Arial","",12);
//$pdf->Cell(0,8,utf8_decode("Identificación Artesano: ").$ced,0,1);
$pdf->Cell(0,8,'Particpante: '.$ced." ".$nomape,0,1);
$pdf->Cell(0,8,'Evento: '.$nomtipo." / ".$nommod." / ".$ver,0,1);



$pdf->Ln(4);//salto de linea
 //$pdf->SetTextColor(85,107,47); 
 $pdf->SetFont('Times','b',12);
 $pdf->SetFillColor(110,180,225);
 $pdf->SetDrawColor(101,104,119);
 $pdf->Cell(120,8, "Nombre Motivo",1,0,'C',95);
 $pdf->Cell(32,8, "Cierre Evento",1,0,'C',95);
 $pdf->Cell(32,8, "Valor a Pagar",1,1,'C',95);
 $pdf->Cell(120,8,$mot,1,0,95);
 $pdf->Cell(32,8,$fech,1,0,95);
 $pdf->Cell(32,8,$valor,1,0,95);
 




$pdf->Ln(5);//salto de linea
$pdf->Ln();//salto de linea
$pdf->Cell(0,8,'________________________________________ ',0,1,'C');
$pdf->Cell(0,8,utf8_decode("TESORERIA SANDONA"),0,1,'C');
$pdf->Cell(0,8,'FIRMA ',0,1,'C');
$pdf->Cell(0,8,'SELLO ',0,1,'C');

$txt1=utf8_decode("Sandoná, ");
//$pdf->Cell(0,8, utf8_decode("Sandoná"),0,1);
//$pdf->Cell(40,10,date('d/m/Y'),0,1,'L');
 $pdf->SetFont("Arial","i",12);
 $pdf->Cell(40,10,$txt1.date('d/m/Y'),0,1,'L');
 //$pdf->Output();
 
 //Segunda Impresion 
 //-----------------------------------------------------------------------------------------------------------------
$pdf->Cell(0,-1,"-----------------------------------------------------------------------------------------------------------------------------",4,3);
$pdf->Ln(40);//salto de linea
 //http://www.fpdf.org/   dato del título
 //$pdf->SetTextColor(0x00, 0x00, 0x00);
 $pdf->SetFont("Arial","b",12);
 $pdf->SetFillColor(232,232,232);//este
 $pdf->SetTextColor(0x00, 0x00, 0x00);
$pdf->Image('logo_sinfondo.gif', 50 ,160, 100 ,20,4);
$pdf->Image('nombre.gif',25 ,180,35,10);
$pdf->Cell(0,8,utf8_decode('RECIBO DE INSCRIPCIÓN'),0,1,'C');//el uno hace un salto de linea y c para centrar
$pdf->Cell(0,8,utf8_decode('Inscripción: ').$ins,0,1);
 //datos de conección
 //mostrar la tabla
 $pdf->Ln();//salto de linea
 

$pdf->SetFont("Arial","",12);
//$pdf->Cell(0,8,utf8_decode("Identificación Artesano: ").$ced,0,1);
$pdf->Cell(0,8,'Particpante: '.$ced." ".$nomape,0,1);
$pdf->Cell(0,8,'Evento: '.$nomtipo." / ".$nommod." / ".$ver,0,1);



 $pdf->Ln(5);//salto de linea
 $pdf->SetTextColor(0x00, 0x00, 0x00);
 $pdf->SetFont('Times','b',12);
 $pdf->SetFillColor(110,180,225);
 $pdf->SetDrawColor(101,104,119);
 $pdf->Cell(120,8, "Nombre Motivo",1,0,'C',95);
 $pdf->Cell(32,8, "Fecha Evento",1,0,'C',95);
 $pdf->Cell(32,8, "Valor a Pagar",1,1,'C',95);
 $pdf->Cell(120,8, $mot,1,0,95);
 $pdf->Cell(32,8,$fech,1,0,95);
 $pdf->Cell(32,8,$valor,1,0,95);
 

$pdf->Ln(10);//salto de linea
$pdf->Ln();//salto de linea
$pdf->Cell(0,8,'________________________________________ ',0,1,'C');
$pdf->Cell(0,8,utf8_decode("TESORERIA SANDONA"),0,1,'C');
$pdf->Cell(0,8,'FIRMA ',0,1,'C');
$pdf->Cell(0,8,'SELLO ',0,1,'C');

$txt1=utf8_decode("Sandoná, ");
//$pdf->Cell(0,8, utf8_decode("Sandoná"),0,1);
//$pdf->Cell(40,10,date('d/m/Y'),0,1,'L');
 $pdf->SetFont("Arial","i",12);
 $pdf->Cell(40,10,$txt1.date('d/m/Y'),0,1,'L');
 $pdf->Output();
?>
