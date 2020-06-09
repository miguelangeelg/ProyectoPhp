<?php
include("./componentes/navegacion.php");
require ("../controller/ctrPeriodo.php");
?>


        
 
        <div id="contentWrapper">
            <section class="form_wrap">

            <section class="cantact_info">
    <section class="info_title">
        <span class="fa fa-user-circle"></span>
        <h2>INFORMACIÓN DEL ESTUDIANTE</h2>
    </section>
    <center>
    <section align="center" class="info_items">
        <p><span class="fa fa-envelope"></span>Documento : 100074612</p>
        <p><span class="fa fa-mobile"></span>Nombres : Fulanito De Tal</p>
        <p><span class="fa fa-mobile"></span>Correo : correo@correo.com</p>
        <p><span class="fa fa-mobile"></span>Teléfono : 333022232</p>
        <p><span class="fa fa-mobile"></span>Grupo : 8B</p>
    </section>
    </center>

</section>

<form action="" class="form_contact">
    <div class="tituloCalificaciones">
    <h2 >Calificaciones</h2>
    </div>

    <select class="classic" id="periodo">
    <?php
    if(isset($resultado)){
        foreach ($resultado as $clave => $value) {
            echo " <option value='".$value["Codigo"]."' >"."Periodo ".$value["Periodo"]."</option>";
        }
    }
    ?>
    </select>
<?php include("./componentes/botonGenerarPdfEstu.php");  ?>
    <div class="user_info">

<table class="tablaCalificaciones">
            <thead>
                <tr>
                    <th><h1>Materia</h1></th>
                    <th><h1>Nota 1</h1></th>
                    <th><h1>Nota 2</h1></th>
                    <th><h1>Nota 3</h1></th>
                    <th><h1>Nota 4</h1></th>
                    <th><h1>Nota 5</h1></th>
                    <th><h1>Final</h1></th>
                 
                   
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Matematicas</td>
                    <td>9518</td>
                    <td>6369</td>
                    <td>01:32:50</td>
                       <td>9518</td>
                    <td>6369</td>
                    <td>01:32:50</td>
                </tr>
                <tr>
                    <td>Ingles</td>
                    <td>7326</td>
                    <td>10437</td>
                    <td>00:51:22</td>
                       <td>9518</td>
                    <td>6369</td>
                    <td>01:32:50</td>
                </tr>
                <tr>
                    <td>Español</td>
                    <td>4162</td>
                    <td>5327</td>
                    <td>00:24:34</td>
                       <td>9518</td>
                    <td>6369</td>
                    <td>01:32:50</td>
                </tr>
            <tr>
                    <td>Ciencias N</td>
                    <td>3654</td>
                    <td>2961</td>
                    <td>00:12:10</td>
                       <td>9518</td>
                    <td>6369</td>
                    <td>01:32:50</td>
                </tr>
            <tr>
                    <td>Edu Física</td>
                    <td>2002</td>
                    <td>4135</td>
                    <td>00:46:19</td>
                       <td>9518</td>
                    <td>6369</td>
                    <td>01:32:50</td>
                </tr>
            <tr>
                    <td>Artistica</td>
                    <td>4623</td>
                    <td>3486</td>
                    <td>00:31:52</td>
                       <td>9518</td>
                    <td>6369</td>
                    <td>01:32:50</td>
                </tr>
            </tbody>
        </table>
    </div>
</form>

</section>


        </div><!--End of Content Wrapper-->
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"> </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="../js/ctrVerNotas.js"></script>
   <?php 
    include("./componentes/footer.php");
   ?>

  