<?php

require('../db/Conectar.php');

class Usuario
{
    private $documento;
    private $clave;
    private $rol;

    
    public function __construct(){        
        $this->conexionDB = new Conectar();								
    }
    
    public function __destruct() {
    	
       	
   }
    
    public function getDocumento(){
	return	$this->documento;
	}
	public function getClave(){
		return $this->clave ;
	}
	public function getRol(){
		return $this->rol ;
	}

	
	public function buscarUsuario($documento){
		
		$sql = "SELECT * FROM usuario where documento = '$documento'";
		$query = $this->conexionDB->connect()->prepare($sql);	
		$query -> execute(); 
		$results = $query -> fetchAll(PDO::FETCH_OBJ); 
		
		return $results;
		
	}
	
	public function actualizarCliente($foto){
						
	}
    
    

// 	public function registrarCliente($foto){
//         try
//       {
//           $sql = "INSERT INTO cliente (";
//           $sql .= "documento, Nombres, Apellidos, Direccion, Email, Telefono,id_pais,foto";
//           $sql .= ") VALUES (";
//           $sql .= "'$this->documento','$this->nombre','$this->apellido','$this->direccion','$this->email','$this->telefono','$this->pais','$foto');";		
//           $stmt = $this->conexionDB->connect()->prepare($sql);
//           $stmt->execute();
//       } 
//       catch (Exception $e) 
//       {
//           die ("Se produjo un error $e");
//       }
   
                      
    
    
//       if(isset($stmt))
//       {
//    
//           exit();
//       }
//       else{
          
//           echo"Hay problemas con la sentencia SQL";
//       }
//   }
	
	  
	 
	
	
}

?>



