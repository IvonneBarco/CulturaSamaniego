<?php #Rutina para que se verifique si esta iniciado sesión

        include './funciones.php'; //inclute el archivo de verificacion
        if (verificar()==1) { // si verificar retorna 1 muestra:
            $_SESSION["usuario"];
        }else{
            return 0;
        }

?>

<title id="titulo">.:: Actualización Tipo de Eventos</title>
<link rel="shortcut icon" href="../images/img_escudo.png"/>

    <a href="#" class="scrollup"><img src="../images/icon_top.png" alt=""></a>
    <!-- Inicia Head -->
    <?php include("adminavbar.html");
    include("conecta.php"); ?>
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
                        <li class="active">Editar</li>
                        <li class="active">Tipo de Eventos</li>
                    </ol>
                </div> <!--Finaliza migas de pan--> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                <div id="divIndex"> 
                <div align= "right"><?php  echo "<b> BIENVENID@: <i ;>" . $_SESSION["usuario"];"</i></b>" ?>
                <a href="cerrarSesion.php"><span class="glyphicon glyphicon-log-out btn-lg" title="Cerrar Sesión"></span></a></div>
                    <h2 class="post-title">
                        <p class="titulos"><u>ACTUALIZACIÓN DE DATOS PARA TIPO EVENTOS</u></p><br>
                        <p class="post-contenido text-center font-cs">Para actualizar los datos, debe digitar el codigo del tipo de evento.</p>
                    </h2>
                    <br><br>

                    <body onLoad="carga();">

                        <?php
                            $var="";
                            $var1="";

                            if(isset($_POST["btn1"])){
                                $btn=$_POST["btn1"];
                                $bus=$_POST["txtbus"];
                                if($btn=="Buscar"){
                                    
                                    $sql="select * from tipoevento where codigo='$bus'";
                                    $cs=mysql_query($sql,$cn);
                                    while($resul=mysql_fetch_array($cs)){
                                        $var=$resul[0];
                                        $var1=$resul[1];
                                        }
                                        }
                                    else if($btn=="Actualizar"){
                                    $cod=$_POST["txtcod"];
                                    $nom=$_POST["txtnom"];
                                    if($cod!='' and $nom!=''){
                                    $sql="update tipoevento set nombre='$nom' where codigo='$cod'";
                                    
                                    $cs=mysql_query($sql,$cn);
                                    echo "<script> alert('Los datos se actualizaron correctamente');</script>";
                                    
                                    }
                                    else 
                                
                                    echo "<script> alert('Los Campos no pueden estar vacios ');</script>";
                                    }}

                            ?>
        
                            <form name="fe" action="" method="post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <center><table align="center">
                                            <tr>
                                                <th>Buscar</th>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="text" class='form-control' name="txtbus"/>
                                                        <span class="input-group-btn">
                                                            <input type="submit" class="btn btn-default" name="btn1"  value="Buscar"/>
                                                        </span>
                                                    </div><br>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Codigo</th>
                                            <td><input type="text" class='form-control' name="txtcod" readonly="true" value="<?php echo $var?>" placeholder="Código" readonly aria-describedby='sizing-addon1'/><br></td>
                                            </tr>

                                            <tr>
                                            <th>Nombre</th>
                                            <td><input type="text" class='form-control' name="txtnom"  value="<?php echo $var1?>" placeholder="Nombre" aria-describedby='sizing-addon1'/><br></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><center><input type="submit" class="btn btn-warning" name="btn1" value="Actualizar"/></center></td>
                                            </tr>
                                        </table></center>
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
                                <table border='1' bgcolor='#CBECF5' width='90%'>

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
            <li class="active">Editar</li>
            <li class="active">Tipo de Eventos</li>
        </ul>
    </div>
</div>      
</body>
</html>