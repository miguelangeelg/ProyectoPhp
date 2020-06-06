<?php

require('../modelo/profesor.php');

$documento = filtrarDatos('documento');
$usuario = filtrarDatos('documento');
$nombres = filtrarDatos('nombres');
$apellidos = filtrarDatos('apellidos');
$direccion = filtrarDatos('direccion');
$email = filtrarDatos('correo');
$telefono = filtrarDatos('telefono');
$contraseña = filtrarDatos('contraseña');
$tipoDocumento = filtrarDatos('tipoDocumento');
$profesion = filtrarDatos('profesion');
$materia = filtrarDatos('materia');
$genero = filtrarDatos('genero');
$fechaNacimiento = filtrarDatos('fechaNacimiento');




if(isset($_POST["frmMatricular"])){
    
$modelo =new profesor();
$profeExiste=$modelo->buscarProfesor($documento);

if($profeExiste==1){
    ?>

    <script>
    alert ('El profesor que desea registrar ya se encuentra en la base de datos de SISCA');
    location.href="../views/RegistroProfesor.php";
    </script>

    <?php
}else{
    $modelo->setNombre($nombres);
    $modelo->setApellido($apellidos);
    $modelo->setDireccion($direccion);
    $modelo->setEmail($email);
    $modelo->setTelefono($telefono);
    $modelo->setUsuario($usuario);
    $modelo->setProfesion($profesion);
    $modelo->setTipoDocumento($tipoDocumento);
    $modelo->setGenero($genero);
    $modelo->setFechaNacimiento($fechaNacimiento);
    $modelo->setDocumento($documento);
    $modelo->setContraseña($contraseña);
    $validacionRegistro=$modelo->registrarProfesor(); 
    if($validacionRegistro==1){
        $mensaje="Bienvenido: $nombres Ha sido registrado exitosamente en la base de datos de SISCA";
        ?>
				<script>
    alert ("<?php echo ($mensaje); ?>");
    location.href="../views/RegistroProfesor.php";
    </script>
				<?php
    }
}
 
	
}
else if(isset($_POST["frmBuscar"])){
	if(empty($documento))
	{
		?>
			<script>
				alert('Debe ingresar el número de documento a buscar');
				location.href="../views/frmRegistroClientes.php";
			</script>
			<?php
			exit();  
		
	}
	else{
		$docCliente = $documento;   	
		$cliente = new Cliente();
		$paises = $cliente->listarPaises();
		$datos = $cliente->buscarCliente($docCliente);
		//$foto = $cliente->mostrarFoto();    		    		
    	require('../views/frmActualizarClientes.php');
	}
	    
}

else if(isset($_POST["frmActualizar"])){
	
	
      
}


function filtrarDatos($var)
 {
	 $m = "";
	 if (!isset($_REQUEST[$var])) {
	 	$tmp = (is_array($m)) ? [] : "";
	 }
	 else if (!is_array($_REQUEST[$var]))
	 {
	 	$tmp = trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"));
	 }
	 else
	 {
	 	$tmp = $_REQUEST[$var];
	 	array_walk_recursive($tmp, function (&$valor) {
	 	$valor = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
	 });
	 }
	return $tmp;
}


?>


