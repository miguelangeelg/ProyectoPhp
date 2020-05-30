<?php
    
    require('../modelo/Session.php');
    $userSession = new Session();
    $userSession->closeSession();

    header("location: ../index.php");

?>