<?php

$nombre=(htmlspecialchars(strtoupper($_POST["nombre"])));
$telefono=(htmlspecialchars(strtoupper($_POST["telefono"])));
$email=(htmlspecialchars(strtoupper($_POST["email"])));

$numero_personas=(htmlspecialchars(strtoupper($_POST["numero-personas"])));
echo $numero_personas;

?>