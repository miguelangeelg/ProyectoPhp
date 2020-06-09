<?php
require_once ("../modelo/periodo.php");
$modelo=new Periodo();
$resultado = $modelo->guardarPeriodo();

//include ("../modelo/nota.php");
/*$modelo2=new Nota();
$resultado2 = $modelo2->guardarNota();
echo var_dump($resultado2);

*/
echo $periodo;
?>