<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_cnx_slider = "localhost";
$database_cnx_slider = "a5927512_cultura";
$username_cnx_slider = "root";
$password_cnx_slider = "";
$cnx_slider = mysql_pconnect($hostname_cnx_slider, $username_cnx_slider, $password_cnx_slider) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
