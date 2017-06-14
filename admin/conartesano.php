<?php #Rutina para que se verifique si esta iniciado sesión

        include './funciones.php'; //inclute el archivo de verificacion
        if (verificar()==1) { // si verificar retorna 1 muestra:
            $_SESSION["usuario"];
        }else{
            return 0;
        }

?>
<?php include("conecta.php");?>
<title id="titulo">.:: Consultar Artesano</title>
<link rel="shortcut icon" href="../images/img_escudo.png"/>
    <a href="#" class="scrollup"><img src="../images/icon_top.png" alt=""></a>
    <!-- Inicia Head -->
    <?php include("adminavbar.html");?>
    
    <!-- Finaliza Head -->

        <!-- Inicia Slider -->
        <!--<div id="divMiSlider"></div>-->
        <!-- Finaliza Slider -->
    
    
    <br>
    <section> <!-- Inicia Pagina Principal -->      

        <div class="row"> <!-- Inicia contenedor-->         

            <section class="posts col-md-12">               
                <div class="migas-de-pan"> <!--Inicia migas de pan-->               
                    <ol class="breadcrumb" id="miga">
                        <li class="active">Usted está aquí.::</li>
                        <li><a href="#">Inicio</a></li>
                        <li class="active">Consultar</li>
                        <li class="active">Consultar Artesano</li>
                    </ol>
                </div> <!--Finaliza migas de pan--> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                <div id="divIndex"> 
                <div align= "right"><?php  echo "<b> BIENVENID@: <i class='verde';>" . $_SESSION["usuario"];"</i></b>" ?>
                <a href="cerrarSesion.php"><span class="glyphicon glyphicon-log-out btn-lg" title="Cerrar Sesión"></span></a></div>
                    <h2 class="post-title">
                        <p class="titulos"><u>CONSULTAR ARTESANO</u></p><br>
                        <p class="post-contenido text-center font-cs">Para consultar su información, debe digitar su identificación.</p>
                    </h2>
                    <br><br>

                    <body onLoad="carga();">

                        <?php
                            $var="";
                            $var1="";
                            $var2="";
                            $var3="";
                            $var4="";
                            $var5="";
                            $var6="";
                            $var7="";
                            $var8="";
                            $var9="";
                            $var10="";
                            $var11="";
                            $var12="";
                            $var13="";
                            $var14="";
                            $var15="";
                            $var16="";
                            $var17="";
                            $var18="";
                            $var19="";
                            $var20="";
                            $var21="";
                            $var22="";
                            $var23="";
                            $var24="";
                            $var25="";
                            $var26="";
                            $var27="";
                            $var28="";
                            $var29="";
                            $var30="";
                            if(isset($_POST["btn1"])){
                                $btn=$_POST["btn1"];
                                $bus=$_POST["txtbus"];
                                if($btn=="Buscar"){
                                    
                                    $sql="select * from  artesano where identificacion='$bus'";
                                    $cs=mysql_query($sql,$cn);
                                    while($resul=mysql_fetch_array($cs)){
                                        $var=$resul[0];
                                        $var1=$resul[1];
                                        $var2=$resul[2];
                                        $var3=$resul[3];
                                        $var4=$resul[4];
                                        $var5=$resul[5];
                                        $var6=$resul[6];
                                        $var7=$resul[7];
                                        $var8=$resul[8];
                                        $var9=$resul[9];
                                        $var10=$resul[10];
                                        $var11=$resul[11];
                                        $var12=$resul[12];
                                        $var13=$resul[13];
                                        $var14=$resul[14];
                                        $var15=$resul[15];
                                        $var16=$resul[16];
                                        $var17=$resul[17];
                                        $var18=$resul[18];
                                        $var19=$resul[19];
                                        $var20=$resul[20];
                                        $var21=$resul[21];
                                        $var22=$resul[22];
                                        $var23=$resul[23];
                                        $var24=$resul[24];
                                        $var25=$resul[25];
                                        $var26=$resul[26];
                                        $var27=$resul[27];
                                        $var28=$resul[28];
                                        $var29=$resul[29];
                                        $var30=$resul[30];
                                        }
                                        }
                                    else if($btn=="Actualizar"){
                                    $identificacion=$_POST["txtidentificacion"];
                                    $expe=$_POST["txtexpe"];
                                    $nom=$_POST["txtnom"];
                                    $ape=$_POST["txtape"];  
                                    $fechana=$_POST["txtfechana"];
                                    $lugar=$_POST["txtlugar"];
                                    $edad=$_POST["txtedad"];
                                    $genero=$_POST["txtgenero"];
                                    $estado=$_POST["txtestado"];
                                    $direccion=$_POST["txtdireccion"];
                                    $telefono=$_POST["txttelefono"];
                                    $correo=$_POST["txtcorreo"];
                                    $estrato=$_POST["txtestrato"];
                                    $nivel=$_POST["txtnivel"];
                                    $inicio=$_POST["txtinicio"];
                                    $tforma=$_POST["txttforma"];
                                    $actividad=$_POST["txtactividad"];
                                    $area=$_POST["txtarea"];
                                    $desarrolla=$_POST["txtdesarrolla"];
                                    $numero=$_POST["txtnumero"];
                                    $diferente=$_POST["txtdiferente"];
                                    $ingresosa=$_POST["txtingresosa"];
                                    $ingresosm=$_POST["txtingresosm"];
                                    $cabeza=$_POST["txtcabeza"];
                                    $discapacidad=$_POST["txtdiscapacidad"];
                                    $comunidad=$_POST["txtcomunidad"];
                                    $sisben=$_POST["txtsisben"];
                                    $nsisben=$_POST["txtnsisben"];
                                    $salud=$_POST["txtsalud"];
                                    $pensiones=$_POST["txtpensiones"];
                                    $riesgos=$_POST["txtriesgos"];  
                                    if($identificacion!='' and $expe!=''and $nom!=''){
                                    $sql="update artesano set expedicion='$expe', nombres='$nom', apellidos= '$ape', fechanacimiento='$fechana', lugarnacimiento='$lugar',
                                    edad='$edad', genero='$genero', estado='$estado', direccion='$direccion', telefono='$telefono',
                                    correo='$correo', estrato='$estrato', niveleducativo='$nivel', inicioactividadesl='$inicio', 
                                    tipodeformacionartistica='$tforma', principalactividad='$actividad',areacultural='$area', actividadquedesarrolla='$desarrolla', 
                                    numeropernucleo='$numero', actividaddiferente='$diferente', ingresosartisticos='$ingresosa', ingresosmensuales='$ingresosm',
                                    cabezadefamilia='$cabeza', discapacidad='$discapacidad', comunidadetnica='$comunidad', sisben='$sisben',
                                    nivelsisben='$nsisben',sistemasalud='$salud', pensiones='$pensiones', riesgos='$riesgos' where identificacion='$identificacion'";
                                    
                                    $cs=mysql_query($sql,$cn);
                                    echo "<script> alert('Los datos se actualizaron correctamente');</script>";
                                    
                                    }
                                    else 
                                
                                    echo "<script> alert('Los Campos no pueden estar vacios ');</script>";
                                    }}

                            ?>
        
                            <form  name="fe" action="" method="POST"> 

                                <div class="row">
                                    <div class="col-lg-12">

                                        <table class="tabla-22"> 
                                            <tr>
                                                <td><b>Buscar: </b></td>
                                                    <td>
                                                        <div class="input-group">                                                        
                                                            <input type="text" class="form-control" name="txtbus" id="txtbus" placeholder="Identifiación...">
                                                            <span class="input-group-btn">
                                                                <input type="submit" class="btn btn-default" name="btn1"  value="Buscar"/>
                                                            </span>
                                                        </div><br>
                                                    </td>
                                                </tr> 
                                            </tr>
                                        </table>
                                        <hr>
                                        <br>
                                        <center><span class="letter-cs">DATOS CONSULTADOS</span></center><br>
                                        <table align="center" class="table table-hover" id="mi-tabla"> 
                                        <tr>                                        
                                            <td><b>Identificación </b></td>
                                            <td><input type='text' class='form-control' name='txtidentificacion' id='txtidentificacion' value="<?php echo $var?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Expedición </b></td>
                                            <td><input type='txt' class='form-control' name='txtexpe' id='txtexpe' value="<?php echo $var1?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Nombres </b></td>
                                            <td><input type='txt' class='form-control' name='txtnom' id='txtnom' value="<?php echo $var2?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Apellidos </b></td>
                                            <td><input type='txt' class='form-control' name='txtape' id='txtape' value="<?php echo $var3?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Fecha de Nacimiento </b></td>
                                            <td><input type='txt' class='form-control' name='txtfechana' id='txtfechana' value="<?php echo $var4?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Lugar de Nacimiento </b></td>
                                            <td><input type='txt' class='form-control' name='txtlugar' id='txtlugar' value="<?php echo $var5?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Edad </b></td>
                                            <td><input type='txt' class='form-control' name='txtedad' id='txtedad' value="<?php echo $var6?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>  
                                        <tr>
                                            <td><b>Género </b></td>
                                            <td><input type='txt' class='form-control' name='txtgenero' id='txtgenero' value="<?php echo $var7?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr> 
                                        <tr>
                                            <td><b>Estado Civíl </b></td>
                                            <td><input type='txt' class='form-control' name='txtestadoss' id='txtestadoss' value="<?php echo $var8?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr> 
                                        <tr>
                                            <td><b>Dirección Residencia </b></td>
                                            <td><input type='txt' class='form-control' name='txtdireccion' id='txtdireccion' value="<?php echo $var9?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr> 
                                        <tr>
                                            <td><b>Telefono (s) </b></td>
                                            <td><input type='txt' class='form-control' name='txttelefono' id='txttelefono' value="<?php echo $var10?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>  
                                        <tr>
                                            <td><b>Correo Electrónico </b></td>
                                            <td><input type='txt' class='form-control' name='txtcorreo' id='txtcorreo' value="<?php echo $var11?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr> 
                                        <tr>
                                            <td><b>Estrato Residencia </b></td>
                                            <td><input type='txt' class='form-control' name='txtestra' id='txtestra' value="<?php echo $var12?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr> 
                                        <tr>
                                            <td><b>Nivel Educatívo </b></td>
                                            <td><input type='txt' class='form-control' name='txtnivel' id='txtnivel' value="<?php echo $var13?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Año de Inicio Actividades Artísticas y Culturales </b></td>
                                            <td><input type='txt' class='form-control' name='txtinicio' id='txtinicio' value="<?php echo $var14?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Tipo de Formación Artística y Cultural </b></td>
                                            <td><input type='txt' class='form-control' name='tipoformac' id='tipoformac' value="<?php echo $var15?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>¿En la Actividad Artística y Cultural su Principal Actividad? </b></td>
                                            <td><input type='txt' class='form-control' name='txtacti' id='txtacti' value="<?php echo $var16?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Determine en qué Area Cultural se Desempeña </b></td>
                                            <td><input type='txt' class='form-control' name='txtarea' id='txtarea' value="<?php echo $var17?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Principal Actividad Artística que Desarrolla  </b></td>
                                            <td><input type='txt' class='form-control' name='txtdesarrolla' id='txtdesarrolla' value="<?php echo $var18?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Número de Personas del Núcleo Familiar  </b></td>
                                            <td><input type='txt' class='form-control' name='txtnumero' id='txtnumero' value="<?php echo $var19?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>¿Qué Otras Actividades Laborales Diferentes a la Artística Desarrolla?  </b></td>
                                            <td><input type='txt' class='form-control' name='txtdiferente' id='txtdiferente' value="<?php echo $var20?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Ingresos Mensuales Derivados de la Actividad Artística  </b></td>
                                            <td><input type='txt' class='form-control' name='txtingresosa' id='txtingresosa' value="<?php echo $var21?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Ingresos Totales Mensuales  </b></td>
                                            <td><input type='txt' class='form-control' name='txtingresosm' id='txtingresosm' value="<?php echo $var22?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Cabeza de Familia  </b></td>
                                            <td><input type='txt' class='form-control' name='txtcabeza' id='txtcabeza' value="<?php echo $var23?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Posee Alguna Discapacidad Física  </b></td>
                                            <td><input type='txt' class='form-control' name='txtdisca' id='txtdisca' value="<?php echo $var24?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>¿Hace Parte de una Minoria Etnica?  </b></td>
                                            <td><input type='txt' class='form-control' name='txtcomunidadd' id='txtcomunidadd' value="<?php echo $var25?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>¿Está Clasificado por el SISBEN?  </b></td>
                                            <td><input type='txt' class='form-control' name='txtsisbenn' id='txtsisbenn' value="<?php echo $var26?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Nivel del SISBEN  </b></td>
                                            <td><input type='txt' class='form-control' name='txtnsisbenn' id='txtnsisbenn' value="<?php echo $var27?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>Sistema de Salud  </b></td>
                                            <td><input type='txt' class='form-control' name='txtsalud' id='txtsalud' value="<?php echo $var28?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>¿Está Afiliado a Pensiones?  </b></td>
                                            <td><input type='txt' class='form-control' name='txtpensioness' id='txtpensioness' value="<?php echo $var29?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>
                                        <tr>
                                            <td><b>¿Está Afiliado a Riesgos Profesionales?  </b></td>
                                            <td><input type='txt' class='form-control' name='txtriesgoss' id='txtriesgoss' value="<?php echo $var30?>" placeholder="" readonly aria-describedby='sizing-addon1'></td>
                                        </tr>                               
                                        <tr>
                                            <td colspan="2">
                                                <center><button type="button" class="btn btn-warning" value="Regresar" id="regresar" onclick="location = 'administracion.php'"> Regresar </button></center>
                                            </td>
                                        </tr>                        
                                        </table>
                                    </div>
                                </div> 
                            </form>

                            <?php
                                if(isset($_POST["btn1"])){
                                    $btn=$_POST["btn1"];

                                    if($btn=="Listar"){
                                        
                                        $sql="select * from tipoevento";
                                        $cs=mysql_query($sql,$cn);
                                        echo "<br>";
                                        echo "
                                    
                                    <center><h1><font face='Comic Sans MS'>TIPO DE EVENTOS REGISTRADOS</font></h1></center>
                                <table border='1' bgcolor='#EAE89F'>

                                <tr>
                                <td>Codigo</td>
                                <td>Nombre</td>
                                </tr>";
                                        while($resul=mysql_fetch_array($cs)){
                                            $var=$resul[0];
                                            $var1=$resul[1];
                                            echo "<tr>
                                <td>$var</td>
                                <td>$var1</td>
                                </tr>";
                                            }
                                            
                                            echo "</table>
                                </center>";
                                    }
                                }
                                ?>
                            
                            <br>                    
                </div>
                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
                
            </section>
            <!-- <?php #include("adminaside.html") ?> -->
        </div>
    </section>  <!-- Finaliza Pagina Principal -->

        
    <?php include("adminfooter.html") ?>
    <div class="col-xs-12" align="center">
        <ul class="list-inline text-right" id="pie">
            <li><a href="#">Inicio</a></li>
            <li class="active">Consultar</li>
            <li class="active">Consultar Artesano</li>
        </ul>
    </div>
</div>      
</body>
</html>
