<?php
    require('../modelo/grupo.php');
    $Grupo = new Grupo();
    $grupos = $Grupo->listargrupos();
?>