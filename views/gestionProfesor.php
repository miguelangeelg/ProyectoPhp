<?php
include("./componentes/navegacion.php");

?>      
        <div id="contentWrapper">
        <div >
        <center>
                <br>
<table width="600" border="0" cellspacing="0" cellpadding="1">
        <tr bgcolor="#2196F3" align="center">
        <td><b><font color="#FFFFFF">Docente  : Juanito Perez</font></b></td>
        </tr>
        <tr bgcolor="#2196F3">
        <td>
        
<table width="100%" border="0" cellspacing="0" cellpadding="4">
        <tr bgcolor="#FFFFFF">
        <td>
        <center>
        <p><span class="fa fa-envelope"></span>Documento : 100074612</p>
        <p><span class="fa fa-mobile"></span>Nombres : Fulanito De Tal</p>
        <p><span class="fa fa-mobile"></span>Correo : correo@correo.com</p>
        <p><span class="fa fa-mobile"></span>Teléfono : 333022232</p>
        <p><span class="fa fa-mobile"></span>Profesión : Licenciado</p>
        </center>
        </td>
        </tr>
</table>
        </td>
        </tr>
</table>

        </center>
        </div>  
        <select class="classic" style="top: 40px; left:45%;">
  <option>Periodo 1</option>
  <option>Peiodo 2</option>
  <option>Periodo 3</option>
</select>


        <select class="classic" style="top: 40px; left:5%;">
  <option>Materia 1</option>
  <option>Materia 2</option>
  <option>Materia 3</option>
</select> 

<select class="classic" style="top: 40px; left:54%;">
  <option>Grupo 1</option>
  <option>Grupo 2</option>
  <option>grupo 3</option>
</select>

        

        <form action="" class="form_contact">
    <h2>ASIGNACIÓN DE CALIFICACIONES</h2>
    <div class="user_info">
        <label for="names">Documento: *</label>
        <input type="number" id="names" required style="border-radius: 20px / 10px;" >

        <label for="phone">Nota 1:</label>
        <input type="number" id="phone" style="border-radius: 20px / 10px;">

        <label for="phone">Nota 2:</label>
        <input type="number" id="phone" style="border-radius: 20px / 10px;">

        <label for="phone">Nota 3:</label>
        <input type="number" id="phone" style="border-radius: 20px / 10px;">

        <label for="phone">Nota 4:</label>
        <input type="number" id="phone" style="border-radius: 20px / 10px;">

        <label for="phone">Nota 5:</label>
        <input type="number" id="phone" style="border-radius: 20px / 10px;">

        <input type="submit" class="btn btn-success" value="Consultar" style="background-color:#4091EC; color: white;border:gainsboro 8px outset;border-radius: 20px / 10px;" >
        <input type="submit" class="btn btn-success" value="Asignar" style="background-color:#4091EC; color: white;border:gainsboro 8px outset;border-radius: 20px / 10px;" >
    </div>
</form>
        </div><!--End of Content Wrapper-->
   <?php 
    include("./componentes/footer.php");
   ?>

  