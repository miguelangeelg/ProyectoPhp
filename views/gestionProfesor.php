<?php
include("./componentes/navegacion.php");
require('../controller/ctrMateria.php');
require('../controller/CtrGestionProfesor.php');
require('../controller/ctrGrupo2.php');

if(isset($_SESSION["usuario"])){
    $documento    = json_decode($_SESSION["usuario"])->documento;
    $Nombre   = json_decode($_SESSION["usuario"])->nombre;
    $Apellido = json_decode($_SESSION["usuario"])->apellido;
    $correo = json_decode($_SESSION["usuario"])->correo;
    $telefono = json_decode($_SESSION["usuario"])->telefono;
    $rol = json_decode($_SESSION["usuario"])->rol;
    $profesion = json_decode($_SESSION["usuario"])->profesion;

    if($rol != 1){
        ?>
        <script>
        alert('¡Acceso denegado! No cuenta con permisos');
        location.href="index.php"
        </script>
        <?php
    }
}else{
    ?>
    <script>
    alert('¡Acceso denegado! No cuenta con permisos');
    location.href="index.php"
    </script>
    <?php
}
?>      
        <div id="contentWrapper">
        <div >
        <center>
                <br>
<table width="600" border="0" cellspacing="0" cellpadding="1">
        <tr bgcolor="#2196F3" align="center">
        <td><b><font color="#FFFFFF">Docente  : <?php echo $Nombre . " " .$Apellido ?></font></b></td>
        </tr>
        <tr bgcolor="#2196F3">
        <td>
        
<table width="100%" border="0" cellspacing="0" cellpadding="4">
        <tr bgcolor="#FFFFFF">
        <td>
        <center>
        <p><span class="fa fa-envelope"></span>Documento :<?php echo$documento ?></p>
        <p><span class="fa fa-mobile"></span>Correo : <?php echo $correo ?></p>
        <p><span class="fa fa-mobile"></span>Teléfono : <?php echo $telefono ?></p>
        <p><span class="fa fa-mobile"></span>Profesión : <?php echo $profesion ?></p>
        </center>
        </td>
        </tr>
</table>
        </td>
        </tr>
</table>

        </center>
        </div>  
        <select name="periodo" class="classic" style="top: 40px; left:45%;">
  <option value="1">Periodo 1</option>
  <option value="2">Peiodo 2</option>
</select>


        <select name="materia" class="classic" style="top: 40px; left:5%;">
        <?php 
                                $i=0;
                                while(isset($materias[$i]->codigo)){
                                ?>
                                    <option value="<?php echo $materias[$i]->codigo;?>">
                                    <?php echo $materias[$i]->nombre;?>
                                    </option>
                                <?php
                                 $i++;
                                }
                                ?>
</select> 

<select name="grupo" class="classic" style="top: 40px; left:54%;">
<?php 
                                $i=0;
                                while(isset($gruposProfesor[$i]->codigo)){
                                ?>
                                    <option value="<?php echo $gruposProfesor[$i]->codigo;?>">
                                    <?php echo $gruposProfesor[$i]->nombre;?>
                                    </option>
                                <?php
                                 $i++;
                                }
                                ?>
</select>

        

        <form  method="post" class="form_contact">
    <h2>ASIGNACIÓN DE CALIFICACIONES</h2>
    <div class="user_info">
        <label for="names">Documento: *</label>
        <input type="number" id="names" name="documento" style="border-radius: 20px / 10px;" value="<?php
								if (isset($documentoForm))
									echo("$documentoForm"); ?>"> 

    <span  style="font-weight: bold; color: red" >
							<?php 
                                if (isset($error)){
                                        echo("$error");
                                }
							?>            	
             				</span>
<?php if($exisestu==1){ ?>
        <label for="phone">Nota 1:</label>
        <input type="number" name="n1" id="phone" style="border-radius: 20px / 10px;">

        <label for="phone">Nota 2:</label>
        <input type="number" name="n2" id="phone" style="border-radius: 20px / 10px;">

        <label for="phone">Nota 3:</label>
        <input type="number" name="n3" id="phone" style="border-radius: 20px / 10px;">

        <label for="phone">Nota 4:</label>
        <input type="number" name="n4" id="phone" style="border-radius: 20px / 10px;">

        <label for="phone">Nota 5:</label>
        <input type="number" name="n5" id="phone" style="border-radius: 20px / 10px;">
<?php } ?>

        <button type="submit" name="frmConsultar" class="button3" value="Consultar"  >Consultar</button>
        <button type="submit" name="frmAsignar" class="button3" value="Asignar"  >Asignar</button>
    </div>
</form>
        </div><!--End of Content Wrapper-->
   <?php 
    include("./componentes/footer.php");
   ?>

  