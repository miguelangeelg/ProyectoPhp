<!-- INCLUYE  EL ENCABEZADO DE LA PAGINA -->
<?php
include("./componentes/navegacion.php");
?>


<div id="contentWrapper">
<section class="form_Docente">

<!-- FORMULARIO DE REGISTRO-->
<form role="form" id="frmregistro" enctype='multipart/form-data' autocomplete="off" method="post" action="../controller/ctrProfesor.php">
    <center>
        <img src="../img/ImagenRegistro.png" width="250" height="250"  alt="">
    </center>


  
<fieldset class="FormularioCentral">
    <legend id="TituloAdmin">REGISTRO PROFESOR</legend>
    <center>
    <label for="documento ">Documento:</label>
    <input type="number" id="fname" name="documento" placeholder="Ingrese documento..." >

    <label for="telefono ">Telefono:</label>
    <input type="number" id="fname" name="telefono" placeholder="Ingrese telefono..." >

    <label for="tipoDocumento">Tipo Documento:</label>
    <input type="radio" id="male" name="tipoDocumento" value="2"> CC &nbsp
    <input type="radio" id="male" name="tipoDocumento" value="1"> TI

</center>
    <label for="nombres">Nombres</label>
    <input type="text" id="fname" name="nombres" placeholder="Ingrese nombres...">

    <label for="apellidos">Apellidos</label>
    <input type="text" id="fname" name="apellidos" placeholder="Ingrese apellidos...">

    <label for="direccion">Dirección</label>
    <input type="text" id="fname" name="direccion" placeholder="Ingrese Dirección...">

    <label for="profesion">Profesión</label>
    <input type="text" id="fname" name="profesion" placeholder="Ingrese Profesión...">
    
    <label for="correo">Correo:</label>
    <input type="email" id="fname" name="correo" placeholder="Ingrese Correo...">

    <label for="contraseña">Contraseña</label>
    <input type="password" id="fname" name="contraseña" placeholder="Ingrese Contraseña...">

    
    <label for="materia">Materia</label>
    <input type="text" id="fname" name="materia" placeholder="Ingrese Materia...">

    <label for="genero">Genero:</label>
    <input type="radio" id="male" name="genero" value="2"> Masculino &nbsp
    <input type="radio" id="male" name="genero" value="1"> Femenino
   
    <br>
    <label for="fechaNacimiento">Fecha de Nacimiento:</label>
    <input type="date" id="fname" name="fechaNacimiento" >
   


    <br>
    <br>
    <button type="submit" name="frmMatricular" value="Registrar">Registrar</button>

</fieldset>

<br>
<a href="gestionAdministrador.php" class="buttonRegresar" style="vertical-align:top"><span>Regresar</span></a>

</form>


</section>
</div><!--End of Content Wrapper-->
   
<!-- INCLUYE  EL PIE DE PAGINA -->
<?php 
include("./componentes/footer.php");
?>

  