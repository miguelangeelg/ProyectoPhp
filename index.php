<?php
// require ('modelo/user.php');
// require('modelo/Session.php');

// $userSession = new Session();
// $user = new User();

// if(isset($_SESSION['user']))
// {
	
//     //echo "hay sesion";//
//     $user->setUser($userSession->getUser());
//     include_once 'views/menu.php';

// }
// else if(isset($_POST['username']) && isset($_POST['password']))
// {    
//     $userForm = $_POST['username'];
//     $passForm = $_POST['password'];

//     $user = new User();
//     if($user->userExists($userForm, $passForm))
//     {
//         //echo "Existe el usuario";
//         $userSession->setUser($userForm);
//         $user->setUser($userForm);
//         include_once 'views/menu.php';
//     }
//     else
//     {
//         //echo "No existe el usuario";
//         $error = "Usuario y/o password incorrecto";
//         include_once 'views/login.php';
//     }
// }
// else{
    //echo "login";
    include_once(__DIR__.'/views/componentes/navegacion.php');

    include_once(__DIR__.'/views/index.php');
    include_once(__DIR__.'/views/componentes/footer.php');
// }





?>