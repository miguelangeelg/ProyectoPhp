<?php
require ("../modelo/nota.php");
$modelo2=new Nota();
$resultado2 = $modelo2->guardarNota();
echo json_encode($resultado2);
?>