<?php
include("./componentes/navegacion.php");

?>
        <div id="contentWrapper">
<section class="form_Docente">
            <form action="/action_page.php">
            <center>
    <img src="../img/ImagenRegistro.png" width="250" height="250"  alt="">
</center>
            
            <fieldset class="FormularioCentral">
                <legend id="TituloAdmin">REGISTRO PROFESOR</legend>
    <center>
    <label for="fname">Documento:</label>
    <input type="number" id="fname" name="firstname" placeholder="Ingrese documento...">

    <label for="fname" style="margin-left: 200px">Tipo Documento:</label>
    <input type="radio" id="male" name="gender" value="male"> CC &nbsp
    <input type="radio" id="male" name="gender" value="male"> TI

</center>
    <label for="fname">Nombres</label>
    <input type="text" id="fname" name="firstname" placeholder="Ingrese nombres...">

    <label for="fname">Apellidos</label>
    <input type="text" id="fname" name="firstname" placeholder="Ingrese apellidos...">

    <label for="fname">Dirección</label>
    <input type="text" id="fname" name="firstname" placeholder="Ingrese Dirección...">

    <label for="fname">Profesión</label>
    <input type="text" id="fname" name="firstname" placeholder="Ingrese Profesión...">
    
    <label for="fname">Correo:</label>
    <input type="email" id="fname" name="firstname" placeholder="Ingrese Correo...">

    <label for="fname">Contraseña</label>
    <input type="password" id="fname" name="firstname" placeholder="Ingrese Contraseña...">

    
    <label for="fname">Materia</label>
    <input type="text" id="fname" name="firstname" placeholder="Ingrese Materia...">

    <label for="fname">Genero:</label>
    <input type="radio" id="male" name="gender" value="male"> Masculino &nbsp
    <input type="radio" id="male" name="gender" value="male"> Femenino
   
    <br>
    <label for="fname">Fecha de Nacimiento:</label>
    <input type="date" id="fname" name="firstname" >
   


    <br>
    <br>
    <input type="submit" value="Matricular">
</fieldset>

<br>
 <a href="gestionAdministrador.php" class="buttonRegresar" style="vertical-align:top"><span>Regresar</span></a>

  </form>


</section>
        </div><!--End of Content Wrapper-->
   <?php 
    include("./componentes/footer.php");
   ?>

  