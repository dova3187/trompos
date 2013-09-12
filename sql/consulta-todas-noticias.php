<?php
$sql = mysql_query("SELECT * FROM noticias WHERE estado='ACTIVO' ORDER BY fecha DESC",$link);
?>
