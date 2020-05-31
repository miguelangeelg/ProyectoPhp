<?php
include("./componentes/navegacion.php");

?>


        
 
        <div id="contentWrapper">
            <section class="form_wrap">

            <section class="cantact_info">
    <section class="info_title">
        <span class="fa fa-user-circle"></span>
        <h2 >INFORMACIÓN DEL ADMINISTRADOR</h2>
    </section>
    <section class="info_items">
    <center>

        <p><span class="fa fa-envelope"></span>Documento : 100074612</p>
        <p><span class="fa fa-mobile"></span>Nombres : Fulanito De Tal</p>
        <p><span class="fa fa-mobile"></span>Correo : correo@correo.com</p>
        <p><span class="fa fa-mobile"></span>Teléfono : 333022232</p>
        </center>

    </section>

</section>

<form action="" class="form_contact">
    <div class="tituloCalificaciones">
    <h1 id="TituloAdmin">¡BIENVENIDO ADMINISTRADOR!</h1>
    </div>
   <center>
    <div class="user_info" >
        <br><br><br><br><br>
    <a  href="RegistroEstudiantes.php" class="button3" style="vertical-align:middle" ><span>Registro Estudiantes</span></a>
    <a href="RegistroProfesor.php" class="button3" style="vertical-align:middle"><span>Registro Docentes </span></a>
    </div>
    </center> 
</form>

</section>


        </div><!--End of Content Wrapper-->
   <?php 
    include("./componentes/footer.php");
   ?>

  