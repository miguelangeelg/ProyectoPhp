<?php
require_once('../controller/ValidarLRP.php');

require('../modelo/estudiante.php');

/*Atributos Tabla persona*/
$documento = filtrarDatos('documento');
$nombres = filtrarDatos('Nombre');
$apellidos = filtrarDatos('Apell');
$FechaNa = filtrarDatos('FechaNa');
$genero = filtrarDatos('genero');
$email = filtrarDatos('correo');
$telefono = filtrarDatos('tel');
$direccion = filtrarDatos('direccion');
$TipoId = filtrarDatos('tipoid');

/*Atributos tabla usuario */
$password = filtrarDatos('pass');

/*Atributos tabla estudiante */
$grupo = filtrarDatos('grupo');

/*Atributos tabla detalle */
$periodo = filtrarDatos('periodo');

$Errores= array();

if(isset($_POST['frmMatricular'])){

	$results = validar($documento,$nombres,$apellidos,$FechaNa,$genero,$email,$telefono,$direccion,$TipoId,$password,$grupo,
						$periodo);
	print_r($results);
	
	if(!is_array($results)){
		$est = new estudiante();
		$est->setDocumento($documento);
		$est->setNombre($nombres);
		$est->setApellido($apellidos);
		$est->setFechaNa($FechaNa);
		$est->setgenero($genero);
		$est->setEmail($email);
		$est->setTelefono($telefono);
		$est->setDireccion($direccion);
		$est->setpassword($password);
		$est->setgrupo($grupo);
		$est->setperiodo($periodo);
	}
	if(isset($FechaNa)){
		?>
				<script>
					alert('Fecha de nacimiento: <?php echo $FechaNa?>');
					location.href="../views/RegistroEstudiantes.php";
				</script>
		<?php
	}

	$Consultar=false;
	require('../views/RegistroEstudiantes.php');
	
}else if(isset($_POST['frmBuscar'])) {
	$Consultar = false;

	$validate = new Validation();
	$validate->name('Documento')->value($documento)->pattern('int')->required();
	$errval = $validate->getErrors();

	if(!isset($errval)){
		$est = new estudiante();
		$est->setDocumento($documento);
		$datos =  $est->BuscarEstudiante();

		if(isset($datos) && count($datos)>0){
			?>
				<script>
					alert('El estudiante ya se encuentra registrado');
				</script>
			<?php
			$Consultar = true;
			$documento = $datos[0]->documento;
			$nombres = $datos[0]->nombre;
			$apellidos = $datos[0]->apellido;
			$FechaNa = $datos[0]->fechaNacimiento;
			$genero = $datos[0]->genero;
			$email = $datos[0]->email;
			$telefono = $datos[0]->telefono;
			$direccion = $datos[0]->direccion;
			$TipoId = $datos[0]->tipoDocumento;
			$password = $datos[0]->contraseña;
			require('../views/RegistroEstudiantes.php');
		}else{
			?>
				<script>
					alert('No Se encontro el estudiante');
				</script>
			<?php
			require('../views/RegistroEstudiantes.php');
		}
	}
}

function validar($documento,$nombres,$apellidos,$FechaNa,$genero,$email,$telefono,$direccion,$TipoId,$password,$grupo,$periodo){
	$validate = new Validation();

	$validate->name('Documento')->value($documento)->pattern('int')->required();
	$nombres->name('Nombres')->value($nombres)->pattern('')->required();
	$validate->name('Email')->value($email)->pattern('email')->required();
	$validate->value($FechaNa)->birthdateformat()->required();

	if($validate->isSuccess()){
		return true;
	}else{
		return $validate->getErrors();
	}
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