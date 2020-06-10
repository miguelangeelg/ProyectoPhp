<?php

//require('../db/ConectarNotas.php');
$periodo=$_POST["periodo"];
return $periodo;
/*class Nota
{
    private $periodo;
    private $conexionDB;
    public function __construct(){        
        $this->conexionDB = new Conectar();	
       // $this->periodo=$_POST["periodo"];							
    }
    
    public function __destruct() {
    	
       	
   }
   public function guardarNota(){
      $sql = "SELECT * from detalle WHERE codMateria='1' and docEstudiante='16161616' and codPeriodo='$this->periodo' and codMateria='1'";
    $query = $this->conexionDB->connect()->query($sql);
    while ($consulta = mysqli_fetch_array($query)) {

        $vec []= array(
            "Nota1"=>$consulta['Nota1'],
            "Nota2"=>$consulta["Nota2"],
            "Nota2"=>$consulta["Nota3"],
            "Nota2"=>$consulta["Nota4"],
            "Nota2"=>$consulta["Nota5"],
            "Definitiva"=>$consulta["NotaDefinitiva"],
        );
      
      }
    
    return $vec;

    }
    public function getPeriodo(){
		return $this->periodo;
	}
	public function getClave(){

		return $this->clave;
	}
}
*/
?>
