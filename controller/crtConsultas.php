
<?php

require('../modelo/cliente.php');

$idpais = filtrarDatos('codpais');



if(isset($_POST["ejecutar1"])){
	if(empty($idpais))
	{
		?>
			<script>
				alert('Debe ingresar el código del pais a buscar');
				location.href="../views/frmConsultarClientePais.php";
			</script>
			<?php
			exit();  
		
	}
	else{	
		$cliente = new Cliente();
		$clientes1 = $cliente->consultarClientesPais($idpais);    		
    	require('../views/listarClientes.php');
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


