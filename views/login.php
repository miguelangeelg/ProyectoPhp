<?php
include("./componentes/navegacion.php");

?>


        
 
        <div id="contentWrapper">
            <section class="form_wrap">

<section class="cantact_info">
    <section class="info_title">
        <span class="fa fa-user-circle"></span>
        <h2>INICIO<br>DE SESIÓN</h2>
    </section>
</section>

<form action="" name="LoginForm" method="POST" class="form_contact">
   <br><br><br><br><br><br>
    <div class="user_info">
        <label for="names">Documento *</label>
        <input type="number" name="txtDocumento" id="documento" required style="border-radius: 20px / 10px;" >

        <label for="phone">Clave *</label>
        <input type="password" name="txtClave" id="clave" style="border-radius: 20px / 10px;">

        
        <input type="submit" class="btn btn-success" name="btnIniciasSesion" value="INICIAR SESIÓN" style="background-color:#4091EC; color: white;border:gainsboro 8px outset;border-radius: 20px / 10px;" >
    </div>
</form>

</section>


        </div><!--End of Content Wrapper-->
   <?php 
    include("./componentes/footer.php");
   ?>