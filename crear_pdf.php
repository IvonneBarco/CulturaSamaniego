<?php 
 /*La parte más importante es incluir la librería
   En este archivo PHP*/
 include('pdf/html2fpdf.php');
 
 /*Ahora escribiremos en HTML lo que queramos que se imprima
   Dentro del PDF como véis lo metemos todo dentro de la
   variable $html en este caso será una tabla*/
 $html = '<body>
  PDF creado con el tutorial de www.tutorialeshtml5.com<br />
  <br />
  <br />
  En este caso una tabla con el tiempo:<br />
  <br />
  <table width="200" border="1">
    <tr>
   <td width="113">Viladecans</td>
   <td width="71">21C</td>
    </tr>
    <tr>
   <td>Sant Boi</td>
   <td>19C</td>
    </tr>
    <tr>
   <td>Hospitalet</td>
   <td>20C</td>
    </tr>
    <tr>
   <td>Barcelona</td>
   <td>18C</td>
    </tr>
    <tr>
   <td>El Prat</td>
   <td>20C</td>
    </tr>
  </table>';
 /* Una vez escrito el HTML crearemos el objeto que
    está dentro de la librería que hemos importado
 */
 $pdf = new HTML2FPDF(); 
 //Añadimos una página al pdf
 $pdf -> AddPage(); 
 //escribimos todo el html en esta pagina creada
 $pdf -> WriteHTML($html);
 /*Si necesitáramos más pagina abria que repetir la
 funcion de AddPage() y la de WriteHTML aquí*/
 
 /*Finalmente escribimos el nombre de fichero y la 
 ruta donde lo queremos guardar en este caso la raiz */
 $pdf -> Output('tabla_tiempo.pdf');
 //Escribimos una respuesta por pantalla
 echo "PDF creado con éxito"; 
?>
