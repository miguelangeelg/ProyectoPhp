<?php
include("./componentes/navegacion.php");

?>      
        <div id="contentWrapper">
        <select class="classic" id="periodo">
  <option>Periodo 1</option>
  <option>Peiodo 2</option>
  <option>Periodo 3</option>
</select>


        <select class="classic" id="materia">
  <option>Materia 1</option>
  <option>Materia 2</option>
  <option>Materia 3</option>
</select>

        <select class="classic" id="grupo">
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

  