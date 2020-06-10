<?php
if(!class_exists('Conectar')){
    require('../db/Conectar.php');
}

class detallesNota{

    /*Se requiere la clase conexion*/
    private $conexionDB;

    /*Atributos de la tabla persona*/
   

    public function __construct(){        
        $this->conexionDB = new Conectar();								
    }
    public function __destruct() {
    	
    }

    public function ExisteEstudiantePorProfesor($documentoPro,$documentoEstu,$codMateria,$codGrupo){
      try {
              $sql = "SELECT DISTINCT ET.documento FROM grupo GP INNER JOIN estudiante ET ON GP.codigo=ET.grupo INNER JOIN detalle DT ON DT.docEstudiante=ET.documento INNER JOIN materia MT ON MT.codigo=DT.codMateria WHERE MT.profesor='$documentoPro'  AND ET.documento= '$documentoEstu' AND DT.codMateria='2' AND ET.grupo='1'";
              $query = $this->conexionDB->connect()->prepare($sql);
              
              $query->execute(); 
              if($query->rowCount()){
                  return 1;
              }else{
                  return 0;
              }
              return false;
          } catch (Exception $e) {
              die ("Se produjo un error:".$e->getMessage());
              echo ($codGrupo);
          }
    }
    /*
    public function BuscarNotas($codProfesor,$docEstudiante){
        $sql = "SELECT DISTINCT  GP.codigo, GP.nombre FROM grupo GP INNER JOIN estudiante ET ON GP.codigo=ET.grupo INNER JOIN detalle DT ON DT.docEstudiante=ET.documento INNER JOIN materia MT ON MT.codigo=DT.codMateria WHERE MT.profesor=$docProfesor";
        $query = $this->ConexionDB->connect()->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }*/
    /*private function BuscarPeriodoEstudiante($doc){

    }*/

}

?>