<?php 
// Conectando, seleccionando la base de datos
//$link = mysql_connect('localhost', 'feyac2013', 'fEy4k2013')
$link = mysql_connect('localhost', 'root', 'root')
    or die('No se pudo conectar: ' . mysql_error());
//echo 'Conexión Exitosa.<br>';
mysql_select_db('feyac', $link) or die('No se pudo seleccionar la base de datos');
//mysql_select_db('grupogamas_feyac', $link) or die('No se pudo seleccionar la base de datos');

mysql_query("SET NAME 'utf8'");

mysql_query("SET CHARACTER SET 'utf8' COLLATE 'utf8_general_ci'");

mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $link);
?>
